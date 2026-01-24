<?php
include 'db.php';

if (isset($_POST['add'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];

    $conn->query("INSERT INTO posts (title, content) VALUES ('$title', '$content')");
    header("Location: dashboard.php");
}
?>

<form method="post">
    <h2>Add Post</h2>
    <input type="text" name="title" required>
    <textarea name="content" required></textarea>
    <button name="add">Add</button>
</form>
