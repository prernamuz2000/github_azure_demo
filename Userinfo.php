<?php
$server = "localhost";
$username = "root";
$server_password = "";
$db = "datauser";
 $con = mysqli_connect($server, $username, $server_password, $db);

 if($con){
 	echo "Connenction successful";
 }else{
 	echo "No Connenction successful";
 }

 mysqli_select_db($con, 'datauser');

 $user = $_POST['user'];
 $email = $_POST['email'];
 $mobile = $_POST['mobile'];
 $address = $_POST['address'];
 $comment = $_POST['comment'];

 $sql_name = "INSERT INTO `userinfodata`(`user`, `email`, `mobile`, `address`, `comment`) values ('$user','$email','$mobile', '$address','$comment') ";

 // echo "$sql_name";
 mysqli_query($con, $sql_name);
 // header('location:index.php');



?>
