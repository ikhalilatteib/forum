<template>
    <div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
        <!--begin::Form-->
        <form class="form w-100" novalidate="novalidate" @submit='login'>
            <!--begin::Heading-->
            <div class="text-center mb-10">
                <!--begin::Title-->
                <h1 class="text-dark mb-3">Forum'a Giriş Yap</h1>
                <!--end::Title-->
                <!--begin::Link-->
                <div class="text-gray-400 fw-bold fs-4">
                    Yeni minisiniz?
                    <router-link :to="{ name: 'Register' }" class="link-primary fw-bolder">Hesap Oluştur
                    </router-link>
                </div>
                <!--end::Link-->
            </div>
            <!--begin::Heading-->
            <!--begin::Input group-->
            <div class="fv-row mb-10">
                <!--begin::Label-->
                <label class="form-label fs-6 fw-bolder text-dark">Email</label>
                <!--end::Label-->
                <!--begin::Input-->
                <input class="form-control form-control-lg form-control-solid" type="text" v-model="user.email"
                    autocomplete="off" />
                <!--end::Input-->
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="fv-row mb-10">
                <!--begin::Wrapper-->
                <div class="d-flex flex-stack mb-2">
                    <!--begin::Label-->
                    <label class="form-label fw-bolder text-dark fs-6 mb-0">Şifre</label>
                    <!--end::Label-->
                    <!--begin::Link-->
                    <a href="../../demo5/dist/authentication/layouts/basic/password-reset.html"
                        class="link-primary fs-6 fw-bolder">Şifrem unuttum ?</a>
                    <!--end::Link-->
                </div>
                <!--end::Wrapper-->
                <!--begin::Input-->
                <input class="form-control form-control-lg form-control-solid" type="password" v-model="user.password"
                    autocomplete="off" />
                <!--end::Input-->
            </div>
            <!--end::Input group-->
            <!--begin::Actions-->
            <div class="text-center">
                <!--begin::Submit button-->
                <button type="submit" class="btn btn-lg btn-primary w-100 mb-5">
                    <span class="indicator-label">Giriş</span>
                    <span class="indicator-progress">Please wait...
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                </button>
                <!--end::Submit button-->
            </div>
            <!--end::Actions-->
        </form>
        <!--end::Form-->
    </div>
</template>

<script setup>
import { useRouter } from "vue-router";
import store from "../store";

const router = useRouter();

const user = {
    email: "",
    password: "",
};

function login(ev) {
    ev.preventDefault();
    store.dispatch("login", user).then((res) => {
        store.dispatch('getQuestions')
        router.push({
            name: 'Dashboard'
        });
    });
}
</script>
