const { createApp } = Vue;
const endpoint = 'http://localhost/PHP-TODO-LIST-JSON/api/index.php'
const app = createApp({
    data: () => ({

        tasks: []

    }),
    created() {
        axios.get(endpoint).then(res => {
            this.tasks = res.data
        })
    }
})
app.mount('#app')