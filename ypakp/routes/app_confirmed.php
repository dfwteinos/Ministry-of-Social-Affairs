<?php
// echo "Hello world!";
include('../views/header.html');

echo $_POST['firstname'];
echo $_POST['lastname'];
echo $_POST['id'];
echo $_POST['address'];
echo $_POST['phonecall'];
echo $_POST['mail'];
echo $_POST['date'];
echo $_POST['appt-time'];
$selectOption = $_POST['department'];
echo $selectOption;
echo $_POST['exampleFormControlTextarea1'];

// echo $_POST['text'];

// $var = "eimai enas pousths alvanos eimai o mef ";

// include('../views/app_confirmed.html');
include('../views/footer.html');

?>
