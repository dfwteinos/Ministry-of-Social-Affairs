<?php

session_start();
// if(!isset($_SESSION["sess_user"])){  
    // echo "we failed";
    // header("location:login2.php");  
// }
// 
// else {
    // echo("Welcome, user:".$_SESSION['sess_user']);
    include('../views/header.html');
    include('../views/appointment.html');
    include('../views/footer.html');
// }

?>
