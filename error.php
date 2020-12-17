<?php
session_start(); // starts the session
?>
<!-- this page is for any unexpected errors -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
    <!-- adding sweetalert  -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <!-- adding bootstrap css   -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <style>
    h3 {
        color: red;
    }
    </style>
</head>

<body>
    <?php
    // including navbar
    include 'partials/_otheader.php';
    ?>
    <div class="container text-center my-4">
        <div class="alert alert-danger" role="alert">
            <h4 class="alert-heading">404 Bad Request</h4>
            <p>Something Went Wrong</p>
        </div>
    </div>
    <script>
    // alert
    Swal.fire({
        title: '<h2>Error</h2>',
        icon: 'error',
        html: '<h3>Something Went Wrong</h3>',
    })
    </script>
    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>

</body>

</html>