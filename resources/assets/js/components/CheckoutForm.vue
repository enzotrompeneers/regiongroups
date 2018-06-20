<template>
    <form action="/betaling" method="POST">
        <input type="hidden" name="stripeToken" v-model="stripeToken">
        <input type="hidden" name="stripeEmail" v-model="stripeEmail">
        <button type="submit" class="button" @click.prevent="buy">Abonneer voor 1 jaar</button>
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
                    name: 'Abonneer voor 1 jaar',
                    description: 'Pro versie',
                    zipCode: true,
                    currency: 'eur',
                    amount: 4999
                });
            }
        }
    }
</script>
