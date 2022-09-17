<?php

    include "database_connection.php";

    if (isset($_POST['save'])) {
        // function
        function test_input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM `admin_login` WHERE 	email='$email' AND password='$password'";
        $result = mysqli_query($connection, $sql);
        $num = mysqli_num_rows($result);
        if ($num == 1) {
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['email'] = $email;
            //   $err = "";
            header("location: dashboard_Staff_Add.php");
        } else { 
            
            //    $err = "Invalid Name or Pass";
            header("location: school_login.php");
           
        }

    }
