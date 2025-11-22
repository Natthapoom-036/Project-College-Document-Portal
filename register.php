<?php include("connect.php"); ?>

<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>สมัครสมาชิก</title>
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

    .register-box {
      background: #ffffff;
      width: 380px;
      padding: 35px;
      border-radius: 18px;
      box-shadow: 0px 10px 30px rgba(0, 90, 150, 0.25);
      text-align: center;
      border: 1px solid #e5f5ff;
    }

    .register-box img {
      width: 85px;
      margin-bottom: 10px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.15);
    }

    .register-box h2 {
      margin: 10px 0;
      font-size: 23px;
      color: #1e4f7b;
    }

    .register-box p {
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

    .register-btn {
      width: 100%;
      background: #4dafff;
      padding: 12px;
      border: none;
      border-radius: 10px;
      color: white;
      font-size: 18px;
      cursor: pointer;
      transition: 0.3s;
      margin-top: 10px;
      box-shadow: 0 4px 10px rgba(77, 175, 255, 0.5);
    }

    .register-btn:hover {
      background: #1c92ff;
    }

    .login-link {
      display: block;
      margin-top: 15px;
      font-size: 15px;
      color: #006cd9;
      text-decoration: none;
    }

    .login-link:hover {
      text-decoration: underline;
    }
  </style>
</head>

<body>

  <div class="register-box">
    <img src="image/sbtclogo.jpg" alt="Logo">

    <p>วิทยาลัยเทคนิคสิงห์บุรี</p>

    <form action="register_db.php" method="post">
        <div class="input-group">
            <label for="username">Username</label>
            <input type="text" name="username" required>
        </div>
        <div class="input-group">
            <label for="email">Email</label>
            <input type="email" name="email" required>
        </div>
        <div class="input-group">
            <label for="password_1">Password</label>
            <input type="password" name="password_1" required>
        </div>
        <div class="input-group">
            <label for="password_2">Confirm Password</label>
            <input type="password" name="password_2" required>
        </div>
        <div class="input-group">
            <button type="submit" name="reg_user" class="register-btn">Register</button>
        </div>
        <p class="login-link">Already a member? <a href="http://localhost/Project-College-Document-Portal/login.php/">Sign in</a></p>
    </form>

  </div>

</body>
</html>
