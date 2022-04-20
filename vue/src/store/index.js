import { createStore } from "vuex";


const store = createStore({
    state: {
        user: {
            data: {},
            token: sessionStorage.getItem('TOKEN')
        }
    },
    getters: {},
    actions: {
        register({ commit }, user) {
            return fetch('http://forum.test/api/register', {
                headers: {
                    'content-type': 'application/json',
                    Accept: 'application/json'
                },
                method: 'POST',
                body: JSON.stringify(user)
            })
            .then((res) => res.json())
            .then((res) => {
                commit('setUser', res);
                return res;
            })
        },
        login({ commit }, user) {
            return fetch('http://forum.test/api/login', {
                headers: {
                    'content-type': 'application/json',
                    Accept: 'application/json'
                },
                method: 'POST',
                body: JSON.stringify(user)
            })
            .then((res) => res.json())
            .then((res) => {
                commit('setUser', res);
                return res;
            })
        }
    },
    mutations: {
        setUser: (state, userData) => {
            state.user.token = userData.token;
            state.user.data = userData.user;
            sessionStorage.setItem('TOKEN', userData.token);
        }
    },
    modules: {}
})

export default store;
