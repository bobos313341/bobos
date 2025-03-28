<?php
$host = "localhost";  // اسم السيرفر
$user = "root";       // اسم مستخدم MySQL
$pass = "";           // كلمة المرور (اتركها فارغة إذا لم يكن لديك كلمة مرور)
$db = "pubg_rewards"; // اسم قاعدة البيانات

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("فشل الاتصال بقاعدة البيانات: " . $conn->connect_error);
}
?>
