<?php

include 'connect.php';
$id =$_GET['updateid'];
$sql ="select * from `crud` where id=$id  ";
$result =mysqli_query($con,$sql);
$row =mysqli_fetch_assoc($result);
$name =$row['name'];
$email =$row['email'];
$mobile =$row['mobile'];
$password =$row['password'];
if(isset($_POST['submit'])){
$name = $_POST['name'];
$email =  $_POST['email'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];
$sql= "UPDATE `crud` SET `id`= $id,name='$name',email='$email',mobile='$mobile',password='$password' where id=$id";
$result = mysqli_query($con, $sql);
if($result){
header('location:display.php');
}else{
  die(mysqli_error($con));
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>crud operation</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../../maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="../../ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="../../maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container" my-5>
    <form role="form"  method="POST">
      <div class="form-group">
        <label >name</label>
        <input type="text" class="form-control" placeholder="enter your name" name="name" autocomplete="off" value="<?php echo $name;?>">
      </div>
      <div class="form-group">
        <label >email</label>
        <input type="email" class="form-control" placeholder="enter your email" name="email" autocomplete="off"  value="<?php echo $email;?>">
      </div>
      <div class="form-group">
        <label >mobile</label>
        <input type="text" class="form-control" placeholder="enter your mobile number" name="mobile" autocomplete="off" value="<?php echo $mobile;?>">
      </div>
      <div class="form-group">
        <label >password</label>
        <input type="text" class="form-control" placeholder="enter your password" name="password"value="<?php echo $password;?>">
      </div>
      <button type="submit" class="btn btn-default" name="submit">Submit</button>
    </form>
  </div>
</body>
 