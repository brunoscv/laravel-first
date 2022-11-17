<template>
    <div class="row">

        <div class="col-sm-12">
            <div class="form-row">
                <div class="form-group col-md-12 ">
                    <label for="user_id">Usuário</label>
                    <select class="form-control form-control-lg" style="width: 100%;"
                            name="user_id"
                            v-model="user"
                            @change="userChange(user)"
                            id="user_id">

                        <option v-for="(user, key) in users" :value="key">
                            {{ user }}
                        </option>

                    </select>
                </div>

            </div>

        </div>

        <div class="col-sm-12">

            <UserAddressComponent v-if="user"
                                  :_user-id="user"
                                  :_route-address="_routeAddressSelect"
            >
            </UserAddressComponent>
        </div>

        <div class="col-sm-12">

        </div>


    </div>
</template>


<script>

    import UserAddressComponent from "./UserAddressComponent";
    import OrderSummaryComponent from "./OrderSummaryComponent";

    export default {
        name: "CheckoutComponent",
        components: {UserAddressComponent,OrderSummaryComponent},
        props: {
            _users: {
                type: String
            },
            _routeAddressSelect: {
                type: String
            },
        },
        data() {

            return {
                users: JSON.parse(this._users),
                user: null,
                products: {},
                discount: null
            }
        },
        methods: {
            userChange(user_id) {
                this.user = user_id
            }
        },
        watch: {},
    }
</script>

<style scoped>

</style>
