<?php
  
session_start();
// include('../views/header.html');

if ( isset($_SESSION['sess_user'] )){           //It will be sure set because we are in profile editing, but to be sure
    
    $user = $_SESSION['sess_user'];

    $con = new mysqli('localhost','root','','ypakp');
    if($con-> connect_errno){
        echo "failed to connect to MySQL: ", $mysqli -> connect_errno;
    }
    $con -> select_db('ypakp') or die("cannot select DB");  
    $query = $con -> query("SELECT * FROM users WHERE username='".$user."'");  

    if($query){

        $row = mysqli_num_rows($query);
        if ($row){

            $record = mysqli_fetch_assoc($query);

            $dbemail    = $record['email'];
            $dbuser     = $record['username'];
            $dbpassword = $record['password'];
            $dbusertype = $record['user_type'];

        }
    }
}

if(isset($_POST["submit"])){  

    echo"ola phgan kala!";

    $newEmail       = $_POST['email'];
    $newUsername    = $_POST['username'];
    $newPassword    = $_POST['password'];
    $newUserType    = $_POST['reg_select']; 


    if ($newEmail == $dbemail && $dbuser == $newUsername && $dbpassword == $newPassword && isset($newUserType) == false ){
    
        echo '<script language="javascript">';  
        echo 'alert("Τα στοιχεία σας παρέμειναν ίδια!")';
        echo '</script>';
    
    }

    else {

        if (isset($newUserType)){
            $update = $con -> query("UPDATE users SET email='".$newEmail."' , username='".$newUsername."' , password='".$newPassword."', user_type='".$newUserType."' WHERE username='".$user."' ");
        }

        else {
            $update = $con -> query("UPDATE users SET email='".$newEmail."' , username='".$newUsername."' , password='".$newPassword."' WHERE username='".$user."' ");
        }

        if ($update){
            
            echo '<script language="javascript">';  
            echo 'alert("Τα στοιχεία σας άλλαξαν επιτυχώς!")';
            echo '</script>';

            $_SESSION['sess_user'] = $newUsername;
            header('location:showprofile.php');

        }
    }
}

include('../views/header.html');
include('../views/editprofile.html');
include('../views/footer.html');

?>