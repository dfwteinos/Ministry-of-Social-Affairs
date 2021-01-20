<!-- <!doctype html>  
<html>  
<head>  
<title>Register</title>   -->
    <!-- <style>   
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
         h2 {  
    color: indigo;  
    font-family: verdana;  
    font-size: 100%;  
}</style>   -->
<!-- </head>  
<body>  
     
    <center><h1>CREATE REGISTRATION AND LOGIN FORM USING PHP AND MYSQL</h1></center>  
   <p><a href="register.php">Register</a> | <a href="login.php">Login</a></p>  
    <center><h2>Registration Form</h2></center>  
<form action="" method="POST">  
    <legend>  
    <fieldset>  
          
Username: <input type="text" name="user"><br />  
Password: <input type="password" name="pass"><br />   
<input type="submit" value="Register" name="submit" />  
              
        </fieldset>  
        </legend>  
</form>   -->

<?php  


session_start();
if(isset($_POST["submit"])){  
    
    if(!empty($_POST['user']) && !empty($_POST['pass'])) {  
        
        $user=$_POST['user'];  
        $pass=$_POST['pass'];  
     
        // echo $user;
        // echo $pass;

        $con = new mysqli('localhost','root','','ypakp');
        if ($con -> connect_errno){
            echo "failed to connect to MySQL: ", $mysqli -> connect_errno;
        }

        $con -> select_db('ypakp') or die('cannot select DB');
        
        $query = $con -> query("SELECT * FROM users WHERE username='".$user."'");

        if($query){
            // echo "hihi";
        }

        $numrows = mysqli_num_rows($query);
        
        // echo $numrows;


        if($numrows==0)  
        {  

            $id         = 1;
            $username   = $user;
            $password   = $pass;
            $firstname  = $_POST['first_name'];
            $lastname   = $_POST['last_name'];
            $email      = $_POST['your_email'];
            $user_type  = $_POST['reg_select'];

            echo "kanenas me tetoio onoma";
        //     // echo "mphka edw mesa";
            // $sql = "INSERT INTO users( id, username , password, first_name, last_name, email, user_type) VALUES ( '2' , 'Mitsostheking' , '123' , 'Dimitrios' , 'Foteinos' , 'mitsos@gmail.com' , 'worker')";
            // $sql="INSERT INTO login(username,password) VALUES('$user','$pass')";  
        
            
            $result = $con -> query("INSERT INTO users( id, username , password, first_name, last_name, email, user_type) VALUES ( $id , '$username' , '$password' , '$firstname' , '$lastname' , '$email' , '$user_type' )");
            // $result = mysqli_query($sql);
        //     // $result=mysql_query($sql);  

            if($result){  
                echo "Account Successfully Created";  
                $_SESSION['sess_user'] = $username;
                header("location:index.php");
            
            } else {  
                echo "Failure!";  
            }  
    
        } else {  
        
            echo '<script language="javascript">';  
            echo 'alert("That username already exists! Please try again with another")';
            echo '</script>';
            // echo "That username already exists! Please try again with another.";  
        }  
    
    } 
    
    else {  
        echo "All fields are required!";  
    }  

}  

include('../views/header.html');
include('../views/signUp.html');
include('../views/footer.html');
?>  
