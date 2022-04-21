<template>
    <div class="post " id="kt_post">
        <div v-if="questions.loading">
            <Loading/>
        </div>
        <!--begin::Question-->
        <div v-else v-for="(question, index) in questions.data" :key="index">
            <QuestionCard :question="question"/>
        </div>
    </div>
</template>
<script setup>
import QuestionCard from './QuestionCard.vue'
import Loading from "../Loading.vue";


const {questions} = defineProps({
    questions: Object,
});

</script>
