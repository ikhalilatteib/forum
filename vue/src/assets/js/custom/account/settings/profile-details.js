"use strict";
var KTAccountSettingsProfileDetails = function () {
    var e, t;
    return {
        init: function () {
            e = document.getElementById("kt_account_profile_details_form"), e.querySelector("#kt_account_profile_details_submit"), t = FormValidation.formValidation(e, {
                fields: {
                    fname: {validators: {notEmpty: {message: "First name is required"}}},
                    phone: {validators: {notEmpty: {message: "Contact phone number is required"}}},
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger,
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: ".fv-row",
                        eleInvalidClass: "",
                        eleValidClass: ""
                    })
                }
            })
        }
    }
}();
KTUtil.onDOMContentLoaded((function () {
    KTAccountSettingsProfileDetails.init()
}));