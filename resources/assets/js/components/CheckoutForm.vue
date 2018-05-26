<template>
    <form action="/betaling" method="POST">
        <input type="hidden" name="stripeToken" v-model="stripeToken">
        <input type="hidden" name="stripeEmail" v-model="stripeEmail">
        <button type="submit" @click.prevent="buy">Abonneer</button>
    </form>
</template>

<script>
    export default {
        data() {
            return {
                stripeEmail: '',
                stripeToken: ''
            };

        },

        created() {
            this.stripe = StripeCheckout.configure({
                key: Cityofcompanies.stripeKey,
                image: "https://stripe.com/img/documentation/checkout/marketplace.png",
                locale: "auto",
                currency: "eur",
                token: (token) => {
                    this.stripeToken = token.id;
                    this.stripeEmail = token.email;

                    this.$http.post('/betaling', this.$data)
                        .then(response => alert('Bedankt voor het abonneren!'));
                }
            });
        },

        methods: {
            buy() {
                this.stripe.open({
                    name: "Abonneer voor 1 jaar",
                    description: "Professional Version",
                    amount: 5000,
                });
            }
        }
    }
</script>
