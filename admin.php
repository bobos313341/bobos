<?php
include 'config.php';
$result = $conn->query("SELECT * FROM users");
?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لوحة تحكم الموقع</title>
</head>
<body>
    <h1>قائمة المستخدمين</h1>
    <table border="1">
        <tr>
            <th>معرف اللاعب</th>
            <th>النقاط</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $row["player_id"]; ?></td>
            <td><?php echo $row["points"]; ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
