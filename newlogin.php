<?php







    require('dbconnect.php');
    session_start();
    
    if (isset($_POST["submit"])) {
        $user = stripslashes($_REQUEST['admin_name']);    

         $user= mysqli_real_escape_string($con, $user);

        $pass = stripslashes($_REQUEST['password']);
        $pass = mysqli_real_escape_string($con, $pass);
        

        $query    = "SELECT * FROM `admin` WHERE admin_name ='$user'
                     AND password='" . md5($pass) . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());

        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['admin_name'] = $user;
            // Redirect to user dashboard page
            // header("Location: ../concept-master/concept-master/pages/data-tables.html");
        } else {


           echo "<script>alert('wrong login details');window.location.href='login-form-09/index.html'</script>";
        }










    } 

?>