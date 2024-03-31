<?php
ob_start();
// include 'connection.php';
// session_start();

//Values 
// if(isset($_POST['loginemail'])){
//     $loginemail= $_POST['loginemail'];
// } else {
//     $loginemail= '';
// }

// if(isset($_POST['loginpassword'])){
//     $loginpassword= $_POST['loginpassword'];
// } else {
//     $loginpassword= '';
// }





// Free result set
// mysqli_free_result($result);

// mysqli_close($mysqli);


?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brio Bistro</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha256-mLBIhmBvigTFWPSCtvdu6a76T+3Xyt+K571hupeFLg4=" crossorigin="anonymous" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />


<link href="css/style.css" rel="stylesheet" />

<link href="css/responsive.css" rel="stylesheet" />
    <title>Login</title>
</head>
<body>
<div class="hero_area"> 
    <!-- <header> -->
        <!-- <h1 class="heading">Brio Bistro</h1> -->
        <?php
            include 'header.php';
        ?>
    <!-- </header> -->
    <div style='display: table; margin: 0 auto; color: white;' class='login_body'>
        <div style='width: 300px' class='login_container'>
            <h2>Login</h2>
            <form method="post" action="login.php">
                <input type="hidden" name="login" value="login">
                <label>Email:</label><br>
                <input type="email" name="loginemail" required> <br>
                <label>Password:</label><br>
                <input type="password" name="loginpassword" required><br>
                <?php
                    if(isset($_POST['loginemail']) && isset($_POST['loginpassword']) ){
                        include 'connection.php';
                        session_start();

                        //Values 
                        if(isset($_POST['loginemail'])){
                            $loginemail= $_POST['loginemail'];
                        } else {
                            $loginemail= '';
                        }

                        if(isset($_POST['loginpassword'])){
                            $loginpassword= $_POST['loginpassword'];
                        } else {
                            $loginpassword= '';
                        }
                        $sql= "SELECT name, password from users where email= '$loginemail'";
                        $result = mysqli_query($db_conn, $sql);
                        $row = $result -> fetch_array(MYSQLI_NUM);
                        if($row!=[]){
                            if ($loginpassword==$row[1]) {
                                $_SESSION['loggedin'] = true;
                                $_SESSION['username'] = $row[0];
                                header("Location: index.php");
                                // header("Location: index.php");
                            } else {
                                echo "invalid email or password";
                            }
                        } else {
                            echo "invalid email or password";
                        }
                        
                    
                    
                    
                    
                        // // Fetch all
                        // mysqli_fetch_all($result, MYSQLI_ASSOC);
                    }

                    
                ?>
                <input type="submit" value="Login">
            </form>
        </div>
    </div>
        
</div>
    </body>
    </html>