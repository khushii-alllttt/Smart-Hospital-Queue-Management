<!DOCTYPE html>
<html>
<head>
    <title>Smart Hospital Queue</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Smart Hospital Queue Management</h1>

<div class="box">
<form action="add_patient.php" method="POST">
    <input type="text" name="name" placeholder="Patient Name" required>
    <input type="number" name="age" placeholder="Age" required>
    <button type="submit">Generate Token</button>
</form>

<br>
<a href="view_queue.php">View Queue</a> |
<a href="admin.php">Admin Panel</a>
</div>

</body>
</html>
