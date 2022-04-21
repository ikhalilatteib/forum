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
            <div class="symbol-label bg-light-success fs-3 fw-bold text-success text-uppercase">
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
             class="btn btn-sm btn-light px-4 me-2">{{ question.tag_id.name }}</a>
          <a href="#" class="btn btn-sm btn-icon btn-light me-2" data-bs-toggle="tooltip"
             title="Save for your future reference" data-bs-dismiss="click">
            <!--begin::Svg Icon | path: icons/duotune/general/gen056.svg-->
            <span class="svg-icon svg-icon-2">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                               viewBox="0 0 24 24" fill="none">
														<path
                                d="M16.0077 19.2901L12.9293 17.5311C12.3487 17.1993 11.6407 17.1796 11.0426 17.4787L6.89443 19.5528C5.56462 20.2177 4 19.2507 4 17.7639V5C4 3.89543 4.89543 3 6 3H17C18.1046 3 19 3.89543 19 5V17.5536C19 19.0893 17.341 20.052 16.0077 19.2901Z"
                                fill="currentColor"/>
													</svg>
												</span>
            <!--end::Svg Icon-->
          </a>
          <a href="#" class="btn btn-sm btn-flex btn-light px-4" data-bs-toggle="tooltip"
             title="Upvote this question" data-bs-dismiss="click">23
            <!--begin::Svg Icon | path: icons/duotune/arrows/arr062.svg-->
            <span class="svg-icon svg-icon-7 ms-1 me-1">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                             viewBox="0 0 24 24" fill="none">
													<path opacity="0.5"
                                d="M13 9.59998V21C13 21.6 12.6 22 12 22C11.4 22 11 21.6 11 21V9.59998H13Z"
                                fill="currentColor"/>
													<path
                              d="M5.7071 7.89291C5.07714 8.52288 5.52331 9.60002 6.41421 9.60002H17.5858C18.4767 9.60002 18.9229 8.52288 18.2929 7.89291L12.7 2.3C12.3 1.9 11.7 1.9 11.3 2.3L5.7071 7.89291Z"
                              fill="currentColor"/>
												</svg>
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
    <!--begin::Pagination-->
    <div class="d-flex flex-center mb-0">
      <a href="#" class="btn btn-icon btn-light btn-active-light-primary h-30px w-30px fw-bold fs-6 mx-2">1</a>
      <a href="#"
         class="btn btn-icon btn-light btn-active-light-primary h-30px w-30px fw-bold fs-6 mx-2 active">2</a>
      <a href="#" class="btn btn-icon btn-light btn-active-light-primary h-30px w-30px fw-bold fs-6 mx-2">3</a>
      <a href="#" class="btn btn-icon btn-light btn-active-light-primary h-30px w-30px fw-bold fs-6 mx-2">4</a>
      <a href="#" class="btn btn-icon btn-light btn-active-light-primary h-30px w-30px fw-bold fs-6 mx-2">5</a>
      <span class="text-muted fw-bold fs-6 mx-2">..</span>
      <a href="#" class="btn btn-icon btn-light btn-active-light-primary h-30px w-30px fw-bold fs-6 mx-2">19</a>
    </div>
    <!--end::Questions-->
  </div>
  <!--end::Post-->
</template>

<script setup>
import {computed} from "vue";
import {useStore} from "vuex";
import {useRoute} from "vue-router";
import AnswerEditor from "../components/answers/AnswerEditor.vue";
import Loading from "../components/Loading.vue";
import AnswerList from "../components/answers/AnswerList.vue";

const route = useRoute();
const store = useStore();


const question = computed(() => store.state.currentQuestion.data);
const questionLoading = computed(() => store.state.currentQuestion.loading)
store.dispatch('getQuestion', route.params.slug);
const guest = computed(() => store.state.user.token)

</script>


