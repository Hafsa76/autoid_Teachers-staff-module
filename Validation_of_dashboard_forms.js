//               " Validation of dashboard_forms(all Input Fields)"
function validate() {
    // var id = document.getElementById('id').value;
    var name = document.getElementById('name').value;
    var Gender = document.getElementById('Gender').value;
    var dob = document.getElementById('dob').value;
    var mobile = document.getElementById('mobile').value;
    var joining_date = document.getElementById('joining_date').value;
    var qualification = document.getElementById('qualification').value;
    var Institute = document.getElementById('Institute').value;
    var experience = document.getElementById('experience').value;
    // var username = document.getElementById('username').value;
    var email = document.getElementById('email').value;
    // var password = document.getElementById('password').value;
    // var repeat_password = document.getElementById('repeat_password').value;
    var address = document.getElementById('address').value;
    var a_class = document.getElementById('a_class').value;
    var section = document.getElementById('section').value;
    var image = document.getElementById('image').value;
    // var city = document.getElementById('city').value;

    var nameformat = /^[A-Za-z ]+$/;                     // only characters & spacees are allowed

    var textformat = /^[A-Za-z \d]+$/;                  // only characters, digits & whitespaces are allowed

    // var usernameformat = /^[A-Za-z0-9-_]*$/;           // only characters, digits, underscore & hyphen are allowed
    
    var phoneformat = /^(?:\d{4}|\(\d{3}\))([-/.])\d{7}$/;           // only characters, digits, underscore & hyphen are allowed

    var mailformat = /^\w+([\.-]?\w+)@\w+([\.-]?\w+)(\.\w{2,3})+$/;

    // var passwordformat = /^(?=.*?[A-Z])(?=(.*[a-z]){1,})(?=(.*[\d]){1,})(?=(.*[\W]){1,})(?!.*\s).{8,}$/;

    // var old_passwordformat = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/;

    // var pass =  /^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%^&-+=()])(?=\\S+$).{8, 20}$/ ;

    // alert(id)

    // if ((id.length < 1) || (id.length > 5)) {
    //     document.getElementById('Teacher_ID').innerHTML = "**id length must be 1 to 4 digits long";
    //     document.Form.id.focus();
    //     return false;
    // }

    if (name === "") {
        document.getElementById('Name').innerHTML = "**Please enter your name";
        document.Form.name.focus();
        return false;
    }

    if (!(name.match(nameformat))) {
        document.getElementById('Name').innerHTML = "**only characters are allowed";
        document.Form.name.focus();
        return false;
    }

    if (Gender === "") {
        document.getElementById('select').innerHTML = "**Please select your gender";
        document.Form.Gender.focus();
        return false;
    }

    if (dob === "") {
        document.getElementById('Birth').innerHTML = "**Please enter your Date of Birth";
        document.Form.dob.focus();
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

    if (joining_date === "") {
        document.getElementById('Joining').innerHTML = "**Please enter your joining_date";
        document.Form.joining_date.focus();
        return false;
    }

    if (!(qualification.match(nameformat))) {
        document.getElementById('Qualification').innerHTML = "**only characters are allowed";
        document.Form.qualification.focus();
        return false;
    }

    if (!(Institute.match(nameformat))) {
        document.getElementById('Degree_Institute').innerHTML = "**only characters are allowed";
        document.Form.Institute.focus();
        return false;
    }

    if (experience === "") {
        document.getElementById('Experience').innerHTML = "**Please select your Experience";
        document.Form.experience.focus();
        return false;
    }

    // if (!(username.match(usernameformat))) {
    //     document.getElementById('Username').innerHTML = "**only characters, digits, underscore & hyphen are allowed";
    //     document.Form.username.focus();
    //     return false;
    // }

    if (email === "") {
        document.getElementById('Email_ID').innerHTML = "**Please select your Experience";
        document.Form.email.focus();
        return false;
    }

    if (!(email.match(mailformat))) {
        document.getElementById('Email_ID').innerHTML = "**You have entered an invalid email address!";
        document.Form.email.focus();
        return false;
    }

    // if (!(password.match(passwordformat))) {
    //     document.getElementById('Password').innerHTML = "**password must contain at least one number, one uppercase & lowercase letter, one special character and at least 8 or more characters";
    //     document.Form.password.focus();
    //     return false;
    // }

    // if (repeat_password != password) {
    //     document.getElementById('Repeat_Password').innerHTML = "**Repeat password not matched! please enter correct password ";
    //     document.Form.repeat_password.focus();
    //     return false;
    // }

    if (!(address.match(textformat))) {
        document.getElementById('Address').innerHTML = "**only characters & digits are allowed";
        document.Form.address.focus();
        return false;
    }

    if (a_class === "") {
        document.getElementById('assignedclass').innerHTML = "**Please select class to assign";
        document.Form.a_class.focus();
        return false;
    }

    if (section === "") {
        document.getElementById('Section').innerHTML = "**Please select class to assign";
        document.Form.section.focus();
        return false;
    }
    
    if (image === "") {
        document.getElementById('Profile').innerHTML = "**Please select profile image";
        document.Form.image.focus();
        return false;
    }

}


// function login_validation() {
//     var email = document.getElementById('email').value;
//     var password = document.getElementById('password').value;

//     var mailformat = /^\w+([\.-]?\w+)@\w+([\.-]?\w+)(\.\w{2,3})+$/;
// }




// if (!(city.match(nameformat))) {
    //     document.getElementById('City').innerHTML = "**only characters are allowed";
    //     document.Form.city.focus();
    //     return false;
    // }


    // if ((name.length < 5) || (name.length > 15)) {
    //     document.getElementById('Name').innerHTML = "**name length must be 5 to 15 characters long";
    //     document.Form.name.focus();
    //     return false;
    // }

    // if (!isNaN(name)) {
    //     document.getElementById('Name').innerHTML = "**only characters are allowed";
    //     document.Form.name.focus();
    //     return false;
    // }
    // if (Gender=="") {
    //     document.getElementById('select').innerHTML = "**Please select your gender";
    //     document.Form.Gender.focus();
    //     return false; 
    // }

    // if ((qualification.length <= 1) || (qualification.length > 25)) {
    //     document.getElementById('Qualification').innerHTML = "**qualification length can be 25 characters long";
    //     document.Form.qualification.focus();
    //     return false;
    // }
    // if (!isNaN(qualification)) {
    //     document.getElementById('Qualification').innerHTML = "**only characters are allowed";
    //     document.Form.qualification.focus();
    //     return false;
    // }
    // if ((experience.length < 1) || (experience.length > 10)) {
    //     document.getElementById('Experience').innerHTML = "**experience length can be 10 characters long";
    //     document.Form.experience.focus();
    //     return false;
    // }








