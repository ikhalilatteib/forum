<template>
  <div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
    <!--begin::Form-->
    <form class="form w-100" novalidate="novalidate" @submit="login">
      <!--begin::Heading-->
      <div class="text-center mb-5">
        <!--begin::Title-->
        <h1 class="text-dark mb-3">Forum'a Giriş Yap</h1>
        <!--end::Title-->
        <!--begin::Link-->
        <div class="text-gray-400 fw-bold fs-4">
          Yeni minisiniz?
          <router-link :to="{ name: 'Register' }" class="link-primary fw-bolder"
          >Hesap Oluştur
          </router-link>
        </div>
        <!--end::Link-->
      </div>
      <!--begin::Heading-->
      <!--begin::Input group-->
      <div  v-if="credentialStatus">
      <span class=" my-10 bg-light-danger text-danger p-2"> {{ credential.error }}</span>
      </div>

      <div class="fv-row my-8">
        <!--begin::Label-->
        <label class="form-label fs-6 fw-bolder text-dark">Email</label>
        <!--end::Label-->
        <!--begin::Input-->
        <input
            v-model="user.email"
            autocomplete="off"
            class="form-control form-control-lg form-control-solid"
            type="text"
        />
        <div v-if="errorMsg"
             :class="[errorMsg.errors.email?'fv-plugins-message-container invalid-feedback':'']">
          {{ errorMsg.errors.email?errorMsg.errors.email[0]:null }}
        </div>
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

          <!--end::Link-->
        </div>
        <!--end::Wrapper-->
        <!--begin::Input-->
        <input
            v-model="user.password"
            autocomplete="off"
            class="form-control form-control-lg form-control-solid"
            type="password"
        />
        <div v-if="errorMsg.errors"
             :class="[errorMsg.errors.password?'fv-plugins-message-container invalid-feedback':'']">
          {{ errorMsg.errors.password ? errorMsg.errors.password[0] : null }}
        </div>
        <!--end::Input-->
      </div>
      <!--end::Input group-->
      <!--begin::Actions-->
      <div class="text-center">
        <!--begin::Submit button-->
        <button class="btn btn-lg btn-primary w-100 mb-5" type="submit">
           <span v-if="loading" :class="[loading? 'indicator-progress':'']"
           >Lütfen bekleyin ...
            <span
                :class="[loading?'spinner-border spinner-border-sm align-middle ms-2':'']"
            ></span
            ></span>
          <span v-else class="indicator-label">Giriş</span>

        </button>
        <!--end::Submit button-->
      </div>
      <!--end::Actions-->
    </form>
    <!--end::Form-->
  </div>
</template>

<script setup>
import {ref} from "vue";
import {useRouter} from "vue-router";
import store from "../store";

const router = useRouter();

let loading = ref(false);
let errorMsg = ref('');
let credential = ref('');
let credentialStatus = ref(false);

const user = {
  email: "",
  password: "",
};

function login(ev) {
  ev.preventDefault();
  loading.value = true;
  store
      .dispatch("login", user)
      .then((res) => {
        loading.value = false;
        store.dispatch("getQuestions");
        router.push({
          name: "Dashboard",
        });
      })
      .catch((err) => {
        loading.value = false;

        if (err.response.status === 422) {
          credentialStatus.value=false
          errorMsg.value = err.response.data;
        }else {
          credentialStatus.value=true
          credential.value=err.response.data;
        }
      });
}
</script>
