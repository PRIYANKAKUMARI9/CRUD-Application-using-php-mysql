<?php
 include "connect.php";
 $id=$_GET['updateid'];
 $sql="Select * from `crud` where id=$id";
 $result=mysqli_query($con,$sql);
 $row=mysqli_fetch_assoc($result);
 $name=$row['name'];
 $email=$row['email'];
 $mobile=$row['mobile'];
 $password=$row['password'];

 if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $sql="update `crud` set id=$id,name='$name',email='$email',mobile='$mobile',password='$password' where id=$id";

    $result=mysqli_query($con,$sql);
    if($result){
       // echo "updated successfully";
       header('location:display.php');
    }
    else{
        die(mysqli_error($con));
    }
 }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Crud </title>
</head>
<body>
    <div class="container my-5">
    <form class="" method="post">
  <div class="form-group mb-2 ">
    <label class="text-light fs-4 fw-medium text">Name</label>
    <input type="text" class="form-control" name="name" placeholder="enter your name..." autocomplete="off" value=<?php echo $name; ?>>
  </div>
  <div class="form-group fs-4 fw-medium mb-2 ">
    <label class="text-light">Email</label>
    <input type="text" class="form-control" name="email" placeholder="enter your email..." autocomplete="off" value=<?php echo $email; ?>>
  </div>
  <div class="form-group fs-4 fw-medium mb-2 ">
    <label class="text-light">Mobile</label>
    <input type="text" class="form-control" name="mobile" placeholder="enter your mobile..." autocomplete="off" value=<?php echo $mobile; ?>>
  </div>
  <div class="form-group fs-4 fw-medium mb-2">
    <label class="text-light">Password</label>
    <input type="text" class="form-control" name="password" placeholder="enter your password..." autocomplete="off" value=<?php echo $password; ?>>
  </div>
  
  
  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>

    </div>
</body>
</html>