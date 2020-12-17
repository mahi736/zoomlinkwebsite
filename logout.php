<?php
// just come and go
session_start();
session_destroy();
header("location: /index.php?logout=true"); // location should be changed
?>