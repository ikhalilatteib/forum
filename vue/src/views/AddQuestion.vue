<template>
  <!--begin::Toolbar-->
  <div class="toolbar d-flex flex-stack flex-wrap mb-5 mb-lg-7" id="kt_toolbar">
    <!--begin::Page title-->
    <div class="page-title d-flex flex-column py-1">
      <!--begin::Title-->
      <h1 class="d-flex align-items-center my-1">
        <span class="text-dark fw-bolder fs-1">{{
          route.params.slug ? model.title : "Soru Sor"
        }}</span>
      </h1>
      <!--end::Title-->
      <!--begin::Breadcrumb-->
      <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
        <!--begin::Item-->
        <li class="breadcrumb-item text-muted">
          <router-link
            :to="{ name: 'Dashboard' }"
            class="text-muted text-hover-primary"
            >Ana Sayfa
          </router-link>
        </li>
        <!--end::Item-->
        <!--begin::Item-->
        <li class="breadcrumb-item">
          <span class="bullet bg-gray-200 w-5px h-2px"></span>
        </li>
        <!--end::Item-->
        <!--begin::Item-->
        <li class="breadcrumb-item text-dark">Soru Sor</li>
        <!--end::Item-->
      </ul>
      <!--end::Breadcrumb-->
    </div>
    <!--end::Page title-->
  </div>
  <!--end::Toolbar-->
  <!--begin::Post-->
  <div class="post" id="kt_post">
    <!--begin:Form-->
    <form id="kt_devs_ask_form" class="form" @submit="addQuestion">
      <!--begin::Input group-->
      <div class="d-flex flex-column mb-8 fv-row">
        <!--begin::Label-->
        <label class="d-flex align-items-center mb-2">
          <span class="text-gray-700 fs-6 fw-bolder required">Başlık</span>
          <i
            class="fas fa-exclamation-circle ms-2 fs-7"
            data-bs-toggle="tooltip"
            title="Sorunun Başlığı"
          ></i>
        </label>
        <!--end::Label-->
        <!--begin::Form control-->
        <input
          type="text"
          class="form-control"
          placeholder="Sorunun Başlığı"
          v-model="model.title"
        />
        <!--end::Form control-->
      </div>
      <!--end::Input group-->
      <!--begin::Input group-->
      <div class="d-flex flex-column mb-8">
        <!--begin::Label-->
        <label class="mb-2">
          <span class="text-gray-700 fs-6 fw-bolder required">Soru</span>
        </label>
        <!--end::Label-->
        <!--begin::Form control-->
        <div class="fv-row">
          <textarea
            class="form-control mb-3"
            rows="10"
            v-model="model.content"
            placeholder="Sorunun İçeriği"
            data-kt-autosize="true"
          ></textarea>
        </div>
        <!--end::Form control-->
      </div>
      <!--end::Input group-->
      <!--begin::Input group-->
      <div class="d-flex flex-column mb-8">
        <!--begin::Label-->
        <label class="mb-2">
          <span class="text-gray-700 fs-6 fw-bolder">Etiket </span>
        </label>
        <!--end::Label-->
        <!--begin::Form control-->
        <select
          class="form-select"
          data-control="select2"
          data-placeholder="Select a product"
          v-model="model.tag_id"
          data-allow-clear="true"
        >
          <option value=""></option>
          <option
            v-for="(tagDat, index) in tagData"
            :key="index"
            :value="tagDat.id"
            :selected="model.tag.id === tagDat.id"
          >
            {{ tagDat.name }}
          </option>
        </select>
        <!--end::Form control-->
      </div>
      <!--end::Input group-->
      <!--begin::Actions-->
      <div class="d-flex flex-stack">
        <!--begin::Submit-->
        <button type="submit" id="kt_devs_ask_submit" class="btn btn-primary">
          <!--begin::Indicator-->
          <span class="indicator-label">Gönder</span>
          <span class="indicator-progress"
            >Please wait...
            <span
              class="spinner-border spinner-border-sm align-middle ms-2"
            ></span>
          </span>
          <!--end::Indicator-->
        </button>
        <!--begin::Submit-->
      </div>
      <!--end::Actions-->
    </form>
    <!--end:Form-->
  </div>
  <!--end::Post-->
</template>
<script setup>
import { computed, ref, watch } from "vue";
import { useRouter, useRoute } from "vue-router";
import store from "../store";

const router = useRouter();
const route = useRoute();

let model = ref({
  title: "",
  content: "",
  tag: "",
  slug: "",
  tag_id:''
});

watch(
  () => store.state.currentQuestion.data,
  (newVal, oldVal) => {
    model.value = {
      ...JSON.parse(JSON.stringify(newVal)),
    };
  }
);

if (route.params.slug) {
  store.dispatch("getQuestion", route.params.slug);
}

const tagData = computed(() => store.state.tags.data);

store.dispatch("getTags");

function addQuestion(ev) {
  ev.preventDefault();
  store.dispatch("addQuestion", model.value).then((res) => {
    store.dispatch("getQuestions");
    router.push({
      name: "Dashboard",
    });
  });
}
</script>
