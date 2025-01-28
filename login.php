<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

  <style>
    body {
      background: linear-gradient(45deg, #003366, #0066cc); /* พื้นหลังน้ำเงิน */
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .container {
      background-color: white;
      border-radius: 15px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
      padding: 30px;
      max-width: 500px;
      width: 100%;
    }

    h2 {
      text-align: center;
      color: #0066cc;
      margin-bottom: 30px;
    }

    .form-label {
      font-weight: bold;
    }

    .form-control {
      border-radius: 10px;
      box-shadow: none;
      border: 1px solid #ddd;
      padding: 12px;
    }

    .form-control:focus {
      border-color: #0066cc;
      box-shadow: 0 0 10px rgba(0, 102, 204, 0.5);
    }

    .btn {
      width: 100%;
      padding: 12px;
      font-size: 1.1rem;
      border-radius: 30px;
      margin: 10px 0;
      transition: all 0.3s ease-in-out;
    }

    .btn:hover {
      transform: translateY(-2px);
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    .btn-success {
      background-color: #28a745;
      border-color: #28a745;
    }

    .btn-warning {
      background-color: #ffc107;
      border-color: #ffc107;
    }

    .btn-info {
      background-color: #17a2b8;
      border-color: #17a2b8;
    }

    .btn-success:hover {
      background-color: #218838;
    }

    .btn-warning:hover {
      background-color: #e0a800;
    }

    .btn-info:hover {
      background-color: #138496;
    }
  </style>

  <title>เข้าระสู่ระบบจัดการข้อมูลพนักงาน</title>
</head>

<body>
  <div class="container">
    <h2> <i class='bx bxs-user-pin' style='color:#50e7d4'></i> เข้าระสู่ระบบจัดการข้อมูลพนักงาน</h2>
    <form method="POST" action="chk.php">
      <div class="mb-3">
        <label for="username" class="form-label">ชื่อเข้าระบบ</label>
        <input type="text" class="form-control" id="username" name="username" required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">รหัสผ่าน</label>
        <input type="password" class="form-control" id="password" name="password" required>
      </div>
      <button type="submit" class="btn btn-success">เข้าสู่ระบบ</button>
      <button type="reset" class="btn btn-warning">ล้างข้อมูล</button>
      <a href="index.php" class="btn btn-info">กลับหน้าหลัก</a>
    </form>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
