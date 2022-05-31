<template>
  <div id="kt_toolbar" class="toolbar d-flex flex-stack flex-wrap mb-5 mb-lg-7">
    <!--begin::Page title-->
    <div class="page-title d-flex flex-column py-1">
      <!--begin::Title-->
      <h1 class="d-flex align-items-center my-1">
        <span class="text-dark fw-bolder fs-1">{{ tags.data.name }}</span>
        <!--begin::Description-->
        <small class="text-muted fs-6 fw-bold ms-1">({{ tags.data.question }}) </small>
        <!--end::Description-->
      </h1>
      <!--end::Title-->
    </div>
    <!--end::Page title-->
    <!--begin::Actions-->
    <div class="d-flex align-items-center py-1">
      <!--begin::Button-->
      <router-link id="kt_toolbar_primary_button"
                   :to="{name : 'AddQuestion'}"
                   class="btn btn-flex btn-sm btn-primary fw-bolder border-0 fs-6 h-40px">Soru Sor
      </router-link>
      <!--end::Button-->
    </div>
    <!--end::Actions-->
  </div>
  <!--end::Toolbar-->
  <!--begin::Post-->
  <div id="kt_post" class="post ">
    <div v-if="tags.loading">
      <Loading/>
    </div>
    <!--begin::Question-->
    <div v-else>
      <div v-for="(question, index) in tags.data.questions.data" :key="index">
        <QuestionCard :question="question"/>
      </div>
      <div class="d-flex flex-center mb-0">

        <a v-for="(link,index) in tags.data.questions.links" v-if="tags.data.question > 0" :key="index" :class="[
                 link.active? 'active':null,
             ]"

           aria-current="page"
           class="btn btn-icon btn-light btn-active-light-primary h-30px px-4 w-auto fw-bold fs-6 mx-1"
           href="#" @click="getForPage(link)"
           v-html="link.label"
        ></a>
      </div>
    </div>

  </div>

</template>

<script setup>
import {computed} from 'vue';
import {useRoute} from 'vue-router';
import {useStore} from 'vuex'
import QuestionCard from '../components/questions/QuestionCard.vue'
import Loading from '../components/Loading.vue';

const store = useStore();
const route = useRoute();

store.dispatch('getQuestionPerTag', route.params.slug);

const tags = computed(() => store.state.perTags)
</script>

