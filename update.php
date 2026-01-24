<?php
include 'db.php';
$id = $_GET['id'];

$post = $conn->query("SELECT * FROM posts WHERE id=$id")->fetch_assoc();

if (isset($_POST['update'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];

    $conn->query("UPDATE posts SET title='$title', content='$content' WHERE id=$id");
    header("Location: dashboard.php");
}
?>

<form method="post">
    <input type="text" name="title" value="<?php echo $post['title']; ?>">
    <textarea name="content"><?php echo $post['content']; ?></textarea>
    <button name="update">Update</button>
</form>
