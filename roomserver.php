<?php 

$db = mysqli_connect('localhost', 'root', '123', 'daca_hotel');
if (isset($_POST['rom'])) {

$NO= mysqli_real_escape_string($db, $_POST['id']);
$checkin = mysqli_real_escape_string($db, $_POST['idate']);
$checkout = mysqli_real_escape_string($db, $_POST['odate']);
  $type = mysqli_real_escape_string($db, $_POST['roomtype']);
  $adults = mysqli_real_escape_string($db, $_POST['adult']);
  $child = mysqli_real_escape_string($db, $_POST['children']);
  $bname = mysqli_real_escape_string($db, $_POST['bname']);
  
  $sql="INSERT INTO `rooms`(`id`, `checkin`, `checkout`, `roomtype`, `adults`, `children`, `name`)VALUES('$NO','$checkin','$checkout','$type','$adults','$child','$bname')";
  mysqli_query($db, $sql);
   

}

 ?>