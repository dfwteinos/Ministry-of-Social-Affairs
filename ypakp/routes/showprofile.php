<?php   

session_start();  
$con = new mysqli('localhost','root','','ypakp');
if($con-> connect_errno){
    echo "failed to connect to MySQL: ", $mysqli -> connect_errno;
}

$con -> select_db('ypakp') or die("cannot select DB");  

$user = $_SESSION['sess_user'];
$query = $con -> query("SELECT * FROM users WHERE username='".$user."'");  

if($query){

    $row = mysqli_num_rows($query);

    if ($row){

        $record = mysqli_fetch_assoc($query);
        $dbusername     = $record['username'];
        $dbemail        = $record['email'];
        $dbfirstname    = $record['first_name'];
        $dblastname     = $record['last_name'];
        $dbusertype     = $record['user_type'];
    }

    else {

        echo'There is no user with this username.';
        header("location:index.php");
    }
}

else {
    echo "There is no user with this username";
}

include('../views/header.html');
include('../views/showprofile.html');
include('../views/footer.html');

?> 