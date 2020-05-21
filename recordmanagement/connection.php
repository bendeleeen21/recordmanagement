<?php
  $connect = mysqli_connect("localhost","root","","records_management");

  if(!$connect){
    die(myslqi_connect_error());
  }

 ?>
