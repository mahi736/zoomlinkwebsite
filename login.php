<?php
// default error values should be false
$login = false;
$error = false;
date_default_timezone_set('Asia/Dhaka'); // seting our timezone
// if server method is post
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    // connecting to database
    include 'partials/_dbconnect.php';
    // taking the user_email and password from the form on line no. 79
    $user_email = $_POST['login_email'];
    $user_pass = $_POST['login_pass'];
    // chacking the user is available or not
    $sql = "SELECT * FROM `users` WHERE `user_email` = '$user_email';";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    // if we find any user... 
    if($num == 1){
        $row = mysqli_fetch_assoc($result);
        // verifing the password
        if(password_verify($user_pass, $row['user_pass'])){
            session_start(); // if password matched session starts. user now logged in.
            // managing the session variables
            $_SESSION['loggedin'] = true;
            $_SESSION['email'] = $user_email;
            $_SESSION['id'] = $row['user_id'];
            $_SESSION['name'] = $row['user_name'];
            // you are successfully logged in go to discuss section
            header('Location: discuss.php?login=true');
        }
        else{
            // username or pass not mathced bro.
            $error = true;
        }
    }
    else{
        $error = true;
    }
}
?>
<!-- html starts from here  -->
<!doctype html>

<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Log in to Zoom Link</title>
    <!-- adding sweetalerts -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <style>
        .error{
            color: red;
        }
        h3{
            color: green;
        }
        h2{
            color: red;
        }
    </style>
</head>

<body>
    <?php
    // ading navbar
    include 'partials/_otheader.php';
    ?>
    <!-- here is the form -->
    <div class="container my-5">
        <h2 class="my-4">Log in to zoomlink</h2>
        <form action="login.php" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="login_email" name="login_email" aria-describedby="emailHelp" placeholder="example@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="login_pass" name="login_pass" placeholder="password">
                <a class="my-3" href="forgot.php">Forgot Password?</a>
                <p class="my-3">Don't have a zoomlink account? <a href="signup.php">Signup Now!</a></p>
            </div>
            <button type="submit" class="btn btn-primary">Log in</button>
        </form>
    </div>
    <?php
    // alerts
    if(isset($_GET['sign']) && $_GET['sign'] == true){
       echo "<script>
        Swal.fire({
            title: '<h3>Success</h3>',
            icon: 'success',
            html:
            '<h3>Your Account Created Successfully</h3>',
        })
    </script>";
    }
    if($login){
        echo "<script>
        Swal.fire({
            title: '<h3>Success</h3>',
            icon: 'success',
            html:
            '<h3>You are successfully logged in as ". $_SESSION['name'] ."</h3>',
        })
    </script>";
    }
    if($error){
        echo "<script>
        Swal.fire({
            title: '<h2>Error</h2>',
            icon: 'error',
            html:
            '<h2>Incorrect username or password</h2>',
        })
    </script>";
    }
    if(isset($_GET['discuss']) && $_GET['discuss'] == true){
        echo "<script>
        Swal.fire({
            title: '<h2>Error</h2>',
            icon: 'error',
            html:
            '<h2>You Must Log in first</h2>',
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