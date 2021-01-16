<?php
// echo "Hello world!";
include('../views/header.html');

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



// echo $_POST['firstname'];
// echo $_POST['lastname'];
// echo $_POST['id'];
// echo $_POST['address'];
// echo $_POST['phonecall'];
// echo $_POST['mail'];
// echo $_POST['date'];
// echo $_POST['appt-time'];
$time = $_POST['appt-time'];
$new_time = substr($time,0,2);
// echo $new_time;
$int_time = (int) $new_time;

if ($int_time >=  12 ) {
    
    $timeflag = ' μ.μ';
    // echo " μ.μ";
} else {

    $timeflag = ' π.μ';
    // echo " π.μ";
}




// $selectOption = $_POST['department'];
// echo $selectOption;
// echo $_POST['exampleFormControlTextarea1'];

// echo $_POST['text'];

// $var = "eimai enas pousths alvanos eimai o mef ";

include('../views/app_confirmed.html');
include('../views/footer.html');

?>
