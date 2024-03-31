<?php
include 'connection.php';
session_start();


 



//Values 
if(isset($_POST['email'])){
    $email= $_POST['email'];
} else {
    $email= '';
}

if(isset($_POST['name'])){
    $name= $_POST['name'];
} else {
    $name= '';
}

if(isset($_POST['password'])){
    $password= $_POST['password'];
} else {
    $password= '';
}

if(isset($_POST['retype_password'])){
    $confirmpass= $_POST['retype_password'];
} else {
    $confirmpass= '';
}


$errMsg='';


if(isset($_POST['retype_password']) && $confirmpass!='' && $confirmpass==$password){
    $sql0= "SELECT name, password from users where email= '$email'";
    $sql01= "SELECT name, password from users where name= '$name'";
    $result0 = mysqli_query($db_conn, $sql0);
    $result01 = mysqli_query($db_conn, $sql01);
    $result0Array = $result0 -> fetch_array(MYSQLI_NUM);
    $result01Array = $result01 -> fetch_array(MYSQLI_NUM);
    if($result0Array==[] && $result01Array==[]){
        $sql = "INSERT INTO users (email, name, password) VALUES ('$email', '$name', '$password')";
        $result = mysqli_query($db_conn, $sql);
        header("Location: login.php");
        die();
        // // Fetch all
        // mysqli_fetch_all($result, MYSQLI_ASSOC);
        print($result);
    } 
    
}




// if($confirmpass!='' && $confirmpass==$password){
//     $sql = "INSERT INTO user (email, username, password, type) VALUES ('$email', '$username', '$password', '$user')";
//     $result = mysqli_query($mysqli, $sql);


//     // // Fetch all
//     // mysqli_fetch_all($result, MYSQLI_ASSOC);
//     print($result);
// } else {
//     $errMsg= 'passwords do not match';
//     echo $errMsg;  
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
        <?php
            include 'header.php';
        ?>
    <div style='color: white;' class='signup_container'>
    <h1 class="heading">Brio Bistro</h1>
    <h2>Sign Up</h2>
    <form method="post" action="registration.php">
        <input type="hidden" name="signup" value="signup">
        <label>Name:</label><br>
        <input type="text" name="name" required><br>
        <label>Email:</label><br>
        <input type="email" name="email" required><br>
        <label>Password:</label><br>
        <input type="password" name="password" required><br>
        <label>Retype Password:</label><br>
        <input type="password" name="retype_password" required><br>
        <input type="submit" value="Sign Up">
    </form>
    </div>    
</div>
    </body>
    </html>