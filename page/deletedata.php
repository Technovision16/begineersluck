<?php
/*
Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password)
*/
$link = mysqli_connect("localhost", "root", "sql", "library");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$book_id = mysqli_real_escape_string($link, $_POST['bid']);
$book_name = mysqli_real_escape_string($link, $_POST['bname']);
// attempt delete query execution
$sql = "DELETE FROM infoit WHERE bid='$book_id'";
if(mysqli_query($link, $sql))
{
 echo "<script type='text/javascript'>alert('Book Deleted Successfully!')</script>";
include "delete.php";
} 
else
{
    echo "ERROR: Could not able to execute $sql. " .mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>