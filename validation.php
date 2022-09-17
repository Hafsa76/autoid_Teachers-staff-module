<script>
//               " Validation of dashboard_forms(all Input Fields)"
function validate() {
    var id = document.getElementById('id').value;
    var name = document.getElementById('name').value;
    var Gender = document.getElementById('Gender').value;
    var dob = document.getElementById('dob').value;
    var mobile = document.getElementById('mobile').value;
    var joining_date = document.getElementById('joining_date').value;
    var qualification = document.getElementById('qualification').value;
    var experience = document.getElementById('experience').value;
    var username = document.getElementById('username').value;
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    var repeat_password = document.getElementById('repeat_password').value;
    var address = document.getElementById('address').value;
    // var city = document.getElementById('city').value;

    var nameformat = /^[A-Za-z ]+$/;                     // only characters & spacees are allowed

    var textformat = /^[A-Za-z \d]+$/;                  // only characters, digits & whitespaces are allowed

    var usernameformat = /^[A-Za-z0-9-_]*$/;           // only characters, digits, underscore & hyphen are allowed
    
    var phoneformat = /^(?:\d{4}|\(\d{3}\))([-/.])\d{7}$/;           // only characters, digits, underscore & hyphen are allowed

    var mailformat = /^\w+([\.-]?\w+)@\w+([\.-]?\w+)(\.\w{2,3})+$/;

    var passwordformat = /^(?=.*?[A-Z])(?=(.*[a-z]){1,})(?=(.*[\d]){1,})(?=(.*[\W]){1,})(?!.*\s).{8,}$/;

    // var old_passwordformat = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/;

    // var pass =  /^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%^&-+=()])(?=\\S+$).{8, 20}$/ ;

    if ((id.length < 1) || (id.length > 5)) {
        document.getElementById('Teacher_ID').innerHTML = "**id length can be 1 to 4 digits long";
        document.Form.id.focus();
        return false;
    }

    if (!(name.match(nameformat))) {
        document.getElementById('Name').innerHTML = "**only characters are allowed";
        document.Form.name.focus();
        return false;
    }

    if (mobile.length != 12) {
        document.getElementById('Mobile').innerHTML = "**mobile length must be 12 digits long";
        document.Form.mobile.focus();
        return false;
    }

    if (!(mobile.match(phoneformat))) {
        document.getElementById('Mobile').innerHTML = "**please fulfill the required pattern ####-#######";
        document.Form.mobile.focus();
        return false;
    }

    if (!(qualification.match(nameformat))) {
        document.getElementById('Qualification').innerHTML = "**only characters are allowed";
        document.Form.qualification.focus();
        return false;
    }

    if (!(experience.match(textformat))) {
        document.getElementById('Experience').innerHTML = "**only characters & digits are allowed";
        document.Form.experience.focus();
        return false;
    }

    if (!(username.match(usernameformat))) {
        document.getElementById('Username').innerHTML = "**only characters, digits, underscore & hyphen are allowed";
        document.Form.username.focus();
        return false;
    }

    if (!(email.match(mailformat))) {
        document.getElementById('Email_ID').innerHTML = "**You have entered an invalid email address!";
        document.Form.email.focus();
        return false;
    }

    if (!(password.match(passwordformat))) {
        document.getElementById('Password').innerHTML = "**password must contain at least one number, one uppercase & lowercase letter, one special character and at least 8 or more characters";
        document.Form.password.focus();
        return false;
    }

    if (repeat_password != password) {
        document.getElementById('Repeat_Password').innerHTML = "**Repeat password not matched! please enter correct password ";
        document.Form.repeat_password.focus();
        return false;
    }

    if (!(address.match(textformat))) {
        document.getElementById('Address').innerHTML = "**only characters & digits are allowed";
        document.Form.address.focus();
        return false;
    }

    // if (!(city.match(nameformat))) {
    //     document.getElementById('City').innerHTML = "**only characters are allowed";
    //     document.Form.city.focus();
    //     return false;
    // }


}

</script>












