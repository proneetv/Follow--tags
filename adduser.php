<?php
include('settings.php');
session_start();
if(($_SESSION['isloggedin'] == 1) or !isset($_POST)){
echo'<meta http-equiv="REFRESH" content="0;url=index.php">';
exit(0);
}
if(!isset($_POST['name'])){
echo 'Name missing';
echo'<meta http-equiv="REFRESH" content="5;url=register.php">';
exit(0);
}
if(!isset($_POST['rusername'])or$_POST['rusername']==""){
echo 'UserName missing';
echo'<meta http-equiv="REFRESH" content="5;url=register.php">';
exit(0);
}
if(!isset($_POST['password'])or$_POST['password']==""){
echo 'password missing';
echo'<meta http-equiv="REFRESH" content="5;url=register.php">';
exit(0);
}
if($_POST['password']!=$_POST['cpassword']){
echo 'passwords do not match';
echo'<meta http-equiv="REFRESH" content="5;url=register.php">';
exit(0);
}

if(!isset($_POST['email'])){
echo 'email missing';
echo'<meta http-equiv="REFRESH" content="5;url=register.php">';
exit(0);
}
$username=mysql_real_escape_string($_POST['rusername']);
$password=md5(mysql_real_escape_string($_POST['password']));
$email=mysql_real_escape_string($_POST['email']);
$name=mysql_real_escape_string($_POST['name']);

	   $cn = mysql_connect('localhost', $DBUSER, $DBPASS);
	   mysql_select_db($DBNAME, $cn);
$query = "INSERT INTO users(username,password,name,email)  VALUES ('$username', '$password', '$name', '$email')";

if(!mysql_query($query)){
		if(mysql_errno() == 1062)
		{
			echo'Username already taken';
			echo'<meta http-equiv="REFRESH" content="5;url=register.php">';
            exit(0);
		}
		else
		{
			echo'Error creating account';
			echo'<meta http-equiv="REFRESH" content="5;url=register.php">';
            exit(0);
		}
	}
	else
	{
		echo 'Account Created.Redirecting you to home page';
		echo'<meta http-equiv="REFRESH" content="3;url=index.php">';
        exit(0);
	}
	mysql_close($cn);


?>
