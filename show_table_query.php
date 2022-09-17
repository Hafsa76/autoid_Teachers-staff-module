<html>

<head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <style>
        table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            border: 1px solid #ddd;
        }

        th,
        td {
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2
        }
    </style>

</head>

<body class="container"></body>

</html>

<?php
include "database_connection.php";


// if($connection->query($result) === TRUE){

// then show data from database in table 

$show = "SELECT * FROM staff_data";

if ($table_data = mysqli_query($connection, $show)) {

    if (mysqli_num_rows($table_data) > 0) {
        echo "<center>";
        echo "<div class='table-responsive' style='overflow-x:auto;'>";
        echo "<table  class = 'table display data-table text-nowrap mt-5' ><tr>";
        echo "<th class = 'bg-warning p-2'>ID</th>";
        echo "<th class = 'bg-warning p-2'>Name</th>";
        echo "<th class = 'bg-warning p-2'>Gender</th>";
        echo "<th class = 'bg-warning p-2'>dob</th>";
        echo "<th class = 'bg-warning p-2'>mobile</th>";
        echo "<th class = 'bg-warning p-2'>joining_date</th>";
        echo "<th class = 'bg-warning p-2'>qualification</th>";
        echo "<th class = 'bg-warning p-2'>experience</th>";
        echo "<th class = 'bg-warning p-2'>username</th>";
        echo "<th class = 'bg-warning p-2'>email</th>";
        echo "<th class = 'bg-warning p-2'>password</th>";
        echo "<th class = 'bg-warning p-2'>repeat_password</th>";
        echo "<th class = 'bg-warning p-2'>address</th>";
        echo "<th class = 'bg-warning p-2'>image</th></tr>";
    } else {
        echo "NO Record found!";
    }

    while ($row = mysqli_fetch_array($table_data)) {
        echo "<tr><td class = 'bg-light p-2'>" . $row['id'] . "</td>";
        echo "<td class = 'bg-light p-1'>" . $row['name'] . "</td>";
        echo "<td class = 'bg-light p-1'>" . $row['Gender'] . "</td>";
        echo "<td class = 'bg-light p-1'>" . $row['dob'] . "</td>";
        echo "<td class = 'bg-light p-1'>" . $row['mobile'] . "</td>";
        echo "<td class = 'bg-light p-1'>" . $row['joining_date'] . "</td>";
        echo "<td class = 'bg-light p-1'>" . $row['qualification'] . "</td>";
        echo "<td class = 'bg-light p-1'>" . $row['experience'] . "</td>";
        echo "<td class = 'bg-light p-1'>" . $row['username'] . "</td>";
        echo "<td class = 'bg-light p-1'>" . $row['email'] . "</td>";
        echo "<td class = 'bg-light p-1'>" . $row['password'] . "</td>";
        echo "<td class = 'bg-light p-1'>" . $row['repeat_password'] . "</td>";
        echo "<td class = 'bg-light p-1'>" . $row['address'] . "</td>";
        echo "<td class = 'bg-light p-1'>" . $row['image'] . "</td></tr>";
    }

    echo "</table>";
    echo "</div>";
    echo "</center>";
}

// else {
//     echo "Error: " . $result . "<br>" . $connection->error;
// }

// }

mysqli_close($connection);


?>