<?php
 define('DB_HOST', 'localhost');
 define('DB_NAME', 'books'); 
 define('DB_USER','root'); 
 define('DB_PASSWORD','sql'); 
 $con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
 $db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
 /* 
 $ID = $_POST['user']; 
 $Password = $_POST['pass']; 
 */ 
 function SignIn() 
 { 
    session_start(); //starting the session for user profile page 
    if(!empty($_POST['BID'])) //checking the 'user' name which is from Sign-In.html, is it empty or have some text 
    {
        $query = mysql_query("SELECT bid FROM infoit where bid='$_POST[BID]'") or die(mysql_error()); 
        $row = mysql_fetch_array($query); 
        if(!empty($row['bid'])) 
        { 
            $_SESSION['BID'] = $row['bid']; 
       echo 'hyyf';
        } 
        else 
        { 
            echo 'SORRY... YOU ENTERD WRONG ID AND PASSWORD...<a href="admin.php"</a>PLEASE RETRY'; 
        }
    } 
 } 
 if(isset($_POST['submit'])) 
 { SignIn(); } 
 ?>