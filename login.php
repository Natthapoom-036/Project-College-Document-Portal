<?php include("connect.php"); ?>

<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>เข้าสู่ระบบ</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: "Prompt", sans-serif;
      background: linear-gradient(135deg, #4dafff, #9cd6ff);
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .login-box {
      background: #ffffff;
      width: 380px;
      padding: 35px;
      border-radius: 18px;
      box-shadow: 0px 10px 30px rgba(0, 90, 150, 0.25);
      text-align: center;
      border: 1px solid #e5f5ff;
    }

    .login-box img {
      width: 85px;
      margin-bottom: 10px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.15);
    }

    .login-box h2 {
      margin: 10px 0;
      font-size: 23px;
      color: #1e4f7b;
    }

    .login-box p {
      margin: 0 0 20px;
      color: #5b7d9c;
    }

    .input-group {
      margin-bottom: 15px;
      text-align: left;
    }

    .input-group label {
      display: block;
      font-size: 14px;
      margin-bottom: 5px;
      color: #1e4f7b;
    }

    .input-group input {
      width: 100%;
      padding: 12px;
      border-radius: 10px;
      border: 1px solid #b7dfff;
      background: #f2f8ff;
      font-size: 16px;
      transition: 0.3s;
    }

    .input-group input:focus {
      border-color: #4dafff;
      outline: none;
      background: #e8f4ff;
      box-shadow: 0 0 6px rgba(77, 175, 255, 0.4);
    }

    .login-btn {
      display: block;          /* ทำให้ปุ่มเป็นบล็อก */
      width: 50%;              /* ความกว้างปุ่ม */
      margin: 10px auto 0 auto; /* จัดให้อยู่ตรงกลางแนวนอน */
      background: #4dafff;
      padding: 12px;
      border: none;
      border-radius: 10px;
      color: white;
      font-size: 18px;
      cursor: pointer;
      transition: 0.3s;
      box-shadow: 0 4px 10px rgba(77, 175, 255, 0.5);
    }

    .login-btn:hover {
      background: #1c92ff;
    }

    .register-link {
      display: block;
      margin-top: 15px;
      font-size: 15px;
      color: #006cd9;
      text-decoration: none;
    }

    .register-link:hover {
      text-decoration: underline;
    }
  </style>
</head>

<body>

  <div class="login-box">
    <img src="image/sbtclogo.jpg" alt="logo">

    <p>วิทยาลัยเทคนิคสิงห์บุรี</p>

    <div class="header">
      <h2>Login</h2>
    </div>

    <form action="register_db.php" method="post">
        <div class="input-group">
            <label for="username">Username</label>
            <input type="text" name="username" required>
        </div>
        <div class="input-group">
            <label for="password">Password</label>
            <input type="password" name="password" required>
        </div>
        <div class="input-group">
            <button type="submit" name="login_user" class="login-btn">Login</button>
        </div>
        <p class="register-link">Not yet a member? <a href="http://localhost/Project-College-Document-Portal/register.php">Sign Up</a></p>
    </form>
  </div>

</body>
</html>
