<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Register - Foodies Lab</title>
    <style>
        body { font-family: sans-serif; display: flex; justify-content: center; align-items: center; height: 100vh; background: #f9f9f9; }
        .card { background: white; padding: 40px; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); width: 400px; }
        h2 { color: #d63031; }
        input { width: 100%; padding: 12px; margin: 8px 0; border: 1px solid #ddd; border-radius: 8px; box-sizing: border-box;}
        button { background: #d63031; color: white; width: 100%; padding: 12px; border: none; border-radius: 8px; cursor: pointer; }
    </style>
</head>
<body>
    <div class="card">
        <h2>Join Foodies 🍔</h2>
        <form method="POST">
            <input type="text" name="fullname" placeholder="Full Name" required>
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" name="reg">Create Account</button>
        </form>
        <?php
        if (isset($_POST['reg'])) {
            $fn = $_POST['fullname']; $un = $_POST['username']; $pw = $_POST['password'];
            $sql = "INSERT INTO users (username, password, full_name) VALUES ('$un', '$pw', '$fn')";
            if (mysqli_query($conn, $sql)) echo "Berhasil daftar! Silahkan <a href='login.php'>Login</a>";
        }
        ?>
    </div>
</body>
</html>