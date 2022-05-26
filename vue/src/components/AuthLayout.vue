<template>
    <div
        class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed"
       
    >
        <!--begin::Content-->
        <div class="d-flex flex-center flex-column flex-column-fluid pt-0 p-10 pb-lg-20">
            <!--begin::Logo-->
            <a href="#" class="mb-12">
                <img alt="Logo" src="../assets/media/logos/bseu_bm_logo.png" class="h-110px w-200px" />
            </a>
            <!--end::Logo-->

            <router-view></router-view>
        </div>
        <!--end::Content-->

        <!--begin::Footer-->
        <div class="d-flex flex-center flex-column-auto p-10">
            <!--begin::Links-->
            <div class="d-flex align-items-center fw-bold fs-6">
                <a href="#" class="text-muted text-hover-primary px-2">About</a>

                <a href="#" class="text-muted text-hover-primary px-2">Contact</a>

                <a href="#" class="text-muted text-hover-primary px-2">Contact Us</a>
            </div>
            <!--end::Links-->
        </div>
        <!--end::Footer-->
    </div>
</template>

<script>
export default {
    name: "AuthLayout"
}
</script>

<style scoped>

</style>
