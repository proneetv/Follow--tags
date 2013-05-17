<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Follow #tags:View</title>
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
				<li ><a href="index.php">Home</a></li>
				<li><a href="search.php">Search</a></li>
				<li class="first current_page_item"><a href="viewall.php">My Hashtags</a></li>
				
				
			</ul>
			<br class="clearfix" />
		</div>
	</div>
	<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript" src="twitStream.js"></script>
	<div id="page">
	    
		<div id="content" align="center">
			<div class="box" >
				<h3 align="left">Your hashtags</h3>
				</br>
				
				<?php
				    session_start();
				    if(!isset($_SESSION['username'])){
				        echo'Login to see your hastags';
				        goto a;
				        }
				    include('settings.php');
				    $db=new PDO("mysql:host=localhost;dbname=takneek", $DBUSER, $DBPASS);
				    
					$result = $db->query('SELECT * FROM hashtags where username="'.$_SESSION['username'].'"');
					
					foreach($result as $row)
					{   echo "<p><a href='search.php?q=".$row['tag']."'><h3>#".$row['tag']."</h3></a></p></br></br>";
					    
					    
					}
a:
				?>
				
				
				
    
				
				
				
				
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
