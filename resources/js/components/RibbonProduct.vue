<template>
    <div class="ribbon-wrapper">
        <div v-if="price == 0" class="ribbon free">Grátis</div>
        <div v-else-if="discount" class="ribbon orange">{{discount.percentage == 1 ?  discount.value + '%' : 'R$ '+ discount.value }}</div>
    </div>
</template>

<script>

    export default {
        name: "RibbonProduct",
        props: {
            price: {
                type: Number,
                required: true
            },
            discount: {
                type: Object,
            },

        },
    }
</script>

<style scoped>

</style>
