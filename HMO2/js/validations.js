/*

  function validateDecimal(el, evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode != 8 && charCode != 9 && (charCode != 46) && (charCode < 48 || charCode > 57))
        return false;
    if (charCode == 46) {
        if ((el.value) && (el.value.indexOf('.') >= 0))
            return false;
        else
            return true;
    }
    return true;
    var charCode = (evt.which) ? evt.which : event.keyCode;
    var number = evt.value.split('.');
    if (charCode != 46 && charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
}

function validateName(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode == 8 || charCode == 9 || charCode == 13 || charCode == 32 || charCode == 39 || (charCode >= 65 && charCode <= 90) || (charCode >= 97 && charCode <= 122)) {
        return true;
    } else {
        return false;
    }
}

function validateNameDash(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode == 8 || charCode == 9 || charCode == 13 || charCode == 32 || charCode == 45 || (charCode >= 65 && charCode <= 90) || (charCode >= 97 && charCode <= 122)) {
        return true;
    } else {
        return false;
    }
}


function validateNameAndNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode == 8 || charCode == 9 || charCode == 13 || charCode == 32 || (charCode >= 65 && charCode <= 90) || (charCode >= 97 && charCode <= 122) ||
        (charCode >= 48 && charCode <= 57)) {
        return true;
    } else {
        return false;
    }
}

function validateNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode == 8 || charCode == 9 || (charCode >= 48 && charCode <= 57)) {
        return true;
    } else {
        return false;
    }
}

function validateUsername(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode == 8 || charCode == 9 || charCode == 95 || (charCode >= 48 && charCode <= 57) ||
        (charCode >= 65 && charCode <= 90) || (charCode >= 97 && charCode <= 122)) {
        return true;
    } else {
        return false;
    }
}
*/
