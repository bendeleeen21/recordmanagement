<?php
  require '../db/connection.php';

 session_start();
$_SESSION["login_status"] = 0;
$userinput = $_POST["password"];
$errors = array();

if (!preg_match("/^[a-zA-Z ]*$/",$_POST["first"])) {
    $_SESSION["fname_err"] =  "Invalid format";
    //header('Location: register.php');  
  }
if (!preg_match("/^[a-zA-Z ]*$/",$_POST["last"])) {
    $_SESSION["lname_err"] =  "Invalid format";
    //header('Location: register.php');  
  }

if ($_POST["password"] == $_POST["password2"]){
    
}
else{
    $_SESSION["password_err"] = "Password don't match";
    header('Location: register.php'); 
}

if (!preg_match("/^[#$%&*-_=+a-zA-Z0-9]{8,}$/",$_POST["password"])) {
    $_SESSION["password_err"] =  "Please input at least 8 character with alphanumeric characters";
     header('Location: register.php');  
  }




     if(isset($_POST['fire'])){
       if($_POST['first'] == "" || $_POST['last'] == "" || $_POST['username'] == "" || $_POST['password'] == "" || $_POST['office'] == ""  ){
         echo '<script type="text/javascript">alert("Please fill all the fields")</script>';
       }else{
         $first = $_POST['first'];
         $last = $_POST['last'];
         $user = $_POST['username'];
         $pass=$_POST['password'];
        $enc = password_hash($pass, PASSWORD_BCRYPT);

         $office = $_POST['office'];
         $query = "INSERT INTO admin_detail (username,first_name,last_name,office,password,date)
                   VALUES ('$user','$first','$last','$office','$enc',NOW())";

         if(mysqli_query($connect,$query)){
           $currentId = mysqli_insert_id($connect); //GET CURRENT ID
           $_SESSION['name'] = $_POST['first']." ".$_POST['last'];
           $_SESSION['fname'] = $_POST['first'];
           $_SESSION['user_id'] = $currentId;
           $_SESSION['office'] = $_POST['office']; 
         }else{
           echo mysqli_error($connect);
         }
       }
     }
     mysqli_close($connect);
?>
