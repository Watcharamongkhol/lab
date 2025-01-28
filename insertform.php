<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

  <!-- Custom styles -->
  <style>
    body {
      background-color: #f4f7fc;
      font-family: 'Arial', sans-serif;
    }

    .container {
      margin-top: 50px;
    }

    .card {
      border-radius: 15px;
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
      overflow: hidden;
    }

    .card-header {
      background-color: #6c757d;
      color: white;
      font-size: 1.75rem;
      font-weight: bold;
      text-align: center;
      padding: 30px;
    }

    .form-control, .form-select, textarea {
      border-radius: 10px;
      box-shadow: none;
      border: 1px solid #ddd;
      padding: 12px;
    }

    .form-control:focus, .form-select:focus, textarea:focus {
      border-color: #007bff;
      box-shadow: 0 0 8px rgba(0, 123, 255, 0.4);
    }

    .btn {
      border-radius: 30px;
      padding: 12px 25px;
      font-size: 1.1rem;
      transition: all 0.3s ease-in-out;
    }

    .btn:hover {
      transform: translateY(-2px);
      box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
    }

    .btn-success {
      background-color: #28a745;
      border-color: #28a745;
    }

    .btn-danger {
      background-color: #dc3545;
      border-color: #dc3545;
    }

    .btn-primary {
      background-color: #007bff;
      border-color: #007bff;
    }

    .form-group label {
      font-weight: bold;
    }

    .form-group textarea {
      resize: vertical;
    }

    .btn-group {
      width: 100%;
    }

    .header-icon {
      font-size: 1.25rem;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .d-flex {
      gap: 15px;
    }
  </style>

  <title>บันทึกข้อมูลพนักงาน</title>
</head>

<body>
  <div class="container">
    <div class="card">
      <div class="card-header">
        <i class="header-icon bx bxs-user-plus"></i> บันทึกข้อมูลพนักงาน
      </div>
      <div class="card-body">
        <form action="insertdata.php" method="POST" class="form-signin">
          <div class="form-group">
            <label for="emp_title">คำนำหน้า :</label>
            <select name="emp_title" class="form-select" required>
              <option value="นาย">นาย</option>
              <option value="นาง">นาง</option>
              <option value="นางสาว">นางสาว</option>
            </select>
          </div>
          <div class="form-group">
            <label for="emp_name">ชื่อ :</label>
            <input type="text" name="emp_name" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="emp_surname">นามสกุล :</label>
            <input type="text" name="emp_surname" class="form-control">
          </div>
          <div class="form-group">
            <label for="emp_birthday">วันเดือนปีเกิด :</label>
            <input type="date" name="emp_birthday" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="emp_adr">ที่อยู่ :</label>
            <textarea name="emp_adr" class="form-control" rows="3"></textarea>
          </div>
          <div class="form-group">
            <label for="emp_skill">ทักษะพิเศษ :</label>
            <textarea name="emp_skill" class="form-control" rows="3"></textarea>
          </div>
          <div class="form-group">
            <label for="emp_tel">เบอร์โทรศัพท์ :</label>
            <input type="tel" name="emp_tel" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="emp_user">ชื่อเข้าระบบ :</label>
            <input type="text" name="emp_user" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="emp_pass">รหัสผ่าน :</label>
            <input type="password" name="emp_pass" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="emp_level">ระดับผู้ใช้งาน :</label>
            <select name="emp_level" class="form-select" required>
              <option value="">--เลือกระดับผู้ใช้งาน--</option>
              <option value="a">ผู้ดูแลระบบ</option>
              <option value="u">ผู้ใช้งาน</option>
            </select>
          </div>

          <div class="d-flex justify-content-between">
            <input type="submit" value="บันทึกข้อมูล" class="btn btn-success">
            <input type="reset" value="ล้างข้อมูล" class="btn btn-danger">
            <a href="index.php" class="btn btn-primary">กลับหน้าแรก</a>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>
