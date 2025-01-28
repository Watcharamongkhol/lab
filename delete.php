<?php
require('dbconnect.php'); // เชื่อมต่อกับฐานข้อมูล

if (isset($_GET['id'])) {
    $emp_id = $_GET['id']; // รับรหัสพนักงานที่ต้องการลบ

    // เตรียมคำสั่ง SQL เพื่อลบข้อมูลพนักงาน
    $sql = "DELETE FROM employee WHERE emp_id = $emp_id";

    if (mysqli_query($con, $sql)) {
        echo "ลบข้อมูลสำเร็จ";
    } else {
        echo "เกิดข้อผิดพลาดในการลบข้อมูล: " . mysqli_error($con);
    }
    
    // หลังจากลบเสร็จแล้ว ให้กลับไปที่หน้ารายชื่อพนักงาน
    header("Location: index.php"); 
    exit();
}
?>
