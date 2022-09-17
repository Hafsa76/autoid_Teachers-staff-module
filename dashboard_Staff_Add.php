<?php
ob_start();
include "sidebar.php";
include "header.php";
include "database_connection.php";


session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: school_login.php");
    exit;
}

$sql = mysqli_query($connection, "SELECT * FROM auto_staff_data order by id  desc limit 1");
if (mysqli_num_rows($sql) == 1) {
    $row = mysqli_fetch_array($sql);
    $id  = $row[0];
    $num = substr($id, 3);
    $numrows = ((int)$num) + 1;
}

// $show = "SELECT * FROM staff_data";

// $table_data = mysqli_query($connection, $show);

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1" />
    <meta name="description" content="Admin Dashboard which showcase the current transaction and previous transaction for the user." />
    <meta name="keywords" content="HTML5, CSS" />
    <meta name="author" content="Sanjeev Anbu" />
    <title>Admin Dashboard_Add Teachers</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" crossorigin="anonymous" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="./dashboard-css.css" />

    <!-- <script src="./Validation of dashboard_forms.js"></script> -->

</head>

<body>
    <div class="container mt-5 pt-5 bg-light">
        <h2 class="ms-4 mb-4">Add Teachers</h2>
        <form name="Form" action="insert_query.php" method="POST" class="container row g-3 pb-4 pt-2 " onsubmit="return validate()">
            <!-- <h5 class="mt-3 mb-1 col-md-12 d-flex justify-content-center">Basic Details</h5> -->

            <div class="col-md-6">
                <label class="form-label">Teacher ID</label>
                <input type="text" name="id" id="id" readonly class="form-control">
                <!-- <input type="number" name="id" id="id" min="1" class="form-control" > -->
                <span id="Teacher_ID" class="text-danger font-weight-bold"></span>
            </div>
            <div class="col-md-6">
                <label class="form-label">Name</label>
                <input type="text" name="name" id="name" minlength="5" maxlength="15" class="form-control">
                <span id="Name" class="text-danger font-weight-bold"></span>
            </div>
            <div class="col-md-6">
                <label class="form-label">Gender</label>
                <select name="Gender" id="Gender" class="form-select" aria-label="Default select example">
                    <option selected value="" disabled>Select your gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>
                <span id="select" class="text-danger font-weight-bold"></span>
            </div>
            <div class="col-md-6">
                <label class="form-label">Date of Birth</label>
                <input type="date" name="dob" id="dob" class="form-control" max="2000-12-31">
                <span id="Birth" class="text-danger font-weight-bold"></span>
            </div>
            <div class="col-md-6">
                <label class="form-label">Mobile</label>
                <input type="text" name="mobile" id="mobile" min="0" placeholder="####-#######" class="form-control">
                <span id="Mobile" class="text-danger font-weight-bold"></span>
            </div>
            <div class="col-md-6">
                <label class="form-label">Joining Date</label>
                <input type="date" name="joining_date" id="joining_date" class="form-control" min="2022-09-13" max="2022-09-30">
                <span id="Joining" class="text-danger font-weight-bold"></span>
            </div>
            <div class="col-md-6">
                <label class="form-label">Qualification</label>
                <input type="text" name="qualification" id="qualification" minlength="4" maxlength="22" class="form-control">
                <span id="Qualification" class="text-danger font-weight-bold"></span>
            </div>
            <div class="col-md-6">
                <label class="form-label">Degree Institute</label>
                <input type="text" name="Institute" id="Institute" minlength="4" maxlength="22" class="form-control">
                <span id="Degree_Institute" class="text-danger font-weight-bold"></span>
            </div>
            <div class="col-md-6">
                <label class="form-label">Experience</label>
                <select name="experience" id="experience" class="form-select" aria-label="Default select example">
                    <option selected disabled value="">Select your experience</option>
                    <option value="1 Year">1 Year</option>
                    <option value="2 Year">2 Year</option>
                    <option value="3 Year">3 Year</option>
                    <option value="4 Year">4 Year</option>
                    <option value="5 Year">5 Year</option>
                    <option value="6 Year">6 Year</option>
                    <option value="7 Year">7 Year</option>
                    <option value="8 Year">8 Year</option>
                    <option value="9 Year">9 Year</option>
                    <option value="10 Year">10 Year</option>
                </select>
                <!-- <input type="text" name="experience" id="experience" minlength="6" maxlength="10" class="form-control"> -->
                <span id="Experience" class="text-danger font-weight-bold"></span>
            </div>
            <!-- <div class="col-md-6">
                <label class="form-label">Username</label>
                <input type="text" name="username" id="username" minlength="5" maxlength="15" class=" form-control">
                <span id="Username" class="text-danger font-weight-bold"></span>
            </div> -->
            <div class="col-md-6">
                <label class="form-label">Email ID</label>
                <input type="email" name="email" id="email" class="form-control">
                <span id="Email_ID" class="text-danger font-weight-bold"></span>
            </div>
            <!-- <div class="col-md-6">
                <label class="form-label">Password</label>
                <input type="password" name="password" id="password" class="form-control">
                <span id="Password" class="text-danger font-weight-bold"></span>
            </div>
            <div class="col-md-6">
                <label class="form-label">Repeat Password</label>
                <input type="password" name="repeat_password" id="repeat_password" class="form-control">
                <span id="Repeat_Password" class="text-danger font-weight-bold"></span>
            </div> -->
            <div class="col-6">
                <label for="inputAddress" class="form-label">Address</label>
                <input type="text" name="address" id="address" minlength="5" maxlength="30" class="form-control" placeholder="1234 Main St">
                <span id="Address" class="text-danger font-weight-bold"></span>
            </div>
            <!-- <div class="col-6">
                <label for="inputAddress" class="form-label">Assign Class</label>
                <input type="text" name="a_class" id="a_class" minlength="5" maxlength="30" class="form-control" placeholder="1234 Main St">
                <span id="assignedclass" class="text-danger font-weight-bold"></span>
            </div> -->
            <div class="col-md-6">
                <label class="form-label">Assign Class</label>
                <select name="a_class" id="a_class" class="form-select" aria-label="Default select example">
                    <option selected disabled value="">Select Class</option>
                    <option value="Play">Play</option>
                    <option value="Pre-Nursery">Pre-Nursery</option>
                    <option value="Nursery">Nursery</option>
                    <option value="Prep">Prep</option>
                    <option value="One">One</option>
                    <option value="Two">Two</option>
                    <option value="Three">Three</option>
                    <option value="Four">Four</option>
                    <option value="Five">Five</option>
                    <option value="Six">Six</option>
                    <option value="Seven">Seven</option>
                    <option value="Eight">Eight</option>
                    <option value="Nine">Nine</option>
                    <option value="Ten">Ten</option>
                </select>
                <span id="assignedclass" class="text-danger font-weight-bold"></span>
            </div>
            <div class="col-md-6">
                <label for="Section" class="form-label">Section</label>
                <!-- <input type="text" name="section" id="section"  class="form-control" > -->
                <select name="section" id="section" class="form-select" aria-label="Default select example">
                    <option selected value="" disabled>Select section</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                </select>
                <span id="Section" class="text-danger font-weight-bold"></span>
            </div>
            <!-- <div class="col-12">
                    <label for="inputAddress2" class="form-label">Address 2</label>
                    <input type="text" class="form-control" id="inputAddress2"
                        placeholder="Apartment, studio, or floor">
                </div> 
            <div class="col-md-6">
                <label for="inputCity" class="form-label">City</label>
                <input type="text" name="city" id="city" minlength="5" maxlength="15" class="form-control" required>
                <span id="City" class="text-danger font-weight-bold"></span>
            </div>-->
            <div class="col-md-6">
                <label for="formFile" class="form-label">Profile Image</label>
                <input class="form-control" type="file" name="image" id="image">
                <span id="Profile" class="text-danger font-weight-bold"></span>
            </div>

            <!-- <div class="col-md-6">
                <label for="inputZip" class="form-label">Postal Code</label>
                <input type="number" name="Postal_Code" id="inputZip" value="38000" class="form-control" id="inputZip" readonly>
            </div> -->
            <div class="d-grid gap-2 col-4 mx-auto mt-3">
                <button type="submit" name="save" class="btn btn-primary fw-bold fs-5">Submit</button>
            </div>
        </form>
    </div>
    <script type="text/javascript">
        String.prototype.padLeft = function(length, character) {
            return new Array(length - this.length + 1).join(character || '0') + this;
        }
        var num = '<?php echo $numrows; ?>';
        var str = 'STA';
        var str1 = num.padLeft(7, '0');
        str += str1;
        document.getElementById("id").value = str;
    </script>
    <script src="./Validation_of_dashboard_forms.js"></script>

</body>

</html>