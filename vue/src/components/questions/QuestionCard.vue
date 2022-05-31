<template>
  <div class="mb-0">
    <!--begin::Head-->
    <div class="d-flex align-items-center mb-4">
      <!--begin::Title-->
      <router-link
        :to="{ name: 'ShowQuestion', params: { slug: question.slug } }"
        class="fs-2 fw-bolder text-gray-900 text-hover-primary me-1"
        >{{ question.title }}
      </router-link>
      <!--end::Title-->
      <!--begin::Icons-->
      <div class="d-flex align-items-center">
        <span class="ms-1" data-bs-toggle="tooltip" title="New question">
          <!--begin::Svg Icon | path: icons/duo tune/general/gen045.svg-->
          <span class="svg-icon svg-icon-primary svg-icon-1">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
            >
              <rect
                opacity="0.3"
                x="2"
                y="2"
                width="20"
                height="20"
                rx="10"
                fill="currentColor"
              />
              <rect
                x="11"
                y="17"
                width="7"
                height="2"
                rx="1"
                transform="rotate(-90 11 17)"
                fill="currentColor"
              />
              <rect
                x="11"
                y="9"
                width="2"
                height="2"
                rx="1"
                transform="rotate(-90 11 9)"
                fill="currentColor"
              />
            </svg>
          </span>
          <!--end::Svg Icon-->
        </span>
      </div>
      <!--end::Icons-->
    </div>
    <!--end::Head-->
    <!--begin::Summary-->
    <div class="fs-base fw-normal text-gray-700 mb-4">
      {{ question.content }}
    </div>
    <!--end::Summary-->
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
        <div
          class="d-flex flex-column align-items-start justify-content-center"
        >
          <span class="text-gray-900 fs-7 fw-bold lh-1 mb-2">{{
            question.user.name
          }}</span>
          <span class="text-muted fs-8 fw-bold lh-1">{{ question.diff }}</span>
        </div>
        <!--end::Name-->
      </div>
      <!--end::Author-->
      <!--begin::Info-->
      <div class="d-flex align-items-center py-1">
        <!--begin::Answers-->
        <router-link
          :to="{ name: 'ShowQuestion', params: { slug: question.slug } }"
          class="
            btn btn-sm btn-outline btn-outline-dashed btn-outline-default
            px-4
            me-2
          "
        >
          {{ question.replies }} Cevap
        </router-link>
        <!--end::Answers-->
        <!--begin::Tags-->
        <a
          :href="`/tags/${question.tag.slug}`"
          class="btn btn-sm btn-light px-4 me-2"
        >
          {{ question.tag.name }}
        </a>
        <!--end::Tags-->
        <!--begin::Upvote-->
        <a href="#" class="btn btn-sm btn-flex btn-light px-1 mx-2" data-bs-toggle="tooltip"
           title="Upvote this question" data-bs-dismiss="click">
          <!--begin::Svg Icon | path: icons/duotune/arrows/arr062.svg-->

          <span class="svg-icon svg-icon-5 ms-1 me-1" >
              <svg class="bi bi-eye fs-3x" fill="#009ef7" height="16" viewBox="0 0 16 16" width="16"
                   xmlns="http://www.w3.org/2000/svg">
  <path
      d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"
      fill="#009ef7"/>
  <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" fill="#009ef7"/>
</svg> {{ question.view }}
											</span>
          <!--end::Svg Icon--></a>
        <!--end::Upvote-->
        <!--begin::Upvote-->
        <div v-if="token">
          <router-link
            v-if="user.id === question.user.id"
            :to="{ name: 'EditQuestion', params: { slug: question.slug } }"
            class="btn btn-sm btn-flex btn-light px-3"
            data-bs-toggle="tooltip"
            title="Upvote this question"
            data-bs-dismiss="click"
          >
            <!--begin::Svg Icon | path: icons/duotune/arrows/arr062.svg-->
            <span class="svg-icon svg-icon-7ms-2 me-0">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
              >
                <path
                  opacity="0.5"
                  d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z"
                  fill="#4B0082"
                  transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953) "
                />
                <path
                  d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z"
                  fill="#4B0082"
                />
              </svg>
            </span>
            <!--end::Svg Icon-->
          </router-link>
          <a
          v-if="user.id === question.user.id" @click="deleteQuestion"
            href="#"
            class="btn btn-sm btn-flex btn-light px-3 m-2"
            data-bs-toggle="tooltip"
            title="Upvote this question"
            data-bs-dismiss="click"
          >
            <span class="svg-icon svg-icon-7ms-3 me-0"
              ><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/Home/Trash.svg--><svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                version="1.1"
              >
                <g
                  stroke="none"
                  stroke-width="1"
                  fill="none"
                  fill-rule="evenodd"
                >
                  <rect x="0" y="0" width="24" height="24" />
                  <path
                    d="M6,8 L18,8 L17.106535,19.6150447 C17.04642,20.3965405 16.3947578,21 15.6109533,21 L8.38904671,21 C7.60524225,21 6.95358004,20.3965405 6.89346498,19.6150447 L6,8 Z M8,10 L8.45438229,14.0894406 L15.5517885,14.0339036 L16,10 L8,10 Z"
                    fill="#ff0000"
                    fill-rule="nonzero"
                  />
                  <path
                    d="M14,4.5 L14,3.5 C14,3.22385763 13.7761424,3 13.5,3 L10.5,3 C10.2238576,3 10,3.22385763 10,3.5 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                    fill="#ff0000"
                    opacity="0.3"
                  />
                </g></svg
              ><!--end::Svg Icon-->
            </span>
          </a>
        </div>
        <!--end::Upvote-->
      </div>
      <!--end::Info-->
    </div>
    <!--end::Foot-->
  </div>
  <!--end::Question-->
  <!--begin::Separator-->
  <div class="separator separator-dashed border-gray-300 my-8"></div>
  <!--end::Separator-->
</template>
<script setup>
import { computed } from "vue";
import { useRouter } from "vue-router";
import { useStore } from "vuex";

const store = useStore();
const router = useRouter();

const user = computed(() => store.state.user.data);
const token = computed(() => store.state.user.token);

const { question } = defineProps({
  question: Object,
});

function deleteQuestion(){
  if(confirm(`Bu soruya siliminizi emin misiniz? sildikten sonra geri getiremezsiniz!`)){
    store.dispatch('deleteQuestion',question.slug).then(()=>{
      store.dispatch('getQuestions')
    });
  }
}
</script>
