<?php 

$db = mysqli_connect('localhost', 'root', '123', 'daca_hotel');

if (isset($_POST['cot_us'])) {

$name = mysqli_real_escape_string($db, $_POST['contact_name']);
  $email = mysqli_real_escape_string($db, $_POST['contact_email']);
  $message = mysqli_real_escape_string($db, $_POST['contact_message']);
  
  $sql="INSERT INTO `contact`(`name`, `email`, `message`) VALUES ('$name','$email','$message')";
  mysqli_query($db, $sql);
   
   
}


 ?>