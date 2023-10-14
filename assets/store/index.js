import { createStore } from 'vuex'


const store = createStore({
    state: {
        counter: 0
    },
    mutations: {
        increment(state) {
            state.counter++
        }
    },
    actions: {
        
    },
    getters: {
        
    }
})

export default store