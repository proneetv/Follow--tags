<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Follow #tags:Search</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div id="wrapper">
	<div id="header">
		<div id="logo">
			<h1><a href="#">Follow #tags</a></h1>
		</div>
			<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript" src="twitStream.js"></script>
		<div id="menu">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li class="first current_page_item"><a href="search.php">Search</a></li>
			<li><a href="viewall.php">My Hashtags</a></li>
				
				
			</ul>
			<br class="clearfix" />
		</div>
	</div>
	
	<div id="page">
	    
		<div id="content" align="left">
			<div class="box">
				
				<form action="search.php" method=GET">
			    <input type="text" size="100%" name="q"></br>
			    <div style="text-align:center;">

			    <input type="submit" style="height: 50px;width:150px;cursor:pointer;" value="Search" ">
			    </div>
			    </form>
			    <?php
				
				echo '<div class="twitStream 50" id="tweets" title="#'.$_GET['q'].'"> ';
				?>
			</div>
			</div>
			<br class="clearfix" />
			
		</div>
		<?php include('sidebar.php');
		    
		?>
		
		</div>
		<br class="clearfix" />
		
		
	</div>
	
</div>
<div id="footer">
	WebDev Takneek. CSS by <a href="http://www.freecsstemplates.org/">freecstemplates</a>.
</div>
</body>
</html>
