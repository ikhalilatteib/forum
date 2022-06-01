<template>
    <!--begin::Wrapper-->
    <div class="w-lg-600px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
        <!--begin::Form-->
        <form class="form w-100" novalidate="novalidate" @submit="register">
            <!--begin::Heading-->
            <div class="mb-10 text-center">
                <!--begin::Title-->
                <h1 class="text-dark mb-3">Hesap Oluştur</h1>
                <!--end::Title-->
                <!--begin::Link-->
                <div class="text-gray-400 fw-bold fs-4">
                    Hesabim Var?
                    <router-link :to="{ name: 'Login' }" class="link-primary fw-bolder">Giriş Yap</router-link>
                </div>
                <!--end::Link-->
            </div>
            <!--end::Heading-->

            <!--begin::Input group-->
            <div class="fv-row mb-7">
                <!--begin::Col-->

                <label class="form-label fw-bolder text-dark fs-6"> İsminiz</label>
                <input class="form-control form-control-lg form-control-solid" type="text" placeholder=""
                    v-model="user.name" autocomplete="off" />

                <!--begin::Col-->
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="fv-row mb-7">
                <label class="form-label fw-bolder text-dark fs-6">Email</label>
                <input class="form-control form-control-lg form-control-solid" type="email" placeholder=""
                    v-model="user.email" autocomplete="off" />
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="mb-10 fv-row" data-kt-password-meter="true">
                <!--begin::Wrapper-->
                <div class="mb-1">
                    <!--begin::Label-->
                    <label class="form-label fw-bolder text-dark fs-6">Şifre</label>
                    <!--end::Label-->
                    <!--begin::Input wrapper-->
                    <div class="position-relative mb-3">
                        <input class="form-control form-control-lg form-control-solid" type="password" placeholder=""
                            v-model="user.password" autocomplete="off" />
                    </div>
                    <!--end::Input wrapper-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Input group=-->
            <!--begin::Input group-->
            <div class="fv-row mb-5">
                <label class="form-label fw-bolder text-dark fs-6">Şifreyi Tekrarla</label>
                <input class="form-control form-control-lg form-control-solid" type="password" placeholder=""
                    v-model="user.password_confirmation" autocomplete="off" />
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="fv-row mb-10">
                <label class="form-check form-check-custom form-check-solid form-check-inline">
                    <input class="form-check-input" type="checkbox" name="toc" value="1" />
                    <span class="form-check-label fw-bold text-gray-700 fs-6">I Agree
                        <a href="#" class="ms-1 link-primary">Terms and conditions</a>.</span>
                </label>
            </div>
            <!--end::Input group-->
            <!--begin::Actions-->
            <div class="text-center">
                <button type="submit" class="btn btn-lg btn-primary">
                    <span class="indicator-label">Oluştur</span>
                    <span class="indicator-progress">Please wait...
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                </button>
            </div>
            <!--end::Actions-->
        </form>
        <!--end::Form-->
    </div>
    <!--end::Wrapper-->
</template>

<script setup>
import store from "../store";
import { useRouter } from "vue-router";

const router = useRouter();
const user = {
    name: "",
    email: "",
    password: "",
    password_confirmation: "",
};

function register(ev) {
    ev.preventDefault();
    store.dispatch("register", user).then((res) => {
        router.push({
            name: "Dashboard",
        });
    }).catch((err) => {
      loading.value = false;
      if (err.response.status === 422) {
        errorMsg.value = err.response.data.errors;
      }
    });
}
</script>
