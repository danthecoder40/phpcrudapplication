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
	
<form role="form"  method="POST"  action="user.php">


  <div class="form-group">
    <label >name</label>
    <input type="text" class="form-control" placeholder="enter your name" name="name" autocomplete="off">
  </div>

<div class="form-group">
    <label >email</label>
    <input type="email" class="form-control" placeholder="enter your email" name="email" autocomplete="off">
  </div>

<div class="form-group">
    <label >mobile</label>
    <input type="text" class="form-control" placeholder="enter your mobile number" name="mobile" autocomplete="off">
  </div>

 <div class="form-group">
    <label >password</label>
    <input type="text" class="form-control" placeholder="enter your password" name="password">
  </div>




  <button type="submit" class="btn btn-default" name="submit">Submit</button>
</form>
























</body>
