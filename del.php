<?php
session_start();
if(!isset($_SESSION['username']))exit(0);
$id=intval($_POST['id']);
include('settings.php');
$db=new PDO("mysql:host=localhost;dbname=$DBNAME", $DBUSER, $DBPASS);
$result = $db->query("SELECT * FROM hashtags WHERE id='$id'");

foreach($result as $row){
    
   
    $query="DELETE FROM hashtags where id='$id'";
    $db->query($query);
    }

    echo "<meta http-equiv='Refresh' content='0; URL=edit.php'>";


?>
