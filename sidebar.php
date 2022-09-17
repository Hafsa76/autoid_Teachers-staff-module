<!-- sidebar -->
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

    <script src="./Validation of dashboard_forms.js"></script>

</head>

<body>
    <!--  _Sidebar Start_  -->
    <input type="checkbox" id="sidebar-toggle" />
    <div class="sidebar">
        <div class="sidebar-header">
            <h3 class="brand">
                <span class="fab fa-staylinked"></span>
                <span>Evision</span>
            </h3>
            <label for="sidebar-toggle" class="fas fa-bars"></label>
        </div>

        <div class="sidebar-menu">
            <ul class="ps-0">
                <li class="dropdown">
                    <span class="fas fa-users"></span>
                    <span>
                        <span class="ps-2">
                            <a href="#"> Staff </a>
                        </span>
                        <div class="dropdown-content">
                            <a href="./dashboard_Staff_Add.php">Staff Add</a>
                            <!-- <a href="./Staff_view.php">Staff View</a> -->
                            <!-- <a href="./staff_edit.php">Staff Edit</a> -->
                            <a href="./staff_list.php">Staff List</a>
                        </div>
                    </span>
                </li>
                <li>
                    <a href="">
                        <span class="fa-solid fa-book-open-reader"></span>
                        <span>Student</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="fa-solid fa-money-bill-wave"></span>
                        <span> Fee </span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="fa-solid fa-file-pen"></span>
                        <span>Examination</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="fa-solid fa-book"></span>
                        <span>Assignment & Quizes</span>
                    </a>
                </li>
                <li class="pt-2" style="border-top: 1px solid #454545;">
                    <a href="">
                        <span class="fas fa-cog"></span>
                        <span>Settings</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="fas fa-question-circle"></span>
                        <span>Help</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="fas fa-shield-alt"></span>
                        <span>Privacy</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!--  _Sidebar End_  -->

</body>

</html>