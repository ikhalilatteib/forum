<template>
  <div>
    <div class="d-flex flex-column flex-root">
      <!--begin::Page-->
      <div class="page d-flex flex-column flex-column-fluid">
        <!--begin::Header-->
        <div id="kt_header" class="header align-items-stretch">
          <!--begin::Container-->
          <div class="container-xxl d-flex align-items-stretch justify-content-between">
            <!--begin::Brand-->
            <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0 w-lg-225px me-5">
              <!--begin::Aside mobile toggle-->
              <div id="kt_aside_toggle" class="btn btn-icon btn-active-icon-primary ms-n2 me-2 d-flex d-lg-none">
                <!--begin::Svg Icon | path: icons/duo tune/abstract/abs015.svg-->
                <span class="svg-icon svg-icon-1">
                  <svg fill="none" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z"
                      fill="currentColor" />
                    <path
                      d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z"
                      fill="currentColor" opacity="0.3" />
                  </svg>
                </span>
                <!--end::Svg Icon-->
              </div>
              <!--end::Aside mobile toggle-->
              <!--begin::Logo-->
              <router-link :to="{ name: 'Dashboard' }">
                <img alt="Logo" class="d-none d-lg-inline h-65px" src="../assets/media/logos/bseu_bm_logo.png" />
                <img alt="Logo" class="d-lg-none h-30px" src="../assets/media/logos/bseu_bm_logo.png" />
              </router-link>
              <!--end::Logo-->
            </div>
            <!--end::Brand-->
            <!--begin::Wrapper-->
            <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
              <!--begin::Navbar-->
              <div id="kt_header_nav" class="d-flex align-items-stretch">
                <!--begin::Menu wrapper-->
                <div class="header-menu align-items-stretch" data-kt-drawer="true"
                  data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-direction="end"
                  data-kt-drawer-name="header-menu" data-kt-drawer-overlay="true"
                  data-kt-drawer-toggle="#kt_header_menu_mobile_toggle"
                  data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-swapper="true"
                  data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}">

                </div>
                <!--end::Menu wrapper-->
              </div>
              <!--end::Navbar-->
              <!--begin::Toolbar wrapper-->
              <div class="d-flex align-items-stretch flex-shrink-0">

                <!--begin::Notifications-->
                <div id="kt_header_n_menu_toggle" class="d-flex align-items-center ms-1 ms-lg-2">
                  <!--begin::Menu- wrapper-->
                  <div
                    class="btn btn-icon btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px position-relative"
                    data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end" data-kt-menu-trigger="click">
                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs038.svg-->
                    <span class="svg-icon svg-icon-1">
                      <svg fill="none" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M12.0444 17.9444V12.1444L17.0444 15.0444C18.6444 15.9444 19.1445 18.0444 18.2445 19.6444C17.3445 21.2444 15.2445 21.7444 13.6445 20.8444C12.6445 20.2444 12.0444 19.1444 12.0444 17.9444ZM7.04445 15.0444L12.0444 12.1444L7.04445 9.24445C5.44445 8.34445 3.44444 8.84445 2.44444 10.4444C1.54444 12.0444 2.04445 14.0444 3.64445 15.0444C4.74445 15.6444 6.04445 15.6444 7.04445 15.0444ZM12.0444 6.34444V12.1444L17.0444 9.24445C18.6444 8.34445 19.1445 6.24444 18.2445 4.64444C17.3445 3.04444 15.2445 2.54445 13.6445 3.44445C12.6445 4.04445 12.0444 5.14444 12.0444 6.34444Z"
                          fill="currentColor" />
                        <path
                          d="M7.04443 9.24445C6.04443 8.64445 5.34442 7.54444 5.34442 6.34444C5.34442 4.54444 6.84444 3.04443 8.64444 3.04443C10.4444 3.04443 11.9444 4.54444 11.9444 6.34444V12.1444L7.04443 9.24445ZM17.0444 15.0444C18.0444 15.6444 19.3444 15.6444 20.3444 15.0444C21.9444 14.1444 22.4444 12.0444 21.5444 10.4444C20.6444 8.84444 18.5444 8.34445 16.9444 9.24445L11.9444 12.1444L17.0444 15.0444ZM7.04443 15.0444C6.04443 15.6444 5.34442 16.7444 5.34442 17.9444C5.34442 19.7444 6.84444 21.2444 8.64444 21.2444C10.4444 21.2444 11.9444 19.7444 11.9444 17.9444V12.1444L7.04443 15.0444Z"
                          fill="currentColor" opacity="0.3" />
                      </svg>
                    </span>
                    <!--end::Svg Icon-->
                  </div>
                  <!--begin::Menu-->
                  <div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px" data-kt-menu="true">
                    <!--begin::Heading-->
                    <div class="d-flex flex-column bgi-no-repeat rounded-top">
                      <!--begin::Title-->
                      <h3 class="text-black fw-bold px-9 mt-10 mb-6">Notifications
                        <span class="fs-8 opacity-75 ps-3">24 reports</span>
                      </h3>
                      <!--end::Title-->
                      <!--begin::Tabs-->
                      <ul class="nav nav-line-tabs nav-line-tabs-2x nav-stretch fw-bold px-9">
                        <li class="nav-item">
                          <a class="nav-link text-black opacity-75 opacity-state-100 pb-4 active" data-bs-toggle="tab"
                            href="#kt_topbar_notifications_1">Alerts</a>
                        </li>
                      </ul>
                      <!--end::Tabs-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Tab content-->
                    <div class="tab-content">
                      <!--begin::Tab panel-->
                      <div id="kt_topbar_notifications_1" class="tab-pane fade active show" role="tabpanel">
                        <!--begin::Items-->
                        <div class="scroll-y mh-325px my-5 px-8">
                          <!--begin::Item-->
                          <div class="d-flex flex-stack py-4">
                            <!--begin::Section-->
                            <div class="d-flex align-items-center">
                              <!--begin::Symbol-->
                              <div class="symbol symbol-35px me-4">
                                <span class="symbol-label bg-light-primary">
                                  <!--begin::Svg Icon | path: icons/duotune/technology/teh008.svg-->
                                  <span class="svg-icon svg-icon-2 svg-icon-primary">
                                    <svg fill="none" height="24" viewBox="0 0 24 24" width="24"
                                      xmlns="http://www.w3.org/2000/svg">
                                      <path
                                        d="M11 6.5C11 9 9 11 6.5 11C4 11 2 9 2 6.5C2 4 4 2 6.5 2C9 2 11 4 11 6.5ZM17.5 2C15 2 13 4 13 6.5C13 9 15 11 17.5 11C20 11 22 9 22 6.5C22 4 20 2 17.5 2ZM6.5 13C4 13 2 15 2 17.5C2 20 4 22 6.5 22C9 22 11 20 11 17.5C11 15 9 13 6.5 13ZM17.5 13C15 13 13 15 13 17.5C13 20 15 22 17.5 22C20 22 22 20 22 17.5C22 15 20 13 17.5 13Z"
                                        fill="currentColor" opacity="0.3" />
                                      <path
                                        d="M17.5 16C17.5 16 17.4 16 17.5 16L16.7 15.3C16.1 14.7 15.7 13.9 15.6 13.1C15.5 12.4 15.5 11.6 15.6 10.8C15.7 9.99999 16.1 9.19998 16.7 8.59998L17.4 7.90002H17.5C18.3 7.90002 19 7.20002 19 6.40002C19 5.60002 18.3 4.90002 17.5 4.90002C16.7 4.90002 16 5.60002 16 6.40002V6.5L15.3 7.20001C14.7 7.80001 13.9 8.19999 13.1 8.29999C12.4 8.39999 11.6 8.39999 10.8 8.29999C9.99999 8.19999 9.20001 7.80001 8.60001 7.20001L7.89999 6.5V6.40002C7.89999 5.60002 7.19999 4.90002 6.39999 4.90002C5.59999 4.90002 4.89999 5.60002 4.89999 6.40002C4.89999 7.20002 5.59999 7.90002 6.39999 7.90002H6.5L7.20001 8.59998C7.80001 9.19998 8.19999 9.99999 8.29999 10.8C8.39999 11.5 8.39999 12.3 8.29999 13.1C8.19999 13.9 7.80001 14.7 7.20001 15.3L6.5 16H6.39999C5.59999 16 4.89999 16.7 4.89999 17.5C4.89999 18.3 5.59999 19 6.39999 19C7.19999 19 7.89999 18.3 7.89999 17.5V17.4L8.60001 16.7C9.20001 16.1 9.99999 15.7 10.8 15.6C11.5 15.5 12.3 15.5 13.1 15.6C13.9 15.7 14.7 16.1 15.3 16.7L16 17.4V17.5C16 18.3 16.7 19 17.5 19C18.3 19 19 18.3 19 17.5C19 16.7 18.3 16 17.5 16Z"
                                        fill="currentColor" />
                                    </svg>
                                  </span>
                                  <!--end::Svg Icon-->
                                </span>
                              </div>
                              <!--end::Symbol-->
                              <!--begin::Title-->
                              <div class="mb-0 me-2">
                                <a class="fs-6 text-gray-800 text-hover-primary fw-bolder" href="#">Project
                                  Alice</a>
                                <div class="text-gray-400 fs-7">Phase 1 development
                                </div>
                              </div>
                              <!--end::Title-->
                            </div>
                            <!--end::Section-->
                            <!--begin::Label-->
                            <span class="badge badge-light fs-8">1 hr</span>
                            <!--end::Label-->
                          </div>
                          <!--end::Item-->
                          <!--begin::Item-->
                          <div class="d-flex flex-stack py-4">
                            <!--begin::Section-->
                            <div class="d-flex align-items-center">
                              <!--begin::Symbol-->
                              <div class="symbol symbol-35px me-4">
                                <span class="symbol-label bg-light-danger">
                                  <!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
                                  <span class="svg-icon svg-icon-2 svg-icon-danger">
                                    <svg fill="none" height="24" viewBox="0 0 24 24" width="24"
                                      xmlns="http://www.w3.org/2000/svg">
                                      <rect fill="currentColor" height="20" opacity="0.3" rx="10" width="20" x="2"
                                        y="2" />
                                      <rect fill="currentColor" height="2" rx="1" transform="rotate(-90 11 14)"
                                        width="7" x="11" y="14" />
                                      <rect fill="currentColor" height="2" rx="1" transform="rotate(-90 11 17)"
                                        width="2" x="11" y="17" />
                                    </svg>
                                  </span>
                                  <!--end::Svg Icon-->
                                </span>
                              </div>
                              <!--end::Symbol-->
                              <!--begin::Title-->
                              <div class="mb-0 me-2">
                                <a class="fs-6 text-gray-800 text-hover-primary fw-bolder" href="#">HR
                                  Confidential</a>
                                <div class="text-gray-400 fs-7">Confidential staff
                                  documents
                                </div>
                              </div>
                              <!--end::Title-->
                            </div>
                            <!--end::Section-->
                            <!--begin::Label-->
                            <span class="badge badge-light fs-8">2 hrs</span>
                            <!--end::Label-->
                          </div>
                          <!--end::Item-->
                          <!--begin::Item-->
                          <div class="d-flex flex-stack py-4">
                            <!--begin::Section-->
                            <div class="d-flex align-items-center">
                              <!--begin::Symbol-->
                              <div class="symbol symbol-35px me-4">
                                <span class="symbol-label bg-light-warning">
                                  <!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
                                  <span class="svg-icon svg-icon-2 svg-icon-warning">
                                    <svg fill="none" height="24" viewBox="0 0 24 24" width="24"
                                      xmlns="http://www.w3.org/2000/svg">
                                      <path
                                        d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z"
                                        fill="currentColor" opacity="0.3" />
                                      <path
                                        d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z"
                                        fill="currentColor" />
                                    </svg>
                                  </span>
                                  <!--end::Svg Icon-->
                                </span>
                              </div>
                              <!--end::Symbol-->
                              <!--begin::Title-->
                              <div class="mb-0 me-2">
                                <a class="fs-6 text-gray-800 text-hover-primary fw-bolder" href="#">Company
                                  HR</a>
                                <div class="text-gray-400 fs-7">Corporeate staff
                                  profiles
                                </div>
                              </div>
                              <!--end::Title-->
                            </div>
                            <!--end::Section-->
                            <!--begin::Label-->
                            <span class="badge badge-light fs-8">5 hrs</span>
                            <!--end::Label-->
                          </div>
                          <!--end::Item-->
                          <!--begin::Item-->
                          <div class="d-flex flex-stack py-4">
                            <!--begin::Section-->
                            <div class="d-flex align-items-center">
                              <!--begin::Symbol-->
                              <div class="symbol symbol-35px me-4">
                                <span class="symbol-label bg-light-success">
                                  <!--begin::Svg Icon | path: icons/duotune/files/fil023.svg-->
                                  <span class="svg-icon svg-icon-2 svg-icon-success">
                                    <svg fill="none" height="24" viewBox="0 0 24 24" width="24"
                                      xmlns="http://www.w3.org/2000/svg">
                                      <path
                                        d="M5 15C3.3 15 2 13.7 2 12C2 10.3 3.3 9 5 9H5.10001C5.00001 8.7 5 8.3 5 8C5 5.2 7.2 3 10 3C11.9 3 13.5 4 14.3 5.5C14.8 5.2 15.4 5 16 5C17.7 5 19 6.3 19 8C19 8.4 18.9 8.7 18.8 9C18.9 9 18.9 9 19 9C20.7 9 22 10.3 22 12C22 13.7 20.7 15 19 15H5ZM5 12.6H13L9.7 9.29999C9.3 8.89999 8.7 8.89999 8.3 9.29999L5 12.6Z"
                                        fill="currentColor" opacity="0.3" />
                                      <path d="M17 17.4V12C17 11.4 16.6 11 16 11C15.4 11 15 11.4 15 12V17.4H17Z"
                                        fill="currentColor" />
                                      <path d="M12 17.4H20L16.7 20.7C16.3 21.1 15.7 21.1 15.3 20.7L12 17.4Z"
                                        fill="currentColor" opacity="0.3" />
                                      <path d="M8 12.6V18C8 18.6 8.4 19 9 19C9.6 19 10 18.6 10 18V12.6H8Z"
                                        fill="currentColor" />
                                    </svg>
                                  </span>
                                  <!--end::Svg Icon-->
                                </span>
                              </div>
                              <!--end::Symbol-->
                              <!--begin::Title-->
                              <div class="mb-0 me-2">
                                <a class="fs-6 text-gray-800 text-hover-primary fw-bolder" href="#">Project
                                  Redux</a>
                                <div class="text-gray-400 fs-7">New frontend admin
                                  theme
                                </div>
                              </div>
                              <!--end::Title-->
                            </div>
                            <!--end::Section-->
                            <!--begin::Label-->
                            <span class="badge badge-light fs-8">2 days</span>
                            <!--end::Label-->
                          </div>
                          <!--end::Item-->
                          <!--begin::Item-->
                          <div class="d-flex flex-stack py-4">
                            <!--begin::Section-->
                            <div class="d-flex align-items-center">
                              <!--begin::Symbol-->
                              <div class="symbol symbol-35px me-4">
                                <span class="symbol-label bg-light-primary">
                                  <!--begin::Svg Icon | path: icons/duotune/maps/map001.svg-->
                                  <span class="svg-icon svg-icon-2 svg-icon-primary">
                                    <svg fill="none" height="24" viewBox="0 0 24 24" width="24"
                                      xmlns="http://www.w3.org/2000/svg">
                                      <path d="M6 22H4V3C4 2.4 4.4 2 5 2C5.6 2 6 2.4 6 3V22Z" fill="currentColor"
                                        opacity="0.3" />
                                      <path
                                        d="M18 14H4V4H18C18.8 4 19.2 4.9 18.7 5.5L16 9L18.8 12.5C19.3 13.1 18.8 14 18 14Z"
                                        fill="currentColor" />
                                    </svg>
                                  </span>
                                  <!--end::Svg Icon-->
                                </span>
                              </div>
                              <!--end::Symbol-->
                              <!--begin::Title-->
                              <div class="mb-0 me-2">
                                <a class="fs-6 text-gray-800 text-hover-primary fw-bolder" href="#">Project
                                  Breafing</a>
                                <div class="text-gray-400 fs-7">Product launch status
                                  update
                                </div>
                              </div>
                              <!--end::Title-->
                            </div>
                            <!--end::Section-->
                            <!--begin::Label-->
                            <span class="badge badge-light fs-8">21 Jan</span>
                            <!--end::Label-->
                          </div>
                          <!--end::Item-->
                          <!--begin::Item-->
                          <div class="d-flex flex-stack py-4">
                            <!--begin::Section-->
                            <div class="d-flex align-items-center">
                              <!--begin::Symbol-->
                              <div class="symbol symbol-35px me-4">
                                <span class="symbol-label bg-light-info">
                                  <!--begin::Svg Icon | path: icons/duotune/general/gen006.svg-->
                                  <span class="svg-icon svg-icon-2 svg-icon-info">
                                    <svg fill="none" height="24" viewBox="0 0 24 24" width="24"
                                      xmlns="http://www.w3.org/2000/svg">
                                      <path
                                        d="M22 5V19C22 19.6 21.6 20 21 20H19.5L11.9 12.4C11.5 12 10.9 12 10.5 12.4L3 20C2.5 20 2 19.5 2 19V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5ZM7.5 7C6.7 7 6 7.7 6 8.5C6 9.3 6.7 10 7.5 10C8.3 10 9 9.3 9 8.5C9 7.7 8.3 7 7.5 7Z"
                                        fill="currentColor" opacity="0.3" />
                                      <path
                                        d="M19.1 10C18.7 9.60001 18.1 9.60001 17.7 10L10.7 17H2V19C2 19.6 2.4 20 3 20H21C21.6 20 22 19.6 22 19V12.9L19.1 10Z"
                                        fill="currentColor" />
                                    </svg>
                                  </span>
                                  <!--end::Svg Icon-->
                                </span>
                              </div>
                              <!--end::Symbol-->
                              <!--begin::Title-->
                              <div class="mb-0 me-2">
                                <a class="fs-6 text-gray-800 text-hover-primary fw-bolder" href="#">Banner
                                  Assets</a>
                                <div class="text-gray-400 fs-7">Collection of banner
                                  images
                                </div>
                              </div>
                              <!--end::Title-->
                            </div>
                            <!--end::Section-->
                            <!--begin::Label-->
                            <span class="badge badge-light fs-8">21 Jan</span>
                            <!--end::Label-->
                          </div>
                          <!--end::Item-->
                          <!--begin::Item-->
                          <div class="d-flex flex-stack py-4">
                            <!--begin::Section-->
                            <div class="d-flex align-items-center">
                              <!--begin::Symbol-->
                              <div class="symbol symbol-35px me-4">
                                <span class="symbol-label bg-light-warning">
                                  <!--begin::Svg Icon | path: icons/duotune/art/art002.svg-->
                                  <span class="svg-icon svg-icon-2 svg-icon-warning">
                                    <svg fill="none" height="25" viewBox="0 0 24 25" width="24"
                                      xmlns="http://www.w3.org/2000/svg">
                                      <path
                                        d="M8.9 21L7.19999 22.6999C6.79999 23.0999 6.2 23.0999 5.8 22.6999L4.1 21H8.9ZM4 16.0999L2.3 17.8C1.9 18.2 1.9 18.7999 2.3 19.1999L4 20.9V16.0999ZM19.3 9.1999L15.8 5.6999C15.4 5.2999 14.8 5.2999 14.4 5.6999L9 11.0999V21L19.3 10.6999C19.7 10.2999 19.7 9.5999 19.3 9.1999Z"
                                        fill="currentColor" opacity="0.3" />
                                      <path
                                        d="M21 15V20C21 20.6 20.6 21 20 21H11.8L18.8 14H20C20.6 14 21 14.4 21 15ZM10 21V4C10 3.4 9.6 3 9 3H4C3.4 3 3 3.4 3 4V21C3 21.6 3.4 22 4 22H9C9.6 22 10 21.6 10 21ZM7.5 18.5C7.5 19.1 7.1 19.5 6.5 19.5C5.9 19.5 5.5 19.1 5.5 18.5C5.5 17.9 5.9 17.5 6.5 17.5C7.1 17.5 7.5 17.9 7.5 18.5Z"
                                        fill="currentColor" />
                                    </svg>
                                  </span>
                                  <!--end::Svg Icon-->
                                </span>
                              </div>
                              <!--end::Symbol-->
                              <!--begin::Title-->
                              <div class="mb-0 me-2">
                                <a class="fs-6 text-gray-800 text-hover-primary fw-bolder" href="#">Icon
                                  Assets</a>
                                <div class="text-gray-400 fs-7">Collection of SVG
                                  icons
                                </div>
                              </div>
                              <!--end::Title-->
                            </div>
                            <!--end::Section-->
                            <!--begin::Label-->
                            <span class="badge badge-light fs-8">20 March</span>
                            <!--end::Label-->
                          </div>
                          <!--end::Item-->
                        </div>
                        <!--end::Items-->
                        <!--begin::View more-->
                        <div class="py-3 text-center border-top">
                          <a class="btn btn-color-gray-600 btn-active-color-primary"
                            href="../../demo5/dist/pages/user-profile/activity.html">View All
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                            <span class="svg-icon svg-icon-5">
                              <svg fill="none" height="24" viewBox="0 0 24 24" width="24"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect fill="currentColor" height="2" opacity="0.5" rx="1" transform="rotate(-180 18 13)"
                                  width="13" x="18" y="13" />
                                <path
                                  d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                  fill="currentColor" />
                              </svg>
                            </span>
                            <!--end::Svg Icon-->
                          </a>
                        </div>
                        <!--end::View more-->
                      </div>
                      <!--end::Tab panel-->
                    </div>
                    <!--end::Tab content-->
                  </div>
                  <!--end::Menu-->
                  <!--end::Menu wrapper-->
                </div>
                <!--end::Notifications-->


                <!--begin::User-->
                <div v-if="userToken" class="d-flex align-items-center ms-lg-5" id="kt_header_user_menu_toggle">
                  <!--begin::User info-->
                  <div class="btn btn-active-light d-flex align-items-center bg-hover-light py-2 px-2 px-md-3"
                    data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end" data-kt-menu-trigger="click">
                    <!--begin::Name-->
                    <div class="d-none d-md-flex flex-column align-items-end justify-content-center me-2">
                      <span class="text-muted fs-7 fw-bold lh-1 mb-2">Merhaba</span>
                      <span class="text-dark fs-base fw-bolder lh-1">{{ userData.name }}</span>
                    </div>
                    <!--end::Name-->
                    <!--begin::Symbol-->
                    <div class="symbol symbol-30px symbol-md-40px">
                      <img v-if="userData.photo" alt="image" :src="userData.photo" />
                      <div v-else class="symbol symbol-35px me-2">
                        <div class="symbol-label bg-light-success fs-3 fw-bold text-success text-uppercase">
                          {{ userData.name.charAt(0) }}
                        </div>
                      </div>
                    </div>
                    <!--end::Symbol-->
                  </div>
                  <!--end::User info-->
                  <!--begin::User account menu-->
                  <div
                    class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px"
                    data-kt-menu="true">
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                      <div class="menu-content d-flex align-items-center px-3">
                        <!--begin::Avatar-->
                        <div class="symbol symbol-50px me-5">
                          <img v-if="userData.photo" alt="image" :src="userData.photo" />
                          <div v-else class="symbol symbol-35px me-2">
                            <div class="symbol-label bg-light-success fs-3 fw-bold text-success text-uppercase">
                              {{ userData.name.charAt(0) }}
                            </div>
                          </div>
                        </div>
                        <!--end::Avatar-->
                        <!--begin::Username-->
                        <div class="d-flex flex-column">
                          <div class="fw-bolder d-flex align-items-center fs-5">{{ userData.name }}
                          </div>
                          <a class="fw-bold text-muted text-hover-primary fs-7" href="#">{{userData.email}}</a>
                        </div>
                        <!--end::Username-->
                      </div>
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu separator-->
                    <div class="separator my-2"></div>
                    <!--end::Menu separator-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-5">
                      <router-link class="menu-link px-5" :to="{name:'Profile'}">Hesabım</router-link>
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu separator-->
                    <div class="separator my-2"></div>
                    <!--end::Menu separator-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-5">
                      <a class="menu-link px-5" @click="logout">Çıkış Yap</a>
                    </div>
                    <!--end::Menu item-->
                  </div>
                  <!--end::User account menu-->
                </div>
                <!--end::User -->
                <!-- begin::User-->
                <div v-else class="d-flex align-items-center ms-lg-5">
                  <!--begin::User info-->
                  <router-link :to="{name:'Login'}" class="btn btn-active-light d-flex align-items-center bg-hover-light py-2 px-2 px-md-3"
                     data-kt-menu-placement="bottom-end" >
                    <!--begin::Name-->
                    <div class="d-none d-md-flex flex-column align-items-end justify-content-center me-2">
                      <span class="text-muted fs-7 fw-bold lh-1 mb-2">Hoşgeldiniz</span>
                      <span class="text-dark fs-base fw-bolder lh-1">Giriş Yapın</span>
                    </div>
                    <!--end::Name-->
                    <!--begin::Symbol-->
                    <div class="symbol symbol-30px symbol-md-40px">
                      <!--begin::Svg Icon | path: assets/media/icons/duo tune/technology/teh004.svg-->
                      <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg fill="none" height="24"
                          viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M21 10.7192H3C2.4 10.7192 2 11.1192 2 11.7192C2 12.3192 2.4 12.7192 3 12.7192H6V14.7192C6 18.0192 8.7 20.7192 12 20.7192C15.3 20.7192 18 18.0192 18 14.7192V12.7192H21C21.6 12.7192 22 12.3192 22 11.7192C22 11.1192 21.6 10.7192 21 10.7192Z"
                            fill="currentColor" opacity="0.3" />
                          <path
                            d="M11.6 21.9192C11.4 21.9192 11.2 21.8192 11 21.7192C10.6 21.4192 10.5 20.7191 10.8 20.3191C11.7 19.1191 12.3 17.8191 12.7 16.3191C12.8 15.8191 13.4 15.4192 13.9 15.6192C14.4 15.7192 14.8 16.3191 14.6 16.8191C14.2 18.5191 13.4 20.1192 12.4 21.5192C12.2 21.7192 11.9 21.9192 11.6 21.9192ZM8.7 19.7192C10.2 18.1192 11 15.9192 11 13.7192V8.71917C11 8.11917 11.4 7.71917 12 7.71917C12.6 7.71917 13 8.11917 13 8.71917V13.0192C13 13.6192 13.4 14.0192 14 14.0192C14.6 14.0192 15 13.6192 15 13.0192V8.71917C15 7.01917 13.7 5.71917 12 5.71917C10.3 5.71917 9 7.01917 9 8.71917V13.7192C9 15.4192 8.4 17.1191 7.2 18.3191C6.8 18.7191 6.9 19.3192 7.3 19.7192C7.5 19.9192 7.7 20.0192 8 20.0192C8.3 20.0192 8.5 19.9192 8.7 19.7192ZM6 16.7192C6.5 16.7192 7 16.2192 7 15.7192V8.71917C7 8.11917 7.1 7.51918 7.3 6.91918C7.5 6.41918 7.2 5.8192 6.7 5.6192C6.2 5.4192 5.59999 5.71917 5.39999 6.21917C5.09999 7.01917 5 7.81917 5 8.71917V15.7192V15.8191C5 16.3191 5.5 16.7192 6 16.7192ZM9 4.71917C9.5 4.31917 10.1 4.11918 10.7 3.91918C11.2 3.81918 11.5 3.21917 11.4 2.71917C11.3 2.21917 10.7 1.91916 10.2 2.01916C9.4 2.21916 8.59999 2.6192 7.89999 3.1192C7.49999 3.4192 7.4 4.11916 7.7 4.51916C7.9 4.81916 8.2 4.91918 8.5 4.91918C8.6 4.91918 8.8 4.81917 9 4.71917ZM18.2 18.9192C18.7 17.2192 19 15.5192 19 13.7192V8.71917C19 5.71917 17.1 3.1192 14.3 2.1192C13.8 1.9192 13.2 2.21917 13 2.71917C12.8 3.21917 13.1 3.81916 13.6 4.01916C15.6 4.71916 17 6.61917 17 8.71917V13.7192C17 15.3192 16.8 16.8191 16.3 18.3191C16.1 18.8191 16.4 19.4192 16.9 19.6192C17 19.6192 17.1 19.6192 17.2 19.6192C17.7 19.6192 18 19.3192 18.2 18.9192Z"
                            fill="currentColor" />
                        </svg></span>
                      <!--end::Svg Icon-->
                    </div>
                    <!--end::Symbol-->
                  </router-link>
                  <!--end::User info-->
                </div>
                <!--end::User -->
              </div>
              <!--end::Toolbar wrapper-->
            </div>
            <!--end::Wrapper-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::Header-->
        <!--begin::Container-->
        <div id="kt_content_container" class="d-flex flex-column-fluid align-items-stretch container-xxl">
          <!--begin::Aside-->
          <div id="kt_aside" class="aside" data-kt-drawer="true" data-kt-drawer-activate="{default: true, lg: false}"
            data-kt-drawer-direction="start" data-kt-drawer-name="aside" data-kt-drawer-overlay="true"
            data-kt-drawer-toggle="#kt_aside_toggle" data-kt-drawer-width="{default:'200px', '300px': '225px'}"
            data-kt-sticky="true" data-kt-sticky-animation="false" data-kt-sticky-left="auto"
            data-kt-sticky-name="aside-sticky" data-kt-sticky-offset="{default: false, lg: '1px'}"
            data-kt-sticky-top="94px" data-kt-sticky-width="{lg: '225px'}" data-kt-sticky-zindex="95">
            <!--begin::Aside nav-->
            <div id="kt_aside_menu_wrapper" class="hover-scroll-overlay-y my-5 my-lg-5 w-100 ps-4 ps-lg-0 pe-4 me-1"
              data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}"
              data-kt-scroll-dependencies="#kt_header" data-kt-scroll-height="auto" data-kt-scroll-offset="5px"
              data-kt-scroll-wrappers="#kt_aside">
              <!--begin::Menu-->
              <div id="#kt_aside_menu"
                class="menu menu-column menu-active-bg menu-hover-bg menu-title-gray-700 fs-6 menu-rounded w-100"
                data-kt-menu="true">
                <Publique :questions="questions" />

                <Activity v-if="userToken"  :question="userData.question" :answer="userData.answer"/>
                <Tags />
              </div>
              <!--end::Menu-->
            </div>
            <!--end::Aside nav-->
          </div>
          <!--end::Aside-->
          <!--begin::Wrapper-->
          <div id="kt_wrapper" class="wrapper d-flex flex-column flex-row-fluid mt-5 mt-lg-10">
            <!--begin::Content-->
            <div id="kt_content" class="content flex-column-fluid">

              <router-view></router-view>
              <!--begin::Toolbar-->
              <!--end::Post-->
            </div>
            <!--end::Content-->
            <!--begin::Footer-->
            <div id="kt_footer" class="footer pt-10 pb-5 d-flex flex-column flex-md-row flex-stack">
              <!--begin::Copyright-->
              <div class="text-dark order-2 order-md-1">
                <span class="text-muted fw-bold me-1">2022©</span>
                <a class="text-gray-800 text-hover-primary" href="https://keenthemes.com" target="_blank">Calisma
                  Tasarımı</a>
              </div>
              <!--end::Copyright-->
            </div>
            <!--end::Footer-->
          </div>
          <!--end::Wrapper-->
          <!--begin::Sidebar-->
          <div class="sidebar p-5 px-lg-0 py-lg-11" data-kt-drawer="true"
            data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-direction="end"
            data-kt-drawer-name="sidebar" data-kt-drawer-overlay="true" data-kt-drawer-toggle="#kt_sidebar_toggle"
            data-kt-drawer-width="275px">
            <!--begin::Quick Search-->
            <form id="kt_sidebar_search_form" action="../../demo5/dist/apps/devs/search.html" autocomplete="off"
              class="w-100 position-relative mb-5 mb-lg-10">
              <!--begin::Hidden input(Added to disable form autocomplete)-->
              <input type="hidden" />
              <!--end::Hidden input-->
              <!--begin::Icon-->
              <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
              <span class="svg-icon svg-icon-2 svg-icon-gray-700 position-absolute top-50 translate-middle-y ms-4">
                <svg fill="none" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                  <rect fill="currentColor" height="2" opacity="0.5" rx="1" transform="rotate(45 17.0365 15.1223)"
                    width="8.15546" x="17.0365" y="15.1223" />
                  <path
                    d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                    fill="currentColor" />
                </svg>
              </span>
              <!--end::Svg Icon-->
              <!--end::Icon-->
              <!--begin::Input-->
              <input class="form-control bg-transparent ps-13 fs-7 h-40px" name="search" placeholder="Ara" type="text"
                value="" />
              <!--end::Input-->
            </form>
            <!--end::Quick Search-->
            <Popular/>

          </div>
          <!--end::Sidebar-->
        </div>
        <!--end::Container-->
      </div>
      <!--end::Page-->
    </div>
    <!--end::Root-->


    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
      <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
      <span class="svg-icon">
        <svg fill="none" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
          <rect fill="currentColor" height="2" opacity="0.5" rx="1" transform="rotate(90 13 6)" width="13" x="13"
            y="6" />
          <path
            d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
            fill="currentColor" />
        </svg>
      </span>
      <!--end::Svg Icon-->
    </div>
    <!--end::Scrolltop-->
  </div>

</template>

<script setup>

import Tags from './Tags.vue';
import Activity from './Activity.vue';
import Publique from './Publique.vue'
import Popular from './Popular.vue'

import {useRouter} from "vue-router";
import {computed} from "vue";
import {useStore} from "vuex";
import Cookies from "js-cookie";

const router = useRouter();
const store = useStore();

const questions = computed(() => store.state.questions);

const userToken = computed(() => store.state.user.token);
const userData = computed(() => store.state.user.data);

store.dispatch('getQuestions');

function logout() {
  store.dispatch('logout')
    .then(() => {
      router.push({
        name: 'Dashboard'
      })
    });
}

let expiryDate = new Date(Date.now() + 2 * (60 * 60 * 1000))

Cookies.set('session_id', 'Ikay3310', {expires: expiryDate, path: ''})

</script>
