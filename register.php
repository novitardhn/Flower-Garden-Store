<?php
include 'koneksi.php';

$message = ""; // Variabel untuk menyimpan pesan

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
    if (mysqli_query($conn, $query)) {
        $message = "<p class='success-message'>Registrasi berhasil! Silakan login</p>";
    } else {
        $message = "<p class='error-message'>Error: " . mysqli_error($conn) . "</p>";
    }
}

echo "<style>
    body {
        background-image: url('pink.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 560px;
    }

    .container {
        background: rgba(255, 255, 255, 0.8);
        padding: 20px;
        border-radius: 10px;
        box-shadow: 2px 6px 8px rgba(0, 0, 0, 0.1);
        width: 350px;
        text-align: center;
    }

    h2 {
        font-size: 24px;
        margin-bottom: 10px;
        color: #ff4757;
    }

    .success-message {
        color: green;
        font-size: 14px;
        margin-bottom: 10px;
    }

    .error-message {
        color: red;
        font-size: 14px;
        margin-bottom: 10px;
    }

    .form-group {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 10px;
    }

    .form-group label {
        width: 30%;
        text-align: left;
    }

    .form-group input {
        width: 65%;
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
        border-radius: 5px;
    }

    input[type='submit']:hover {
        background-color: #ff4757;
    }

    .login-link {
        text-align: center;
        margin-top: 10px;
    }

    .login-link a {
        color: #ff4757;
        text-decoration: none;
        font-weight: bold;
    }

    .login-link a:hover {
        text-decoration: underline;
    }
</style>";
?>

<div class="container">
    <h2>Registrasi</h2>
    <?= $message; ?>
    
    <form method="POST">
        <div class="form-group">
            <label>Username:</label>
            <input type="text" name="username" required>
        </div>

        <div class="form-group">
            <label>Email:</label>
            <input type="email" name="email" required>
        </div>

        <div class="form-group">
            <label>Password:</label>
            <input type="password" name="password" required>
        </div>

        <input type="submit" name="register" value="Register">

        <div class="login-link">
            Sudah punya Akun? <a href="login.php">Log in Disini</a>
        </div>
    </form>
</div>
