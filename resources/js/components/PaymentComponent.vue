<template>
    <div>
        <small class="text-danger" id="errors_payment"></small>
        <button v-on:click="paymentProcess" class="btn btn-block btn-dark d-flex align-items-center justify-content-between px-4 py-3" id="pay-button" type="buttom"><i class="fa fa-credit-card mr-2"></i> Processar pagamento <i class="far fa-arrow-right ml-auto"></i></button>
    </div>
</template>

<script>
    export default {
        name: "PaymentComponent",
        props: {
            _routeRegisterPayment: {
                type: String
            },
            _routeDataPayment: {
                type: String
            },
            _userId: {
                type: String
            },
            _routePurchases: {
                type: String
            },
            _addressId : {
                type: String
            },
            _total: {
                type: Number
            },
        },
        data() {

            return {
                freightOptionRadio: $(".freightOption"),
                freightOption: 1,
                total: parseFloat(this._total)
            }
        },
        watch: {
            freightOptionRadio: function (question) {
                this.freightOption = 1
            },
        },
        methods: {
            paymentProcess() {
                let app = this

                this.dataPayment()
                    .then(result => {
                        console.log(result.data)
                        let amount = parseInt(result.data.amount * 100);
                        let checkout = new PagarMeCheckout.Checkout({
                            encryption_key: '',
                            success: function (data) {
                                app.registerPayment(result.data.sale_id, result.data.amount, data)
                            },
                            error: function (err) {
                                console.log(err);
                            },
                            close: function () {
                                console.log('The modal has been closed.');
                            }
                        });

                        checkout.open({
                            amount: amount,
                            capture: true,
                            maxInstallments: 10,
                            freeInstallments: 10,
                            buttonText: 'Pagar',
                            buttonClass: 'botao-pagamento',
                            customerData: 'true',
                            createToken: 'true',
                            card_hash: "",
                            uiColor: '#f54d15',
                            ...result.data.customer,
                            items: result.data.items
                        });
                    })
                    .catch(error => {
                        console.log(error)
                        //let errors = error.responseJSON.errors
                        //$("#errors_payment").text(errors[Object.keys(errors)[0]]);
                    })
                return app.total;

            },
            dataPayment() {

                let app = this


                return new Promise((resolve, reject) => {

                    $.ajax({
                        url: app._routeDataPayment,
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        type: 'POST',
                        data: {
                            freight: app.freightOption,
                            address_id: app._addressId,
                            user_id: app._userId
                        },
                        success: function (data) {
                            resolve(data)
                        },
                        error: function (error) {
                            reject(error)
                        },
                    })
                })
            },
            registerPayment(sale_id, amount, payload) {

                let app = this
                console.log('entrou ali', amount)

                app.$loading(true);

                $.ajax({
                    url: app._routeRegisterPayment,
                    type: 'POST',
                    data: {
                        sale_id: sale_id,
                        amount: amount,
                        ...payload
                    },
                    success: function (data) {
                        app.$loading(false);
                        console.log('vai redirecionar',app._routePurchases)
                        window.location.href = app._routePurchases
                    },
                    error: function (error) {
                        app.$loading(false);
                        $("#errors_payment").text(error.message);
                    },
                })

            }
        },
        mounted() {
            console.log(77777, this._userId)
        },
    }
</script>
<style scoped>
</style>
