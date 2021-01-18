<?php
ob_start();
session_start();
?>

<!DOCTYPE html> 
<html lang="en">

    <head>

        <!-- Title -->
        <title> Υπουργείο Εργασίας & Κοινωνικών Υποθέσεων </title>

        <!-- Required meta tags -->
        <meta charset="UTF-8">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

        <!-- Other CSS Files -->
        <link rel="stylesheet" href="../styling/partials.css">


    </head>
  <body>
    <!-- </head> -->

       <!-- Navbar for COVID -->

        <div class="threenavs">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark" id="covnav">
            
            <div class="container-fluid">
                <a class="navbar-brand">COVID-19: Κατευθυντήριες Οδηγίες</a>
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon btn-sm"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto mb-2 mb-md-0">
                    
                    </ul>

                    <form class="d-flex">

                        <!-- <a class="btn btn-primary" href="#" role="button">Link</a> <-Probably we are going to use this  -->
                        
                        <button type="button" id="news" class="border border-light btn btn-dark">Νέα - Ανακοινώσεις</button>
                        
                        <a class="border border-light btn btn-dark" href="../routes/covprev.php" role="button">Εργασιακό Κοινό</a>
                        <!-- <button type="button" class="border border-light btn btn-dark">Εργασιακό Κοινό</button> -->

                    </form>

                    </ul>
                </div>
            </div>
        </nav>


        <!-- Main Page Navbar -->

        <nav class="navbar navbar-expand-lg navbar-light bg-light" id="navmain">
            <div class="container-fluid">
                <!-- <a class="navbar-brand" href="#">Υπουργείο Εργασίας & Κοινωνικών Υποθέσεων</a> -->
                <a class="navbar-brand border border-dark rounded shadow" href="../routes/index.php"><img src="../imgs/logo.png" title="Υπουργείο Εργασίας & Κοινωνικών Υποθέσεων"></a>

                <!-- /home/dimitris/Επιφάνεια εργασίας/logo.png -->

              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="btn btn-light btn-lg nav-link active" aria-current="page" href="../routes/index.php" id="darkchoice"> <i class="fas fa-home"></i> Αρχική Σελίδα</a>
                  </li>
                  <li class="nav-item">
                    <a class="btn btn-light btn-lg nav-link active" href="#" id="darkchoice"><i class="fas fa-phone-volume"></i> Επικοινωνία </a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="btn btn-light btn-lg nav-link active dropdown-toggle" href="#" id="darkchoice" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                     Σύνδεσμοι
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="#">Σύνδεσμος 1</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Σύνδεσμος 2</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Σύνδεσμος 3</a></li>
                    </ul>
                  </li>

                  <li class="nav-item">
                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                        <div class="btn-group" role="group">
                            <button id="btnGroupDrop1" type="button" class="btn btn-outline-dark btn-lg dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                <img class="flags" src="../imgs/greece.png">
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">

                                <li>Επιλογή Γλώσσας</li>
                              <li><hr class="dropdown-divider"></li>
                              <li><a class="dropdown-item" href="#"><img class="flags" src="../imgs/english.png"> Αγγλικά</a></li>
                              <li><hr class="dropdown-divider"></li>
                              <li><a class="dropdown-item" href="#"><img class="flags" src="../imgs/france.jpg"> Γαλλικά</a></li>
                            </ul>
                          </div>                        
                          <button type="button" class="btn btn-lg btn-outline-dark"><i class="fas fa-wheelchair"></i></button>
                      </div>
                  </li>
                </ul>

                <form class="d-flex">
                  <a class="button btn btn-lg btn-outline-dark" id="register" href="../routes/login.php" > <i class="fas fa-user"></i>Είσοδος</a>
                  <a class="button btn btn-lg btn-outline-dark" id="register" href="../routes/signUp.php" > <i class="fas fa-user-plus"></i>Εγγραφή</a>
                </form>
              </div>
            </div>
          </nav>

          <!-- Service's Navbar -->

        <nav class="navbar navbar-expand-lg navbar-light bg-primary">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="button btn-lg border border-light border-2 rounded-pill nav-link active " id="services" aria-current="page" href="#">Υπουργείο</a>
                        </li>
                        <li class="nav-item">
                            <a class="button btn-lg border border-light border-2 rounded-pill nav-link active " id="services" href="#">Εργασιακά</a>
                        </li>
                        <li class="nav-item">
                            <a class="button btn-lg border border-light border-2 rounded-pill nav-link active " id="services" href="#">Κοινωνικές Υποθέσεις</a>
                        </li>

                        <li class="nav-item">
                            <a class="button btn-lg border border-light border-2 rounded-pill nav-link active "id="services" href="#" tabindex="-1" aria-disabled="true">Εφημερίδα</a>
                        </li>

                        <li class="nav-item">
                            <a class="button btn-lg border border-light border-2 rounded-pill nav-link active " id="services" href="#" tabindex="-1" aria-disabled="true">Πληροφορίες</a>
                        </li>
                    
                    </ul>
                    <form class="d-flex">
                      <input class="form-control me-2 border border-dark border-2" type="search" placeholder="Αναζήτηση" aria-label="Searh" id="searchbar">
                      <button class="btn btn-outline-light" ><i class="fas fa-search"></i></button>
                    </form>
              </div>
            </div>
        </nav>
      </div>

      <link rel="stylesheet" href="../styling/login.css">
