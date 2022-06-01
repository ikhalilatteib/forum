<template>
  <!--begin::Post-->
  <div id="kt_post" class="post">
    <!--begin::Navbar-->
    <div class="card mb-5 mb-xl-10">
      <div class="card-body pt-9 pb-0">
        <!--begin::Details-->
        <div class="d-flex flex-wrap flex-sm-nowrap mb-3">
          <!--begin: Pic-->
          <div class="me-7 mb-4">
            <div
                class="
                symbol symbol-100px symbol-lg-160px symbol-fixed
                position-relative
              "
            >
              <img v-if="inform.photo" :src="inform.photo" alt="image"/>
              <div
                  class="
                  position-absolute
                  translate-middle
                  bottom-0
                  start-100
                  mb-6
                  bg-success
                  rounded-circle
                  border border-4 border-white
                  h-20px
                  w-20px
                "
              ></div>
            </div>
          </div>
          <!--end::Pic-->
          <!--begin::Info-->
          <div class="flex-grow-1">
            <!--begin::Title-->
            <div
                class="
                d-flex
                justify-content-between
                align-items-start
                flex-wrap
                mb-2
              "
            >
              <!--begin::User-->
              <div class="d-flex flex-column">
                <!--begin::Name-->
                <div class="d-flex align-items-center mb-2">
                  <a
                      class="text-gray-900 text-hover-primary fs-2 fw-bolder me-1"
                      href="#"
                  >{{ user.name }}
                  </a>
                  <a href="#">
                    <!--begin::Svg Icon | path: icons/duotune/general/gen026.svg-->
                    <span class="svg-icon svg-icon-1 svg-icon-primary">
                      <svg
                          height="24px"
                          viewBox="0 0 24 24"
                          width="24px"
                          xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                            d="M10.0813 3.7242C10.8849 2.16438 13.1151 2.16438 13.9187 3.7242V3.7242C14.4016 4.66147 15.4909 5.1127 16.4951 4.79139V4.79139C18.1663 4.25668 19.7433 5.83365 19.2086 7.50485V7.50485C18.8873 8.50905 19.3385 9.59842 20.2758 10.0813V10.0813C21.8356 10.8849 21.8356 13.1151 20.2758 13.9187V13.9187C19.3385 14.4016 18.8873 15.491 19.2086 16.4951V16.4951C19.7433 18.1663 18.1663 19.7433 16.4951 19.2086V19.2086C15.491 18.8873 14.4016 19.3385 13.9187 20.2758V20.2758C13.1151 21.8356 10.8849 21.8356 10.0813 20.2758V20.2758C9.59842 19.3385 8.50905 18.8873 7.50485 19.2086V19.2086C5.83365 19.7433 4.25668 18.1663 4.79139 16.4951V16.4951C5.1127 15.491 4.66147 14.4016 3.7242 13.9187V13.9187C2.16438 13.1151 2.16438 10.8849 3.7242 10.0813V10.0813C4.66147 9.59842 5.1127 8.50905 4.79139 7.50485V7.50485C4.25668 5.83365 5.83365 4.25668 7.50485 4.79139V4.79139C8.50905 5.1127 9.59842 4.66147 10.0813 3.7242V3.7242Z"
                            fill="#00A3FF"
                        />
                        <path
                            class="permanent"
                            d="M14.8563 9.1903C15.0606 8.94984 15.3771 8.9385 15.6175 9.14289C15.858 9.34728 15.8229 9.66433 15.6185 9.9048L11.863 14.6558C11.6554 14.9001 11.2876 14.9258 11.048 14.7128L8.47656 12.4271C8.24068 12.2174 8.21944 11.8563 8.42911 11.6204C8.63877 11.3845 8.99996 11.3633 9.23583 11.5729L11.3706 13.4705L14.8563 9.1903Z"
                            fill="white"
                        />
                      </svg>
                    </span>
                    <!--end::Svg Icon-->
                  </a>
                </div>
                <!--end::Name-->
                <!--begin::Info-->
                <div class="d-flex flex-wrap fw-bold fs-6 mb-4 pe-2">
                  <a
                      class="
                      d-flex
                      align-items-center
                      text-gray-400 text-hover-primary
                      mb-2
                    "
                      href="#"
                  >
                    <!--begin::Svg Icon | path: icons/duotune/communication/com011.svg-->
                    <span class="svg-icon svg-icon-4 me-1">
                      <svg
                          fill="none"
                          height="24"
                          viewBox="0 0 24 24"
                          width="24"
                          xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                            d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z"
                            fill="currentColor"
                            opacity="0.3"
                        />
                        <path
                            d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z"
                            fill="currentColor"
                        />
                      </svg>
                    </span>
                    <!--end::Svg Icon-->
                    {{ user.email }}
                  </a>
                </div>
                <!--end::Info-->
              </div>
              <!--end::User-->
            </div>
            <!--end::Title-->
            <!--begin::Stats-->
            <div class="d-flex flex-wrap flex-stack">
              <!--begin::Wrapper-->
              <div class="d-flex flex-column flex-grow-1 pe-8">
                <!--begin::Stats-->
                <div class="d-flex flex-wrap">
                  <!--begin::Stat-->
                  <div
                      class="
                      border border-gray-300 border-dashed
                      rounded
                      min-w-125px
                      py-3
                      px-4
                      me-6
                      mb-3
                    "
                  >
                    <!--begin::Number-->
                    <div class="d-flex align-items-center">
                      <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                      <span class="svg-icon svg-icon-3 svg-icon-success me-2">
                        <svg
                            height="24px"
                            version="1.1"
                            viewBox="0 0 24 24"
                            width="24px"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                          <g
                              fill="none"
                              fill-rule="evenodd"
                              stroke="none"
                              stroke-width="1"
                          >
                            <rect height="24" width="24" x="0" y="0"/>
                            <path
                                d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                                fill="currentColor"
                                fill-rule="nonzero"
                                opacity="0.3"
                            />
                            <path
                                d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                                fill="currentColor"
                                fill-rule="nonzero"
                            />
                          </g>
                        </svg>
                      </span>
                      <!--end::Svg Icon-->
                      <div class="fs-2 fw-bolder">
                        {{ user.question }}
                      </div>
                    </div>
                    <!--end::Number-->
                    <!--begin::Label-->
                    <div class="fw-bold fs-6 text-gray-400">Sorularım</div>
                    <!--end::Label-->
                  </div>
                  <!--end::Stat-->
                  <!--begin::Stat-->
                  <div
                      class="
                      border border-gray-300 border-dashed
                      rounded
                      min-w-125px
                      py-3
                      px-4
                      me-6
                      mb-3
                    "
                  >
                    <!--begin::Number-->
                    <div class="d-flex align-items-center">
                      <!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
                      <span class="svg-icon svg-icon-3 svg-icon-danger me-2">
                        <svg
                            height="24px"
                            version="1.1"
                            viewBox="0 0 24 24"
                            width="24px"
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                        >
                          <g
                              fill="none"
                              fill-rule="evenodd"
                              stroke="none"
                              stroke-width="1"
                          >
                            <polygon points="0 0 24 0 24 24 0 24"/>
                            <path
                                d="M12,4.25932872 C12.1488635,4.25921584 12.3000368,4.29247316 12.4425657,4.36281539 C12.6397783,4.46014562 12.7994058,4.61977315 12.8967361,4.81698575 L14.9389263,8.95491503 L19.5054023,9.61846284 C20.0519472,9.69788046 20.4306287,10.2053233 20.351211,10.7518682 C20.3195865,10.9695052 20.2170993,11.1706476 20.0596157,11.3241562 L16.7552826,14.545085 L17.5353298,19.0931094 C17.6286908,19.6374458 17.263103,20.1544017 16.7187666,20.2477627 C16.5020089,20.2849396 16.2790408,20.2496249 16.0843804,20.1472858 L12,18 L12,4.25932872 Z"
                                fill="currentColor"
                                opacity="0.3"
                            />
                            <path
                                d="M12,4.25932872 L12,18 L7.91561963,20.1472858 C7.42677504,20.4042866 6.82214789,20.2163401 6.56514708,19.7274955 C6.46280801,19.5328351 6.42749334,19.309867 6.46467018,19.0931094 L7.24471742,14.545085 L3.94038429,11.3241562 C3.54490071,10.938655 3.5368084,10.3055417 3.92230962,9.91005817 C4.07581822,9.75257453 4.27696063,9.65008735 4.49459766,9.61846284 L9.06107374,8.95491503 L11.1032639,4.81698575 C11.277344,4.464261 11.6315987,4.25960807 12,4.25932872 Z"
                                fill="currentColor"
                            />
                          </g>
                        </svg>
                      </span>
                      <!--end::Svg Icon-->
                      <div class="fs-2 fw-bolder">
                        {{ user.answer }}
                      </div>
                    </div>
                    <!--end::Number-->
                    <!--begin::Label-->
                    <div class="fw-bold fs-6 text-gray-400">Cevaplarım</div>
                    <!--end::Label-->
                  </div>
                  <!--end::Stat-->
                </div>
                <!--end::Stats-->
              </div>
              <!--end::Wrapper-->
            </div>
            <!--end::Stats-->
          </div>
          <!--end::Info-->
        </div>
        <!--end::Details-->
      </div>
    </div>
    <!--end::Navbar-->
    <!--begin::Basic info-->
    <div class="card mb-5 mb-xl-10">
      <!--begin::Card header-->
      <div
          aria-controls="kt_account_profile_details"
          aria-expanded="true"
          class="card-header border-0 cursor-pointer"
          data-bs-target="#kt_account_profile_details"
          data-bs-toggle="collapse"
          role="button"
      >
        <!--begin::Card title-->
        <div class="card-title m-0">
          <h3 class="fw-bolder m-0">Kullancı Bilgilerim</h3>
        </div>
        <!--end::Card title-->
      </div>
      <!--begin::Card header-->
      <!--begin::Content-->
      <div id="kt_account_settings_profile_details" class="collapse show">
        <!--begin::Form-->
        <form id="kt_account_profile_details_form" class="form" @submit="updateProfileInformation">
          <!--begin::Card body-->
          <div class="card-body border-top p-9">
            <!--begin::Input group-->
            <div class="row mb-6">
              <!--begin::Label-->
              <label class="col-lg-4 col-form-label fw-bold fs-6">Resim</label>
              <!--end::Label-->
              <!--begin::Col-->
              <div class="col-lg-8">
                <!--begin::Image input-->
                <div
                    class="image-input image-input-outline"
                    data-kt-image-input="true"
                    style="
                    background-image: url(../assets/media/svg/avatars/blank.svg);
                  "
                >
                  <!--begin::Preview existing avatar-->
                  <div
                      :style="{backgroundImage: `url(${inform.photo})`}

                    "
                      class="image-input-wrapper w-125px h-125px"
                  ></div>
                  <!--end::Preview existing avatar-->
                  <!--begin::Label-->
                  <label
                      class="
                      btn btn-icon btn-circle btn-active-color-primary
                      w-25px
                      h-25px
                      bg-body
                      shadow
                    "
                      data-bs-toggle="tooltip"
                      data-kt-image-input-action="change"
                      title="Change avatar"
                  >
                    <i class="bi bi-pencil-fill fs-7"></i>
                    <!--begin::Inputs-->
                    <input
                        accept=".png, .jpg, .jpeg"
                        type="file"
                        @change="onImageChoose"
                    />
                    <input name="avatar_remove" type="hidden"/>
                    <!--end::Inputs-->
                  </label>
                  <!--end::Label-->
                  <!--begin::Cancel-->
                  <span
                      class="
                      btn btn-icon btn-circle btn-active-color-primary
                      w-25px
                      h-25px
                      bg-body
                      shadow
                    "
                      data-bs-toggle="tooltip"
                      data-kt-image-input-action="cancel"
                      title="Cancel avatar"
                  >
                    <i class="bi bi-x fs-2"></i>
                  </span>
                  <!--end::Cancel-->
                  <!--begin::Remove-->
                  <span
                      class="
                      btn btn-icon btn-circle btn-active-color-primary
                      w-25px
                      h-25px
                      bg-body
                      shadow
                    "
                      data-bs-toggle="tooltip"
                      data-kt-image-input-action="remove"
                      title="Remove avatar"
                  >
                    <i class="bi bi-x fs-2"></i>
                  </span>
                  <!--end::Remove-->
                </div>
                <!--end::Image input-->
                <!--begin::Hint-->
                <div class="form-text">
                  İzin verilen dosya türleri : png, jpg, jpeg.
                </div>
                <!--end::Hint-->
              </div>
              <!--end::Col-->
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="row mb-6">
              <!--begin::Label-->
              <label class="col-lg-4 col-form-label required fw-bold fs-6"
              >Ad Soyad</label
              >
              <!--end::Label-->
              <!--begin::Col-->
              <div class="col-lg-8 fv-row">
                <input
                    v-model="inform.name"
                    class="
                    form-control form-control-lg form-control-solid
                    mb-3 mb-lg-0
                  "
                    placeholder="First name"
                    type="text"
                />
                <div v-if="infoErrorMsg"
                     :class="[infoErrorMsg.name?'fv-plugins-message-container invalid-feedback mb-3':'']">
                  {{ infoErrorMsg.name ? infoErrorMsg.name[0] : null }}
                </div>
                <!--end::Row-->
              </div>
              <!--end::Col-->
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="row mb-6">
              <!--begin::Label-->
              <label class="col-lg-4 col-form-label fw-bold fs-6">
                <span class="required">İletişim Telefon</span>
                <i
                    class="fas fa-exclamation-circle ms-1 fs-7"
                    data-bs-toggle="tooltip"
                    title="Telefon numarası aktif olmalı"
                ></i>
              </label>
              <!--end::Label-->
              <!--begin::Col-->
              <div class="col-lg-8 fv-row">
                <input
                    v-model="inform.telephone"
                    class="form-control form-control-lg form-control-solid"
                    placeholder="Phone number"
                    type="tel"
                />
                <div v-if="infoErrorMsg"
                     :class="[infoErrorMsg.telephone?'fv-plugins-message-container invalid-feedback mb-3':'']">
                  {{ infoErrorMsg.telephone ? infoErrorMsg.telephone[0] : null }}
                </div>
              </div>
              <!--end::Col-->
            </div>
            <!--end::Input group-->
          </div>
          <!--end::Card body-->
          <!--begin::Actions-->
          <div class="card-footer d-flex justify-content-end py-6 px-9">
            <button
                class="btn btn-light btn-active-light-primary me-2"
                type="reset"
            >
              Vazgeç
            </button>
            <button
                id="kt_account_profile_details_submit"
                class="btn btn-primary"
                type="submit"
            >
               <span v-if="infoLoading" class="indicator-progress"
               >Lüften Bekleyin ...
            <span
                class="spinner-border spinner-border-sm align-middle ms-2"
            >
            </span> </span>
              <span v-else> Değişiklikleri Kaydet</span>

            </button>
          </div>
          <!--end::Actions-->
        </form>
        <!--end::Form-->
      </div>
      <!--end::Content-->
    </div>
    <!--end::Basic info-->
    <!--begin::Sign-in Method-->
    <div class="card mb-5 mb-xl-10">
      <!--begin::Card header-->
      <div
          class="card-header border-0 cursor-pointer"
          data-bs-target="#kt_account_signin_method"
          data-bs-toggle="collapse"
          role="button"
      >
        <div class="card-title m-0">
          <h3 class="fw-bolder m-0">Giriş Bilgilerim</h3>
        </div>
      </div>
      <!--end::Card header-->
      <!--begin::Content-->
      <div id="kt_account_settings_signin_method" class="collapse show">
        <!--begin::Card body-->
        <div class="card-body border-top p-9">
          <!--begin::Email Address-->
          <div class="d-flex flex-wrap align-items-center">
            <!--begin::Label-->
            <div id="kt_signin_email">
              <div class="fs-6 fw-bolder mb-1">E-posta</div>
              <div class="fw-bold text-gray-600">{{ inform.email }}</div>
            </div>
            <!--end::Label-->
            <!--begin::Edit-->
            <div id="kt_signin_email_edit" class="flex-row-fluid d-none">
              <!--begin::Form-->
              <form id="kt_signin_change_email"
                    class="form"
                    novalidate="novalidate"
                    @submit="updateProfileEmail"
              >
                <div class="row mb-6">
                  <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="fv-row mb-0">
                      <label
                          class="form-label fs-6 fw-bolder mb-3"
                          for="emailaddress"
                      >Yeni E-posta Adresi Girin</label
                      >
                      <input
                          id="emailaddress"
                          v-model="inform.email"
                          class="form-control form-control-lg form-control-solid"
                          placeholder="Email Address"
                          type="email"
                      />
                      <div v-if="emailErrorMsg"
                           :class="[emailErrorMsg.email?'fv-plugins-message-container invalid-feedback mb-3':'']">
                        {{ emailErrorMsg.email ? emailErrorMsg.email[0] : null }}
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="fv-row mb-0">
                      <label
                          class="form-label fs-6 fw-bolder mb-3"
                          for="confirmemailpassword"
                      >Şifreyi Onayla</label
                      >
                      <input
                          id="confirmemailpassword"
                          v-model="inform.password"
                          class="form-control form-control-lg form-control-solid"
                          type="password"
                      />
                      <div v-if="emailErrorMsg"
                           :class="[emailErrorMsg.password?'fv-plugins-message-container invalid-feedback mb-3':'']">
                        {{ emailErrorMsg.password ? emailErrorMsg.password[0] : null }}
                      </div>
                    </div>
                  </div>
                </div>
                <div class="d-flex">
                  <button
                      class="btn btn-primary me-2 px-6"
                      type="submit"
                  >
                      <span v-if="emailLoading" class="indicator-progress"
                      >Lüften Bekleyin ...
            <span
                class="spinner-border spinner-border-sm align-middle ms-2"
            >
            </span> </span>
                    <span v-else> E-postayı Güncelle</span>

                  </button>
                  <button
                      id="kt_signin_cancel"
                      class="btn btn-color-gray-400 btn-active-light-primary px-6"
                      type="button"
                  >
                    İptal
                  </button>
                </div>
              </form>
              <!--end::Form-->
            </div>
            <!--end::Edit-->
            <!--begin::Action-->
            <div id="kt_signin_email_button" class="ms-auto">
              <button class="btn btn-light btn-active-light-primary">
                E-posta adresini değiştir
              </button>
            </div>
            <!--end::Action-->
          </div>
          <!--end::Email Address-->
          <!--begin::Separator-->
          <div class="separator separator-dashed my-6"></div>
          <!--end::Separator-->
          <!--begin::Password-->
          <div class="d-flex flex-wrap align-items-center mb-10">
            <!--begin::Label-->
            <div id="kt_signin_password">
              <div class="fs-6 fw-bolder mb-1">Şifre</div>
              <div class="fw-bold text-gray-600">************</div>
            </div>
            <!--end::Label-->
            <!--begin::Edit-->
            <div id="kt_signin_password_edit" class="flex-row-fluid d-none">
              <!--begin::Form-->
              <form
                  id="kt_signin_change_password"
                  class="form"
                  novalidate="novalidate"
                  @submit="updateProfilePassword"
              >
                <div class="row mb-1">
                  <div class="col-lg-4">
                    <div class="fv-row mb-0">
                      <label
                          class="form-label fs-6 fw-bolder mb-3"
                          for="currentpassword"
                      >Mevcut Şifre</label
                      >
                      <input
                          id="currentpassword"
                          v-model="inform.password"
                          class="form-control form-control-lg form-control-solid"
                          type="password"
                      />
                      <div v-if="passwordErrorMsg"
                           :class="[passwordErrorMsg.password?'fv-plugins-message-container invalid-feedback mb-3':'']">
                        {{ passwordErrorMsg.password ? passwordErrorMsg.password[0] : null }}
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="fv-row mb-0">
                      <label
                          class="form-label fs-6 fw-bolder mb-3"
                          for="newpassword"
                      >Yeni Şifre</label
                      >
                      <input
                          id="newpassword"
                          v-model="inform.new_password"
                          class="form-control form-control-lg form-control-solid"
                          type="password"
                      />
                      <div v-if="passwordErrorMsg"
                           :class="[passwordErrorMsg.new_password?'fv-plugins-message-container invalid-feedback mb-3':'']">
                        {{ passwordErrorMsg.new_password ? passwordErrorMsg.new_password[0] : null }}
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="fv-row mb-0">
                      <label
                          class="form-label fs-6 fw-bolder mb-3"
                          for="confirmpassword"
                      >Yeni şifreyi onayla</label
                      >
                      <input
                          id="confirmpassword"
                          v-model="inform.password_confirmation"
                          class="form-control form-control-lg form-control-solid"
                          type="password"
                      />
                    </div>
                  </div>
                </div>
                <div class="form-text mb-5">
                  Şifre en az 8 karakter olmalı ve semboller içermelidir
                </div>
                <div class="d-flex">
                  <button
                      class="btn btn-primary me-2 px-6"
                      type="submit"
                  >
                        <span v-if="passwordLoading" class="indicator-progress"
                        >Lüften Bekleyin ...
            <span
                class="spinner-border spinner-border-sm align-middle ms-2"
            >
            </span> </span>
                    <span v-else>Şifreyi güncelle</span>

                  </button>
                  <button
                      id="kt_password_cancel"
                      class="btn btn-color-gray-400 btn-active-light-primary px-6"
                      type="button"
                  >
                    İptal
                  </button>
                </div>
              </form>
              <!--end::Form-->
            </div>
            <!--end::Edit-->
            <!--begin::Action-->
            <div id="kt_signin_password_button" class="ms-auto">
              <button class="btn btn-light btn-active-light-primary">

                Şifreyi yenile
              </button>
            </div>
            <!--end::Action-->
          </div>
          <!--end::Password-->
        </div>
        <!--end::Card body-->
      </div>
      <!--end::Content-->
    </div>
    <!--end::Sign-in Method-->
    <!--    &lt;!&ndash;begin::Notifications&ndash;&gt;-->
    <!--    <div class="card mb-5 mb-xl-10">-->
    <!--      &lt;!&ndash;begin::Card header&ndash;&gt;-->
    <!--      <div-->
    <!--          aria-controls="kt_account_email_preferences"-->
    <!--          aria-expanded="true"-->
    <!--          class="card-header border-0 cursor-pointer"-->
    <!--          data-bs-target="#kt_account_email_preferences"-->
    <!--          data-bs-toggle="collapse"-->
    <!--          role="button"-->
    <!--      >-->
    <!--        <div class="card-title m-0">-->
    <!--          <h3 class="fw-bolder m-0">E-posta Tercihleri</h3>-->
    <!--        </div>-->
    <!--      </div>-->
    <!--      &lt;!&ndash;begin::Card header&ndash;&gt;-->
    <!--      &lt;!&ndash;begin::Content&ndash;&gt;-->
    <!--      <div id="kt_account_settings_email_preferences" class="collapse show">-->
    <!--        &lt;!&ndash;begin::Form&ndash;&gt;-->
    <!--        <form class="form">-->
    <!--          &lt;!&ndash;begin::Card body&ndash;&gt;-->
    <!--          <div class="card-body border-top px-9 py-9">-->
    <!--            &lt;!&ndash;begin::Option&ndash;&gt;-->
    <!--            <label-->
    <!--                class="-->
    <!--                form-check form-check-custom form-check-solid-->
    <!--                align-items-start-->
    <!--              "-->
    <!--            >-->
    <!--              &lt;!&ndash;begin::Input&ndash;&gt;-->
    <!--              <input-->
    <!--                  class="form-check-input me-3"-->
    <!--                  name="email-preferences[]"-->
    <!--                  type="checkbox"-->
    <!--                  value="1"-->
    <!--              />-->
    <!--              &lt;!&ndash;end::Input&ndash;&gt;-->
    <!--              &lt;!&ndash;begin::Label&ndash;&gt;-->
    <!--              <span-->
    <!--                  class="form-check-label d-flex flex-column align-items-start"-->
    <!--              >-->
    <!--                <span class="fw-bolder fs-5 mb-0">Sorunuza cevap</span>-->
    <!--                <span class="text-muted fs-6"-->
    <!--                >Sorunuza verilen her cevap için bir bildirim alın</span-->
    <!--                >-->
    <!--              </span>-->
    <!--              &lt;!&ndash;end::Label&ndash;&gt;-->
    <!--            </label>-->
    <!--            &lt;!&ndash;end::Option&ndash;&gt;-->
    <!--            &lt;!&ndash;begin::Option&ndash;&gt;-->
    <!--            <div class="separator separator-dashed my-6"></div>-->
    <!--            &lt;!&ndash;end::Option&ndash;&gt;-->
    <!--            &lt;!&ndash;begin::Option&ndash;&gt;-->
    <!--            <label-->
    <!--                class="-->
    <!--                form-check form-check-custom form-check-solid-->
    <!--                align-items-start-->
    <!--              "-->
    <!--            >-->
    <!--              &lt;!&ndash;begin::Input&ndash;&gt;-->
    <!--              <input-->
    <!--                  checked="checked"-->
    <!--                  class="form-check-input me-3"-->
    <!--                  name="email-preferences[]"-->
    <!--                  type="checkbox"-->
    <!--                  value="1"-->
    <!--              />-->
    <!--              &lt;!&ndash;end::Input&ndash;&gt;-->
    <!--              &lt;!&ndash;begin::Label&ndash;&gt;-->
    <!--              <span-->
    <!--                  class="form-check-label d-flex flex-column align-items-start"-->
    <!--              >-->
    <!--                <span class="fw-bolder fs-5 mb-0">Soruyu takip et</span>-->
    <!--                <span class="text-muted fs-6"-->
    <!--                >Bir soruya verdiğiniz yanıttan sonra her yanıtla birlikte bir-->
    <!--                  bildirim alın</span-->
    <!--                >-->
    <!--              </span>-->
    <!--              &lt;!&ndash;end::Label&ndash;&gt;-->
    <!--            </label>-->
    <!--            &lt;!&ndash;end::Option&ndash;&gt;-->
    <!--            &lt;!&ndash;begin::Option&ndash;&gt;-->
    <!--            <div class="separator separator-dashed my-6"></div>-->
    <!--            &lt;!&ndash;end::Option&ndash;&gt;-->
    <!--            &lt;!&ndash;begin::Option&ndash;&gt;-->
    <!--            <label-->
    <!--                class="-->
    <!--                form-check form-check-custom form-check-solid-->
    <!--                align-items-start-->
    <!--              "-->
    <!--            >-->
    <!--              &lt;!&ndash;begin::Input&ndash;&gt;-->
    <!--              <input-->
    <!--                  class="form-check-input me-3"-->
    <!--                  name="email-preferences[]"-->
    <!--                  type="checkbox"-->
    <!--                  value="1"-->
    <!--              />-->
    <!--              &lt;!&ndash;end::Input&ndash;&gt;-->
    <!--              &lt;!&ndash;begin::Label&ndash;&gt;-->
    <!--              <span-->
    <!--                  class="form-check-label d-flex flex-column align-items-start"-->
    <!--              >-->
    <!--                <span class="fw-bolder fs-5 mb-0">Beğenme</span>-->
    <!--                <span class="text-muted fs-6"-->
    <!--                >Sorularınız veya cevaplarınız için her beğeni ile bir-->
    <!--                  bildirim alın</span-->
    <!--                >-->
    <!--              </span>-->
    <!--              &lt;!&ndash;end::Label&ndash;&gt;-->
    <!--            </label>-->
    <!--            &lt;!&ndash;end::Option&ndash;&gt;-->
    <!--          </div>-->
    <!--          &lt;!&ndash;end::Card body&ndash;&gt;-->
    <!--          &lt;!&ndash;begin::Card footer&ndash;&gt;-->
    <!--          <div class="card-footer d-flex justify-content-end py-6 px-9">-->
    <!--            <button class="btn btn-light btn-active-light-primary me-2">-->
    <!--              Vazgeç-->
    <!--            </button>-->
    <!--            <button class="btn btn-primary px-6">-->
    <!--               <span v-if="loading" class="indicator-progress"-->
    <!--               >Lüften Bekleyin ...-->
    <!--            <span-->
    <!--                class="spinner-border spinner-border-sm align-middle ms-2"-->
    <!--            >-->
    <!--            </span> </span>-->
    <!--              <span v-else>Değisiklikleri kaydet</span>-->
    <!--            </button>-->
    <!--          </div>-->
    <!--          &lt;!&ndash;end::Card footer&ndash;&gt;-->
    <!--        </form>-->
    <!--        &lt;!&ndash;end::Form&ndash;&gt;-->
    <!--      </div>-->
    <!--      &lt;!&ndash;end::Content&ndash;&gt;-->
    <!--    </div>-->
    <!--    &lt;!&ndash;end::Notifications&ndash;&gt;-->
    <!--begin::Deactivate Account-->
    <div class="card">
      <!--begin::Card header-->
      <div
          aria-controls="kt_account_deactivate"
          aria-expanded="true"
          class="card-header border-0 cursor-pointer"
          data-bs-target="#kt_account_deactivate"
          data-bs-toggle="collapse"
          role="button"
      >
        <div class="card-title m-0">
          <h3 class="fw-bolder m-0">hesabımı sil</h3>
        </div>
      </div>
      <!--end::Card header-->
      <!--begin::Content-->
      <div id="kt_account_settings_deactivate" class="collapse show">
        <!--begin::Form-->
        <form id="kt_account_deactivate_form" class="form">
          <!--begin::Card body-->
          <div class="card-body border-top p-9">
            <!--begin::Notice-->
            <div
                class="
                notice
                d-flex
                bg-light-warning
                rounded
                border-warning border border-dashed
                mb-9
                p-6
              "
            >
              <!--begin::Icon-->
              <!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
              <span class="svg-icon svg-icon-2tx svg-icon-warning me-4">
                <svg
                    fill="none"
                    height="24"
                    viewBox="0 0 24 24"
                    width="24"
                    xmlns="http://www.w3.org/2000/svg"
                >
                  <rect
                      fill="currentColor"
                      height="20"
                      opacity="0.3"
                      rx="10"
                      width="20"
                      x="2"
                      y="2"
                  />
                  <rect
                      fill="currentColor"
                      height="2"
                      rx="1"
                      transform="rotate(-90 11 14)"
                      width="7"
                      x="11"
                      y="14"
                  />
                  <rect
                      fill="currentColor"
                      height="2"
                      rx="1"
                      transform="rotate(-90 11 17)"
                      width="2"
                      x="11"
                      y="17"
                  />
                </svg>
              </span>
              <!--end::Svg Icon-->
              <!--end::Icon-->
              <!--begin::Wrapper-->
              <div class="d-flex flex-stack flex-grow-1">
                <!--begin::Content-->
                <div class="fw-bold">
                  <h4 class="text-gray-900 fw-bolder">
                    Hesabınızı Siliyorsunuz
                  </h4>
                  <div class="fs-6 text-gray-700">
                    Sorularınız, cevaplarınız ve beğenileriniz kalıcı olarak
                    silinecek
                    <br/>
                  </div>
                </div>
                <!--end::Content-->
              </div>
              <!--end::Wrapper-->
            </div>
            <!--end::Notice-->
            <!--begin::Form input row-->
            <div class="form-check form-check-solid fv-row">
              <input
                  id="deactivate"
                  class="form-check-input"
                  name="deactivate"
                  type="checkbox"
                  value=""
              />
              <label class="form-check-label fw-bold ps-2 fs-6" for="deactivate"
              >Hesabımın silinmesini onaylıyorum</label
              >
            </div>
            <!--end::Form input row-->
          </div>
          <!--end::Card body-->
          <!--begin::Card footer-->
          <div class="card-footer d-flex justify-content-end py-6 px-9">
            <button
                id="kt_account_deactivate_account_submit"
                class="btn btn-danger fw-bold"
                type="submit"
            >
              Hesabı sil
            </button>
          </div>
          <!--end::Card footer-->
        </form>
        <!--end::Form-->
      </div>
      <!--end::Content-->
    </div>
    <!--end::Deactivate Account-->
    <!--begin::Modals-->
    <!--end::Modals-->
  </div>
  <!--end::Post-->

  <!--end::Wrapper-->
