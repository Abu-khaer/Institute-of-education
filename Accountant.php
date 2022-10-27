<?php
include_once 'config/db.php';

if(isset($_POST['submit'])){

  
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  
  $mother_name = mysqli_real_escape_string($conn, $_POST['mother_name']);
  
  $father_name = mysqli_real_escape_string($conn, $_POST['father_name']);

  // $class = stripslashes($_POST['class']);
  // $class = mysqli_real_escape_string($conn, $class);

  
  $brc = mysqli_real_escape_string($conn, $_POST['brc']);

  $img_name = $_FILES['image'] ['name'];

  $temp_name =$_FILES['image'] ['tmp_name'];

  $uploc = 'photo/'.$img_name;



    $query = "INSERT INTO accountant (name, mother_name, father_name, brc, image) VALUES ('$name', '$mother_name', '$father_name', '$brc', '$img_name')";

    //$result = mysqli_query($conn, $query);

    if(mysqli_query($conn, $query) == TRUE){

      move_uploaded_file($temp_name, $uploc);

        echo "Data inserted ";
        
    }else{
        echo "something went wrong";
    }

 }
?>


<!-- 
parents form code -->



<!-- parents code end -->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="<?php echo $_SERVER['PHP_SELF']  ?>" method="post" enctype="multipart/form-data">
          <div class="mb-3">
            <input type="text" name="name" class="form-control" placeholder="Student Name" required>
          </div>
          <div class="mb-3">
            <input type="text" name="mother_name" class="form-control" placeholder="Mothers_name" required>
          </div>
          <div class="mb-3">
            <input type="text" name="father_name" class="form-control" placeholder="Fathers_name " required>
          </div>
          <div class="mb-3">
            <input type="number" name="brc" class="form-control" placeholder="Birth Registration certificate" required>
          </div>

          <!-- <div class="mb-3">
          <label for="">Desire to get admission into -</label><br>
            <select name="class" id="">
              
            <option value="">Select Grade</option>
              <option value="kg">KG</option>
              <option value="standard 1">standard 1</option>
              <option value="standard 2">standard 2</option>
              <option value="standard 3">standard 3</option>
              <option value="standard 4">standard 4</option>
              <option value="standard 5">standard 5</option>
            </select>
          </div> -->

          <div class="mb-3">
          <input type="file" name="image" class="form-control btn btn-info" >
          </div>

          <div class="mb-3">
          <input type="submit" name="submit" value="Enroll" class="form-control btn btn-info" >
          </div>
          </form>

</body>
</html>