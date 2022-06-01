<template>
    <!--begin::Heading-->
    <div class="menu-item pt-5">
        <div class="menu-content pb-2">
            <span class="menu-section text-muted text-uppercase fs-7 fw-bolder">Etiketler</span>
        </div>
    </div>
    <!--end::Heading-->
    <!--begin::Menu item-->
    <div v-for="(item,index) in data" :key="index" class="menu-item">
        <a :href="`/tags/${item.slug}`" class="menu-link" :class="[this.$route.params.slug === item.slug ? 'active' : '']">
            <span class="menu-title">{{item.name}}</span>
            <span class="menu-badge">{{item.question}}</span>
        </a>
    </div>
    <!--end::Menu item-->
    <!--begin::Menu item-->
    <!--begin::Collapse-->
    <div class="collapse" id="kt_aside_categories_more">
       
    </div>
    <!--end::Collapse-->
    <!--begin::Heading-->
    <!--end::Heading-->
</template>
<script setup>
import { useStore } from "vuex";
import { computed } from "vue";

const store = useStore();

const data = computed(() => store.state.tags.data);

store.dispatch('getTags');
</script>