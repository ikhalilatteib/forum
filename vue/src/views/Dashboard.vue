<template>
    <div class="toolbar d-flex flex-stack flex-wrap mb-5 mb-lg-7" id="kt_toolbar">
        <!--begin::Page title-->
        <div class="page-title d-flex flex-column py-1">
            <!--begin::Title-->
            <h1 class="d-flex align-items-center my-1">
                <span class="text-dark fw-bolder fs-1">Tüm Sorular</span>
                <!--begin::Description-->
                <small class="text-muted fs-6 fw-bold ms-1">(0)</small>
                <!--end::Description-->
            </h1>
            <!--end::Title-->
        </div>
        <!--end::Page title-->
        <!--begin::Actions-->
        <div class="d-flex align-items-center py-1">
            <!--begin::Button-->
            <router-link :to="{name : 'AddQuestion'}" class="btn btn-flex btn-sm btn-primary fw-bolder border-0 fs-6 h-40px" id="kt_toolbar_primary_button">Soru Sor</router-link>
            <!--end::Button-->
        </div>
        <!--end::Actions-->
    </div>
    <!--end::Toolbar-->
    <!--begin::Post-->
 <questionlist/>
</template>

<script setup>
import questionlist from '../components/questions/QuestionList.vue'
</script>


