
<!-- 
<php

include('../views/header.html');
include('../views/login.html');
include('../views/footer.html');

if(isset($_POST["submit"])){  

    if(!empty($_POST['user']) && !empty($_POST['pass'])) {              //If username and password is valid

        $user = $_POST['user'];
        $pass = $_POST['pass'];


        $severname = 'localhost';
        $username  = 'root';
//         // $password  = '';
        $dbname    = 'ypakp';

        // $conn = new mysqli('localhost', ,'root', '', 'workers')
        $con = mysql_connect('localhost','root','') or die (mysql_error());
        mysql_select_db($dbname) or die('Cannot select DB');

        // $query = mysql_query("SELECT * FROM users WHERE username='".$user"' AND password='".$pass."'");
        $query = mysql_query("SELECT * FROM users WHERE username='".$user."' AND password='".$pass."'");  

        $numrows = mysql_num_rows($query);

    //     // echo $numrows;
        if($numrows!=0){
           
            while($row=mysql_fetch_assoc($query)){

                $dbusername = $row['username'];
                $dbpassword = $row['password'];
            
            }
            
            if ($user == $dbusername && $pass == $dbpassword){

                session_start();
                $_SESSION['sess_user'] = $user;
                
                /*Redirect Browser*/

                header("location:index.php");

            }   
            
            else {
                echo "Invalid username or password" ;
            }
        }
    
    }

    else {
        echo "All fields are required!" ;
    }

}    


> -->


<!doctype html>  
<html>  
<head>  
<title>Login</title>  

<!-- <title> Υπουργείο Εργασίας & Κοινωνικών Υποθέσεων </title> -->

<!-- Required meta tags -->
<!-- <meta charset="UTF-8"> -->

<!-- Bootstrap CSS -->
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> -->

<!-- Other CSS Files -->
<!-- <link rel="stylesheet" href="../styling/partials.css"> -->

 <style>   
        body{  
              
    margin-top: 100px;  
    margin-bottom: 100px;  
    margin-right: 150px;  
    margin-left: 80px;  
    background-color: azure ;  
    color: palevioletred;  
    font-family: verdana;  
    font-size: 100%  
      
        }  
            h1 {  
    color: indigo;  
    font-family: verdana;  
    font-size: 100%;  
}  
        h3 {  
    color: indigo;  
    font-family: verdana;  
    font-size: 100%;  
} </style>   
</head>  
<body>  

     <center><h1>CREATE REGISTRATION AND LOGIN FORM USING PHP AND MYSQL</h1></center>  
   <p><a href="register.php">Register</a> | <a href="login.php">Login</a></p>  
<h3>Login Form</h3>  
<form action="" method="post">
Username: <input type="text" name="user"><br />  
Password: <input type="password" name="pass"><br />   
<input type="submit" value="Login" name="submit" />  
</form>  
<?php  

// include('../views/header.html');
// include('../views/login.html');
// include('../views/footer.html');


if(isset($_POST["submit"])){  
  
if(!empty($_POST['user']) && !empty($_POST['pass'])) {  
    $user=$_POST['user'];  
    $pass=$_POST['pass'];  
  
    $con = new mysqli('localhost','root','','ypakp');
    if($con-> connect_errno){
        echo "failed to connect to MySQL: ", $mysqli -> connect_errno;
    }

    // $con=mysqli_connect('localhost','root','') or die(mysql_error());  
    $con -> select_db('ypakp') or die("cannot select DB");  
  
    $query=$con -> query("SELECT * FROM users WHERE username='".$user."' AND password='".$pass."'");  
    $numrows=mysqli_num_rows($query);  
    if($numrows!=0)  
    {  
    while($row=mysqli_fetch_assoc($query))  
    {  
    $dbusername=$row['username'];  
    $dbpassword=$row['password'];  
    }  
  
    if($user == $dbusername && $pass == $dbpassword)  
    {  
    session_start();  
    $_SESSION['sess_user']=$user;  
  
    /* Redirect browser */  
    header("Location: index.php");  
    // echo $user;
    }  
    } else {  
    echo "Invalid username or password!";  
    }  
  
} else {  
    echo "All fields are required!";  
}  
}  

    // include('../views/footer.html');

?>  
</body>  
</html> 

<!-- // include('../views/footer.html'); -->
