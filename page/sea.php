<!DOCTYPE html>
<html>
<body>
<table width="100%"><tr><th>Book ID</th><th>Book Name</th><th>Author Name</th><th>Publisher</th><th>ISBN No.</th></tr></table>
<?php
$servername = "localhost";
$username = "root";
$password = "sql";
$dbname = "books";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = mysql_query("SELECT bid,bname,aname,edition,publisher,isbn 
FROM infoit 
WHERE ('bid'=$_POST['bid']))";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
     // output data of each row
 
     while($row = $result->fetch_assoc())
 {
 echo" ".$row["bname"]. " ". $row["aname"]. " ". $row["edition"]. "   ". $row["publisher"]. " ". $row["isbn"]. " <br>";

} 
} 
else {
     echo "0 results";
}

$conn->close();
?>  

</body>
</html>