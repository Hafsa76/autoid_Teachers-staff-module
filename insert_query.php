<?php
include "database_connection.php";
// include "./validation.php";


if (isset($_POST['save'])) {
    // function
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }


    $id = $_POST['id'];
    $name = $_POST['name'];
    $Gender = $_POST['Gender'];
    $dob = $_POST['dob'];
    $mobile = $_POST['mobile'];
    $joining_date = $_POST['joining_date'];
    $qualification = $_POST['qualification'];
    $Institute = $_POST['Institute'];
    $experience = $_POST['experience'];
    // $username = $_POST['username'];
    $email = $_POST['email'];
    // $password = $_POST['password'];
    // $repeat_password = $_POST['repeat_password'];
    $address = $_POST['address'];
    $a_class = $_POST['a_class'];
    $section = $_POST['section'];
    $image = $_POST['image'];

   
    


    $result = "INSERT INTO auto_staff_data(id,name,Gender,dob,mobile,joining_date,qualification,Institute,experience,email,address,a_class,section,image) VALUES('$id','$name','$Gender','$dob','$mobile','$joining_date','$qualification','$Institute','$experience','$email','$address','$a_class','$section','$image')";

    if (mysqli_query($connection, $result)) {

        echo "New record successfully created!";
        header("Location:staff_list.php");
        // header('show_table_query.php');

    } else {

        echo "Error: " . $result . "    " . mysqli_error($connection);
    }

    mysqli_close($connection);
}
?>