<?php
include 'db.php';
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
}
?>

<h2>Welcome <?php echo $_SESSION['user']; ?></h2>
<a href="create.php">Add Post</a> |
<a href="logout.php">Logout</a>

<hr>

<?php
$result = $conn->query("SELECT * FROM posts");
while ($row = $result->fetch_assoc()) {
    echo "<h3>{$row['title']}</h3>";
    echo "<p>{$row['content']}</p>";
    echo "<a href='edit.php?id={$row['id']}'>Edit</a> | ";
    echo "<a href='delete.php?id={$row['id']}'>Delete</a><hr>";
}
?>
