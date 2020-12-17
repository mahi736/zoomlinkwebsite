<?php
session_start(); // starts the session
// errors should be false by default
$passerror = false;
$existerror = false;
date_default_timezone_set('Asia/Dhaka'); // seting our timezone
// it will run if server method is post
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    // connecting to database
    include 'partials/_dbconnect.php';
    // taking the name, email and pass confrim pass from form on line no. 88
    $user_name = $_POST['sign_name'];
    $user_email = $_POST['sign_email'];
    $user_pass = $_POST['sign_pass'];
    $user_cpass = $_POST['csign_pass'];
    // check user already existed or not
    $existsql = "SELECT * FROM `users` WHERE `user_email` = '$user_email';";
    $result = mysqli_query($conn, $existsql);
    $num = mysqli_num_rows($result);
    if($num > 0){
        // user name already exists
        $existerror = true;
    }
    else{
        if($user_pass == $user_cpass){
            // be aware of xss attacks html tags are not allowed
            $user_name = str_replace("'", "\'", $user_name);
            $user_name = str_replace("<", "&lt;", $user_name);
            $user_name = str_replace(">", "&gt;", $user_name);
            $user_name = str_replace(" ", "&nbsp;", $user_name);
            $user_email = str_replace("'", "\'", $user_email);
            $user_email = str_replace("<", "&lt;", $user_email);
            $user_email = str_replace(">", "&gt;", $user_email);
            $user_email = str_replace(" ", "&nbsp;", $user_email);
            // making the password hash
            $hash = password_hash($user_pass, PASSWORD_DEFAULT);
            // inserting the user information
            $sql = "INSERT INTO `users` (`user_name`, `user_email`, `user_pass`, `user_time`) VALUES ('$user_name', '$user_email', '$hash', current_timestamp());";
            $result = mysqli_query($conn, $sql);
            if($result){
                // your account created successfully go log in.
                header('Location: login.php?sign=true');
            }
            
        }
        else{
            // password and confrim pasword not matched bro.
            $passerror = true;
        }
    }
}    
?>
 <!-- html starts from here -->
<!doctype html>

<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Create an Zoom Link Account</title>
    <!-- including sweetalert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <style>
    /* extra css */
        h3{
            color: red;
        }
        h2{
            color: green;
        }
    </style>
</head>

<body>
    <?php
    include 'partials/_otheader.php';
    ?>
    <!-- here is the form -->
    <div class="container my-5">
        <h2 class="my-4">Create an Zoomlink Account</h2>
        <form action="signup.php" method="post">
            <div class="mb-3">
                <label for="text" class="form-label">Enter your Name</label>
                <input type="text" class="form-control" id="sign_name" name="sign_name" aria-describedby="emailHelp" placeholder="Name">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="sign_email" name="sign_email" aria-describedby="emailHelp" placeholder="example@example.com">
                <div id="emailHelp" class="form-text">Please enter a <b>valid email</b> it needed to reset your password</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="sign_pass" name="sign_pass" placeholder="password">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="csign_pass" name="csign_pass" placeholder="Confirm Password">
            </div>
            <button type="submit" class="btn btn-primary">Sign Up</button>
        </form>
    </div>
    <?php
    // handaling errors
    if($passerror){
        echo "<script>
        Swal.fire({
            title: '<h3>Error</h3>',
            icon: 'error',
            html:
            '<h3>Password and confirm Password field should be same</h3>',
        })
    </script>";
    }
    if($existerror){
       echo "<script>
        Swal.fire({
            title: '<h3>Error</h3>',
            icon: 'error',
            html:
            '<h3>Account already registered</h3>',
        })
    </script>";
    }
    ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
</body>

</html>