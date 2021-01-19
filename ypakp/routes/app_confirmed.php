<?php
// echo "Hello world!";
include('../views/header.html');


// Success alert message
echo '<script language="javascript">';
echo 'alert("Το Ραντεβού σας ορίστηκε επιτυχώς!")';
echo '</script>';


$firstname      = $_POST['firstname'];
$lastname       = $_POST['lastname'];
$id             = $_POST['id'];
$address        = $_POST['address'];
$phonecall      = $_POST['phonecall'];
$mail           = $_POST['mail'];
$date           = $_POST['date'];
$appt_time      = $_POST['appt-time'];
$department     = $_POST['department'];
$text           = $_POST['exampleFormControlTextarea1'];


$time = $_POST['appt-time'];
$new_time = substr($time,0,2);
$int_time = (int) $new_time;

if ($int_time >=  12 ) {
    
    $timeflag = ' μ.μ';
} else {

    $timeflag = ' π.μ';
}


include('../views/app_confirmed.html');
include('../views/footer.html');

?>
