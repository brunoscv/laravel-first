<template>

    <div>
        <h2 class="title mb-2">Endereço de Entrega</h2>
        <div class="card" v-if="address">
            <div class="card-body">

                                <span class="mb-2 text-muted" style="display: block">
                                                        {{ address.address }},
                                                        {{ address.number }},
                                                        {{ address.complement }}
                                                    </span>
                <span class="card-text" style="display: block">{{ address.neighborhood }}</span>
<!--                <span class="card-text"-->
<!--                      style="display: block">{{ address.city }} - {{ address.state }}</span>-->
                <span class="card-text"
                      style="display: block">CEP {{ address.postal_code }}</span>
<!--                <a style="float: right" href="{{ _routeAddressSelect }}"-->
<!--                   class="card-link">Selecionar outro endereço</a>-->
            </div>
        </div>

        <h6 class="mb-1 mt-1">Opções de entrega</h6>

        <div class="form-row" id="freightOptions">
            <div v-if="address">
                <a href="#">Cadastrar endereço</a>
            </div>
        </div>

    </div>
</template>


<script>

    export default {
        name: "UserAddressComponent",
        props: {
            _userId: {
                type: String
            },
            _routeAddress: {
                type: String
            }
        },
        data() {
            return {
                user: this.getUserWithAddress(this._userId),
                address: null,
            }
        },
        watch: {
            _userId: function (user_id) {
                if (user_id > 0) {
                    this.getUserWithAddress(user_id)
                }
            }
        },
        methods: {

            getUserWithAddress(user) {
                let app = this
                axios
                    .get('/panel/clients/address/' + user)
                    .then(response => (this.address = (response.data)))
            }

        },
        mounted() {
            this.getUserWithAddress(this._userId)
        },
    }
</script>

<style scoped>

</style>
