<?php
session_start();
if(!isset($_SESSION['username']))exit(0);
?>
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
				<li ><a href="index.php">Home</a></li>
				<li><a href="search.php">Search</a></li>
				<li><a href="viewall.php">My Hashtags</a></li>
				
				
				
			</ul>
			<br class="clearfix" />
		</div>
	</div>
	
	<div id="page">
	    
		<div id="content" align="left">
		
		
	        <div id="box" align="center">
	        
	        <?php
	        echo "<img src='".$_SESSION['link']."' width='243' height='312' style='float:inherit' /></br>";
	        ?>
	        
            <div id="box" align="center">
	        <h3>Delete Hashtags</h3></div>
	        <?php
	        include('settings.php');
		$db=new PDO("mysql:host=localhost;dbname=$DBNAME", $DBUSER, $DBPASS);
		 $result = $db->query("SELECT * FROM hashtags WHERE username='".$_SESSION['username']."'");
		 
		 foreach($result as $row){
		 
		   echo "#".$row['tag']."<form action='del.php' method=POST><input type='hidden' name='id' value='".$row['id']."'><input type='submit' value='delete'></form>" ;
		      
		 }
		 
		?>
	        </div>
			
			</br></br>
			<div id="box" align="center"><h3>Add Hashtags</h3>
			
			<form action="add.php" method=POST>
			<input type="text" name="tag" >
			<input type="submit" name="submit" value="add">
			</form>
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
