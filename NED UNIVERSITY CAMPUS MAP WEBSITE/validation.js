
function validation() {
    var my_user_name = document.getElementById('username').value;
    var my_email = document.getElementById('email').value;
    var my_password = document.getElementById('password').value;
    var my_confirm_password = document.getElementById('confirm_password').value;
    var my_contact_no = document.getElementById('contact_no').value;
    if (my_user_name == "") {
        document.getElementById('_username').innerHTML = "*enter user name";
        return false;
    }

    if ((my_user_name.length <= 2) || (user_name.length >= 20)) {
        document.getElementById('_username').innerHTML = "*user name must be between 2 and 20 characters";
        return false;
    }

    if (!NaN(my_user_name)) {
        document.getElementById('_username').innerHTML = "*only characters are allowed";
        return false;
    }

    if (my_email_id == "") {
        document.getElementById('_emailid').innerHTML = "*enter email id";
        return false;
    }

    if (my_email_id.indexOf('@') == 0) {
        document.getElementById('_emailid').innerHTML = "*invalid format";
        return false;
    }

    if ((my_email_id.charAt(my_email_id.length - 4) != '.') && (my_email_id.charAt(my_email_id.length - 3) != '.')) {
        document.getElementById('_emailid').innerHTML = "*invalid format";
        return false;
    }

    if (my_password == "") {
        document.getElementById('_password').innerHTML = "*enter your password";
        return false;
    }

    if ((my_password.length < 8) || (my_password.length > 16)) {
        document.getElementById('_password').innerHTML = "*password must be between 8 and 16 characters";
        return false;
    }

    if (my_confirm_password == "") {
        document.getElementById('_confirm_password').innerHTML = "*enter your confirm password";
        return false;
    }

    if (my_confirm_password != my_password) {
        document.getElementById('_confirm_password').innerHTML = "*password is not matching";
        return false;
    }

    if (my_contact_no == "") {
        document.getElementById('_contact_no').innerHTML = "*enter your contact number";
        return false;
    }

    if (NaN(my_contact_no)) {
        document.getElementById('_contact_no').innerHTML = "*must be in digits";
        return false;
    }

    if (my_contact_no.length != 12) {
        document.getElementById('_contact_no').innerHTML = "*enter valid contact number";
        return false;
    }
}


