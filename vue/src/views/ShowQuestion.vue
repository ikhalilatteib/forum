<template>
  <!--begin::Post-->
  <div v-if="questionLoading">
    <Loading/>
  </div>


  <div v-else class="post" id="kt_post">
    <!--begin::Question-->
    <div class="mb-0">
      <!--begin::Head-->
      <div class="d-flex align-items-center mb-9">
        <!--begin::Title-->
        <h1 class="fs-2x fw-bolder text-gray-900 mb-0 me-1">{{ question.title }} </h1>
        <!--end::Title-->
        <!--begin::Icons-->
        <div class="d-flex align-items-center">
											<span class="ms-1" data-bs-toggle="tooltip" title="User replied">
												<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
												<span class="svg-icon svg-icon-success svg-icon-1">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                               viewBox="0 0 24 24" fill="none">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
                                  fill="currentColor"/>
														<path
                                d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                fill="currentColor"/>
													</svg>
												</span>
                        <!--end::Svg Icon-->
											</span>
        </div>
        <!--end::Icons-->
      </div>
      <!--end::Head-->
      <!--begin::Question-->
      <div class="fs-4 fw-normal text-gray-800 mb-10">
        <p>{{ question.content }}</p>
      </div>
      <!--end::Question-->
      <!--begin::Foot-->
      <div class="d-flex flex-stack flex-wrap">
        <!--begin::Author-->
        <div class="d-flex align-items-center py-1">
          <!--begin::Symbol-->
          <div class="symbol symbol-35px me-2">
            <img v-if="question.user.photo" :src="question.user.photo" :alt="question.user.name">
            <div v-else
                 class="
              symbol-label
              bg-light-success
              fs-3
              fw-bold
              text-success text-uppercase
            "
            >
              {{ question.user.name.charAt(0) }}
            </div>

          </div>
          <!--end::Symbol-->
          <!--begin::Name-->
          <div class="d-flex flex-column align-items-start justify-content-center">
            <span class="text-gray-800 fs-7 fw-bold lh-1 mb-2">{{ question.user.name }}</span>
            <span class="text-muted fs-8 fw-bold lh-1">{{ question.diff }}</span>
          </div>
          <!--end::Name-->
        </div>
        <!--end::Author-->
        <!--begin::Info-->
        <div class="d-flex align-items-center py-1">
          <a href="#answers" data-kt-scroll-toggle="true"
             class="btn btn-sm btn-outline btn-outline-dashed btn-outline-default px-4 me-2">{{ question.replies }}
            Cevap</a>
          <a href="../../demo5/dist/apps/devs/tag.html"
             class="btn btn-sm btn-light px-4 me-2">{{ question.tag.name }}</a>
        
          <a href="#" class="btn btn-sm btn-flex btn-light px-1" data-bs-toggle="tooltip"
             title="Upvote this question" data-bs-dismiss="click">
            <!--begin::Svg Icon | path: icons/duotune/arrows/arr062.svg-->

            <span class="svg-icon svg-icon-5 ms-1 me-1">
              <svg class="bi bi-eye fs-3x" fill="currentColor" height="16" viewBox="0 0 16 16" width="16"
                   xmlns="http://www.w3.org/2000/svg">
  <path
      d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"
      fill="currentColor"/>
  <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" fill="currentColor"/>
</svg> {{ question.view }}
											</span>
            <!--end::Svg Icon--></a>
        </div>
        <!--end::Info-->
      </div>
      <!--end::Foot-->
    </div>
    <!--end::Question-->
    <!--begin::Separator-->
    <div class="separator separator-dashed border-gray-300 mt-8 mb-10"></div>
    <!--end::Separator-->

    <AnswerList  :question="question"/>
    <div class="d-flex flex-center mb-0">

      <a v-for="(link,index) in question.answer.links" :key="index" :class="[
                 link.active? 'active':null,
             ]"

         aria-current="page"
         class="btn btn-icon btn-light btn-active-light-primary h-30px px-4 w-auto fw-bold fs-6 mx-1"
         href="#" @click="getForPage(link)"
         v-html="link.label"
      ></a>
    </div>
    <!--end::Questions-->
  </div>
  <!--end::Post-->
</template>

<script setup>
import {computed} from "vue";
import {useStore} from "vuex";
import {useRoute} from "vue-router";
import Loading from "../components/Loading.vue";
import AnswerList from "../components/answers/AnswerList.vue";

const route = useRoute();
const store = useStore();

store.dispatch('getQuestion', route.params.slug);

const question = computed(() => store.state.currentQuestion.data);
const questionLoading = computed(() => store.state.currentQuestion.loading)

const guest = computed(() => store.state.user.token)


function getForPage(link) {
  if (!link.url || link.active) {
    return;
  }
  store.dispatch('getQuestionByLinks', {links: link.url});
}

</script>


