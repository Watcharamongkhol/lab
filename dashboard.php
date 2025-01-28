<?php
session_start();

// ตรวจสอบว่าผู้ใช้เข้าสู่ระบบหรือไม่
if (!isset($_SESSION['emp_id'])) {
    header("Location: login.php");  // ถ้าไม่ได้เข้าสู่ระบบให้กลับไปหน้า login
    exit();
}

// ดึง emp_id จาก session
$emp_id = $_SESSION['emp_id'];

// แสดงข้อมูลพนักงาน
echo "ยินดีต้อนรับพนักงานหมายเลข: " . $emp_id;
?>
