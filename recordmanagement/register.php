<?php include("err.php");
  require 'connection.php';
ob_start();
session_start(); 

if(isset($_SESSION["login_status"])){
    }
    else{
        $_SESSION["err_message"] = "";
    }

    if(isset($_SESSION["fname_err"])){
        //then great it's already set, just echo it below
    }
    else{
        $_SESSION["fname_err"] = "";
    }

    if(isset($_SESSION["lname_err"])){
        //then great it's already set, just echo it below
    }
    else{
        $_SESSION["lname_err"] = "";
    }
    
    if(isset($_SESSION["password_err"])){
        //then great it's already set, just echo it below
    }
    else{
        $_SESSION["password_err"] = "";
    }


?>



<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel='stylesheet' href='css/register.css'>
<style>
   
    </style>
</head>
<body>

<div class="header">
  <a href="#default" class="logo">Company</a>
</div>

</div>

<div class="form">
<table width='25%' border='0'>
</div>

<form  name='myForm' onsubmit="submit_form()" id="contact" action='verification/addAccount.php' method='POST' >
<div class="head">
<h1>Register</h1>
</div>
 &nbsp; &nbsp;
      
        <tr> 
        <td class= 'color'></td>
        <td><input type='text'  required name='first' id='first' placeholder='First Name' value="" maxlength='10'>
        </td>
        </tr>




        <tr> 
        <td class= 'color'></td>
        <td><input type='text' required name='last' id='first' placeholder='Last Name'  maxlength='10' >
        </td>
        </tr>

        <tr>  
        <td class= 'color'><br> 
        <td><input type='text' required name='username' placeholder=' Username'> 
        </td>
        </tr>

        <tr> 
        <td class= 'color'></td>
        <td><select type='text'; name="office">
  <option value="volvo">ARD</option>
  <option value="saab">LGMED</option>
  <option value="mercedes">LGCDD</option>
  <option value="audi">LEGAL UNIT</option>
  <option value="audi">PDMU</option>
  <option value="audi">PLANNING UNIT</option>
  <option value="audi">FAD</option>
  <option value="audi">FAD</option>
</select>
        </td>
        </tr>

        

   
        <tr> 
        <td class= 'color'></td>
        <label for="PASSWORD"></label>
        <td><input type='password' required name='password' placeholder=' Password' onkeyup='check();' id='PASSWORD' pattern='(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}' title='Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters'>
        </td>
        </tr>

        <tr> 
        <td class= 'color'></td>
        <label for="PASSWORD2">
        <td><input type='password' required name='password2' placeholder=' Re-Enter Password' onkeyup='check();' id='PASSWORD2' pattern='(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}' title='Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters'></td>
        <span id='message1'></span>
        </label>    
        </tr>

        <tr> 
        <td></td>
        <td><input type='submit' class='button' name='fire' value='Register' id='SUBMIT'></td>
        </tr>
    
        <tr>
        <div class="signup-text">
        Already have an account?<br>
        <a href="index.php">Login</a>  
        </div>
        </tr>
        </form>
        </table>
        </div>
        </div>



  

</body>
</html>
