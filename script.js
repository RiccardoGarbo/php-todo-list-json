const { createApp } = Vue;
const endpoint = 'http://localhost/PHP-TODO-LIST-JSON/api/index.php'
const app = createApp({
    data: () => ({
        tasks: [],

        newTask: {
            "id": 5,
            "text": "",
            "done": false
        }


    }),
    methods: {
        addTask() {
            const data = { 'task': this.newTask }
            const config = { headers: { 'Content-Type': 'multipart/form-data' } }
            axios.post(endpoint, data, config)

        }
    },
    created() {
        axios.get(endpoint).then(res => {
            this.tasks = res.data
        })
    }
})
app.mount('#app')