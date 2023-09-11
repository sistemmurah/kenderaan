"use strict";

// Class Definition
var KTLogin = function() {
    var _login;

    var _showForm = function(form) {
        var cls = 'login-' + form + '-on';
        var form = 'kt_login_' + form + '_form';

        _login.removeClass('login-forgot-on');
        _login.removeClass('login-signin-on');
        _login.removeClass('login-signup-on');

        _login.addClass(cls);

        KTUtil.animateClass(KTUtil.getById(form), 'animate__animated animate__backInUp');
    }

    var _handleSignInForm = function() {
        var validation;

        // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
        validation = FormValidation.formValidation(
			KTUtil.getById('kt_login_signin_form'),
			{
				fields: {
                    KATANAMA: {
						validators: {
							notEmpty: {
								message: 'Katanama diperlukan'
							}
						}
					},
                    KATALALUAN: {
						validators: {
							notEmpty: {
								message: 'Katalaluan diperlukan'
							}
						}
					}
				},
				plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    submitButton: new FormValidation.plugins.SubmitButton(),
                    //defaultSubmit: new FormValidation.plugins.DefaultSubmit(), // Uncomment this line to enable normal button submit after form validation
					bootstrap: new FormValidation.plugins.Bootstrap()
				}
			}
		);

        $('#kt_login_signin_submit').on('click', function (e) {
            e.preventDefault();

            validation.validate().then(function(status) {
		        if (status == 'Valid') {
                    document.getElementById("kt_login_signin_form").submit();
				} else {
					swal.fire({
                        text: "Sila masukkan maklumat yang diperlukan.",
		                icon: "error",
		                buttonsStyling: false,
		                confirmButtonText: "OK",
                        customClass: {
    						confirmButton: "btn font-weight-bold btn-light-primary"
    					}
		            }).then(function() {
						KTUtil.scrollTop();
					});
				}
		    });
        });

        // Handle forgot button
        $('#kt_login_forgot').on('click', function (e) {
            e.preventDefault();
            _showForm('forgot');
        });

        // Handle signup
        $('#kt_login_signup').on('click', function (e) {
            e.preventDefault();
            _showForm('signup');
        });
    }

    var _handleSignUpForm = function(e) {
        var validation;
        var form = KTUtil.getById('kt_login_signup_form');

        // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
        validation = FormValidation.formValidation(
			form,
			{
				fields: {
                    EMAIL: {
                        validators: {
							notEmpty: {
								message: 'Alamat e-mel diperlukan'
							},
                            emailAddress: {
                                message: 'Alamat e-mel yang sah diperlukan'
							}
						}
					},
                    KATALALUAN: {
                        validators: {
                            notEmpty: {
                                message: 'Katalaluan diperlukan'
                            }
                        }
                    },
                    SAH_KATALALUAN: {
                        validators: {
                            notEmpty: {
                                message: 'Pengesahan Katalaluan diperlukan'
                            },
                            identical: {
                                compare: function () {
                                    return form.querySelector('[name="KATALALUAN"]').value;
                                },
                                message: 'Katalaluan dan Pengesahan Katalaluan tidak sama'
                            }
                        }
                    },
                    NAMA: {
                        validators: {
                            notEmpty: {
                                message: 'Nama penuh diperlukan'
                            }
                        }
                    },
                    NOKP: {
                        validators: {
                            notEmpty: {
                                message: 'No. Kad Pengenalan diperlukan'
                            }
                        }
                    },
                    AGREE: {
                        validators: {
                            notEmpty: {
                                message: 'Anda mestilah SETUJU dengan Terma dan Syarat'
                            }
                        }
                    },
				},
				plugins: {
					trigger: new FormValidation.plugins.Trigger(),
					bootstrap: new FormValidation.plugins.Bootstrap()
				}
			}
		);

        $('#kt_login_signup_submit').on('click', function (e) {
            e.preventDefault();

            validation.validate().then(function(status) {
		        if (status == 'Valid') {
                    document.getElementById("kt_login_signup_form").submit();
				} else {
					swal.fire({
                        text: "Sila masukkan maklumat yang diperlukan.",
		                icon: "error",
		                buttonsStyling: false,
		                confirmButtonText: "Ok",
                        customClass: {
    						confirmButton: "btn font-weight-bold btn-light-primary"
    					}
		            }).then(function() {
						KTUtil.scrollTop();
					});
				}
		    });
        });

        // Handle cancel button
        $('#kt_login_signup_cancel').on('click', function (e) {
            e.preventDefault();

            _showForm('signin');
        });
    }

    var _handleForgotForm = function(e) {
        var validation;

        // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
        validation = FormValidation.formValidation(
			KTUtil.getById('kt_login_forgot_form'),
			{
				fields: {
                    EMAIL: {
                        validators: {
                            notEmpty: {
                                message: 'Alamat e-mel diperlukan'
                            },
                            emailAddress: {
                                message: 'Alamat e-mel yang sah diperlukan'
                            }
                        }
                    }
				},
				plugins: {
					trigger: new FormValidation.plugins.Trigger(),
					bootstrap: new FormValidation.plugins.Bootstrap()
				}
			}
		);

        // Handle submit button
        $('#kt_login_forgot_submit').on('click', function (e) {
            e.preventDefault();

            validation.validate().then(function (status) {

                if ($("#hfCaptcha").val() == "") {
                    $("#rfvCaptcha").show();
                    swal.fire({
                        text: 'Captcha diperlukan',
                        icon: 'error',
                        buttonsStyling: false,
                        confirmButtonText: "OK",
                        customClass: {
                            confirmButton: "btn font-weight-bold btn-light-primary"
                        }
                    }).then(function () {
                        KTUtil.scrollTop();
                    });
                } else if (status == 'Valid') {
                    if ($('#hfCaptcha').val() == 'true') {
                        document.getElementById("kt_login_forgot_form").submit();
                    } else {
                        $("#rfvCaptcha").hide();
                        swal.fire({
                            text: 'Sila masukkan maklumat yang diperlukan.',
                            icon: 'error',
                            buttonsStyling: false,
                            confirmButtonText: "OK",
                            customClass: {
                                confirmButton: "btn font-weight-bold btn-light-primary"
                            }
                        }).then(function () {
                            KTUtil.scrollTop();
                        });
                    }
				} else {
					swal.fire({
                        text: "Sila masukkan maklumat yang diperlukan.",
		                icon: "error",
		                buttonsStyling: false,
		                confirmButtonText: "Ok",
                        customClass: {
    						confirmButton: "btn font-weight-bold btn-light-primary"
    					}
		            }).then(function() {
						KTUtil.scrollTop();
					});
				}
		    });
        });

        // Handle cancel button
        $('#kt_login_forgot_cancel').on('click', function (e) {
            e.preventDefault();

            _showForm('signin');
        });
    }

    // Public Functions
    return {
        // public functions
        init: function () {

            _login = $('#kt_login');

            _handleSignInForm();
            _handleSignUpForm();
            _handleForgotForm();
        }
    };
}();

// Class Initialization
jQuery(document).ready(function() {
    KTLogin.init();
});
