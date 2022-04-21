import {createStore} from "vuex";
import axiosClient from "../axios";


const store = createStore({
    state: {
        user: {
            data: JSON.parse(sessionStorage.getItem('userData')),
            token: sessionStorage.getItem('TOKEN')
        },
        tags: {
            data: {}
        },
        questions: {
            loading: false,
            data: [],
        },
        currentQuestion: {
            loading: false,
            data: {}
        },
        currentAnswer: {
            data: {}
        }
    },
    getters: {},
    actions: {
        register({commit}, user) {
            return axiosClient.post('/register', user).then(({data}) => {
                commit('setUser', data)
                return data;
            })
        },
        login({commit}, user) {
            return axiosClient.post('/login', user).then(({data}) => {
                commit('setUser', data)
                return data;
            })
        },
        logout({commit}) {
            return axiosClient.post("/logout").then((response) => {
                commit("logout");
                return response;
            });
        },
        getTags({commit}) {
            return axiosClient.get('/tags').then((res) => {
                commit('setTags', res.data)
                return res;
            })
        },
        addQuestion({commit}, questionField) {
            let response;
            if (questionField.slug) {
                response = axiosClient.put(`/question/${questionField.slug}/update`, questionField).then((res) => {
                    return res;
                })
            } else {
                response = axiosClient.post('/question/save', questionField).then((res) => {
                    return res;
                })
            }
            return response;

        },
        addAnswer({commit}, {content, questionSlug}) {
            let response;
            if (content.id) {
                response = axiosClient.put(`/answer/${content.id}/update`, content).then((res) => {
                    return res;
                })
            } else {
                response = axiosClient.post(`answer/${questionSlug}/store`, content).then((res) => {
                    return res;
                })
            }
            return response;
        },
        getQuestions({commit}) {
            commit('setQuestionLoading', true)
            return axiosClient.get('/question/index').then((res) => {
                commit('setQuestions', res.data);
                commit('setQuestionLoading', false)
                return res;
            })
        },
        getQuestion({commit}, slug) {
            commit('setCurrentQuestionLoading', true)
            return axiosClient.get(`/question/${slug}`).then((res) => {
                commit('setCurrentQuestion', res.data)
                commit('setCurrentQuestionLoading', false)
                return res;
            }).catch((err) => {
                throw err;
            })
        },
        getAnswer({commit}, id) {
            return axiosClient.get(`/answer/${id}/show`).then((res) => {
                commit('setAnswer', res.data)
                return res;
            });
        }
    },
    mutations: {
        setUser: (state, userData) => {
            state.user.token = userData.token;
            state.user.data = userData.user;
            sessionStorage.setItem('TOKEN', userData.token);
            sessionStorage.setItem('userData', JSON.stringify(userData.user));
        },
        logout: (state) => {
            state.user.data = null;
            state.user.token = null;
            sessionStorage.removeItem("TOKEN");
            sessionStorage.removeItem('userData');
        },
        setTags: (state, tagData) => {
            state.tags.data = tagData.tags;
        },
        setQuestions: (state, questionData) => {
            state.questions.data = questionData.questions
        },
        setQuestionLoading: (state, loading) => {
            state.questions.loading = loading
        },
        setCurrentQuestion: (state, question) => {
            state.currentQuestion.data = question.data;
        },
        setCurrentQuestionLoading: (state, loading) => {
            state.currentQuestion.loading = loading;
        },
        setAnswer: (state, answer) => {
            state.currentAnswer.data = answer.data
        }
    },
    modules: {}
})

export default store;
