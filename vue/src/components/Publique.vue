<template>
    <!--begin::Heading-->
    <div class="menu-item">
        <div class="menu-content pb-2">
            <span class="menu-section text-muted text-uppercase fs-7 fw-bolder">Genel</span>
        </div>
    </div>
    <!--end::Heading-->
    <!--begin::Menu item-->
    <div class="menu-item">
        <router-link :to="{name:'Dashboard'}" class="menu-link active">
            <span class="menu-title">Tüm Sorular</span>
            <span class="menu-badge">{{questions.links.total}}</span>
        </router-link>
    </div>
    <!--end::Menu item-->
    <!--begin::Menu item-->
    <div class="menu-item">
        <router-link :to="{name:'AddQuestion'}" class="menu-link">
            <span class="menu-title">Soru Sor</span>
        </router-link>
    </div>
    <!--end::Menu item-->


</template>

<script setup>
const {questions} = defineProps({
  questions: Object,
});
</script>