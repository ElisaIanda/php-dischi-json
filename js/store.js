const { createApp } = Vue;

createApp({
    data() {
        return {
            dischi: [],

        }
    },
    mounted() {
        axios
            .get("api/dischi.php")
            .then((response) => {
                this.dischi = response.data;
            });
    }

}).mount("#app");