<?php
session_start();
?>
<html>
<head>
<title>User Login</title>
</head>
<body>

<?php
if($_SESSION["username"]) {
?>
Welcome <?php echo $_SESSION["username"]; ?>. Click here to <a href="logout.php" tite="Logout">Logout.
<?php
}else echo "<h2>Please login first</h2>";
?>
</body>
</html>