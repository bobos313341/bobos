<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $player_id = htmlspecialchars($_POST["player_id"]);

    $query = "SELECT * FROM users WHERE player_id = '$player_id'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $conn->query("UPDATE users SET points = points + 10 WHERE player_id = '$player_id'");
    } else {
        $conn->query("INSERT INTO users (player_id, points) VALUES ('$player_id', 10)");
    }

    echo "<h2>تم إضافة 10 نقاط لحسابك! استمر في مشاهدة الإعلانات.</h2>";
    echo "<a href='index.php'>العودة إلى الصفحة الرئيسية</a>";
}
?>
