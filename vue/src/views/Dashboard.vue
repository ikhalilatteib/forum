<template>
    <div class="toolbar d-flex flex-stack flex-wrap mb-5 mb-lg-7" id="kt_toolbar">
        <!--begin::Page title-->
        <div class="page-title d-flex flex-column py-1">
            <!--begin::Title-->
            <h1 class="d-flex align-items-center my-1">
                <span class="text-dark fw-bolder fs-1">Tüm Sorular</span>
                <!--begin::Description-->
                <small class="text-muted fs-6 fw-bold ms-1">({{questions.links.total}}) </small>
                <!--end::Description-->
            </h1>
            <!--end::Title-->
        </div>
        <!--end::Page title-->
        <!--begin::Actions-->
        <div class="d-flex align-items-center py-1">
            <!--begin::Button-->
            <router-link :to="{name : 'AddQuestion'}"
                         class="btn btn-flex btn-sm btn-primary fw-bolder border-0 fs-6 h-40px"
                         id="kt_toolbar_primary_button">Soru Sor
            </router-link>
            <!--end::Button-->
        </div>
        <!--end::Actions-->
    </div>
    <!--end::Toolbar-->
    <!--begin::Post-->
    <QuestionList :questions="questions"/>
</template>

<script setup>
import QuestionList from '../components/questions/QuestionList.vue'
import {computed} from "vue";
import {useStore} from "vuex";

const store = useStore();
store.dispatch('getQuestions')
const questions = computed(() => store.state.questions);

</script>


