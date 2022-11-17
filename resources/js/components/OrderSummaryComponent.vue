<template>
    <div>
        <div class="card card-shadow mb-3">
            <div class="card-body">
                <h5 class="m-0">Resumo do pedido</h5>
            </div>
            <div v-if="listProducts">
                <table class="table table-sm table-striped bg-light">
                    <thead>
                        <tr>
                            <th>Produto</th>
                            <th class="text-center">Qtd.</th>
                            <th class="text-right">Valor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="item in listProducts">
                            <td>{{ item.name }}</td>
                            <td class="text-center">{{ item.quantity }}</td>
                            <td class="text-right">
                                <small v-if=" item.discounted_price != item.price "  class="text-muted" style="text-decoration: line-through">{{(item.quantity * item.price).toLocaleString('pt-BR', {style: 'currency', currency: 'BRL'}) }}</small><br>
                                {{ (item.quantity * item.discounted_price).toLocaleString('pt-BR', {style: 'currency', currency: 'BRL'})}}
                            </td>
                        </tr>
                        <tr>
                            <td class="bg-white pt-2 pb-0" colspan="2">Frete</td>
                            <td class="font-weight-bold text-right bg-white pt-2 pb-0" id="freigth_value">Frete grátis</td>
                        </tr>
                        <tr>
                            <td class="bg-white border-0 pt-0 pb-2" colspan="2">Total</td>
                            <td class="font-weight-bold text-right bg-white border-0 pt-0 pb-2" id="total">{{ total.toLocaleString('pt-BR', {style: 'currency', currency: 'BRL'}) }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <hr class="m-0">
            <div class="card-body">
                <div v-if="discount">
                    <div class="d-flex justify-content-between">
                        <span>Desconto:</span>
                        <strong class="text-success">{{ (discount.percentage ? discount.value +"%" : discount.value.toLocaleString('pt-BR', {style: 'currency', currency: 'BRL'}) + " de desconto")}}</strong>
                    </div>
                </div>
                <div v-if="coupon">
                    <div class="d-flex justify-content-between">
                        <span>Cupom:</span>
                        <strong class="text-success">{{ coupon.description + "  - " + (coupon.discount_in_percentage ? coupon.value + '%'  :  coupon.value.toLocaleString('pt-BR', {style: 'currency', currency: 'BRL'})) }}</strong>
                    </div>
                </div>
                <div v-if="this.dealerDiscount">
                    <div class="d-flex justify-content-between">
                        <span>Compra:</span>
                        <strong class="text-success">{{ this._dealerDiscountName + "  - " + (this.dealerDiscount.percentage ? this.dealerDiscount.value + "%"  : "R$ " + this.dealerDiscount.value) }}</strong>
                    </div>
                </div>
            </div>
            <hr class="m-0">
            <div class="card-body bg-light">
                <strong class="d-block mb-2">Possui cupom ou vale?</strong>
                <div class="input-group">
                    <input v-model="cuponcode" class="form-control" id="cupom" name="cupom" placeholder="Cupom" type="text">
                    <div class="input-group-append" id="btnAddCupom">
                        <a @click="this.addCoupon" class="btn btn-dark text-white">Aplicar</a>
                    </div>
                </div>
                <small class="text-danger text- mt-2" id="label-coupon"></small>
            </div>
        </div>
        <PaymentComponent
            :_route-register-payment="_routeRegisterPayment"
            :_route-data-payment="_routeDataPayment"
            :_userId="_userId"
            :_address-id="_addressId"
            :_route-purchases="_routePurchases"
            :_total="total">
        </PaymentComponent>
    </div>
</template>
<script>
    import PaymentComponent from "./PaymentComponent";
    export default {
        name: "OrderSummaryComponent",
        components: {PaymentComponent},
        props: {
            _products: {
                type: String,
                required: true
            },
            _routeCoupon: {
                type: String
            },
            _userId: {
                type: String
            },
            _routeFreight: {
                type: String
            },
            _routeRegisterPayment: {
                type: String
            },
            _routeDataPayment: {
                type: String
            },
            _routePurchases: {
                type: String
            },
            _coupon: {
                type: String
            },
            _discount: {
                type: String
            },
            _dealerDiscount: {
                type: String
            },
            _dealerDiscountName: {
                type: String
            },
            _address: {
                type: String
            },
            _addressId: {
                type: String
            },
            _total: {
                type: String
            },
        },
        data() {
            return {
                listProducts: JSON.parse(this._products),
                discount: JSON.parse(this._discount),
                dealerDiscount: this._dealerDiscount ? JSON.parse(this._dealerDiscount) : null,
                coupon: this._coupon !== null ? (JSON.parse(this._coupon)) : '',
                total: parseFloat(this._total),
                cuponcode: '',
            }
        },
        methods: {
            recalculate(additional) {
                let total_local = 0
                total_local = this.total + additional;
                $("#total").text(
                    total_local.toLocaleString('pt-BR', {
                        style: 'currency',
                        currency: 'BRL'
                    })
                );
            },
            freightCalculate() {
                let app = this

                app.$loading(true);
                let freightOptions = Array();
                let freightSelected = 1;
                let total = app._total
                let freightOption = '<div class="col-md">\n' +
                                    '    <div class="card">\n' +
                                    '        <div class="card-body">\n' +
                                    '            <div class="custom-control custom-radio">\n' +
                                    '                <input class="custom-control-input" id=":id" name="freightOption" value=":value" type="radio" :checked>\n' +
                                    '                <label class="custom-control-label" for=":id"><b>:description,</b><br> :complement</label>\n' +
                                    '            </div>\n' +
                                    '        </div>\n' +
                                    '    </div>\n' +
                                    '</div>'
                $.ajax({
                    type: "POST",
                    url: app._routeFreight,
                    data: {
                        postal_code: this._address
                    },
                    success: function (response, status) {
                        let result = response.data
                        $("#freightOptions").html('')
                        result.forEach(function (service) {
                            let price = (service.price).toLocaleString('pt-BR', {
                                style: 'currency',
                                currency: 'BRL'
                            })

                            freightOptions[service.code] = service.price;

                            let item = freightOption
                            item = item.replace(':description', service.description)
                            item = item.replace(':value', service.code)
                            item = item.replace(':complement', service.price > 0 ? `receber em até ${service.deadline} dias úteis por ${price}` : 'frete grátis')
                            item = item.replace(':checked', service.code == 1 ? 'checked' : '')
                            item = item.replace(/:id/g, "freight" + service.code)
                            $("#freightOptions").append(item)
                        })
                        $("#freightOptions input[type=radio][name='freightOption']").on('change', function () {
                            let freihtCode = $(this).val();
                            let price = freightOptions[freihtCode]
                            total -= freightOptions[freightSelected]
                            freightSelected = freihtCode
                            app.recalculate(price);
                            price = price > 0 ? price.toLocaleString('pt-BR', {
                                style: 'currency',
                                currency: 'BRL'
                            }) : "frete grátis"
                            $("#freight_value").text(price)

                        });
                        app.$loading(false);
                    },
                    error: function (err) {
                        app.$loading(false);
                    },
                    dataType: "json"
                });
            },
            addCoupon() {

                let app = this
                let errors = false

                if (!errors) {
                    $.ajax({
                        type: 'POST',
                        url: app._routeCoupon,
                        data: {
                            coupon: app.cuponcode,
                        },
                        success: function (dados) {
                            $("#label-coupon").removeClass('text-danger');
                            $("#label-coupon").addClass('text-success');
                            $("#label-coupon").text(dados.data["coupon"]);
                            top.location.href = "";
                        },
                        error: function (request, error) {
                            if (request.status == 400) {
                                let result = request.responseJSON
                                if (result.hasOwnProperty("errors")) {
                                    $("#label-coupon").removeClass('text-success');
                                    $("#label-coupon").addClass('text-danger');
                                    $("#label-coupon").text(result.errors["coupon"][0]);
                                }
                            }
                        }
                    });

                }
            }
        },
        mounted() {
            this.freightCalculate();
        },
    }
</script>
