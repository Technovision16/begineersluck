<?php
/*
Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password)
*/
$link = mysqli_connect("localhost", "root", "sql", "books");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$pass = mysqli_real_escape_string($link, $_POST['pass']);
// attempt insert query execution
$sql = "UPDATE security SET pass='$pass' ";
if(mysqli_query($link, $sql)){
   echo "<script type='text/javascript'>alert('Password Changed Successfully!')</script>";
include "admin.php";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>