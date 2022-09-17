<?php

$server_name = "localhost";
$user_name = "root";
$password = "";
$database_name = "school_management_system";

$connection = mysqli_connect($server_name,$user_name,$password,$database_name);
if (!$connection) {
    die("NO! connection not established: " .mysqli_connect_error());
}
// else {
//     echo "yes! connection successfully established <br>";
// }

    // "mysqli_error($myConnection)" it takes $myConnection as a parameter, but "mysqli_connect_error()" does not take any parameter.
?>