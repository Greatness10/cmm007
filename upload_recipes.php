<?php
include 'connection.php';
session_start();


 



//Values 
if(isset($_POST['recipe_name'])){
    $recipe_name= $_POST['recipe_name'];
} else {
    $recipe_name= '';
}

if(isset($_POST['recipe_description'])){
    $recipe_description= $_POST['recipe_description'];
} else {
    $recipe_description= '';
}

if(isset($_POST['recipe_image'])){
    $target_dir = "uploads/";
    $recipe_image = $target_dir . basename($_FILES["recipe_image"]["name"]);
    echo $recipe_image;
} else {
    $recipe_image= '';
}


$errMsg='';


if(isset($_POST['recipe_name']) && isset($_POST['recipe_description']) && isset($_POST['recipe_image'])){
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["recipe_image"]["name"]);
    echo $target_file;
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["recipe_image"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
    }

    // $sql0= "SELECT name, password from users where email= '$email'";
    // $sql01= "SELECT name, password from users where name= '$name'";
    // $result0 = mysqli_query($db_conn, $sql0);
    // $result01 = mysqli_query($db_conn, $sql01);
    // $result0Array = $result0 -> fetch_array(MYSQLI_NUM);
    // $result01Array = $result01 -> fetch_array(MYSQLI_NUM);
    $sql = "INSERT INTO recipe (name, description, image) VALUES ('$recipe_name', '$recipe_description', '$recipe_image')";
    $result = mysqli_query($db_conn, $sql);
    echo 'Recipe Uploaded';
    header("Location: recipes.php");
    // if($result0Array==[] && $result01Array==[]){
    //     $sql = "INSERT INTO recipes (name, description, image) VALUES ('$recipe_name', '$recipe_description', '$recipe_image')";
    //     $result = mysqli_query($db_conn, $sql);
    //     header("Location: login.php");
    //     die();
    //     // // Fetch all
    //     // mysqli_fetch_all($result, MYSQLI_ASSOC);
    //     print($result);
    // } 
    
}



?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Recipes</title>
    <style>
        /* CSS styles here */
    </style>
</head>
<body>    
      <section class="upload_recipe_section">
        <div class="container">
            <div class="row">
                <div class="col-md-5 offset-md-1">
                    <div class="upload_form">
                        <div class="heading_container">
                            <h2 class="">Upload Your Recipe</h2>
                        </div>
                        <form action="upload_recipes.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="recipe_name">Recipe Name</label>
                                <input type="text" class="form-control" id="recipe_name" name="recipe_name" required>
                            </div>
                            <div class="form-group">
                                <label for="recipe_description">Recipe Description</label>
                                <textarea class="form-control" id="recipe_description" name="recipe_description" rows="4" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="recipe_image">Recipe Image</label>
                                <input type="file" class="form-control-file" id="recipe_image" name="recipe_image" accept="image/*" required>
                            </div>
                            <input type="submit" value="Upload Recipe">
                        </form>
                    </div>
                </div>
                <div class="col-md-6 px-0">
                    <div class="img-box ">
                        <img src="" class="box_img" alt="about img" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
</body>
</html>
