<?php
require('dbconnect.php');

// รับ emp_id จาก URL
$emp_id = $_GET['id'];

// สร้างคำสั่ง SQL สำหรับลบข้อมูล
$sql = "DELETE FROM employee WHERE emp_id = $emp_id";

// รันคำสั่ง SQL และตรวจสอบผลลัพธ์
if (mysqli_query($con, $sql)) {
    echo "<script>
            alert('ลบข้อมูลพนักงานสำเร็จ');
            window.location.href = 'index.php'; // กลับไปที่หน้าหลัก
          </script>";
} else {
    echo "<script>
            alert('เกิดข้อผิดพลาด: " . mysqli_error($con) . "');
            window.history.back(); // ย้อนกลับไปหน้าก่อนหน้า
          </script>";
}

// ปิดการเชื่อมต่อฐานข้อมูล
mysqli_close($con);
?>