</template>
<script setup>

import {computed, ref, watch} from "vue";
import {useStore} from "vuex";


const store = useStore();
store.dispatch("getProfileData");

let inform = ref({
  name: '',
  telephone: '',
  photo: null,
  email: '',
  password: '',
  new_password: '',
  password_confirmation: ''
})
let infoLoading = ref(false)
let emailLoading = ref(false)
let passwordLoading = ref(false)

const infoErrorMsg = ref({})
const emailErrorMsg = ref({})
const passwordErrorMsg = ref({})

watch(
    () => store.state.userProfile.data,
    (newVal, oldVal) => {
      inform.value = {
        ...JSON.parse(JSON.stringify(newVal)),
      };
    }
);

const user = computed(() => store.state.userProfile.data);

function onImageChoose(ev) {
  const file = ev.target.files[0];
  const reader = new FileReader();
  reader.onload = () => {
    // The field to send on a backend and apply validations
    inform.value.photo = reader.result;
  };
  reader.readAsDataURL(file);
}

function updateProfileInformation(ev) {
  ev.preventDefault();
  infoLoading.value = true;
  const data = {
    name: inform.value.name,
    telephone: inform.value.telephone,
    photo: inform.value.photo
  }
  store.dispatch('updateProfile', data).then((res) => {
    infoLoading.value = false;
    infoErrorMsg.value = {};
    store.dispatch('getProfileData')
  }).catch((err) => {
    infoLoading.value = false;
    if (err.response.status === 422) {
      infoErrorMsg.value = err.response.data.errors;
    }
  })
}

function updateProfileEmail(ev) {
  ev.preventDefault();
  emailLoading.value = true;
  const data = {
    email: inform.value.email, password: inform.value.password
  }
  store.dispatch('updateEmail', data).then((res) => {
    emailLoading.value = false;
    emailErrorMsg.value = {};
    store.dispatch('getProfileData')
  }).catch((err) => {
    emailLoading.value = false;
    if (err.response.status === 422) {
      emailErrorMsg.value = err.response.data.errors;
    }
  })
}

function updateProfilePassword(ev) {
  ev.preventDefault();
  passwordLoading.value = true;
  const data = {
    password: inform.value.password,
    new_password: inform.value.new_password,
    new_password_confirmation: inform.value.password_confirmation
  }
  store.dispatch('updatePassword', data).then((res) => {
    passwordLoading.value = false;
    passwordErrorMsg.value = {};
    store.dispatch('getProfileData')
  }).catch((err) => {
    passwordLoading.value = false;
    if (err.response.status === 422) {
      passwordErrorMsg.value = err.response.data.errors;
    }
  })
}


</script>