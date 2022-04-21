<template>

  <!--begin:Reply Form-->
  <div>
    <div v-if="!guest">
      <h2 class="d-flex justify-content-center py-5">
        Cevap verebilmeniz için öncelikle giriş
        <router-link :to="{name:'Login'}" class="px-2"> yapın</router-link>
      </h2>
    </div>
    <form v-else id="kt_devs_reply_form" class="form mb-10" @submit="addAnswer">
      <!--begin::Input group-->
      <div class="form-group mb-2" id="editor" data-kt-scroll-offset="150">
                <textarea v-model="model.content" class="form-control" rows="6" placeholder="Your reply here.."
                          maxlength="1000"
                          data-kt-autosize="true"
                ></textarea>
      </div>
      <!--end::Input group-->
      <!--begin::Action-->
      <div class="d-flex align-items-center justify-content-between py-2 mb-5">
        <div>
        </div>
        <!--begin::Submit-->
        <button class="btn btn-primary fw-bolder" data-kt-action="submit">Submit</button>
        <!--end::Submit-->
      </div>
      <!--end::Action-->
    </form>
  </div>
  <div class=""></div>
  <!--end:Reply Form-->
  <!--begin::Heading-->
  <a id="answers" data-kt-scroll-offset="{default: 100, lg: 125}"></a>
  <h2 class="fw-bolder text-gray-900 mb-10">Cevap({{ question.replies }})</h2>
  <!--end::Heading-->
  <!--begin::Replies-->
  <div class="mb-10" v-for="(ans,index) in question.answer" :key="index">
    <!--begin::Reply-->
    <div class="border rounded p-2 p-lg-6 mb-10">
      <!--begin::Wrapper-->
      <div class="mb-0">
        <!--begin::Foot-->
        <div class="d-flex flex-stack flex-wrap mb-5">
          <!--begin::Author-->
          <div class="d-flex align-items-center py-1">
            <!--begin::Symbol-->
            <div class="symbol symbol-35px me-2">
              <img src="../../assets/media/avatars/300-2.jpg" alt="user"/>
            </div>
            <!--end::Symbol-->
            <!--begin::Name-->
            <div class="d-flex flex-column align-items-start justify-content-center">
              <span class="text-gray-800 fs-7 fw-bold lh-1 mb-2">{{ ans.user.name }}</span>
              <span class="text-muted fs-8 fw-bold lh-1">{{ ans.diff }}</span>
            </div>
            <!--end::Name-->
          </div>
          <!--end::Author-->
          <!--begin::Info-->
          <div class="d-flex align-items-center py-1">
            <!--begin::Reply-->
            <!--end::Reply-->
            <!--begin::Upvote-->
            <a href="#" class="btn btn-sm btn-flex btn-light btn-icon" data-bs-toggle="tooltip"
               title="Upvote" data-bs-dismiss="click">
              <!--begin::Svg Icon | path: icons/duotune/arrows/arr062.svg-->
              <span class="svg-icon svg-icon-7">
															<svg xmlns="http://www.w3.org/2000/svg" width="24"
                                   height="24" viewBox="0 0 24 24" fill="none">
																<path opacity="0.5"
                                      d="M13 9.59998V21C13 21.6 12.6 22 12 22C11.4 22 11 21.6 11 21V9.59998H13Z"
                                      fill="currentColor"/>
																<path
                                    d="M5.7071 7.89291C5.07714 8.52288 5.52331 9.60002 6.41421 9.60002H17.5858C18.4767 9.60002 18.9229 8.52288 18.2929 7.89291L12.7 2.3C12.3 1.9 11.7 1.9 11.3 2.3L5.7071 7.89291Z"
                                    fill="currentColor"/>
															</svg>
														</span>
              <!--end::Svg Icon-->
            </a>
            <!--end::Upvote-->
            <div v-if="token">
              <a v-if="guest.id===ans.user.id" @click="Edit(ans.id)" href="#editor"
                 class="btn btn-sm btn-flex btn-light px-3" data-bs-toggle="tooltip"
                 title="Upvote this question"
                 data-bs-dismiss="click"
                 data-kt-scroll-toggle
              >
                <!--begin::Svg Icon | path: icons/duo tune/arrows/arr062.svg-->
                <span class="svg-icon svg-icon-7ms-2 me-0">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                     fill="none">
                  <path opacity="0.5"
                        d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z"
                        fill="currentColor"
                        transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953) "/>
                  <path
                      d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z"
                      fill="currentColor"/>
                </svg>
              </span>
                <!--end::Svg Icon-->
              </a>
            </div>
          </div>
          <!--end::Info-->
        </div>
        <!--end::Foot-->
        <!--begin::Message-->
        <div class="fs-5 fw-normal text-gray-800">
          {{ ans.content }}
        </div>
        <!--end::Message-->
      </div>
      <!--end::Wrapper-->
      <!--begin::Replies-->
      <div class="ps-10 mb-0"></div>
      <!--end::Replies-->
    </div>

    <!--end::Reply-->
  </div>
  <!--end::Replies-->


</template>

<script setup>
import {computed, ref, watch} from "vue";
import {useStore} from "vuex";
import {useRoute, useRouter} from "vue-router";

const router = useRouter();
const route = useRoute();

const {question} = defineProps({
  question: Object
})
const store = useStore();
const guest = computed(() => store.state.user.data)
const token = computed(() => store.state.user.token)

function Edit(e) {
  store.dispatch('getAnswer', e)
}

let model = ref({
  content: ''
});

watch(
    () => store.state.currentAnswer.data,
    (newVal, oldVal) => {
      model.value = {
        ...JSON.parse(JSON.stringify(newVal)),
      };
    }
);

function addAnswer(ev) {
  ev.preventDefault();
  store.dispatch('addAnswer',
      {
        content: model.value,
        questionSlug: route.params.slug
      })
      .then((res) => {
        model.value="";
        store.dispatch('getQuestion',route.params.slug)
      })

}
</script>
