Alpine.data('global', () =>({ 
    open: true,
    generateHtml: '<strong>Bold</strong>',
    name: '',
    isShow: true,
    keliatanga: false,
    users: ['punten', 'ucup', 'bebas'],
    apa: [],
    isLoading: false,
    fetchListUser(){
        this.isLoading = true,
        fetch('https://jsonplaceholder.typicode.com/users')
        .then(async (response) => {
            this.apa = await response.json()
            this.isLoading = false
            
        })
    },
    message: 'Halo',
    pengguna :[
    {
        nama:'diah',
        jenis_kelamin: 'p',
        usia: 15
    },
    {
        nama:'nur',
        jenis_kelamin: 'p',
        usia: 20
    },
    {
        nama:'fulan',
        jenis_kelamin: 'l',
        usia: 50
    },
    {
        nama:'kiki',
        jenis_kelamin: 'l',
        usia: 30
    }]
}))


Alpine.store('darkMode', {
    on:false,

    toggle(){
        this.on = !this.on
    }
})