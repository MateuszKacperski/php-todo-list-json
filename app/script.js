const {createApp} = Vue;

const app = createApp({
    data: () => ({
        prova: 'prova',
    })
})

app.mount('#app');