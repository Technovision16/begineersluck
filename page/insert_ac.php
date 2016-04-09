<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="sql"; // Mysql password 
$db_name="library"; // Database name 
$tbl_name="infocs"; // Table name 

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// Get values from form 
$bookid=$_POST['bid'];
$bookname=$_POST['bname'];
$authorname=$_POST['aname'];
$edition=$_POST['edition'];
$publisher=$_POST['publisher'];
$isbn=$_POST['isbn'];
// Insert data into mysql 
$sql="INSERT INTO $tbl_name(bid, bname, aname,edition,publisher,isbn)VALUES('$bid', '$bname', '$aname','$edition', '$publisher', '$isbn')";
$result=mysql_query($sql);

// if successfully insert data into database, displays message "Successful". 
if($result){
echo "Successful";
echo "<BR>";
echo "<a href='insert.php'>Back to main page</a>";
}

else {
echo "ERROR";
}
?> 

<?php 
// close connection 
mysql_close();
?>