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

<body>
    <div class="container mt-4 pt-5 bg-light">
        <h2 class="ms-4 mb-4">Teacher Details</h2>
        <div class="container">
            <div class="container row g-3 mt-5 pb-0">
                <h4 class="">About Staff</h4>
                <div class="col-md-4 ">
                    <img src="<?php echo $image; ?>" height="90%" width="70%" class="rounded">
                </div>
                <div class="col-md-6">
                    <table class="table table-borderless">
                        <tr class="h5">
                            <td>Full Name:</td>
                            <td><?php echo $name; ?></td>
                        </tr>
                        <tr class="h5">
                            <td>Qualification:</td>
                            <td><?php echo $qualification; ?></td>
                        </tr>
                        <tr class="h5">
                            <td>Mobile:</td>
                            <td><?php echo $mobile; ?></td>
                        </tr>
                        <tr class="h5">
                            <td>Email:</td>
                            <td><?php echo $email; ?></td>
                        </tr>
                        <tr class="h5">
                            <td>Gender:</td>
                            <td><?php echo $Gender; ?></td>
                        </tr>
                        <tr class="h5">
                            <td>DOB:</td>
                            <td><?php echo $dob; ?></td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="container row mb-2" style="margin-top: 0%;">
                <p>Hello I am <b>“<?php echo $name; ?>”</b>, Enthusiastic professional seeking a position as a high school history teacher. A recent <b><?php echo $qualification; ?></b> from The College of <b><?php echo $Institute; ?></b> with experience teaching teenagers. The ability to make history topics interesting and exciting by providing current analogies and wide-ranging resources. An encouraging educator who can keep control over a classroom and encourage participation.</p>
            </div>

            <div class=" row g-3 mt-2 pb-3">
                <div class="card text-center col-md-3 mx-auto my-auto p-4 bg-info text-light" style="width: 18rem;">
                    <div class="card-body">
                        <h3 class="card-title">2850</h3>
                        <p class="card-text">Followers
                        </p>
                    </div>
                </div>
                <div class="card text-center col-md-3 mx-auto my-auto p-4 bg-info text-light" style="width: 18rem;">
                    <div class="card-body">
                        <h3 class="card-title">2050</h3>
                        <p class="card-text">Following
                        </p>
                    </div>
                </div>
                <div class="card text-center col-md-3 mx-auto my-auto p-4 bg-info text-light" style="width: 18rem;">
                    <div class="card-body">
                        <h3 class="card-title">2950</h3>
                        <p class="card-text">Friends
                        </p>
                    </div>
                </div>
            </div>

            <div class="container row g-3 mt-2 pb-1">
                <div class="col-md-12">
                    <h4>Permanent Address</h4>
                    <p><?php echo $address; ?></p>
                </div>
            </div>

            <div class="container row g-3  pb-1">
                <div class="col-md-12">
                    <h4>Present Address</h4>
                    <p><?php echo $address; ?></p>
                    <hr>
                </div>
            </div>

            <div class="container row g-3 mt-2 pb-3">
                <div class="col-md-12">
                    <h4>Skills</h4>
                    <p>A passionate and local educator who has spent decades working with children who have special needs. Offers plenty of positive reinforcement and works to develop a connection with each student. Semi-fluent in both Spanish and American Sign Language.</p>
                    <p>Excellent communication, interpersonal abilities and self-discipline.</p>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped bg-info" role="progressbar" aria-label="Info striped example" style="width: 80%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <br>
                    <p>Classroom Management, good organisational and time-management skills.</p>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped bg-info" role="progressbar" aria-label="Info striped example" style="width: 75%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <br>
                    <p>Initiative, leadership and supervisory skills and teamworking abilities.</p>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped bg-info" role="progressbar" aria-label="Info striped example" style="width: 85%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <br>
                    <p>Energy, stamina, patience, imagination, creativity and a sense of humour.</p>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped bg-info" role="progressbar" aria-label="Info striped example" style="width: 90%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <br>
                    <h4>Education</h4>
                    <p>Secondary Schooling at government school of secondary education, Faisalabad.</p>
                    <p>Higher Secondary Schooling at government school of higher secondary education, Faisalabad.</p>
                    <p>Bachelor of Science at <?php echo $Institute; ?> university of Art and Science, Faisalabad.</p>
                    <p>Master of Science at Cdm College of Engineering and Technology, Faisalabad.</p>
                    <br>

                    <h4>Certificates</h4>
                    <p>Arizona Educator Certification — Certification Unit at the Arizona Department of Education.</p>
                    <p>Shiblee Grammar School Certification — Certification Unit at the Shiblee Grammar Department of Education.</p>
                    <p>Central School System Certification — Certification Unit at the Central School Department of Education.</p>
                    <p>Horizone Educator Certification — Certification Unit at the Horizone Department of Education.</p>
                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, ratione.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, ratione.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, ratione.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, ratione.</p> -->
                    <br>
                    <hr>
                </div>
            </div>
            <!-- <form class="container row g-3 mt-2 pb-3">
                <h3>Settings</h3>
                <div class="col-md-6">
                    <label class="form-label">Username</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Current Password</label>
                    <input type="password" class="form-control">
                </div>
                <div class="col-md-6">
                    <label class="form-label">New Password</label>
                    <input type="password" class="form-control">
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form> -->
        </div>
    </div>
</body>

</html>