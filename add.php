<?php
session_start();
if(!isset($_SESSION['username']))exit(0);
$name=mysql_real_escape_string($_POST['tag']);
include('settings.php');
$db=new PDO("mysql:host=localhost;dbname=$DBNAME", $DBUSER, $DBPASS);

    $query="INSERT INTO hashtags(username,tag) VALUES('".$_SESSION['username']."','".$name."')";
   
    $db->query($query);
    

    echo "<meta http-equiv='Refresh' content='0; URL=edit.php'>";


?>
