<template>
    <!--begin::Heading-->
    <div class="menu-item pt-5">
        <div class="menu-content pb-2">
            <span class="menu-section text-muted text-uppercase fs-7 fw-bolder">Özetim</span>
        </div>
    </div>
    <!--end::Heading-->
    <!--begin::Menu item-->
    <div class="menu-item">
        <a href="../../demo5/dist/apps/devs/question.html" class="menu-link">
            <span class="menu-title">Sorularım</span>
            <span class="menu-badge">{{count.question}}</span>
        </a>
    </div>
    <!--end::Menu item-->
    <!--begin::Menu item-->
    <div class="menu-item">
        <a href="../../demo5/dist/index.html" class="menu-link">
            <span class="menu-title">Cevaplarım</span>
            <span class="menu-badge">{{answer}}</span>
        </a>
    </div>
    <!--end::Menu item-->
    <!--begin::Menu item-->
    <div class="menu-item">
        <a href="../../demo5/dist/index.html" class="menu-link">
            <span class="menu-title">Kaydedılanlar</span>
            <span class="menu-badge">0</span>
        </a>
    </div>
    <!--end::Menu item-->
</template>

<script setup>

const count = defineProps({
  question:Number,
  answer:Number
})
</script>