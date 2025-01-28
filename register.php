<?php
require('dbconnect.php');

// รับข้อมูลจากฟอร์ม
$emp_title = $_POST['emp_title'];
$emp_name = $_POST['emp_name'];
$emp_surname = $_POST['emp_surname'];
$emp_birthday = $_POST['emp_birthday'];
$emp_adr = $_POST['emp_adr'];
$emp_skill = $_POST['emp_skill'];
$emp_tel = $_POST['emp_tel'];
$emp_password = $_POST['emp_password'];
$emp_confirm_password = $_POST['emp_confirm_password'];

// ตรวจสอบการยืนยันรหัสผ่าน
if ($emp_password !== $emp_confirm_password) {
    echo "<script>alert('รหัสผ่านไม่ตรงกัน'); window.history.back();</script>";
    exit;
}

// แฮชรหัสผ่านก่อนเก็บในฐานข้อมูล
$hashed_password = password_hash($emp_password, PASSWORD_DEFAULT);

// สร้างคำสั่ง SQL สำหรับเพิ่มข้อมูล
$sql = "INSERT INTO employee (emp_title, emp_name, emp_surname, emp_birthday, emp_adr, emp_skill, emp_tel, emp_password) 
        VALUES ('$emp_title', '$emp_name', '$emp_surname', '$emp_birthday', '$emp_adr', '$emp_skill', '$emp_tel', '$hashed_password')";

// รันคำสั่ง SQL และตรวจสอบผลลัพธ์
if (mysqli_query($con, $sql)) {
    echo "<script>
            alert('บันทึกข้อมูลสำเร็จ');
            window.location.href='index.php'; 
          </script>";
} else {
    echo "<script>
            alert('เกิดข้อผิดพลาด: " . mysqli_error($con) . "');
            window.history.back(); 
          </script>";
}

// ปิดการเชื่อมต่อฐานข้อมูล
mysqli_close($con);
?>
