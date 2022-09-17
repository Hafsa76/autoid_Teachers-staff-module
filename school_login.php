
<html>

<head>
    <title>
        Log-In
    </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="./school_login.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body>


    <div class="wrapper">
        <div class="logo">
            <img src="https://assets.nationbuilder.com/themes/6064584fc294800b9565f35c/attachments/original/1617189889/login.png?1617189889"
                alt="">
            <!-- https://www.freepnglogos.com/uploads/twitter-logo-png/twitter-bird-symbols-png-logo-0.png -->
        </div>
        <div class="text-center mt-4 name">
            Log-In
        </div>
        <span class="text-muted text-center d-flex">Enter your credentials to access your account.</span>
        <form class="p-3 mt-2" action="./school_login_match.php" method="POST">
            <div class="form-field d-flex align-items-center">
                <span class="fa-regular fa-envelope"></span>
                <input type="email" name="email" id="email" placeholder="Email" required>
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="password" id="password" placeholder="Password" required>
            </div>
            <input type="checkbox" onclick="myFunction()" class="ms-2"> Show Password
            <!-- <input type="password" id="password" class="password" name="password" required><br><br>
			<input type="checkbox" onclick="myFunction()">Show Password<br><br> -->
            <!-- <p><?php //echo $err; ?></p> -->
            <button type="submit" name="save" class="btn btn-outline-primary mt-3">Login</button>
        </form>
        <!-- <div class="text-center  fs-6">
            <a href="#" class="">Forget password?</a> or <a href="#" class=""> Sign up</a>
        </div> -->
    </div>
    <script src="./show_password.js"></script>
</body>

</html>