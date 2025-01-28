<?php
require('dbconnect.php');

// ตรวจสอบว่าได้รับ ID ของพนักงานหรือไม่
if (isset($_GET['id'])) {
  $emp_id = $_GET['id'];

  // คำสั่ง SQL เพื่อดึงข้อมูลพนักงานที่ต้องการแก้ไข
  $sql = "SELECT * FROM employee WHERE emp_id = $emp_id";
  $result = mysqli_query($con, $sql);

  // ตรวจสอบว่ามีข้อมูลหรือไม่
  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
  } else {
    echo "ไม่พบข้อมูลพนักงาน";
    exit;
  }
} else {
  echo "ไม่พบพนักงานที่ต้องการแก้ไข";
  exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // รับข้อมูลจากฟอร์ม
  $emp_title = $_POST['emp_title'];
  $emp_name = $_POST['emp_name'];
  $emp_surname = $_POST['emp_surname'];
  $emp_birthday = $_POST['emp_birthday'];
  $emp_adr = $_POST['emp_adr'];
  $emp_skill = $_POST['emp_skill'];
  $emp_tel = $_POST['emp_tel'];

  // คำสั่ง SQL เพื่ออัปเดตข้อมูลพนักงาน
  $update_sql = "UPDATE employee SET 
    emp_title = '$emp_title',
    emp_name = '$emp_name',
    emp_surname = '$emp_surname',
    emp_birthday = '$emp_birthday',
    emp_adr = '$emp_adr',
    emp_skill = '$emp_skill',
    emp_tel = '$emp_tel'
    WHERE emp_id = $emp_id";

  if (mysqli_query($con, $update_sql)) {
    echo "อัปเดตข้อมูลสำเร็จ";
    header("Location: index.php"); // กลับไปที่หน้าหลักหลังจากอัปเดตข้อมูล
  } else {
    echo "เกิดข้อผิดพลาด: " . mysqli_error($con);
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
  <div class="container mt-5">
    <h2>แก้ไขข้อมูลพนักงาน</h2>
    <form action="edit_employee.php?id=<?php echo $emp_id; ?>" method="POST">
      <div class="mb-3">
        <label for="emp_title" class="form-label">คำนำหน้า</label>
        <input type="text" class="form-control" id="emp_title" name="emp_title" value="<?php echo $row['emp_title']; ?>" required>
      </div>
      <div class="mb-3">
        <label for="emp_name" class="form-label">ชื่อ</label>
        <input type="text" class="form-control" id="emp_name" name="emp_name" value="<?php echo $row['emp_name']; ?>" required>
      </div>
      <div class="mb-3">
        <label for="emp_surname" class="form-label">นามสกุล</label>
        <input type="text" class="form-control" id="emp_surname" name="emp_surname" value="<?php echo $row['emp_surname']; ?>" required>
      </div>
      <div class="mb-3">
        <label for="emp_birthday" class="form-label">วันเกิด</label>
        <input type="date" class="form-control" id="emp_birthday" name="emp_birthday" value="<?php echo $row['emp_birthday']; ?>" required>
      </div>
      <div class="mb-3">
        <label for="emp_adr" class="form-label">ที่อยู่</label>
        <textarea class="form-control" id="emp_adr" name="emp_adr" required><?php echo $row['emp_adr']; ?></textarea>
      </div>
      <div class="mb-3">
        <label for="emp_skill" class="form-label">ทักษะความสามารถ</label>
        <input type="text" class="form-control" id="emp_skill" name="emp_skill" value="<?php echo $row['emp_skill']; ?>" required>
      </div>
      <div class="mb-3">
        <label for="emp_tel" class="form-label">เบอร์โทรศัพท์</label>
        <input type="tel" class="form-control" id="emp_tel" name="emp_tel" value="<?php echo $row['emp_tel']; ?>" required>
      </div>
      <button type="submit" class="btn btn-primary">บันทึกการแก้ไข</button>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