<!-- <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300i,400,700&display=swap" rel="stylesheet"> -->



<!-- <div class="container-fluid" style="height:800px; width:auto;"> -->
<!-- <div> -->
    <div class="row m-0 h-100" style="margin-top: 100px; margin-bottom:100px;">
        <div class="col p-0 text-center d-flex justify-content-center align-items-center display-none">
            <img src="../imgs/login.svg" class="w-100">
        </div>
        <div class="col p-0 bg-custom d-flex justify-content-center align-items-center flex-column w-100">
            <form class="w-75" action="" method="POST">
                
                <div class="mb-3">

                    <!-- Username: <input type="text" name="user"><br />   -->
<!-- Password: <input type="password" name="pass"><br />    -->


                    <label for="exampleFormControlInput1" class="form-label fs-4" ><b>΄Ονομα Χρήστη</b></label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="user" placeholder="Username" required>
                </div>
                
                <div class="mb-3">
     
                    <!-- Username: <input type="text" name="user"><br />   -->
                    <!-- Password: <input type="password" name="pass"><br />    -->

     
                    <label for="exampleFormControlInput2" class="form-label fs-4" n><b>Κωδικός</b> </label>
                    <input type="password" class="form-control" id="exampleFormControlInput2" name="pass" placeholder="Password" required>
                </div>
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault"> Keep me logged in </label>
                        </div>
                    </div>
                </div>
                
                

                <!-- <input type="sumbit" name="submit" value='Login' class="btn btn-custom btn-lg btn-block mt-3">  -->
                <button type="submit" name="submit" value="Login" class="btn btn-custom btn-lg btn-block mt-3">Σύνδεση</button>
                <!-- <input type="submit" value="Login" name="submit">   -->


                <div class="mb-3 topm">

                    <label for="exampleFormControlInput3" class="form-label fs-3 ">Δεν έχεις Λογαριασμό; </label>
                    <a class="btn btn-light btn-outline-dark btn-sm form-label fs-4 form-control exampleFormControlInput3" href="../routes/signUp.php" >Κάνε Εγγραφή </a>

                </div>
            </form>

        </div>
    </div>  
<!-- </div> -->

<script>
    window.scrollTo(0, 500);
</script>

</body>
<nav class="navbar navbar-expand-lg navbar-dark " id="footer">
  <div class="container-fluid">
      
      <ul class="col-md-3">

          <li class="nav-item border border-light border-end-0 border-start-0" id="infobottom">Υπουργείο Εργασίας και Κοινωνικών Υποθέσεων</li>
          
          <li class="nav-item"><a href="#"><img class="resize" src="../imgs/logo.png" title="Υπουργείο Εργασίας & Κοινωνικών Υποθέσεων"></a></li>
      
      </ul>

      <ul class=" col-md-3">
          <li class="nav-item" id="infobottom2">Ελληνική Δημοκρατία - Υπουργείο Εργασίας και Κοινωνικών Υποθέσεων.</li>
          <li class="nav-item" id="infobottom3"><a href="#" class="nav-link">Βοήθεια <i class="fas fa-question-circle"></i></a></li>
      </ul>

      <ul class=" col-md-3">
          <a><img class="resize2" src="../imgs/european.webp" title="Flag of Europe"></a>
          <img class="resize2" src="../imgs/greece.png" title="Flag of Greece">
      </ul>

  </div>
</nav>



<!-- This will be on footer soon -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" ></script>


</html>

<?php
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
                    header("location:appointment.php");  
                }  
            }
            
            else {  

                session_destroy();
                echo '<script language="javascript">';
                echo 'alert("Invalid username or password!")';
                echo '</script>';
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

?> 



