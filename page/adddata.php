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
$a_name = mysqli_real_escape_string($link, $_POST['aname']);
$edition = mysqli_real_escape_string($link, $_POST['edition']);
$pub = mysqli_real_escape_string($link, $_POST['publisher']);
$isbn = mysqli_real_escape_string($link, $_POST['isbn']);
// attempt insert query execution
$sql = "INSERT INTO infoit (bid, bname, aname,edition,publisher,isbn) VALUES ('$book_id ', '$book_name', '$a_name ','$edition','$pub','$isbn')";
if(mysqli_query($link, $sql)){
    echo "<script type='text/javascript'>alert('Book Added Successfully!')</script>";
include "add.php";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>