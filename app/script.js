const {createApp} = Vue;

const app = createApp({
    data: () => ({
        task: [],
        newTask: '',
    })
})

app.mount('#app');