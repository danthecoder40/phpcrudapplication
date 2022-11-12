<?php

include "connect.php";

// check the condition

if(isset($_GET['deleteid'])){

$id=$_GET['deleteid'];

$sql = "delete from `crud` where id=$id";

// now to excute the query

$result = mysqli_query($con,$sql);

if($result){
//if result is true then echo


//echo "deleted successfully";
// we dont want to use the echo lets use 

header('location:display.php');	


}else{

	die(mysqli_error($con));
}




}












?>