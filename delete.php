<?php
include "database_connection.php";
if(isset($_GET['id'])){
    $id= $_GET['id'];
    delete_data($connection, $id);
}
// delete data query
function delete_data($connection, $id){
   
    $query="DELETE FROM `auto_staff_data` WHERE id = '$id'";  
    $exec= mysqli_query($connection, $query);
    if($exec){
        header("Location: staff_list.php");
      echo "Data was deleted successfully";
    }else{
        $msg= "Error: " . $query . "<br>" . mysqli_error($connection);
      echo $msg;
    }
}
?>