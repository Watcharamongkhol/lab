<?php
session_start();
require('dbconnect.php');  // เชื่อมต่อฐานข้อมูล

// รับค่าจากฟอร์ม
$username = $_POST['username'];
$password = $_POST['password'];

// ค้นหาผู้ใช้ในฐานข้อมูล
$sql = "SELECT * FROM users WHERE username = '$username'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

// ตรวจสอบการเข้าสู่ระบบ
if ($row && password_verify($password, $row['password'])) {
    // เริ่ม session และเก็บข้อมูลผู้ใช้
    $_SESSION['username'] = $username;
    header("Location: dashboard.php");  // เปลี่ยนเส้นทางไปที่หน้า dashboard
} else {
    echo "ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง";
}
?>
