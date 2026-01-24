<?php
include 'db.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = $conn->query("SELECT * FROM users WHERE username='$username'");
    $user = $result->fetch_assoc();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user'] = $user['username'];
        header("Location: dashboard.php");
    } else {
        echo "Invalid login!";
    }
}
?>

<form method="post">
    <h2>Login</h2>
    <input type="text" name="username" required>
    <input type="password" name="password" required>
    <button name="login">Login</button>
</form>
