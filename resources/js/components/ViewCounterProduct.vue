<template>
</template>

<script>

    export default {
        name: "ViewCounterProduct",
        props: {
            url: {
                type: String,
                required: true
            },

        },
        methods: {
            viewCounter() {
                axios.post(this.url)
                    .then(function (response) {
                        //showMessage('s', 'Contou com sucesso');

                    })
                    .catch(function (error) {
                        // showMessage('w', 'Não foi possível contar');
                        console.error(error);
                    });
            }
        },
        mounted() {
            this.viewCounter()
        }
    }
</script>

<style scoped>

</style>
