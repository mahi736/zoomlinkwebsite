<?php
// all error values are false
$error = false;
$success = false;
$update = false;
$deletesuccess = false;
$mejorchange = false; // this is for new update to do not vagano and visit comment sectin but if he wants to comment he should log in.
session_start(); // starts the session
//যারা login না করে এই page এ ঢুকার চেষ্টা করবে তারা বিনা invitation এ দাওয়াত খেতে আসার মতো, এদেরকে সম্মানের সহিত ভাগিয়ে দিতে হবে । ভাগিয়ে দেওয়ার code নিম্নরুপঃ 
if(!isset($_SESSION['loggedin'])){
    // header('Location: login.php?discuss=true'); // age vagate caisiliam ehon ar vagaitam na
    // যা ভাগ এইহান থেকে
    $mejorchange = true; // he can comment
}
else{
    // connecting to database
    include 'partials/_dbconnect.php';
    // if request method is post this will happen.
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // if user wants to delete a comment we are giving this peramitare as a post request from a form at line no. 220
        if(isset($_POST['delete_comment'])){
            // targetting from delete id, delete id is unique
            $comment_id_delete = $_POST['delete_comment'];
            // here is the sql to delete comment from database
            $sql = "DELETE FROM `comments` WHERE `comments`.`comment_id` = $comment_id_delete";
            $result = mysqli_query($conn, $sql);
            if($result){
                $deletesuccess = true;
                // show an alert that delete is successfull.
            }
        }
        // if user wants to edit a comment
        else if(isset($_POST['comment_id_edit'])){
            // receving the parametars from post request from a form on line no. 192
            $comment_edit = $_POST['edit_comment'];
            $comment_id_edit = $_POST['comment_id_edit'];
            // update the record
            $sql = "UPDATE `comments` SET `comment` = '$comment_edit' WHERE `comments`.`comment_id` = $comment_id_edit;";
            $result = mysqli_query($conn, $sql);
            if($result){
                $update = true;
                // show an alert that updated successfully
            }
        }
        else{
            // if user wants to post a comment
            // commnet parametar from post request from a form on line no. 
        $comment = $_POST['comment'];
        // beware of xss attack and other html tags
        $comment = str_replace("'", "\'", $comment);
        $comment = str_replace("<", "&lt;", $comment);
        $comment = str_replace(">", "&gt;", $comment);
        // fixing nbsp error
        // $comment = str_replace(" ", "&nbsp;", $comment);
        $comment = str_replace("&nbsp;", "&amp;nbsp;", $comment);
        // wraping the words so it will not go into horizontal
        $comment = wordwrap($comment, 200, "</br>", true);
        $comment = "$comment\n";
        // $comment = nl2br($comment); we will work with it again.
        // here is the user id who posting the comment
        $comment_by = $_SESSION['id'];
        // null comment should not be posted here
        if($comment == null){
            // show an error
            $error = true;
        }
        else{
            // if comment is not null insert the comment on the database
           $sql = "INSERT INTO `comments` (`comment`, `comment_by`, `comment_time`) VALUES ('$comment', '$comment_by', current_timestamp());"; 
           $result = mysqli_query($conn, $sql);
           if($result){
               // give a success alert
               $success = true;
           }
        }
    }
    }
}
?>
<!-- starting html -->
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Discuss Section</title>
    <!-- including sweet alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <style>
    /* extra css */
    h3 {
        color: green;
    }

    h2 {
        color: red;
    }
    </style>
</head>

