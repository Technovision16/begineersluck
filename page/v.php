<html>
<head>
<title>About</title>
</head>
<body link="#ffffff" bgcolor="#C8E4FF" alink="Black" vlink="black">
<table align="center">
 <tr bgcolor="#C8E4FF">
  <td><center><table border=0 width=100%>
       <tr bgcolor="#C8E4FF">
          <td align="left"><left><img src="../images/logo1.png" width="300" height="140" ></left></td>
       </tr>
       <tr bgcolor="teal" >
          <td height="40" colspan="3"><pre><font face="Arial" size="4"> <a href="home.php">Home</a>  |  <a href="about.php">About Us</a>  |  <a href="gallery.php">Photo Gallery</a>  |  <a href="branch.php">Branch</a>  |  <a href="p.php">Help</a>                                                                          <a href="homea.php">Back To Admin Page</a></pre></font></td>
       </tr>
       <tr bgcolor="#C8E4FF">
          <td colspan="2" align="center"><img src="../images/v.png" width="600" height="260" ></td>
<td><img src="../images/b.gif" width="300" height="260" ></td>
       </tr>
<table width="100%" border=1 align="center" background="a.jpg"><tr><th><font face="Calibri" size="5">Book ID</th><th><font face="calibri" size="5">Book Name</th><th><font face="calibri" size="5">Author Name</th><th><font face="calibri" size="5">Edition</th><th><font face="calibri" size="5">Publisher</th><th><font face="calibri" size="5">ISBN No.</th></tr>
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

$sql = "SELECT image,bid,bname,aname,edition,publisher,isbn FROM infoit";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
     // output data of each row
 
     while($row = $result->fetch_assoc())
 {
   echo"<tr><td>".$row["bid"]. "</td><td>".$row["bname"]. "</td><td>". $row["aname"]. "</td><td> ". $row["edition"]. " </td><td> ". $row["publisher"]. " </td><td>". $row["isbn"]. " </td></tr>";

} 
} 
else {
     echo "0 results";
}

$conn->close();
?>  

</body>
</html>