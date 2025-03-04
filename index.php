<?php
require('dbconnect.php');
$sql = "SELECT * FROM employee"; //เลือกข้อมูลจากตาราง employee ออกมาแสดง
$result = mysqli_query($con, $sql); //รันคำสั่งที่ถูกเก็บไว้ในตัวแปร $sql

$count = mysqli_num_rows($result); //เก็บผลที่ได้จากคำสั่ง $result เก็บไว้ในตัวแปร $count
$order = 1; //ให้เริ่มนับแถวจากเลข 1
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

  <title>รายชื่อพนักงานทั้งหมด</title>
  <style>
    .container {
      margin-top: 50px;
    }
    .card-header {
      background-color: #f8f9fa;
      font-size: 1.5rem;
      font-weight: bold;
    }
    .table th, .table td {
      vertical-align: middle;
    }
    .btn-group {
      display: flex;
      justify-content: space-around;
    }
  </style>
</head>

<body>
  <div class="container">
    <?php
    require("nav.php");
    ?>
    <div class="card">
      <div class="card-header text-center">
        รายชื่อพนักงานทั้งหมด
      </div>
      <div class="card-body">
        <form action="searchdata.php" class="form-group my-3" method="POST">
          <div class="row">
            <div class="col-6">
              <input type="text" placeholder="กรอกชื่อหรือนามสกุลที่ต้องการค้น" class="form-control" name="emp_data" required>
            </div>
            <div class="col-6">
              <input type="submit" value="ค้นหาข้อมูลพนักงาน" class="btn btn-info w-100">
            </div>
          </div>
        </form>

        <table class="table table-striped table-bordered mt-3">
          <thead class="table-dark">
            <tr>
              <th>#</th>
              <th>คำนำหน้า</th>
              <th>ชื่อ</th>
              <th>สกุล</th>
              <th>วันเกิด</th>
              <th>ที่อยู่ปัจจุบัน</th>
              <th>ทักษะความสามารถ</th>
              <th>เบอร์โทรศัพท์</th>
              <th>จัดการ</th>
            </tr>
          </thead>
          <tbody>
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
              <tr>
                <td><?php echo $order++; ?></td>
                <td><?php echo $row["emp_title"]; ?></td>
                <td><?php echo $row["emp_name"]; ?></td>
                <td><?php echo $row["emp_surname"]; ?></td>
                <td><?php echo $row["emp_birthday"]; ?></td>
                <td><?php echo $row["emp_adr"]; ?></td>
                <td><?php echo $row["emp_skill"]; ?></td>
                <td><?php echo $row["emp_tel"]; ?></td>
                <td>
                  <div class="btn-group">
                    <!-- ปุ่มแก้ไข -->
                    <a href="edit_employee.php?id=<?php echo $row['emp_id']; ?>" class="btn btn-warning btn-sm">แก้ไข</a>
                    <!-- ปุ่มลบ -->
                    <a href="delete_employee.php?id=<?php echo $row['emp_id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('คุณแน่ใจที่จะลบพนักงานนี้?')">ลบ</a>
                  </div>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>

        <div class="text-center mt-3">
          <a href="insertform.php" class="btn btn-success">กรอกข้อมูลพนักงาน</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>

</html>
