<?php
require('dbconnect.php');

// ตรวจสอบว่าได้รับข้อมูลจากฟอร์มหรือไม่
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $emp_id = $_POST['emp_id']; // รับ emp_id
    $emp_title = $_POST['emp_title'];
    $emp_name = $_POST['emp_name'];
    $emp_surname = $_POST['emp_surname'];
    $emp_birthday = $_POST['emp_birthday'];
    $emp_adr = $_POST['emp_adr'];
    $emp_skill = $_POST['emp_skill'];
    $emp_tel = $_POST['emp_tel'];

    // อัปเดตข้อมูลในฐานข้อมูล
    $sql = "UPDATE employee SET 
            emp_title = '$emp_title',
            emp_name = '$emp_name',
            emp_surname = '$emp_surname',
            emp_birthday = '$emp_birthday',
            emp_adr = '$emp_adr',
            emp_skill = '$emp_skill',
            emp_tel = '$emp_tel'
            WHERE emp_id = $emp_id";

    if (mysqli_query($con, $sql)) {
        echo "ข้อมูลถูกอัปเดตเรียบร้อยแล้ว!";
        header("Location: index.php"); // กลับไปหน้าแรกหลังจากอัปเดต
    } else {
        echo "เกิดข้อผิดพลาดในการอัปเดตข้อมูล: " . mysqli_error($con);
    }
}
?>
