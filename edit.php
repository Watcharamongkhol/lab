<?php
require('dbconnect.php');

// ตรวจสอบว่า id ถูกส่งมาหรือไม่
if (isset($_GET['id'])) {
    $emp_id = $_GET['id']; // รับ emp_id จาก URL

    // ดึงข้อมูลพนักงานจากฐานข้อมูลที่มี emp_id = 40
    $sql = "SELECT * FROM employee WHERE emp_id = $emp_id";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);

    // ตรวจสอบว่าเราพบข้อมูลหรือไม่
    if (!$row) {
        die("ไม่พบข้อมูลพนักงานนี้ในฐานข้อมูล");
    }
}
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
  <title>แก้ไขข้อมูลพนักงาน</title>
</head>

<body>
  <div class="container">
    <h1 class="text-center mt-3">แก้ไขข้อมูลพนักงาน</h1>
    
    <!-- ฟอร์มแก้ไขข้อมูล -->
    <form action="update.php" method="POST">
      <!-- ส่ง emp_id ไปด้วยในฟอร์มเพื่ออัปเดต -->
      <input type="hidden" name="emp_id" value="<?php echo $row['emp_id']; ?>">

      <div class="mb-3">
        <label for="emp_title" class="form-label">คำนำหน้า</label>
        <input type="text" class="form-control" name="emp_title" value="<?php echo $row['emp_title']; ?>" required>
      </div>

      <div class="mb-3">
        <label for="emp_name" class="form-label">ชื่อ</label>
        <input type="text" class="form-control" name="emp_name" value="<?php echo $row['emp_name']; ?>" required>
      </div>

      <div class="mb-3">
        <label for="emp_surname" class="form-label">นามสกุล</label>
        <input type="text" class="form-control" name="emp_surname" value="<?php echo $row['emp_surname']; ?>" required>
      </div>

      <div class="mb-3">
        <label for="emp_birthday" class="form-label">วันเกิด</label>
        <input type="date" class="form-control" name="emp_birthday" value="<?php echo $row['emp_birthday']; ?>" required>
      </div>

      <div class="mb-3">
        <label for="emp_adr" class="form-label">ที่อยู่ปัจจุบัน</label>
        <input type="text" class="form-control" name="emp_adr" value="<?php echo $row['emp_adr']; ?>" required>
      </div>

      <div class="mb-3">
        <label for="emp_skill" class="form-label">ทักษะความสามารถ</label>
        <input type="text" class="form-control" name="emp_skill" value="<?php echo $row['emp_skill']; ?>" required>
      </div>

      <div class="mb-3">
        <label for="emp_tel" class="form-label">เบอร์โทรศัพท์</label>
        <input type="text" class="form-control" name="emp_tel" value="<?php echo $row['emp_tel']; ?>" required>
      </div>

      <!-- ปุ่มสำหรับบันทึกการแก้ไข -->
      <button type="submit" class="btn btn-primary">บันทึกการแก้ไข</button>
      <a href="index.php" class="btn btn-secondary">ยกเลิก</a>
    </form>
  </div>
</body>

</html>
