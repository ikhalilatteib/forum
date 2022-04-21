import { createStore } from "vuex";
import axiosClient from "../axios";


const store = createStore({
    state: {
        user: {
            data: {},
            token: sessionStorage.getItem('TOKEN')
        },
        tags: {
            data: {}
        },
        getQuestions: {
            data: {}
        }
    },
    getters: {},
    actions: {
        register({ commit }, user) {
            return axiosClient.post('/register', user).then(({ data }) => {
                commit('setUser', data)
                return data;
            })
        },
        login({ commit }, user) {
            return axiosClient.post('/login', user).then(({ data }) => {
                commit('setUser', data)
                return data;
            })
        },
        getTags({ commit }) {
            return axiosClient.get('/tags').then((res) => {
                commit('setTags', res.data)
                return res;
            })
        },
        addQuestion({ commit }, questionField) {
            return axiosClient.post('/question/save', questionField).then((res) => {
                return res;
            })
        },
        getQuestions({ commit }) {
            return axiosClient.get('/question/index').then((res) => {
                commit('setQuestions', res.data);
                return res;
            })
        }

    },
    mutations: {
        setUser: (state, userData) => {
            state.user.token = userData.token;
            state.user.data = userData.user;
            sessionStorage.setItem('TOKEN', userData.token);
        },
        setTags: (state, tagData) => {
            state.tags.data = tagData.tags;
        },
        setQuestions:(state,questionData)=>{
            state.getQuestions.data=questionData.questions
        }

    },
    modules: {}
})

export default store;
