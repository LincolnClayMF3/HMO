$(document).ready(function() {
    /*
    ******************************************************************
    ******************************************************************
        This validate belongs to new.php's of different modals
    ******************************************************************
    ******************************************************************
                                                                    */
                                                                    $(".doctorclaimform").each(function(){
                                                                    $(this).validate({
                                                                        errorPlacement: function(error, element) {},
                                                                        rules: {
                                                                            doctorName:{
                                                                                required: true
                                                                            },
                                                                            phoneNumber: {
                                                                                required: true
                                                                            },
                                                                            hospitalName: {
                                                                                required: true
                                                                            },
                                                                            hospitalCoordinator: {
                                                                                required: true
                                                                            },
                                                                            hospitalAddress: {
                                                                                required: true
                                                                            },
                                                                        },
                                                                        invalidHandler: function(form, validator) {
                                                                            var errors = validator.numberOfInvalids();
                                                                            if (errors) {
                                                                                var message = errors == 1 ? 'Please correct the following error:\n' : 'Please correct the following ' + errors + ' errors.\n<br>';
                                                                                var errors = "";
                                                                                if (validator.errorList.length > 0) {
                                                                                    for (x = 0; x < validator.errorList.length; x++) {
                                                                                        errors += "<br>\u25CF " + validator.errorList[x].message + ".";
                                                                                    }
                                                                                }
                                                                              alertify.alert(message + errors);
                                                                            }
                                                                            validator.focusInvalid();
                                                                        },
                                                                        submitHandler: function(form) {
                                                                            $.ajax({
                                                                                type: "POST",
                                                                                url: "btnSend.php",
                                                                                data: dataString,
                                                                                cache: false,
                                                                                success: function(response) {
                                                                                    alertify.alert(result);
                                                                                }
                                                                            });
                                                                        },
                                                                    }); //new.php of category

                                                                  });
                                                                    var doctorclaim = $(".doctorclaimform");

                                                                    $(".firstbutton5").click(function(){
                                                                        if (doctorclaim.valid()) {
                                                                          return true;
                                                                        }
                                                                        else {
                                                                          return false;
                                                                        }
                                                                    });

                                                                    $(".patientclaimform").each(function(){
                                                                    $(this).validate({
                                                                        errorPlacement: function(error, element) {},
                                                                        rules: {
                                                                            patientName: {
                                                                                required: true
                                                                            },
                                                                            contactNumber: {
                                                                                required: true
                                                                            },
                                                                            cardNumber: {
                                                                                required: true
                                                                            },
                                                                            hospitalName: {
                                                                                required: true
                                                                            },
                                                                            treatmentDate: {
                                                                                required: true
                                                                            },
                                                                            amountClaims: {
                                                                                required: true
                                                                            },
                                                                            reason: {
                                                                                required: true
                                                                            }
                                                                        },
                                                                        invalidHandler: function(form, validator) {
                                                                            var errors = validator.numberOfInvalids();
                                                                            if (errors) {
                                                                                var message = errors == 1 ? 'Please correct the following error:\n' : 'Please correct the following ' + errors + ' errors.\n<br>';
                                                                                var errors = "";
                                                                                if (validator.errorList.length > 0) {
                                                                                    for (x = 0; x < validator.errorList.length; x++) {
                                                                                        errors += "<br>\u25CF " + validator.errorList[x].message + ".";
                                                                                    }
                                                                                }
                                                                              alertify.alert(message + errors);
                                                                            }
                                                                            validator.focusInvalid();
                                                                        },
                                                                        submitHandler: function(form) {
                                                                            $.ajax({
                                                                                type: "POST",
                                                                                url: "btnSend.php",
                                                                                data: dataString,
                                                                                cache: false,
                                                                                success: function(response) {
                                                                                    alertify.alert(result);
                                                                                }
                                                                            });
                                                                        },
                                                                    }); //new.php of category
                                                                  });
                                                                    var patientclaim = $(".patientclaimform");

                                                                    $(".firstbutton4").click(function(){
                                                                        if (patientclaim.valid()) {
                                                                          return true;
                                                                        }
                                                                        else {
                                                                          return false;
                                                                        }
                                                                    });
    /*
    ******************************************************************

                          New.php of Category

    ******************************************************************
                                                                    */
    $(".categoryform").validate({
        errorPlacement: function(error, element) {},
        rules: {
            categoryType: {
                required: true
            },
            class: {
                required: true
            },
            specs: {
                required: true
            }
        },
        messages: {
            categoryType: {
                required: "Coverage Category is Required"
            },
            class: {
                required: "Classification is Required"
            },
            specs: {
                required: "Specification is Required"
            }
        },
        invalidHandler: function(form, validator) {
            var errors = validator.numberOfInvalids();
            if (errors) {
                var message = errors == 1 ? 'Please correct the following error:\n' : 'Please correct the following ' + errors + ' errors.\n<br>';
                var errors = "";
                if (validator.errorList.length > 0) {
                    for (x = 0; x < validator.errorList.length; x++) {
                        errors += "<br>\u25CF " + validator.errorList[x].message + ".";
                    }
                }
              alertify.alert(message + errors);
            }
            validator.focusInvalid();
        },
        submitHandler: function(form) {
            $.ajax({
                type: "POST",
                url: "btnCreate.php",
                data: dataString,
                cache: false,
                success: function(response) {
                    alertify.alert(result);
                }
            });
        },
    }); //new.php of category
    /*
    ******************************************************************

                          New.php of Coverage

    ******************************************************************
                                                                    */
    $(".coverageform").validate({
        errorPlacement: function(error, element) {},
        rules: {
            category: {
                required: true
            },
            coverageName: {
                required: true
            }
        },
        messages: {
            category: {
                required: "Select a Coverage Category"
            },
            coverageName: {
                required: "Coverage Name is Required"
            }
        },
        invalidHandler: function(form, validator) {
            var errors = validator.numberOfInvalids();
            if (errors) {
                var message = errors == 1 ? 'Please correct the following error:\n' : 'Please correct the following ' + errors + ' errors.\n<br>';
                var errors = "";
                if (validator.errorList.length > 0) {
                    for (x = 0; x < validator.errorList.length; x++) {
                        errors += "<br>\u25CF " + validator.errorList[x].message + ".";
                    }
                }
                alertify.alert(message + errors);
            }
            validator.focusInvalid();
        },
        submitHandler: function(form) {
            $.ajax({
                type: "POST",
                url: "btnCreate.php",
                data: dataString,
                cache: false,
                success: function(response) {
                    alertify.alert(result);
                }
            });
        },
    }); //new.php of coverage
    /*
    ******************************************************************

                          New.php of Standard

    ******************************************************************
                                                                    */
    $(".standardform").validate({
        errorPlacement: function(error, element) {},
        rules: {
            standardName: {
                required: true
            },
            'coverageArray[]': {
                required: true,
                minlength: 1
            }
        },
        messages: {
            standardName: {
                required: "Standard Service Name is Required"
            },
            'coverageArray[]': {
                required: "Please choose at least one coverage"
            }
        },
        invalidHandler: function(form, validator) {
            var errors = validator.numberOfInvalids();
            if (errors) {
                var message = errors == 1 ? 'Please correct the following error:\n' : 'Please correct the following ' + errors + ' errors.\n<br>';
                var errors = "";
                if (validator.errorList.length > 0) {
                    for (x = 0; x < validator.errorList.length; x++) {
                        errors += "<br>\u25CF " + validator.errorList[x].message + ".";
                    }
                }
                alertify.alert(message + errors);
            }
            validator.focusInvalid();
        },
        submitHandler: function(form) {
            $.ajax({
                type: "POST",
                url: "btnCreate.php",
                data: dataString,
                cache: false,
                success: function(response) {
                    alertify.alert(result);
                }
            });
        },
    }); //new.php of standard
    /*
    ******************************************************************

                          New.php of Additional

    ******************************************************************
                                                                    */
    $(".additionalform").validate({
        errorPlacement: function(error, element) {},
        rules: {
            additionalName: {
                required: true
            },
            'coverageArray[]': {
                required: true
            }
        },
        messages: {
            additionalName: {
                required: "Additional Service Name is Required"
            },
            'coverageArray[]': {
                required: "Please choose at least one"
            }
        },
        invalidHandler: function(form, validator) {
            var errors = validator.numberOfInvalids();
            if (errors) {
                var message = errors == 1 ? 'Please correct the following error:\n' : 'Please correct the following ' + errors + ' errors.\n<br>';
                var errors = "";
                if (validator.errorList.length > 0) {
                    for (x = 0; x < validator.errorList.length; x++) {
                        errors += "<br>\u25CF " + validator.errorList[x].message + ".";
                    }
                }
                alertify.alert(message + errors);
            }
            validator.focusInvalid();
        },
        submitHandler: function(form) {
            $.ajax({
                type: "POST",
                url: "btnCreate.php",
                data: dataString,
                cache: false,
                success: function(response) {
                    alertify.alert(result);
                }
            });
        },
    }); //new.php of additional
    /*
    ******************************************************************

                          New.php of Room

    ******************************************************************
                                                                    */
    $(".roomform").validate({
        errorPlacement: function(error, element) {},
        rules: {
            roomName: {
                required: true
            },
            roomType: {
                required: true
            },
            roomAmount: {
                required: true
            }
        },
        messages: {
            roomName: {
                required: "Room Name is Required"
            },
            roomType: {
                required: "Select a Room Type"
            },
            roomAmount: {
                required: "Room Amount is Required"
            }
        },
        invalidHandler: function(form, validator) {
            var errors = validator.numberOfInvalids();
            if (errors) {
                var message = errors == 1 ? 'Please correct the following error:\n' : 'Please correct the following ' + errors + ' errors.\n<br>';
                var errors = "";
                if (validator.errorList.length > 0) {
                    for (x = 0; x < validator.errorList.length; x++) {
                        errors += "<br>\u25CF " + validator.errorList[x].message + ".";
                    }
                }
                alertify.alert(message + errors);
            }
            validator.focusInvalid();
        },
        submitHandler: function(form) {
            $.ajax({
                type: "POST",
                url: "btnCreate.php",
                data: dataString,
                cache: false,
                success: function(response) {
                    alertify.alert(result);
                }
            });
        },
    }); //new.php of room
    /*
    ******************************************************************

                          New.php of Requirement

    ******************************************************************
                                                                    */
    $(".requireform").validate({
        errorPlacement: function(error, element) {},
        rules: {
            requirementType: {
                required: true,
            },
            requirementName: {
                required: true
            }
        },
        messages: {
            requirementType: {
                required: "Select a Requirement Type"
            },
            requirementName: {
                required: "Requirement Name is Required"
            }
        },
        invalidHandler: function(form, validator) {
            var errors = validator.numberOfInvalids();
            if (errors) {
                var message = errors == 1 ? 'Please correct the following error:\n' : 'Please correct the following ' + errors + ' errors.\n<br>';
                var errors = "";
                if (validator.errorList.length > 0) {
                    for (x = 0; x < validator.errorList.length; x++) {
                        errors += "<br>\u25CF " + validator.errorList[x].message + ".";
                    }
                }
                alertify.alert(message + errors);
            }
            validator.focusInvalid();
        },
        submitHandler: function(form) {
            $.ajax({
                type: "POST",
                url: "btnCreate.php",
                data: dataString,
                cache: false,
                success: function(response) {
                    alertify.alert(result);
                }
            });
        },
    }); //new.php of requirement
    /*
    ******************************************************************

                          New.php of Membership

    ******************************************************************
                                                                    */
    $(".membershipform").validate({
        errorPlacement: function(error, element) {},
        rules: {
            membershipName: {
                required: true
            },
            membershipPercentage: {
                required: true
            }
        },
        messages: {
            membershipName: {
                required: "Membership Name is Required"
            },
            membershipPercentage: {
                required: "Membership Percentage is Required"
            }
        },
        invalidHandler: function(form, validator) {
            var errors = validator.numberOfInvalids();
            if (errors) {
                var message = errors == 1 ? 'Please correct the following error:\n' : 'Please correct the following ' + errors + ' errors.\n<br>';
                var errors = "";
                if (validator.errorList.length > 0) {
                    for (x = 0; x < validator.errorList.length; x++) {
                        errors += "<br>\u25CF " + validator.errorList[x].message + ".";
                    }
                }
                alertify.alert(message + errors);
            }
            validator.focusInvalid();
        },
        submitHandler: function(form) {
            $.ajax({
                type: "POST",
                url: "btnCreate.php",
                data: dataString,
                cache: false,
                success: function(response) {
                    alertify.alert(result);
                }
            });
        },
    }); //new.php of membership
    /*
    ******************************************************************

                          New.php of PEC

    ******************************************************************
                                                                    */
    $(".pecform").validate({
        errorPlacement: function(error, element) {},
        rules: {
            pecName: {
                required: true
            }
        },
        messages: {
            pecName: {
                required: "Pre-Existing Condition is Required"
            }
        },
        invalidHandler: function(form, validator) {
            var errors = validator.numberOfInvalids();
            if (errors) {
                var message = errors == 1 ? 'Please correct the following error:\n' : 'Please correct the following ' + errors + ' errors.\n<br>';
                var errors = "";
                if (validator.errorList.length > 0) {
                    for (x = 0; x < validator.errorList.length; x++) {
                        errors += "<br>\u25CF " + validator.errorList[x].message + ".";
                    }
                }
                alertify.alert(message + errors);
            }
            validator.focusInvalid();
        },
        submitHandler: function(form) {
            $.ajax({
                type: "POST",
                url: "btnCreate.php",
                data: dataString,
                cache: false,
                success: function(response) {
                    alertify.alert(result);
                }
            });
        },
    }); //new.php of pec
    /*
    ******************************************************************

                          New.php of Plan

    ******************************************************************
                                                                    */
                                                                    $(".planform").each(function() {
                                                                        $(this).validate({
                                                                        errorPlacement: function(error, element) {},
                                                                        rules: {
                                                                            planName: {
                                                                                required: true
                                                                            },
                                                                            'standard[]': {
                                                                                required: true
                                                                            },
                                                                            'membership[]': {
                                                                                required: true
                                                                            },
                                                                            planMaximum: {
                                                                                required: true
                                                                            },
                                                                            planAnnual: {
                                                                                required: true
                                                                            },
                                                                            'hospital[]': {
                                                                                required: true
                                                                            }
                                                                        },
                                                                        messages: {
                                                                          planName: {
                                                                              required: "Plan Name is Required"
                                                                          },
                                                                          'standard[]': {
                                                                              required: "Please select at least one Standard Service"
                                                                          },
                                                                          'membership[]': {
                                                                              required: "Please select at least one Membership Type"
                                                                          },
                                                                          planMaximum: {
                                                                              required: "Maximum Benefit Limit is Required"
                                                                          },
                                                                          planAnnual: {
                                                                              required: "Annual Payment is Required"
                                                                          },
                                                                          'hospital[]': {
                                                                              required: "Hospital Type is Required"
                                                                          }
                                                                        },
                                                                        invalidHandler: function(form, validator) {
                                                                            var errors = validator.numberOfInvalids();
                                                                            if (errors) {
                                                                                var message = errors == 1 ? 'Please correct the following error:\n' : 'Please correct the following ' + errors + ' errors.\n<br>';
                                                                                var errors = "";
                                                                                if (validator.errorList.length > 0) {
                                                                                    for (x = 0; x < validator.errorList.length; x++) {
                                                                                        errors += "<br>\u25CF " + validator.errorList[x].message + ".";
                                                                                    }
                                                                                }
                                                                                alertify.alert(message + errors);
                                                                            }
                                                                            validator.focusInvalid();
                                                                        },
                                                                        submitHandler: function(form) {
                                                                            $.ajax({
                                                                                type: "POST",
                                                                                url: "btnCreate.php",
                                                                                data: dataString,
                                                                                cache: false,
                                                                                success: function(response) {
                                                                                    alertify.alert(result);
                                                                                }
                                                                            });
                                                                        },
                                                                    });
                                                                });
                                                                    //next buttons
                                                                    var firstbutton1 = $(".firstbutton1");
                                                                    var secondbutton1 = $(".secondbutton1");

                                                                    //multiple divs
                                                                    var firstdiv1 = $(".pageOne");
                                                                    var seconddiv1 = $(".pageTwo");
                                                                    var thirddiv1 = $(".pageThree");

                                                                    //back buttons
                                                                    var firstback1 = $(".firstback1");
                                                                    var secondback1 = $(".secondback1");

                                                                    var plan = $(".planform");

                                                                    $(".firstbutton1").click(function(){
                                                                        if (plan.valid()) {
                                                                            alert(successfully);
                                                                            firstdiv1.hide();
                                                                            seconddiv1.show();
                                                                            $(".secondbutton1").click(function(){
                                                                                alert("successfully");
                                                                                seconddiv1.hide();
                                                                                thirddiv1.show();
                                                                            });
                                                                        }
                                                                        else {
                                                                            return false;
                                                                        }

                                                                    });


    /*
    ******************************************************************

                          New.php of Hospital

    ******************************************************************
                                                                    */
    $(".hospitalform").validate({
        errorPlacement: function(error, element) {},
        rules: {
            hospitalName: {
                required: true
            },
            hospitalAddress: {
                required: true
            },
            hospitalRegion: {
                required: true
            },
            hospitalCoordinator: {
                required: true
            },
            hospitalTelephone: {
                required: true
            },
            hospitalMobile: {
                required: true
            },
            hospitalEmail: {
                required: true,
                email: true
            },
            hospitalEffectivityDate: {
                required: true
            },
            hospitalEndContract: {
                required: true,
                greaterThan: "#hospitalEffectivityDate"
            },
            hospitalSpecification: {
                required: true
            },
            contract: {
                required: true,
                greaterThan: "hospitalEffectivityDate"
            }
        },
        messages: {
            hospitalName: {
                required: "Hospital Name is Required"
            },
            hospitalAddress: {
                required: "Hospital Address is Required"
            },
            hospitalRegion: {
                required: "Select the Region of your Hospital"
            },
            hospitalCoordinator: {
                required: "Hospital Coordinator Name is Required"
            },
            hospitalTelephone: {
                required: "Telephone No. is Required"
            },
            hospitalMobile: {
                required: "Mobile No. is Required"
            },
            hospitalEmail: {
                required: "Email is Required"
            },
            hospitalEffectivityDate: {
                required: "Effectivity Date is Required"
            },
            hospitalEndContract: {
                required: "End Contract is Required",
                greaterThan: "Must be greater than Effectivity Date"
            },
            hospitalSpecification: {
                required: "Specification is Required"
            }
        },
        invalidHandler: function(form, validator) {
            var errors = validator.numberOfInvalids();
            if (errors) {
                var message = errors == 1 ? 'Please correct the following error:\n' : 'Please correct the following ' + errors + ' errors.\n<br>';
                var errors = "";
                if (validator.errorList.length > 0) {
                    for (x = 0; x < validator.errorList.length; x++) {
                        errors += "<br>\u25CF " + validator.errorList[x].message + ".";
                    }
                }
                alertify.alert(message + errors);
            }
            validator.focusInvalid();
        },
        submitHandler: function(form) {
            $.ajax({
                type: "POST",
                url: "btnCreate.php",
                data: dataString,
                cache: false,
                success: function(response) {
                    alertify.alert(result);
                }
            });
        },
    }); //new.php of hospital
    /*
    ******************************************************************

                          New.php of Company

    ******************************************************************
                                                                    */

                                                                    $(".companyform").each(function() {
                                                                        $(this).validate({
                                                                            errorPlacement: function(error, element) {},
                                                                            rules: {
                                                                                companyName: {
                                                                                    required: true
                                                                                },
                                                                                companyAddress: {
                                                                                    required: true
                                                                                },
                                                                                employee: {
                                                                                    required: true
                                                                                },
                                                                                'planArray[]': {
                                                                                    required: true
                                                                                },
                                                                                companyTelephone: {
                                                                                    required: true
                                                                                },
                                                                                companyMobile: {
                                                                                    required: true
                                                                                },
                                                                                companyEmail: {
                                                                                    required: true
                                                                                },
                                                                                companyEffectivityDate: {
                                                                                    required: true
                                                                                },
                                                                                companyEndContract: {
                                                                                    required: true,
                                                                                    greaterThan: "#companyEffectivityDate"
                                                                                },
                                                                                contract: {
                                                                                    required: true,
                                                                                    greaterThan: "#companyEffectivityDate"
                                                                                }
                                                                            },
                                                                            messages: {
                                                                                companyName: {
                                                                                    required: "Company Name is Required"
                                                                                },
                                                                                companyAddress: {
                                                                                    required: "Company Address is Required"
                                                                                },
                                                                                employee: {
                                                                                    required: "No. of Employees is Required"
                                                                                },
                                                                                'planArray[]': {
                                                                                    required: "Select at least one Plan"
                                                                                },
                                                                                companyTelephone: {
                                                                                    required: "Company Telephone No. is Required"
                                                                                },
                                                                                companyMobile: {
                                                                                    required: "Company Mobile No. is Required"
                                                                                },
                                                                                companyEmail: {
                                                                                    required: "Company Email is Required"
                                                                                },
                                                                                companyEffectivityDate: {
                                                                                    required: "Set the Effectivity Date"
                                                                                },
                                                                                companyEndContract: {
                                                                                    required: "Set the End Contract",
                                                                                    greaterThan: "Must be greater than Effectivity Date"
                                                                                }
                                                                            },
                                                                            invalidHandler: function(form, validator) {
                                                                                var errors = validator.numberOfInvalids();
                                                                                if (errors) {
                                                                                    var message = errors == 1 ? 'Please correct the following error:\n' : 'Please correct the following ' + errors + ' errors.\n<br>';
                                                                                    var errors = "";
                                                                                    if (validator.errorList.length > 0) {
                                                                                        for (x = 0; x < validator.errorList.length; x++) {
                                                                                            errors += "<br>\u25CF " + validator.errorList[x].message + ".";
                                                                                        }
                                                                                    }
                                                                                    alertify.alert(message + errors);
                                                                                }
                                                                                validator.focusInvalid();
                                                                            },
                                                                            submitHandler: function(form) {
                                                                                $.ajax({
                                                                                    type: "POST",
                                                                                    url: "btnUpdate.php",
                                                                                    data: dataString,
                                                                                    cache: false,
                                                                                    success: function(response) {
                                                                                        alertify.alert(result);
                                                                                    }
                                                                                });
                                                                            },
                                                                        });
                                                                    });

                                                                    var company = $('.companyform');
                                                                    var firstpage = $(".pageOne");
                                                                    var secondpage = $(".pageTwo");

                                                                    $(".firstbutton3").click(function(){
                                                                        if (company.valid()) {
                                                                              return true;
                                                                        }
                                                                        else {
                                                                            return false;
                                                                        }

                                                                    });

    /*
    ******************************************************************

                          New.php of Member

    ******************************************************************
                                                                    */

    var member = $(".add_member");

    member.validate({
        errorPlacement: function(error, element) {},
        rules: {
            memberName: {
                required: true
            },
            memberAge: {
                required: true
            },
            memberBday: {
                required: true
            },
            memberHeight: {
                required: true
            },
            memberWeight: {
                required: true
            },
            gender: {
                required: true
            },
            memberCivil: {
                required: true
            },
            memberAddress: {
                required: true
            },
            memberOccupation: {
                required: true
            },
            memberTelephone: {
                required: true
            },
            memberMobile: {
                required: true
            },
            memberEmail: {
                required: true
            },
            memberSpecs: {
                required: true
            },
            memberType: {
                required: true
            },
            memberCompany: {
                required: true
            },
            memberFrequency: {
                required: true
            },
            memberMode: {
                required: true
            },
            memberEffectivity: {
                required: true
            },
            memberEnd: {
                required: true
            },
            memberpec: {
                required: true
            },
            name: {
                required: true
            },
            bday: {
                required: true
            },
            relationship: {
                required: true
            },
            civil: {
                required: true
            }
        },
        messages: {
            memberName: {
                required: "Member Name is Required"
            },
            memberBday: {
                required: "Birthday is Required"
            },
            memberHeight: {
                required: "Height is Required"
            },
            memberWeight: {
                required: "Weight is Required"
            },
            memberGender: {
                required: "Gender is Required"
            },
            memberAddress: {
                required: "Address is Required"
            },
            memberOccupation: {
                required: "Occupation is Required"
            },
            memberTelephone: {
                required: "Telephone is Required"
            },
            memberMobile: {
                required: "Mobile is Required"
            },
            memberEmail: {
                required: "Email is Required"
            },
            memberSpecs: {
                required: "Specification is Required"
            },
        },

        invalidHandler: function(form, validator) {
            var errors = validator.numberOfInvalids();
            if (errors) {
                var message = errors == 1 ? 'Please correct the following error:\n' : 'Please correct the following ' + errors + ' errors.\n<br>';
                var errors = "";
                if (validator.errorList.length > 0) {
                    for (x = 0; x < validator.errorList.length; x++) {
                        errors += "<br>\u25CF " + validator.errorList[x].message + ".";
                  }
                }
                alertify.alert(message + errors);
            }
            validator.focusInvalid();
        },
        submitHandler: function(form) {
            $.ajax({
                type: "POST",
                url: "btnCreate.php",
                data: dataString,
                cache: false,
                success: function(response) {
                    alertify.alert(result);
                }
            });
        },
    }); //needs additonal method to use valid()

    //next buttons
    var firstbutton2 = $("#firstbutton2");
    var secondbutton2 = $("#secondbutton2");
    var thirdbutton = $("#thirdbutton2");

    //multiple divs
    var firstdiv = $("#member");
    var seconddiv = $("#plan");
    var thirddiv = $("#pec");
    var fourthdiv = $("#dependents");

    //back buttons
    var firstback = $("#firstback2");
    var secondback = $("#secondback2");
    var thirdback = $("#thirdback2");

    $(".firstbutton2").click(function(){
        if(member.valid()) {

            firstdiv.hide();
            seconddiv.show();

            $(".secondbutton2").click(function(){
                if (member.valid()){

                  seconddiv.hide();
                  thirddiv.show();
                  $(".secondback2").click(function(){
                      thirddiv.hide();
                      seconddiv.show();
                  });

                  $(".thirdbutton2").click(function(){
                      if(member.valid()) {
                        thirddiv.hide();
                      fourthdiv.show();
                        $(".thirdback2").click(function(){
                            fourthdiv.hide();
                            thirddiv.show();
                        });
                    }
                    else {
                      return false;
                    }

                  });
                }
                else {
                  return false;
                }
            });
        }
        else {
          return false;
        }
    });


    /*
    ******************************************************************
    ******************************************************************
        This validate belongs to update.php's of different modals
    ******************************************************************
    ******************************************************************
                                                                    */
    /*
    ******************************************************************

                        update.php of Category

    ******************************************************************
                                                                    */
    $(".updatecategoryform").each(function() {
        $(this).validate({
            errorPlacement: function(error, element) {},
            errorElement: "span",
            rules: {
                categoryType: {
                    required: true,
                },
                class: {
                    required: true
                }
            },
            messages: {
                categoryType: {
                    required: "Coverage Category is Required"
                },
                class: {
                    required: "Classification is Required"
                }
            },
            invalidHandler: function(form, validator) {
                var errors = validator.numberOfInvalids();
                if (errors) {
                    var message = errors == 1 ? 'Please correct the following error:\n' : 'Please correct the following ' + errors + ' errors.\n<br>';
                    var errors = "";
                    if (validator.errorList.length > 0) {
                        for (x = 0; x < validator.errorList.length; x++) {
                            errors += "<br>\u25CF " + validator.errorList[x].message + ".";
                        }
                    }
                    alertify.alert(message + errors);
                }
                validator.focusInvalid();
            },
            submitHandler: function(form) {
                $.ajax({
                    type: "POST",
                    url: "btnUpdate.php",
                    data: dataString,
                    cache: false,
                    success: function(response) {
                        alertify.alert(result);
                    }
                });
            },
        });
    });
    /*
    ******************************************************************

                        update.php of Coverage

    ******************************************************************
                                                                    */
    $(".updatecoverageform").each(function() {
        $(this).validate({
            errorPlacement: function(error, element) {},
            errorElement: "span",
            rules: {
                category: {
                    required: true
                },
                classification: {
                    required: true
                },
                coverageName: {
                    required: true
                }
            },
            messages: {
                category: {
                    required: "Select a Coverage Category"
                },
                classification: {
                    required: "Select a Classification"
                },
                coverageName: {
                    required: "Coverage Name is Required"
                }
            },
            invalidHandler: function(form, validator) {
                var errors = validator.numberOfInvalids();
                if (errors) {
                    var message = errors == 1 ? 'Please correct the following error:\n' : 'Please correct the following ' + errors + ' errors.\n<br>';
                    var errors = "";
                    if (validator.errorList.length > 0) {
                        for (x = 0; x < validator.errorList.length; x++) {
                            errors += "<br>\u25CF " + validator.errorList[x].message + ".";
                        }
                    }
                    alertify.alert(message + errors);
                }
                validator.focusInvalid();
            },
            submitHandler: function(form) {
                $.ajax({
                    type: "POST",
                    url: "btnUpdate.php",
                    data: dataString,
                    cache: false,
                    success: function(response) {
                        alertify.alert(result);
                    }
                });
            },
        });
    });
    /*
    ******************************************************************

                        update.php of Standard

    ******************************************************************
                                                                    */
    $(".updatestandardform").each(function() {
        $(this).validate({
            errorPlacement: function(error, element) {},
            errorElement: "span",
            rules: {
                standardName: {
                    required: true
                },
                'coverageArray[]': {
                    required: true,
                    minlength: 1
                }
            },
            messages: {
                standardName: {
                    required: "Standard Service Name is Required"
                },
                'coverageArray[]': {
                    required: "Please choose at least one coverage"
                }
            },
            invalidHandler: function(form, validator) {
                var errors = validator.numberOfInvalids();
                if (errors) {
                    var message = errors == 1 ? 'Please correct the following error:\n' : 'Please correct the following ' + errors + ' errors.\n<br>';
                    var errors = "";
                    if (validator.errorList.length > 0) {
                        for (x = 0; x < validator.errorList.length; x++) {
                            errors += "<br>\u25CF " + validator.errorList[x].message + ".";
                        }
                    }
                    alertify.alert(message + errors);
                }
                validator.focusInvalid();
            },
            submitHandler: function(form) {
                $.ajax({
                    type: "POST",
                    url: "btnUpdate.php",
                    data: dataString,
                    cache: false,
                    success: function(response) {
                        alertify.alert(result);
                    }
                });
            },
        });
    });
    /*
    ******************************************************************

                        update.php of Additional

    ******************************************************************
                                                                    */
    $(".updateadditionalform").each(function() {
        $(this).validate({
            errorPlacement: function(error, element) {},
            errorElement: "span",
            rules: {
                additionalName: {
                    required: true
                },
                'coverageArray[]': {
                    required: true
                }
            },
            messages: {
                additionalName: {
                    required: "Additional Service Name is Required"
                },
                'coverageArray[]': {
                    required: "Please choose at least one"
                }
            },
            invalidHandler: function(form, validator) {
                var errors = validator.numberOfInvalids();
                if (errors) {
                    var message = errors == 1 ? 'Please correct the following error:\n' : 'Please correct the following ' + errors + ' errors.\n<br>';
                    var errors = "";
                    if (validator.errorList.length > 0) {
                        for (x = 0; x < validator.errorList.length; x++) {
                            errors += "<br>\u25CF " + validator.errorList[x].message + ".";
                        }
                    }
                    alertify.alert(message + errors);
                }
                validator.focusInvalid();
            },
            submitHandler: function(form) {
                $.ajax({
                    type: "POST",
                    url: "btnUpdate.php",
                    data: dataString,
                    cache: false,
                    success: function(response) {
                        alertify.alert(result);
                    }
                });
            },
        });
    });
    /*
    ******************************************************************

                          update.php of Room

    ******************************************************************
                                                                    */
    $(".updateroomform").each(function() {
        $(this).validate({
            errorPlacement: function(error, element) {},
            rules: {
                roomName: {
                    required: true
                },
                roomType: {
                    required: true
                },
                roomAmount: {
                    required: true
                }
            },
            messages: {
                roomName: {
                    required: "Room Name is Required"
                },
                roomType: {
                    required: "Select a Room Type"
                },
                roomAmount: {
                    required: "Room Amount is Required",
                    currency: "Input 6 digits no and 2 digit decimal"
                }
            },
            invalidHandler: function(form, validator) {
                var errors = validator.numberOfInvalids();
                if (errors) {
                    var message = errors == 1 ? 'Please correct the following error:\n' : 'Please correct the following ' + errors + ' errors.\n<br>';
                    var errors = "";
                    if (validator.errorList.length > 0) {
                        for (x = 0; x < validator.errorList.length; x++) {
                            errors += "<br>\u25CF " + validator.errorList[x].message + ".";
                        }
                    }
                    alertify.alert(message + errors);
                }
                validator.focusInvalid();
            },
            submitHandler: function(form) {
                $.ajax({
                    type: "POST",
                    url: "btnUpdate.php",
                    data: dataString,
                    cache: false,
                    success: function(response) {
                        alertify.alert(result);
                    }
                });
            },
        });
    });
    /*
    ******************************************************************

                       update.php of Requirement

    ******************************************************************
                                                                    */
    $(".updaterequirementform").each(function() {
        $(this).validate({
            errorPlacement: function(error, element) {},
            rules: {
                requirementType: {
                    required: true,
                },
                requirementName: {
                    required: true
                }
            },
            messages: {
                requirementType: {
                    required: "Select a Requirement Type"
                },
                requirementName: {
                    required: "Requirement Name is Required"
                }
            },
            invalidHandler: function(form, validator) {
                var errors = validator.numberOfInvalids();
                if (errors) {
                    var message = errors == 1 ? 'Please correct the following error:\n' : 'Please correct the following ' + errors + ' errors.\n<br>';
                    var errors = "";
                    if (validator.errorList.length > 0) {
                        for (x = 0; x < validator.errorList.length; x++) {
                            errors += "<br>\u25CF " + validator.errorList[x].message + ".";
                        }
                    }
                    alertify.alert(message + errors);
                }
                validator.focusInvalid();
            },
            submitHandler: function(form) {
                $.ajax({
                    type: "POST",
                    url: "btnUpdate.php",
                    data: dataString,
                    cache: false,
                    success: function(response) {
                        alertify.alert(result);
                    }
                });
            },
        });
    });
    /*
    ******************************************************************

                       update.php of Membership

    ******************************************************************
                                                                    */
    $(".updatemembershipform").each(function() {
        $(this).validate({
            errorPlacement: function(error, element) {},
            rules: {
                membershipName: {
                    required: true
                }
            },
            messages: {
                membershipName: {
                    required: "Membership Name is Required"
                }
            },
            invalidHandler: function(form, validator) {
                var errors = validator.numberOfInvalids();
                if (errors) {
                    var message = errors == 1 ? 'Please correct the following error:\n' : 'Please correct the following ' + errors + ' errors.\n<br>';
                    var errors = "";
                    if (validator.errorList.length > 0) {
                        for (x = 0; x < validator.errorList.length; x++) {
                            errors += "<br>\u25CF " + validator.errorList[x].message + ".";
                        }
                    }
                    alertify.alert(message + errors);
                }
                validator.focusInvalid();
            },
            submitHandler: function(form) {
                $.ajax({
                    type: "POST",
                    url: "btnUpdate.php",
                    data: dataString,
                    cache: false,
                    success: function(response) {
                        alertify.alert(result);
                    }
                });
            },
        });
    });
    /*
    ******************************************************************

                             update.php of PEC

    ******************************************************************
                                                                    */
    $(".updatepecform").each(function() {
        $(this).validate({
            errorPlacement: function(error, element) {},
            rules: {
                pecName: {
                    required: true
                }
            },
            messages: {
                pecName: {
                    required: "Pre-Existing Condition is Required"
                }
            },
            invalidHandler: function(form, validator) {
                var errors = validator.numberOfInvalids();
                if (errors) {
                    var message = errors == 1 ? 'Please correct the following error:\n' : 'Please correct the following ' + errors + ' errors.\n<br>';
                    var errors = "";
                    if (validator.errorList.length > 0) {
                        for (x = 0; x < validator.errorList.length; x++) {
                            errors += "<br>\u25CF " + validator.errorList[x].message + ".";
                        }
                    }
                    alertify.alert(message + errors);
                }
                validator.focusInvalid();
            },
            submitHandler: function(form) {
                $.ajax({
                    type: "POST",
                    url: "btnUpdate.php",
                    data: dataString,
                    cache: false,
                    success: function(response) {
                        alertify.alert(result);
                    }
                });
            },
        });
    });
    /*
    ******************************************************************

                          update.php of Plan

    ******************************************************************
                                                                    */
    $(".updateplanform").each(function() {
        $(this).validate({
              errorPlacement: function(error, element) {},
              rules: {
                  planName: {
                      required: true
                  },
                  'standard[]': {
                      required: true
                  },
                  'membership[]': {
                      required: true
                  },
                  planMaximum: {
                      required: true
                  },
                  planAnnual: {
                      required: true
                  },
                  'hospital[]': {
                      required: true
                  }
              },
              messages: {
                planName: {
                    required: "Plan Name is Required"
                },
                'standard[]': {
                    required: "Please select at least one Standard Service"
                },
                'membership[]': {
                    required: "Please select at least one Membership Type"
                },
                planMaximum: {
                    required: "Maximum Benefit Limit is Required"
                },
                planAnnual: {
                    required: "Annual Payment is Required"
                },
                'hospital[]': {
                    required: "Hospital Type is Required"
                }
              },
              invalidHandler: function(form, validator) {
                  var errors = validator.numberOfInvalids();
                  if (errors) {
                      var message = errors == 1 ? 'Please correct the following error:\n' : 'Please correct the following ' + errors + ' errors.\n<br>';
                      var errors = "";
                      if (validator.errorList.length > 0) {
                          for (x = 0; x < validator.errorList.length; x++) {
                              errors += "<br>\u25CF " + validator.errorList[x].message + ".";
                          }
                      }
                      alertify.alert(message + errors);
                  }
                  validator.focusInvalid();
              },
              submitHandler: function(form) {
                  $.ajax({
                      type: "POST",
                      url: "btnCreate.php",
                      data: dataString,
                      cache: false,
                      success: function(response) {
                          alertify.alert(result);
                      }
                  });
              },
          });
      });
          //next buttons
          var firstbutton1 = $(".firstbutton1");
          var secondbutton1 = $(".secondbutton1");

          //multiple divs
          var firstdiv1 = $(".pageOne");
          var seconddiv1 = $(".pageTwo");
          var thirddiv1 = $(".pageThree");

          //back buttons
          var firstback1 = $(".firstback1");
          var secondback1 = $(".secondback1");

          var plan = $(".planform");

          $(".firstbutton1").click(function(){
              if (plan.valid()) {
                  alert(successfully);
                  firstdiv1.hide();
                  seconddiv1.show();
                  $(".secondbutton1").click(function(){
                      alert("successfully");
                      seconddiv1.hide();
                      thirddiv1.show();
                  });
              }
              else {
                  return false;
              }

          });
    /*
    ******************************************************************

                        update.php of Hospital

    ******************************************************************
                                                                    */
                                                                    $(".editHospitalform").each(function(){
                                                                    $(this).validate({
                                                                        errorPlacement: function(error, element) {},
                                                                        rules: {
                                                                            hospitalName: {
                                                                                required: true
                                                                            },
                                                                            hospitalAddress: {
                                                                                required: true
                                                                            },
                                                                            hospitalRegion: {
                                                                                required: true
                                                                            },
                                                                            hospitalCoordinator: {
                                                                                required: true
                                                                            },
                                                                            hospitalTelephone: {
                                                                                required: true
                                                                            },
                                                                            hospitalMobile: {
                                                                                required: true
                                                                            },
                                                                            hospitalEmail: {
                                                                                required: true,
                                                                                email: true
                                                                            },
                                                                            hospitalEffectivityDate: {
                                                                                required: true
                                                                            },
                                                                            hospitalEndContract: {
                                                                                required: true,
                                                                                greaterThan: "#hospitalEffectivityDate"
                                                                            },
                                                                            hospitalSpecification: {
                                                                                required: true
                                                                            }
                                                                        },
                                                                        messages: {
                                                                            hospitalName: {
                                                                                required: "Hospital Name is Required"
                                                                            },
                                                                            hospitalAddress: {
                                                                                required: "Hospital Address is Required"
                                                                            },
                                                                            hospitalRegion: {
                                                                                required: "Select the Region of your Hospital"
                                                                            },
                                                                            hospitalCoordinator: {
                                                                                required: "Hospital Coordinator Name is Required"
                                                                            },
                                                                            hospitalTelephone: {
                                                                                required: "Telephone No. is Required"
                                                                            },
                                                                            hospitalMobile: {
                                                                                required: "Mobile No. is Required"
                                                                            },
                                                                            hospitalEmail: {
                                                                                required: "Email is Required"
                                                                            },
                                                                            hospitalEffectivityDate: {
                                                                                required: "Effectivity Date is Required"
                                                                            },
                                                                            hospitalEndContract: {
                                                                                required: "End Contract is Required",
                                                                                greaterThan: "Must be greater than Effectivity Date"
                                                                            },
                                                                            hospitalSpecification: {
                                                                                required: "Specification is Required"
                                                                            }
                                                                        },
                                                                        invalidHandler: function(form, validator) {
                                                                            var errors = validator.numberOfInvalids();
                                                                            if (errors) {
                                                                                var message = errors == 1 ? 'Please correct the following error:\n' : 'Please correct the following ' + errors + ' errors.\n<br>';
                                                                                var errors = "";
                                                                                if (validator.errorList.length > 0) {
                                                                                    for (x = 0; x < validator.errorList.length; x++) {
                                                                                        errors += "<br>\u25CF " + validator.errorList[x].message + ".";
                                                                                    }
                                                                                }
                                                                                alertify.alert(message + errors);
                                                                            }
                                                                            validator.focusInvalid();
                                                                        },
                                                                        submitHandler: function(form) {
                                                                            $.ajax({
                                                                                type: "POST",
                                                                                url: "btnU.php",
                                                                                data: dataString,
                                                                                cache: false,
                                                                                success: function(response) {
                                                                                    alertify.alert(result);
                                                                                }
                                                                            });
                                                                        },

                                                                    }); //new.php of hospital
    /*
    ******************************************************************

                        update.php of Company

    ******************************************************************
                                                                    */
                                                                    $(".updatecompanyform").each(function() {
                                                                        $(this).validate({
                                                                            errorPlacement: function(error, element) {},
                                                                            rules: {
                                                                                companyName: {
                                                                                    required: true
                                                                                },
                                                                                companyAddress: {
                                                                                    required: true
                                                                                },
                                                                                employee: {
                                                                                    required: true
                                                                                },
                                                                                'planArray[]': {
                                                                                    required: true
                                                                                },
                                                                                companyTelephone: {
                                                                                    required: true
                                                                                },
                                                                                companyMobile: {
                                                                                    required: true
                                                                                },
                                                                                companyEmail: {
                                                                                    required: true
                                                                                },
                                                                                companyEffectivityDate: {
                                                                                    required: true
                                                                                },
                                                                                companyEndContract: {
                                                                                    required: true,
                                                                                    greaterThan: "#companyEffectivityDate1"
                                                                                },
                                                                                contract: {
                                                                                    required: true,
                                                                                    greaterThan: "#companyEffectivityDate1"
                                                                                }
                                                                            },
                                                                            messages: {
                                                                                companyName: {
                                                                                    required: "Company Name is Required"
                                                                                },
                                                                                companyAddress: {
                                                                                    required: "Company Address is Required"
                                                                                },
                                                                                employee: {
                                                                                    required: "No. of Employees is Required"
                                                                                },
                                                                                'planArray[]': {
                                                                                    required: "Select at least one Plan"
                                                                                },
                                                                                companyTelephone: {
                                                                                    required: "Company Telephone No. is Required"
                                                                                },
                                                                                companyMobile: {
                                                                                    required: "Company Mobile No. is Required"
                                                                                },
                                                                                companyEmail: {
                                                                                    required: "Company Email is Required"
                                                                                },
                                                                                companyEffectivityDate: {
                                                                                    required: "Set the Effectivity Date"
                                                                                },
                                                                                companyEndContract: {
                                                                                    required: "Set the End Contract",
                                                                                    greaterThan: "Must be greater than Effectivity Date"
                                                                                }
                                                                            },
                                                                            invalidHandler: function(form, validator) {
                                                                                var errors = validator.numberOfInvalids();
                                                                                if (errors) {
                                                                                    var message = errors == 1 ? 'Please correct the following error:\n' : 'Please correct the following ' + errors + ' errors.\n<br>';
                                                                                    var errors = "";
                                                                                    if (validator.errorList.length > 0) {
                                                                                        for (x = 0; x < validator.errorList.length; x++) {
                                                                                            errors += "<br>\u25CF " + validator.errorList[x].message + ".";
                                                                                        }
                                                                                    }
                                                                                    alertify.alert(message + errors);
                                                                                }
                                                                                validator.focusInvalid();
                                                                            },
                                                                            submitHandler: function(form) {
                                                                                $.ajax({
                                                                                    type: "POST",
                                                                                    url: "btnUpdate.php",
                                                                                    data: dataString,
                                                                                    cache: false,
                                                                                    success: function(response) {
                                                                                        alertify.alert(result);
                                                                                    }
                                                                                });
                                                                            },
                                                                        });
                                                                    });



                                                                    });
});
$.validator.setDefaults({
    highlight: function(element) {
        $(element).closest('.form-group').addClass('has-error');
        $(element).closest('.form-control').addClass('has-error');
    },
    unhighlight: function(element) {
        $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
        $(element).closest('.form-control').removeClass('has-error').addClass('has-success');
    },
});
$.validator.addMethod("greaterThan", function(value, element, params) {
    if (!/Invalid|NaN/.test(new Date(value))) {
        return new Date(value) >= new Date($(params).val());
    }
    return isNaN(value) && isNaN($(params).val()) || (Number(value) >= Number($(params).val()));
}, 'Must be greater than {0}.');

$.validator.addMethod('currency', function(value, element, regexp) {
    var re = /^\d{1,6}(\.\d{1,2})?$/;
    return this.optional(element) || re.test(value);
}, '');
