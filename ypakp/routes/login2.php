<?php
ob_start();
session_start();

include('../views/header.html');
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

        // $con=mysql_connect('localhost','root','') or die(mysql_error());  

        $con -> select_db('ypakp') or die("cannot select DB");  
        // mysql_select_db('ypakp') or die("cannot select DB");  
    
        // $query=mysql_query("SELECT * FROM users WHERE username='".$user."' AND password='".$pass."'");  
        $query = $con -> query("SELECT * FROM users WHERE username='".$user."' AND password='".$pass."'");  

        // $numrows= $query ->_num_rows($query);  
        
        if($query)
        {
            $row = mysqli_num_rows($query);

            if ($row)
            {
                // echo('Number of row(s) in the table: '.$row);

                $record = mysqli_fetch_assoc($query);
                // echo $record['username'];
                // echo ("Post user is named: ".$user);
                // printf('Number of row(s) in the table: '.$row);
            
                $dbusername = $record['username'];  
                $dbpassword = $record['password'];  
                
                if($user == $dbusername && $pass == $dbpassword)  {  
                
                    // mysqli_free_result($query);

                    // echo "douleuei gamw..";
                    // session_start();  

                    // echo session_id();

                    if(session_id() == '') {
                        // echo"session isn't started";
                    }
                    
                    $_SESSION['sess_user']=$user;  
                                
                    /* Redirect browser */  
                    // header("Location: index.php");
                    header("location:index.php");  
                }  
            }
            
            else {  

                session_destroy();
                $forgot = "Λάθος όνομα ή κωδικός χρήστη.";

                // echo '<script language="javascript">';
                // echo 'alert("Invalid username or password!")';
                // echo '</script>';
                // echo "Invalid username or password!";  
            } 
            
            mysqli_free_result($query);
        }

        // mysqli_close($con);


//         $numrows = $query->num_rows;

//         if($numrows!=0)  { 

//             while($row= $con->fetch_assoc($query))  
//             {  
//             $dbusername = $row['username'];  
//             $dbpassword = $row['password'];  
//             }  
        
//             if($user == $dbusername && $pass == $dbpassword)  {  
                
//                 session_start();  
//                 $_SESSION['sess_user']=$user;  
            
//                 /* Redirect browser */  
//                 header("location:appointment.php");  
//             }  
            
//         } 
        
//         else {  

//             echo '<script language="javascript">';
//             echo 'alert("Invalid username or password!")';
//             echo '</script>';
//             // echo "Invalid username or password!";  
//         }  
//     } 
    
//     else {  
//         echo "All fields are required!";  
    }  

}  

include('../views/login.html');
include('../views/footer.html');

?> 



