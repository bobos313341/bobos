<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $player_id = htmlspecialchars($_POST["player_id"]);

    $query = "SELECT points FROM users WHERE player_id = '$player_id'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if ($row['points'] >= 100) {
            $conn->query("UPDATE users SET points = points - 100 WHERE player_id = '$player_id'");
            echo "<h2>تم شحن 60 شدة إلى حسابك!</h2>";
        } else {
            echo "<h2>ليس لديك نقاط كافية! شاهد المزيد من الإعلانات.</h2>";
        }
    } else {
        echo "<h2>لم يتم العثور على الحساب!</h2>";
    }

    echo "<a href='index.php'>العودة إلى الصفحة الرئيسية</a>";
}
?>
