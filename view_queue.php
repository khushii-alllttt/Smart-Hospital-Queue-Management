<?php
include "db.php";

$query = "SELECT * FROM patient WHERE status = 0";
$result = mysqli_query($conn, $query);

if (!$result) {
    die("Query Failed: " . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Current Queue</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Current Queue</h2>

<table>
<tr>
    <th>Token</th>
    <th>Name</th>
    <th>Age</th>
</tr>

<?php
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
            <td>{$row['id']}</td> 

            <td>{$row['name']}</td>
            <td>{$row['age']}</td>
          </tr>";
}
?>

</table>

<br>
<a href="index.php">Back</a>

</body>
</html>
