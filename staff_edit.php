<?php

include "sidebar.php";
include "header.php";
include "database_connection.php";

$id = $_GET['id'];
$sql_query = "SELECT * FROM auto_staff_data WHERE id='$id'";
$result = mysqli_query($connection, $sql_query);
if (!$result) {
    printf("Error: %s\n", mysqli_error($connection));
    exit();
}
while ($row = mysqli_fetch_array($result)) {


    $id = $row['id'];
    $name = $row['name'];
    $Gender = $row['Gender'];
    $dob = $row['dob'];
    $mobile = $row['mobile'];
    $joining_date = $row['joining_date'];
    $qualification = $row['qualification'];
    $Institute = $row['Institute'];
    $experience = $row['experience'];
    // $username = $row['username'];
    $email = $row['email'];
    // $password = $row['password'];
    // $repeat_password = $row['repeat_password'];
    $address = $row['address'];
    $a_class = $row['a_class'];
    $section = $row['section'];
    $image = $row['image'];

}

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

<body class="bg-light ">
    <div class="container mt-2 pt-5 bg-light">
        <h2 class="ms-4 mb-4">Teachers Edit</h2>
        <form name="Form" action="./update.php" method="POST" class="container row g-3 pb-4" onsubmit="return validate()">
            <!-- <h5 class="mt-3 mb-1 col-md-12 d-flex justify-content-center">Basic Details</h5> -->
            <div class="col-md-6">
                <label class="form-label">Teacher ID</label>
                <input type="text" name="id" id="id" min="1" readonly value="<?php echo $id; ?>" class="form-control">
                <span id="Teacher_ID" class="text-danger font-weight-bold"></span>
            </div>
            <div class="col-md-6">
                <label class="form-label">Name</label>
                <input type="text" name="name" id="name" value="<?php echo $name; ?>" minlength="5" maxlength="15" class="form-control">
                <span id="Name" class="text-danger font-weight-bold"></span>
            </div>
            <div class="col-md-6">
                <label class="form-label">Gender</label>
                <select name="Gender" id="Gender" class="form-select" aria-label="Default select example">
                    <option selected disabled value="">Select your gender</option>
                    <option <?php if ($Gender == 'Male') { ?> selected <?php } ?> value="Male">Male</option>
                    <option <?php if ($Gender == 'Female') {  ?> selected <?php } ?> value="Female">Female</option>
                    <option <?php if ($Gender == 'Other') { ?> selected <?php } ?> value="Other">Other</option>
                </select>
                <span id="select" class="text-danger font-weight-bold"></span>
            </div>
            <div class="col-md-6">
                <label class="form-label">Date of Birth</label>
                <input type="date" name="dob" id="dob" value="<?php echo $dob; ?>" class="form-control">
            </div>
            <div class="col-md-6">
                <label class="form-label">Mobile</label>
                <input type="text" name="mobile" id="mobile" min="0" value="<?php echo $mobile; ?>" class="form-control">
                <span id="Mobile" class="text-danger font-weight-bold"></span>
            </div>
            <div class="col-md-6">
                <label class="form-label">Joining Date</label>
                <input type="date" name="joining_date" id="joining_date" value="<?php echo $joining_date; ?>" class="form-control"  min="2022-09-05" max="2022-09-30">
            </div>
            <div class="col-md-6">
                <label class="form-label">Qualification</label>
                <input type="text" name="qualification" id="qualification" value="<?php echo $qualification; ?>" minlength="4" maxlength="22" class="form-control">
                <span id="Qualification" class="text-danger font-weight-bold"></span>
            </div>
            <div class="col-md-6">
                <label class="form-label">Degree Institute</label>
                <input type="text" name="Institute" id="Institute" value="<?php echo $Institute; ?>" minlength="4" maxlength="22" class="form-control">
                <span id="Degree_Institute" class="text-danger font-weight-bold"></span>
            </div>
            <div class="col-md-6">
                <label class="form-label">Experience</label>
                <select name="experience" id="experience" class="form-select" aria-label="Default select example">
                    <option selected disabled value="">Select your experience</option>
                    <option <?php if ($experience == '1 Year') { ?> selected <?php } ?> value="1 Year">1 Year</option>
                    <option <?php if ($experience == '2 Year') { ?> selected <?php } ?> value="2 Year">2 Year</option>
                    <option <?php if ($experience == '3 Year') { ?> selected <?php } ?> value="3 Year">3 Year</option>
                    <option <?php if ($experience == '4 Year') { ?> selected <?php } ?> value="4 Year">4 Year</option>
                    <option <?php if ($experience == '5 Year') { ?> selected <?php } ?> value="5 Year">5 Year</option>
                    <option <?php if ($experience == '6 Year') { ?> selected <?php } ?> value="6 Year">6 Year</option>
                    <option <?php if ($experience == '7 Year') { ?> selected <?php } ?> value="7 Year">7 Year</option>
                    <option <?php if ($experience == '8 Year') { ?> selected <?php } ?> value="8 Year">8 Year</option>
                    <option <?php if ($experience == '9 Year') { ?> selected <?php } ?> value="9 Year">9 Year</option>
                    <option <?php if ($experience == '10 Year') { ?> selected <?php } ?> value="10 Year">10 Year</option>
                </select>
                <!-- <input type="text" name="experience" id="experience" minlength="6" maxlength="10" class="form-control"> -->
                <span id="Experience" class="text-danger font-weight-bold"></span>
            </div>
            <!-- <div class="col-md-6">
                <label class="form-label">Username</label>
                <input type="text" name="username" id="username" value="<?php echo $username; ?>" minlength="5" maxlength="15" class=" form-control">
                <span id="Username" class="text-danger font-weight-bold"></span>
            </div> -->
            <div class="col-md-6">
                <label class="form-label">Email ID</label>
                <input type="email" name="email" id="email" value="<?php echo $email; ?>" class="form-control">
                <span id="Email_ID" class="text-danger font-weight-bold"></span>
            </div>
            <!-- <div class="col-md-6">
                <label class="form-label">Password</label>
                <input type="password" name="password" id="password" value="<?php echo $password; ?>" class="form-control">
                <span id="Password" class="text-danger font-weight-bold"></span>
            </div>
            <div class="col-md-6">
                <label class="form-label">Repeat Password</label>
                <input type="password" name="repeat_password" id="repeat_password" value="<?php echo $repeat_password; ?>" class="form-control">
                <span id="Repeat_Password" class="text-danger font-weight-bold"></span>
            </div> -->
            <div class="col-6">
                <label for="inputAddress" class="form-label">Address</label>
                <input type="text" name="address" id="address" value="<?php echo $address; ?>" minlength="5" maxlength="30" class="form-control" placeholder="1234 Main St">
                <span id="Address" class="text-danger font-weight-bold"></span>
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
                <label class="form-label">Assign Class</label>
                <select name="a_class" id="a_class" class="form-select" aria-label="Default select example" >
                    <option selected disabled value="">Select Class</option>
                    <option <?php if ($a_class == 'Play') { ?> selected <?php } ?>  value="Play">Play</option>
                    <option <?php if ($a_class == 'Pre-Nursery') { ?> selected <?php } ?>  value="Pre-Nursery">Pre-Nursery</option>
                    <option <?php if ($a_class == 'Nursery') { ?> selected <?php } ?>  value="Nursery">Nursery</option>
                    <option <?php if ($a_class == 'Prep') { ?> selected <?php } ?>  value="Prep">Prep</option>
                    <option <?php if ($a_class == 'One') { ?> selected <?php } ?>  value="One">One</option>
                    <option <?php if ($a_class == 'Two') { ?> selected <?php } ?>  value="Two">Two</option>
                    <option <?php if ($a_class == 'Three') { ?> selected <?php } ?>  value="Three">Three</option>
                    <option <?php if ($a_class == 'Four') { ?> selected <?php } ?>  value="Four">Four</option>
                    <option <?php if ($a_class == 'Five') { ?> selected <?php } ?>  value="Five">Five</option>
                    <option <?php if ($a_class == 'Six') { ?> selected <?php } ?>  value="Six">Six</option>
                    <option <?php if ($a_class == 'Seven') { ?> selected <?php } ?>  value="Seven">Seven</option>
                    <option <?php if ($a_class == 'Eight') { ?> selected <?php } ?>  value="Eight">Eight</option>
                    <option <?php if ($a_class == 'Nine') { ?> selected <?php } ?>  value="Nine">Nine</option>
                    <option <?php if ($a_class == 'Ten') { ?> selected <?php } ?>  value="Ten">Ten</option>
                </select>
                <span id="assignedclass" class="text-danger font-weight-bold"></span>
            </div>

            <div class="col-md-6">
                <label for="Section" class="form-label">Section</label>
                <!-- <input type="text" name="section" id="section"  class="form-control" > -->
                <select name="section" id="section" class="form-select" aria-label="Default select example" >
                    <option selected value="" disabled>Select section</option>
                    <option <?php if ($section == 'A') { ?> selected <?php } ?> value="A">A</option>
                    <option <?php if ($section == 'B') { ?> selected <?php } ?> value="B">B</option>
                    <option <?php if ($section == 'C') { ?> selected <?php } ?> value="C">C</option>
                </select>
                <span id="Section" class="text-danger font-weight-bold"></span>
            </div>

            <div class="col-md-6">
                <label for="formFile" class="form-label">Profile Image</label>
                <input class="form-control" type="file" name="image" id="image" value="<img src='<?php echo $image; ?>'>">
                <span id="Profile" class="text-danger font-weight-bold"></span>
            </div>
            <!-- <div class="col-md-6">
                <label for="inputZip" class="form-label">Postal Code</label>
                <input type="number" name="Postal_Code" id="inputZip" value="38000" class="form-control" id="inputZip" readonly>
            </div> -->
            <!-- <input type="hidden" id="sno" name="sno" value=<?php echo $sno; ?>> -->
            <!-- <div class="col-12">
                <button type="submit" name="save" class="btn btn-primary">Update</button>
            </div> -->
            <div class="d-grid gap-2 col-4 mx-auto mt-3">
                <button type="submit" name="save" class="btn btn-primary fw-bold fs-5">Update</button>
            </div>
        </form>
    </div>
    <script src="./Validation_of_dashboard_forms.js"></script>
</body>

</html>