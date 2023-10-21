<script>
export default {
    data() {
        return {
            message: "Bienvenue sur Vue 3",
        };
    },
    created() {
        Echo.channel("notification").listen("MessageNotification", (e) => {
            alert("Okay, Notification listen !");
        });

        Echo.channel("payment-request").listen("PaymentNotification", (e) => {
            console.log(e);
            alert("Payment request listen ...");
        });
    },
};
</script>

<template>
    <div id="app">
        <h1>{{ message }}</h1>
    </div>
</template>
