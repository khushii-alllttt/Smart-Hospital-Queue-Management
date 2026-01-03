<?php
include "db.php";

/* Get latest token */
$sql = "SELECT * FROM patient ORDER BY token DESC LIMIT 1";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Token Slip</title>
    <style>
        body{
            font-family: Arial;
            background: #f4f4f4;
        }
        .slip{
            width: 280px;
            padding: 15px;
            background: #fff;
            border: 2px dashed #000;
            margin: 50px auto;
            text-align: center;
        }
        h2{
            margin: 5px 0;
        }
        .print-btn{
            margin-top: 10px;
            padding: 6px 15px;
            font-size: 14px;
        }
        @media print {
            body * {
                visibility: hidden;
            }
            .slip, .slip * {
                visibility: visible;
            }
            .slip {
                position: absolute;
                left: 0;
                top: 0;
            }
            .print-btn {
                display: none;
            }
        }
    </style>
</head>
<body>

<div class="slip">
    <h2>City Hospital</h2>
    <hr>

    <h1>Token: <?php echo $row['token']; ?></h1>

    <p><b>Name:</b> <?php echo $row['name']; ?></p>
    <p><b>Age:</b> <?php echo $row['age']; ?></p>

    <p><?php echo date("d-m-Y h:i A"); ?></p>

    <button class="print-btn" onclick="window.print()">Print Slip</button>
</div>

</body>
</html>
