<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
    <style>
    body {
        background: url('pink.jpg') no-repeat center center fixed;
        background-size: cover;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        overflow: hidden;
    }

    .login-container {
        background: rgba(255, 255, 255, 0.8);
        padding: 20px;
        border-radius: 10px;
        box-shadow: 2px 4px 10px rgba(0, 0, 0, 0.1);
        text-align: center;
        width: 350px;
    }

    h2 {
        color: #ff6b81;
        margin-bottom: 5px;
    }

    p {
        color: #555;
        font-size: 14px;
    }

    .form-group {
        display: flex;
        align-items: center;
        gap: 10px;
        margin: 10px 0;
    }

    label {
        font-size: 14px;
        color: #333;
        width: 100px;
        text-align: left;
    }

    input {
        flex: 1;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    input[type='submit'] {
        background-color: #ff6b81;
        color: white;
        border: none;
        cursor: pointer;
        padding: 10px;
        font-size: 16px;
        width: 100%;
        margin-top: 10px;
    }

    input[type='submit']:hover {
        background-color: #ff4757;
    }
    </style>
</head>
<body>

<div class="login-container">
    <h2><b>Selamat Datang!</b></h2>
    <p>Masukkan informasi Akun Anda</p>

<?php
session_start();
include 'koneksi.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");

    if ($row = mysqli_fetch_assoc($result)) {
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $row['username'];
            $_SESSION['role'] = $row['role']; // Simpan role di session

            if ($row['role'] === 'admin') {
                header("Location: index.php");
            } elseif ($row['role'] === 'user') {
                header("Location: bootstrap.php");
            } else {
                echo "<p style='color: red; text-align: center;'>Role tidak dikenali!</p>";
            }
            exit();
        } else {
            echo "<p style='color: red; text-align: center;'>Password salah!</p>";
        }
    } else {
        echo "<p style='color: red; text-align: center;'>Username tidak ditemukan!</p>";
    }
}
?>

<form method="POST">
    <div class="form-group">
        <label>Username:</label>
        <input type="text" name="username" required>
    </div>
    <div class="form-group">
        <label>Password:</label>
        <input type="password" name="password" required>
    </div>
    <input type="submit" name="login" value="Login">
</form>
</div>
</body>
</html>
