<?php
include 'db.php';

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    if ($conn->query($sql)) {
        header("Location: login.php");
    } else {
        echo "Username already exists!";
    }
}
?>

<form method="post">
    <h2>Register</h2>
    <input type="text" name="username" required>
    <input type="password" name="password" required>
    <button name="register">Register</button>
</form>
