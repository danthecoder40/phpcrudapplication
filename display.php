<?php


include "connect.php";







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







<div class="container">
  

  
<button class="btn btn-primary" my-5><a href="user.php"  class="text-light"> add user</a>

</button>




  <table class="table">
    <thead>
      <tr>
        <th>sn</th>
        <th>name</th>
        <th>email</th>
        <th>mobile</th>
        <th>password</th>
           <th>operations</th>

      </tr>
    </thead>
    <tbody>

<?php

$sql = "select *  from `crud`";
//SELECT * FROM `crud` WHERE 1

$result = mysqli_query($con,$sql);

if($result){


// write the code below first to understand that you have to use while loop

//$row = mysqli_fetch_assoc($result);

//echo $row['name'];


while($row = mysqli_fetch_assoc($result)){

$id = $row['id'];

$name = $row['name'];

$email = $row['email'];

$mobile = $row['mobile'];

$password = $row['password'];



echo '
 <tr>
        <td>'.$id.'</td>
        <td>'.$name.'</td>
        <td>'.$email.'</td>
        <td>'.$mobile.'</td>

        <td>'.$password.'</td>

        <td>

  
<button class ="btn btn-danger"> <a 


  href="update.php?updateid='.$id.'" 


   class="text-light">update</a></button>



  <button class ="btn btn-danger"> <a 


  href="delete.php?deleteid='.$id.'" 


   class="text-light">Delate</a></button>

  </td>
        
      </tr>';


}

}

// $id the id you are getting from the database
// href="delete.php?deleteid='.$id.'"

// apart from deleteid you can use any other name

?>

<!-- <td>
  <button> <a href=""></a>update</button>
  <button> <a href="">Delate</a></button>

  </td> -->

      <!-- <tr>
        <td>1</td>
        <td>Doe</td>
        <td>john@example.com</td>
        <td>8997665665</td>

        <td>675898</td>
        <td>good</td>
      </tr>

       <tr>
        <td>2</td>
        <td>Doe</td>
        <td>john@example.com</td>
        <td>8997665665</td>

        <td>675898</td>
        <td>good</td>
      </tr>
      
      <tr>
        <td>3</td>
        <td>Doe</td>
        <td>john@example.com</td>
        <td>8997665665</td>

        <td>675898</td>
        <td>good</td>
      </tr>


      <tr>
        <td>4</td>
        <td>Doe</td>
        <td>john@example.com</td>
        <td>8997665665</td>

        <td>675898</td>
        <td>good</td>
      </tr>

      <tr>
        <td>5</td>
        <td>Doe</td>
        <td>john@example.com</td>
        <td>8997665665</td>

        <td>675898</td>
        <td>good</td>
      </tr>


      <tr>
        <td>6</td>
        <td>Doe</td>
        <td>john@example.com</td>
        <td>8997665665</td>

        <td>675898</td>
        <td>good</td>
      </tr>
       -->


    </tbody>
  </table>
</div>

















</body>