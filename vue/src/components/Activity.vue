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
        <router-link :to="{name:'MyQuestion'}" class="menu-link"  :class="[this.$route.name === 'MyQuestion' ? 'active' : '']">
            <span class="menu-title">Sorularım</span>
            <span class="menu-badge">{{count.question}}</span>
        </router-link>
    </div>
    <!--end::Menu item-->
    <!--begin::Menu item-->
    <div class="menu-item">
        <router-link :to="{name:'MyAnswer'}" class="menu-link" :class="[this.$route.name === 'MyAnswer' ? 'active' : '']">
            <span class="menu-title">Cevaplarım</span>
            <span class="menu-badge">{{count.answer}}</span>
        </router-link>
    </div>
    <!--end::Menu item-->
</template>

<script setup>

const count = defineProps({
  question:Number,
  answer:Number
})
</script>