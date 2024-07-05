<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h2>Welcome</h2>
<p>Welcome, <?php echo $_SESSION['username']; ?>!</p>
<form method="post" action="logout.php">
    <button type="submit">Logout</button>
</form>
</body>
</html>
