<?php
require 'jwt_utils.php';
$jwt = isset($_COOKIE['jwt']) ? $_COOKIE['jwt'] : null;
$decoded = $jwt ? decode_jwt($jwt) : null;

if (!$decoded) {
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
<p>Welcome, <?php echo $decoded->username; ?>!</p>
<form method="post" action="logout.php">
    <button type="submit">Logout</button>
</form>
</body>
</html>
