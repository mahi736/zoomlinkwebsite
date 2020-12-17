<!-- Extra Css -->
<style>

    img{
        width: 40px;
        height: 40px;
    }
</style>
<?php
echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Zoom Link</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="routine.php">Routine</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="exam.php">Exam Section</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="discuss.php">Discuss <span class="badge bg-success">Log in not required</span></a>
                </li>
            </ul>';
            // if user logged in user image name and log out button should be shown
            if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
          echo  '<img src="user.png" alt="user image">
          <p class="text-light px-3 my-0">Welcome '. $_SESSION['name'] .'</p>
            <a href="logout.php" class="btn btn-danger">Log out</a>';
            }
            // if user is not logged in log in and sign up should be shown.
            else{
          echo  '<a href="login.php" class="btn btn-danger mx-2">Log in</a>
            <a href="signup.php" class="btn btn-success">Sign Up</a>';
            }
       echo '</div>
    </div>
</nav>';
?>