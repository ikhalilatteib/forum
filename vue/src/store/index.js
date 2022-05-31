import {createStore} from "vuex";
import axiosClient from "../axios";
import Cookies from "js-cookie";


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
            links: [],
            data: [],
        },
        perTags: {
            loading: false,
            data: [],
        },
        currentQuestion: {
            loading: false,
            data: {}
        },
        currentAnswer: {
            data: {}
        },
        userProfile: {
            data: {}
        },
        popularQuestion: {
            data: {}
        },
        myQuestions: {
            loading: false,
            links: [],
            data: [],
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
        getQuestions({commit}, {url = null} = {}) {
            url = url || '/question/index'
            commit('setQuestionLoading', true)
            return axiosClient.get(url).then((res) => {
                commit('setQuestions', res.data);
                commit('setQuestionLoading', false)
                return res;
            })
        },
        getQuestion({commit}, slug) {
            commit('setCurrentQuestionLoading', true)
            const sessionId = Cookies.get('session_id')
            return axiosClient.get(`/question/${slug}/${sessionId}`).then((res) => {
                commit('setCurrentQuestion', res.data)
                commit('setCurrentQuestionLoading', false)
                return res;
            }).catch((err) => {
                throw err;
            })
        },
        getQuestionByLinks({commit}, {links}) {
            commit('setCurrentQuestionLoading', true)
            return axiosClient.get(links).then((res) => {
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
        },
        deleteQuestion({commit}, slug) {
            return axiosClient.delete(`/question/${slug}/delete`);
        },
        deleteAnswer({commit}, id) {
            return axiosClient.delete(`/answer/${id}/delete`)
        },
        getProfileData({commit}) {
            return axiosClient.get('/profile').then((res) => {
                commit('setUserProfile', res.data);
                return res;
            });
        },
        updateProfile({commit}, data) {
            return axiosClient.put('/profile/update', data).then((res) => {
                return res;
            })
        },
        updateEmail({commit}, data) {
            return axiosClient.put('/profile/email', data).then((res) => {
                return res;
            })
        },
        updatePassword({commit}, data) {
            return axiosClient.put('/profile/password', data).then((res) => {
                return res;
            })
        },
        getPopularQuestion({commit}) {

            return axiosClient.get('/question/popular').then((res) => {
                commit('setPopularQuestion', res.data)
                return res;
            })
        },
        getQuestionPerTag({commit}, slug) {
            commit('setTagLoading', true)
            return axiosClient.get(`/tags/${slug}`).then((res) => {
                commit('setQuestionPerTag', res.data)
                commit('setTagLoading', false)
                return res;
            });
        },
        getMyQuestions({commit}, {url = null} = {}) {
            url = url || '/user/questions'
            commit('setMyQuestionLoading', true)
            return axiosClient.get(url).then((res) => {
                commit('setMyQuestions', res.data)
                commit('setMyQuestionLoading', false)
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
            state.questions.links = questionData.meta
            state.questions.data = questionData.data
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
        },
        setUserProfile: (state, user) => {
            state.userProfile.data = user.data;
        },
        setPopularQuestion: (state, popular) => {
            state.popularQuestion.data = popular.data;
        },
        setQuestionPerTag: (state, tags) => {
            state.perTags.data = tags.data
        },
        setTagLoading: (state, loading) => {
            state.perTags.loading = loading
        },
        setMyQuestions: (state, questions) => {
            state.myQuestions.links = questions.meta;
            state.myQuestions.data = questions.data;
        },
        setMyQuestionLoading: (state, loading) => {
            state.myQuestions.loading = loading;
        }
    },
    modules: {}
})

export default store;
