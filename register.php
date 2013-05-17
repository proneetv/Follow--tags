<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Follow #tags:Home</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div id="wrapper">
	<div id="header">
		<div id="logo">
			<h1><a href="index.php">Follow #tags</a></h1>
		</div>
		<div id="menu">
			<ul>
				<li class="first current_page_item"><a href="index.php">Home</a></li>
				<li><a href="search.php">Search</a></li>
			
				
				
			</ul>
			<br class="clearfix" />
		</div>
	</div>
	<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript" src="twitStream.js"></script>
	<div id="page">
	    
		<div id="content" align="left">
			<div class="box" >
				
		
<form action="adduser.php" method="POST">
<table width= 100%>
<tr >
<td>Name</td>
<td><input name="name" size=40% type="text" /></td>
</tr>

<tr >
<td>Username </td>
<td><input name="rusername" size="40%" type="text" /></td>
</tr>

<tr>
<td>Password </td>
<td><input name="password" type="password" size="40%" /></td>
</tr>

<tr>
<td>Confirm Password </td>
<td><input name="cpassword" type="password" size="40%" /></td>
</tr>

<tr>
<td>Email address</td>
<td><input name="email" type="text" size="40%"></td>
</tr>
</br>
<tr><td>
</br>
<div text-align="center">
<input type="submit" value="Register">
</div>
</td></tr>
</form>

</table>

				
    
				
				
				
				
			</div>
			<br class="clearfix" />
			
		</div>
		<?php include('sidebar.php');
		    
		?>
		
		</div>
		<br class="clearfix" />
		
		
	</div>
	

<div id="footer">
	
</div>
</body>
</html>
