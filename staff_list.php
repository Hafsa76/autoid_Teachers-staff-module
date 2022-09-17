<?php

include "sidebar.php";
include "header.php";
include "database_connection.php";


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
    <style>
        table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            border: 1px solid #ddd;
        }

        th,
        td {
            text-align: center;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2
        }
    </style>

</head>

<body>
    <div class="container mt-4 pt-5 bg-light">
        <h2 class="ms-4 mb-4">Teacher List</h2>
        <div class="container">
            <div class="container row g-3 mt-5 pb-0">

                <div style="overflow-x:auto;">
                    <div class="table-responsive">
                        <!-- <div class="pb-4 ">Show:
                            <select name="subject" id="subject" class="pe-4 ">
                                <option value="" selected="selected">10</option>
                                <option value="">15</option>
                                <option value="">20</option>
                                <option value="">25</option>
                            </select> entries
                        </div> -->
                        <table class="table display data-table text-nowrap ">
                            <thead>
                                <tr>
                                    <th class="p-4">ID</th>
                                    <th class="p-4">Image</th>
                                    <th class="p-4">Name</th>
                                    <th class="p-4">Gender</th>
                                    <th class="p-4">DOB</th>
                                    <th class="p-4">Mobile</th>
                                    <th class="p-4">Joining_Date</th>
                                    <th class="p-4">Qualification</th>
                                    <th class="p-4">Degree Institute</th>
                                    <th class="p-4">Experience</th>
                                    <th class="p-4">Email</th>
                                    <th class="p-4">Address</th>
                                    <th class="p-4">Assigned Class</th>
                                    <th class="p-4">Section</th>
                                    <th class="p-4" colspan="3">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // $show = "SELECT * FROM auto_staff_data ORDER BY id DESC";
                                $show = "SELECT * FROM auto_staff_data";

                                $table_data = mysqli_query($connection, $show);

                                while ($row = mysqli_fetch_array($table_data)) {
                                ?>
                                    <tr>
                                        <!-- <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label">#0021</label>
                                            </div>
                                        </td> -->
                                        <td class="p-4"><?php echo $row['id']; ?></td>
                                        <td class="p-3"><img src="<?php echo $row['image']; ?>" height="40px" width="40px" class="rounded-circle"></td>
                                        <td class="p-4"><?php echo $row['name']; ?></td>
                                        <td class="p-4"><?php echo $row['Gender']; ?></td>
                                        <td class="p-4"><?php echo $row['dob']; ?></td>
                                        <td class="p-4"><?php echo $row['mobile']; ?></td>
                                        <td class="p-4"><?php echo $row['joining_date']; ?></td>
                                        <td class="p-4"> <?php echo $row['qualification']; ?></td>
                                        <td class="p-4"> <?php echo $row['Institute']; ?></td>
                                        <td class="p-4"><?php echo $row['experience']; ?></td>
                                        <td class="p-4"><?php echo $row['email']; ?></td>
                                        <td class="p-4"><?php echo $row['address']; ?></td>
                                        <td class="p-4"><?php echo $row['a_class']; ?></td>
                                        <td class="p-4"><?php echo $row['section']; ?></td>
                                        
                                        <td class="p-3">
                                            <a href="./staff_edit.php?id=<?php echo $row['id'];?>"><button class="btn btn-success" title="Edit Data"><i class="fa-solid fa-pen-to-square fs-6 "></i></button></a>
                                        </td>
                                        <td class="p-3">
                                            <a href="./delete.php?id=<?php echo $row['id'];?>"><button class="btn btn-danger" title="Delete Data"><i class="fa-solid fa-trash fs-6 "></i></button></a>
                                        </td>
                                        <td class="p-3">
                                            <a href="./Staff_view.php?id=<?php echo $row['id'];?>"><button class="btn btn-info" title="View Profile"><i class="fa-solid fa-user fs-6 "></i></button></a>
                                        </td>
                                    </tr>

                                <?php
                                }
                                ?>
                                <!-- <tr>
                                    <td class="p-4">E1235 </td>
                                    <td class="p-4">Nathan Humphries</td>
                                    <td class="p-4">Female</td>
                                    <td class="p-4">1</td>
                                    <td class="p-4">Mathematics</td>
                                    <td class="p-4">A</td>
                                    <td class="p-4"> 03124456845</td>
                                    <td class="p-4">86 Lamphey Road, Thelnetham</td>
                                    <td class="p-4">
                                        <i class="fa-solid fa-pen-to-square fs-4 "></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <i class="fa-solid fa-trash fs-4 "></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-4">E1236</td>
                                    <td class="p-4">Nathan Humphries</td>
                                    <td class="p-4">Male</td>
                                    <td class="p-4">2</td>
                                    <td class="p-4">Mathematics</td>
                                    <td class="p-4">C</td>
                                    <td class="p-4"> 03124456845</td>
                                    <td class="p-4">86 Lamphey Road, Thelnetham</td>
                                    <td class="p-4">
                                        <i class="fa-solid fa-pen-to-square fs-4 "></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <i class="fa-solid fa-trash fs-4 "></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-4">E1237</td>
                                    <td class="p-4">Nathan Humphries</td>
                                    <td class="p-4">Female</td>
                                    <td class="p-4">4</td>
                                    <td class="p-4">Mathematics</td>
                                    <td class="p-4">B</td>
                                    <td class="p-4"> 03124456845</td>
                                    <td class="p-4">86 Lamphey Road, Thelnetham</td>
                                    <td class="p-4">
                                        <i class="fa-solid fa-pen-to-square fs-4 "></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <i class="fa-solid fa-trash fs-4 "></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-4">E1238</td>
                                    <td class="p-4">Nathan Humphries</td>
                                    <td class="p-4">Male</td>
                                    <td class="p-4">7</td>
                                    <td class="p-4">English</td>
                                    <td class="p-4">D</td>
                                    <td class="p-4"> 03124456845</td>
                                    <td class="p-4">86 Lamphey Road, Thelnetham</td>
                                    <td class="p-4">
                                        <i class="fa-solid fa-pen-to-square fs-4 "></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <i class="fa-solid fa-trash fs-4 "></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-4">E1239</td>
                                    <td class="p-4">Calvin Lois</td>
                                    <td class="p-4">Female</td>
                                    <td class="p-4">10</td>
                                    <td class="p-4">English</td>
                                    <td class="p-4">A</td>
                                    <td class="p-4"> 03124456845</td>
                                    <td class="p-4">86 Lamphey Road, Thelnetham</td>
                                    <td class="p-4">
                                        <i class="fa-solid fa-pen-to-square fs-4 "></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <i class="fa-solid fa-trash fs-4 "></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-4">E1234</td>
                                    <td class="p-4">Calvin Lois</td>
                                    <td class="p-4">Male</td>
                                    <td class="p-4">5</td>
                                    <td class="p-4">Physics</td>
                                    <td class="p-4">C</td>
                                    <td class="p-4"> 03124456845</td>
                                    <td class="p-4">86 Lamphey Road, Thelnetham</td>
                                    <td class="p-4">
                                        <i class="fa-solid fa-pen-to-square fs-4 "></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <i class="fa-solid fa-trash fs-4 "></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-4">E1234</td>
                                    <td class="p-4">Calvin Lois</td>
                                    <td class="p-4">Female</td>
                                    <td class="p-4">8</td>
                                    <td class="p-4">Physics</td>
                                    <td class="p-4">B</td>
                                    <td class="p-4"> 03124456845</td>
                                    <td class="p-4">86 Lamphey Road, Thelnetham</td>
                                    <td class="p-4">
                                        <i class="fa-solid fa-pen-to-square fs-4 "></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <i class="fa-solid fa-trash fs-4 "></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-4">E1234</td>
                                    <td class="p-4">Calvin Lois</td>
                                    <td class="p-4">Male</td>
                                    <td class="p-4">9</td>
                                    <td class="p-4">Physics</td>
                                    <td class="p-4">D</td>
                                    <td class="p-4"> 03124456845</td>
                                    <td class="p-4">86 Lamphey Road, Thelnetham</td>
                                    <td class="p-4">
                                        <i class="fa-solid fa-pen-to-square fs-4 "></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <i class="fa-solid fa-trash fs-4 "></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-4">E1234</td>
                                    <td class="p-4">John Chambers</td>
                                    <td class="p-4">Female</td>
                                    <td class="p-4">6</td>
                                    <td class="p-4">Physics</td>
                                    <td class="p-4">D</td>
                                    <td class="p-4"> 03124456845</td>
                                    <td class="p-4">86 Lamphey Road, Thelnetham</td>
                                    <td class="p-4">
                                        <i class="fa-solid fa-pen-to-square fs-4 "></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <i class="fa-solid fa-trash fs-4 "></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-4">E1234</td>
                                    <td class="p-4">John Chambers</td>
                                    <td class="p-4">Male</td>
                                    <td class="p-4">4</td>
                                    <td class="p-4">Physics</td>
                                    <td class="p-4">A</td>
                                    <td class="p-4"> 03124456845</td>
                                    <td class="p-4">86 Lamphey Road, Thelnetham</td>
                                    <td class="p-4">
                                        <i class="fa-solid fa-pen-to-square fs-4 "></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <i class="fa-solid fa-trash fs-4 "></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-4">E1234</td>
                                    <td class="p-4">John Chambers</td>
                                    <td class="p-4">Female</td>
                                    <td class="p-4">3</td>
                                    <td class="p-4">English</td>
                                    <td class="p-4">C</td>
                                    <td class="p-4"> 03124456845</td>
                                    <td class="p-4">86 Lamphey Road, Thelnetham</td>
                                    <td class="p-4">
                                        <i class="fa-solid fa-pen-to-square fs-4 "></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <i class="fa-solid fa-trash fs-4 "></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-4">E1234</td>
                                    <td class="p-4">John Chambers</td>
                                    <td class="p-4">Male</td>
                                    <td class="p-4">4</td>
                                    <td class="p-4">Physics</td>
                                    <td class="p-4">A</td>
                                    <td class="p-4"> 03124456845</td>
                                    <td class="p-4">86 Lamphey Road, Thelnetham</td>
                                    <td class="p-4">
                                        <i class="fa-solid fa-pen-to-square fs-4 "></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <i class="fa-solid fa-trash fs-4 "></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-4">E1234</td>
                                    <td class="p-4">John Chambers</td>
                                    <td class="p-4">Male</td>
                                    <td class="p-4">4</td>
                                    <td class="p-4">Physics</td>
                                    <td class="p-4">A</td>
                                    <td class="p-4"> 03124456845</td>
                                    <td class="p-4">86 Lamphey Road, Thelnetham</td>
                                    <td class="p-4">
                                        <i class="fa-solid fa-pen-to-square fs-4 "></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <i class="fa-solid fa-trash fs-4 "></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-4">E1234</td>
                                    <td class="p-4">John Chambers</td>
                                    <td class="p-4">Female</td>
                                    <td class="p-4">3</td>
                                    <td class="p-4">English</td>
                                    <td class="p-4">C</td>
                                    <td class="p-4"> 03124456845</td>
                                    <td class="p-4">86 Lamphey Road, Thelnetham</td>
                                    <td class="p-4">
                                        <i class="fa-solid fa-pen-to-square fs-4 "></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <a href="./delete.php?id='.$show[id]'"><i class="fa-solid fa-trash fs-4 "></i></a>
                                    </td>
                                </tr> -->

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>