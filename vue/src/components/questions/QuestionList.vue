<template>
    <div class="post " id="kt_post">
      <div v-if="questions.loading">
        <Loading/>
      </div>
      <!--begin::Question-->
      <div v-else>
        <div v-for="(question, index) in questions.data" :key="index">
          <QuestionCard :question="question"/>
        </div>
        <div class="d-flex flex-center mb-0">

          <a v-for="(link,index) in questions.links.links" :key="index" :class="[
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
import QuestionCard from './QuestionCard.vue'
import Loading from "../Loading.vue";
import {useStore} from "vuex";

const store = useStore();

const {questions} = defineProps({
    questions: Object,
});

function getForPage(link) {
  if (!link.url || link.active) {
    return;
  }
  store.dispatch('getQuestions', {url: link.url});
}
</script>
