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
          <td colspan="3" align="center"><img src="../images/v.png" width="700" height="260" ></td>
       </tr>
<table width="100%" border=1 align="center" background="a.jpg"><tr><th><font face="calibri" size="4">Book Name</th><th><font face="calibri" size="4">Author Name</th><th><font face="calibri" size="4">Edition</th><th>Publisher<font face="calibri" size="4"></th><th>ISBN No.<font face="calibri" size="4"></th></tr>   
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "library";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);
//mysql_select_db($dbname,$conn);
// Check connection
if (!$conn) {
     die("Connection failed: ");
} 
//echo $_POST['bname'];

    if (isset ($_POST['bname']))
        $bname= $_POST['bname'];
    $sql ="Select bid,bname,aname,edition,publisher,isbn from infoit where bname LIKE '%$bname%' " or die("could not search");
  $result =$conn->query($sql);
var_dump($result);
if ($result->num_rows > 0) 
{
        while($row = $result->fetch_assoc())
{
       echo"<tr><td>".$row["bname"]. "</td><td> ". $row["aname"]. "</td><td> ". $row["edition"]. " </td><td>  ". $row["publisher"]. " </td><td>". $row["isbn"]. " </td></tr>";
        }

        }