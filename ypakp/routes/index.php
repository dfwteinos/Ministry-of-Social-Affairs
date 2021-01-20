<?php   

session_start();  

    if (isset($_SESSION['sess_user'])){

        include('../views/header.html');
        include('../views/index.html');
        include('../views/footer.html');
    }
    else {

    include('../views/header.html');
//    include("../views/test.html");
    include('../views/index.html');
    include('../views/footer.html');

    }
?>  
