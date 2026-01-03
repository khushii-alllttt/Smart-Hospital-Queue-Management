<?php
include "db.php";

if (isset($_GET['next'])) {
    mysqli_query($conn, "UPDATE patient SET status=1 WHERE status=0 ORDER BY token ASC LIMIT 1");
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Admin Panel</h2>

<?php
$res = mysqli_query($conn, "SELECT * FROM patient WHERE status=0 ORDER BY token ASC LIMIT 1");
$row = mysqli_fetch_assoc($res);

if ($row) {
    echo "<h3>Now Serving Token: {$row['token']}</h3>";
    echo "<p>Name: {$row['name']}</p>";
} else {
    echo "<h3>No Patients Waiting</h3>";
}
?>

<a href="admin.php?next=1" class="btn">Next Token</a>
<br><br>
<a href="index.php">Back</a>

</body>
</html>
