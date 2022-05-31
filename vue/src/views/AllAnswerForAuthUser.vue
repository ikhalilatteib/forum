<template>
  <div id="kt_toolbar" class="toolbar d-flex flex-stack flex-wrap mb-5 mb-lg-7">
    <!--begin::Page title-->
    <div class="page-title d-flex flex-column py-1">
      <!--begin::Title-->
      <h1 class="d-flex align-items-center my-1">
        <span class="text-dark fw-bolder fs-1">Tüm Cevaplarım</span>
<!--        <pre>{{questions}}</pre>-->
        <!--begin::Description-->
        <small class="text-muted fs-6 fw-bold ms-1">({{ answers.data.length }}) </small>
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
    <div v-if="answers.loading">
      <Loading/>
    </div>
    <!--begin::Question-->
    <div v-else>
      <div v-for="(ans, index) in answers.data" :key="index">

        <div class="border rounded p-2 p-lg-6 mb-10">
          <!--begin::Wrapper-->
          <div class="mb-0">
            <!--begin::Foot-->
            <router-link
                :to="{ name: 'ShowQuestion', params: { slug: ans.question.slug } }"
                class="fs-5 fw-normal text-gray-900 text-hover-primary me-1 mb-2"
            >{{ ans.question.title }}
            </router-link>
            <p>{{ans.diff}}</p>
            <!--end::Foot-->
            <!--begin::Message-->
            <div class="fs-3 fw-bolder text-gray-800">
              {{ ans.content }}
            </div>
            <!--end::Message-->
          </div>
          <!--end::Wrapper-->
          <!--begin::Replies-->
          <div class="ps-10 mb-0"></div>
          <!--end::Replies-->
        </div>
<!--        <QuestionCard :question="question"/>-->
      </div>
      <div class="d-flex flex-center mb-0">

        <a v-for="(link,index) in answers.links.links" v-if="answers.data.length > 0" :key="index" :class="[
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
import Loading from '../components/Loading.vue';

const store = useStore();
const route = useRoute();

store.dispatch('getMyAnswers');

const answers = computed(() => store.state.myAnswers)


function getForPage(link) {
  if (!link.url || link.active) {
    return;
  }
  store.dispatch('getMyAnswers', {url: link.url});
}
</script>