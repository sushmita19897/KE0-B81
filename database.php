<?php

$conn = mysqli_connect('localhost', 'root', '');
// Check connection
if (!$conn) {
    echo'notconnected to server';
}
if(!mysqli_select_db{$conn,'db1'}){
	echo 'database not selected';
}
 $name = $_POST['firstname'];
 
 $sql= "INSERT INTO MyGuests (firstname ,lastname, email) VALUES ($firstname, $lastname, $email)";
 
 if(!mysql_query($conn,$sql)){
	 echo 'not inserted';
 }
 else{
	 echo 'inserted';
 }
 header("refresh:2;url= index.php");

 
?>