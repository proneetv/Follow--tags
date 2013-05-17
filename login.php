<?php
session_start();
/*if(isset($_SESSION['username'])){
    echo '';
    exit(0);
    }
*/
if(isset($_POST['login'])){
        include('settings.php');
         $db=new PDO("mysql:host=localhost;dbname=$DBNAME", $DBUSER, $DBPASS);
					$username=mysql_real_escape_string($_POST['username']);
					$password=md5(mysql_real_escape_string($_POST['password']));
					
					//$password=md5($_POST['password']);
			    $result = $db->query("SELECT * FROM users WHERE username='$username' AND password= '$password'");
					    if($row=$result->fetch()){
					            $_SESSION['username']=$row['username'];
                                $_SESSION['userID']=$row['userID'];
                                //echo "logged in";
                                
                               echo '<meta http-equiv="REFRESH" content="0;url=index.php">';
                                exit(0);
                                }
				
                  
                   
                   echo '<meta http-equiv="REFRESH" content="0;url=index.php?error=1">';
	    }
if(isset($_POST['signup'])){
    echo '<meta http-equiv="REFRESH" content="0;url=register.php">';
    }
?>
