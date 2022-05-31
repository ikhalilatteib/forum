<template>
  <!--begin::Popular Questions-->
  <div class="card bg-light mb-5 mb-lg-10 shadow-none border-0">
    <!--begin::Header-->
    <div class="card-header align-items-center border-0">
      <!--begin::Title-->
      <h3 class="card-title fw-bolder text-gray-900 fs-3">Popüler Sorular</h3>
      <!--end::Title-->
    </div>
    <!--end::Header-->
    <!--begin::Body-->
    <div class="card-body pt-0">
      <!--begin::Item-->
      <div
          v-for="(item, index) in popular"
          :key="index"
          class="d-flex mb-5"
      >
        <!--begin::Arrow-->
        <!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
        <span class="svg-icon svg-icon-2 mt-0 me-2">
          <svg
              fill="none"
              height="24"
              viewBox="0 0 24 24"
              width="24"
              xmlns="http://www.w3.org/2000/svg"
          >
            <rect
                fill="currentColor"
                height="20"
                opacity="0.3"
                rx="5"
                width="20"
                x="2"
                y="2"
            />
            <path
                d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z"
                fill="currentColor"
            />
          </svg>
        </span>
        <!--end::Svg Icon-->
        <!--end::Arrow-->
        <!--begin::Title-->
        <a
            :href="`/question/${item.slug}`"
            class="text-gray-700 text-hover-primary fs-6 fw-bold"
        >
          {{ item.title }}
        </a>
        <!--end::Title-->
      </div>
      <!--end::Item-->
    </div>
    <!--end: Card Body-->
  </div>
  <!--end::Popular Questions-->
</template>
<script setup>
import {useStore} from "vuex";
import {computed} from "vue";

const store = useStore();

const popular = computed(()=>store.state.popularQuestion.data);

store.dispatch('getPopularQuestion');
</script>
