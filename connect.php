<?php


$con = new mysqli('localhost','root','','crudapplication');


//if($con){

// change the code above to if its not connected

	

if($con){

//! means if its not connected

//echo "connection successful";


}else{



die(mysqli_error($con));

}























?>