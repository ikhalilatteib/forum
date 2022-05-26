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
        <a href="../../demo5/dist/index.html" class="menu-link">
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
    <div class="menu-item">
        <div class="menu-link">
            <a hred="#" class="menu-title text-muted fs-7" id="kt_aside_categories_toggle" data-bs-toggle="collapse"
                data-bs-target="#kt_aside_categories_more">Fazla Göster</a>
        </div>
    </div>
    <!--end::Heading-->
</template>
<script setup>
import { useStore } from "vuex";
import { computed } from "vue";

const store = useStore();

const data = computed(() => store.state.tags.data);

store.dispatch('getTags');
</script>