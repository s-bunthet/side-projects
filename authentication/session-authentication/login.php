<?php
session_start();
$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // In a real application, use a database for user authentication
    if ($username == 'admin' && $password == 'password') {
        $_SESSION['username'] = $username;
        header("Location: home.php");
        exit();
    } else {
        $message = "Invalid username or password!";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h2>Login</h2>
<form method="post" action="">
    <label>Username:</label>
    <input type="text" name="username" required><br><br>
    <label>Password:</label>
    <input type="password" name="password" required><br><br>
    <button type="submit">Login</button>
</form>
<p style="color:red;"><?php echo $message; ?></p>
</body>
</html>
