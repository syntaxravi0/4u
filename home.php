<?php
session_start();
if(!isset($_SESSION['na']))
	header("location: log.html");
?>
<html>
<body>
<h1> LOGIN SUCCESSFUL </h1>
<?php echo"Welcome!!", $_SESSION['na']; ?>
<hr>
<a href="search.html">Search</a>
<a href="showall.php">ShowAll</a>




</body>
</html>