<body>
    <?php
    // including navbar
      include 'partials/_diheader.php'
      ?>
      <!-- discuss html starts from here -->
    <div class="container my-4">
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Welcome To the discussion</h4>
            <p>Say something about our service. You can post anything here. All important updates and notices about our
                website will be posted here keep an eye</p>
        </div>
                <h2>Add a comment</h2>
                <?php
                // if you are not logged in you cant comment
                if($mejorchange){
              echo  '<div class="container my-4">
        <div class="alert alert-success" role="alert">
            <h2 class="alert-heading">Log in to post a comment</h2>
                </div>';
                }
            else{
                // if you are logged in comment.
        echo '<form action="discuss.php" method="post">
            <div class="mb-3">
                <textarea class="form-control" id="comment" name="comment" rows="3"
                    placeholder="Your Comment"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Post Comment</button>
        </form>';
            }
        ?>
        <div class="container my-3">
            <h2>Comments</h2>
            <?php
            // writing php to display the comments
            // it is included but i dont know why it giving error
            include 'partials/_dbconnect.php';
            // selecting from comments
            $sql = "SELECT * FROM `comments`";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_assoc($result)){
                // comments are displaying
                // taking comment, user who commenting's id
            $comment = $row['comment'];
            $comment_user_id = $row['comment_by'];
            // taking the username who posts the comment
            $sql2 = "SELECT `user_name` FROM `users` WHERE `user_id` = $comment_user_id";
            $result2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_assoc($result2);
            // this line is useless but to fetch it we should write. well no pain no gain
            $sql3 = "SELECT * FROM `users` WHERE `user_id` = $comment_user_id";
            $result3 = mysqli_query($conn, $sql3);
            $row3 = mysqli_fetch_assoc($result3);
            $time = $row['comment_time'];
            // here is the html what we displaying
            echo '<div class="media my-4">
                <img src="user.png" width="70px" class="mr-3" alt="...">
                <div class="media-body">
                    <h5 class="mt-0">
                        <p class="font-weight-bold">'. $row2['user_name'] .' at '. $time .'</p>
                    </h5>
                    <p> '. $comment .' </p>
                </div>';
                // edit and delete button should not be shown to everyone.
                if(isset($_SESSION['id'])){
                if($row['comment_by'] == $_SESSION['id']){
               echo '<button class="edit btn btn-primary" id='. $row['comment_id'] .'>Edit</button>
                <button class="delete btn btn-primary" data-bs-toggle="modal" data-bs-target="#deleteModal" id=d'. $row['comment_id'] .'>Delete</button>
            </div>';
                }
            }
        }
            ?>
        </div>
        <!-- edit modal -->

        <!-- comment edit Modal -->
        <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel">Edit this comment</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="discuss.php" method="post">
                            <input type="hidden" name="comment_id_edit" id="comment_id_edit">
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Edit Comment</label>
                                <textarea class="form-control" id="edit_comment" name="edit_comment"
                                    rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>



        <!-- comment delete Modal -->
        <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteModalLabel">Delete Confrimation</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="discuss.php" method="post">
                            <p>Are you Sure you want to delete this comment?</p>
                            <input type="hidden" name="delete_comment" id="delete_comment">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                            <button type="submit" class="btn btn-primary">Yes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>



        <?php
        // all alerts are here
    if(isset($_GET['login']) && $_GET['login'] == true){
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
                    '<h2>Comment Should not be null</h2>',
            })
        </script>";
    }
    if($success){
        echo "<script>
            Swal.fire({
                title: '<h3>Success</h3>',
                icon: 'success',
                html:
                    '<h3>Your comment is posted successfully</h3>',
            })
        </script>";
    }
    if($update){
        echo "<script>
            Swal.fire({
                title: '<h3>Success</h3>',
                icon: 'success',
                html:
                    '<h3>Your comment updated successfully</h3>',
            })
        </script>";
    }
    if($deletesuccess){
        echo "<script>
            Swal.fire({
                title: '<h3>Success</h3>',
                icon: 'success',
                html:
                    '<h3>Your comment deleted successfully</h3>',
            })
        </script>";   
    }
    ?>
    <!-- do not confuse this are jquery and some are totally useless. no pain no gain -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
        </script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
            integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
            integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
        </script>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
            integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
            integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous">
        </script>
        <script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
        <script>
        // here is the javascript to display confrimation to edit and delete
        edits = document.getElementsByClassName('edit'); // getting all element from class edit on line no. 173
        Array.from(edits).forEach((element) => { // giving every element a click event
            element.addEventListener('click', (e) => {
                tr = e.target.parentNode; // his parentnode has the comment text
                comment = tr.getElementsByTagName("p")[1].innerText; // finds the text
                // console.log(comment); 
                edit_comment.value = comment; // edit_comment value from the form on line no. 196
                comment_id_edit.value = e.target.id; // comment_id_edit value from the form on line no. 193
                // console.log(e.target.id);
                $("#editModal").modal('toggle'); // toggling the modal
            })
        });
        deletes = document.getElementsByClassName('delete'); //getting all the element from class delete on line no. 174
        Array.from(deletes).forEach((element) => { // giving all element a click event
            element.addEventListener("click", (e) =>{
                delete_comment.value = e.target.id.substr(1,); // delete_comment value on line no. 222
            })
        })
        </script>
        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->

        <!-- Option 2: Separate Popper and Bootstrap JS -->
</body>

</html>