<?php


session_start();

unset($_SESSION['username']);
unset($_SESSION['password']);


echo "<meta http-equiv='Refresh' content='0; URL=index.php'/>";
?>
