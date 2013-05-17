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
			<h1><a href="index.php">FollowTweets</a></h1>
		</div>
		<div id="menu">
			<ul>
				<li class="first current_page_item"><a href="index.php">Home</a></li>
				<li><a href="search.php">Search</a></li>
				<li><a href="viewall.php">My Hashtags</a></li>
				
				
			</ul>
			<br class="clearfix" />
		</div>
	</div>
	<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript" src="twitStream.js"></script>
	<div id="page">
	    
		<div id="content" align="left">
			<div class="box" >
				<h3 align="left">Recent Tweets for your hashtags</h3>
				<p>
				
				<?php
				    session_start();
				    include('settings.php');
				    $db=new PDO("mysql:host=localhost;dbname=takneek", $DBUSER, $DBPASS);
				    
				    if(!isset($_SESSION['username'])){
				    echo "<meta http-equiv='Refresh' content='0; URL=search.php'>";
				    exit(0);
				    }
					$result = $db->query('SELECT * FROM hashtags where username="'.$_SESSION['username'].'"');
					
					foreach($result as $row)
					{   echo "<h1>#".$row['tag']."</h1>";
					    
					    echo "";
					    echo '<div class="twitStream 5" id="tweets" title="#'.$row['tag'].'"></div>';
					}
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
