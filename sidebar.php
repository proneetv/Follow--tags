<?php session_start() ;

if(!isset($_SESSION['username'])){
    echo '
    <div id="sidebar" >
			<ul>
				<li>
					<form style=" margin-left: 0px; margin-right: 0px;" action="login.php" method="post">						
						<d align="center">Username</d><br/>
						<input name="username" size="20" type="text" "/><br/>
						<d>Password<br/></d>
						<input name="password" size="20" type="password" /></br>
						<div align="center"><input id="loginbutton" class="button" type="submit" name="login" value="Login" />
						<input id="loginbutton" class="button" type="submit" name="signup" value="Sign Up" /></div>
					</form>	
					</li>
					';
					if($_GET['error']==1)echo"</br> Incorrect ID or password";
					echo'
					</ul>
			
			
</div>
        
        ';
   }
   
else {
    
    $Susername=$_SESSION['username'];
    
    echo '<div id="sidebar" >
			
				
				<ul>
					
					<li>
					Welcome, <b>'. $Susername.' </b></br></br>
					
					</li>
					<li>
					<a href="viewall.php" >View My Hashtags</a></br>
					<a href="edit.php" >Manage My Hashtags</a></br>
					<a href="logout.php">Logout</a></br>
					</li>
					</ul>
			
			
</div>';

}

?>


