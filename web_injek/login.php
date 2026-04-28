<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Login - SalesSkip Lab</title>
    <style>
        body { margin: 0; font-family: sans-serif; display: flex; height: 100vh; }
        .left { flex: 1.2; background: #2D31FA; color: white; display: flex; flex-direction: column; justify-content: center; padding: 50px; }
        .right { flex: 1; display: flex; flex-direction: column; justify-content: center; padding: 50px; }
        input[type="text"], input[type="password"] { width: 100%; padding: 10px; margin: 10px 0; border: none; border-bottom: 1px solid #ccc; }
        button { background: #111; color: white; padding: 12px; width: 100%; border: none; border-radius: 5px; cursor: pointer; }
        .google-btn { background: white; border: 1px solid #ddd; color: #555; margin-top: 10px; }
    </style>
</head>
<body>
    <div class="left">
        <h1>* Hello SalesSkip! 👋</h1>
        <p>Skip repetitive and manual sales-marketing tasks.</p>
    </div>
    <div class="right">
        <h2>Welcome Back!</h2>
        <p>Don't have an account? <a href="register.php">Create now</a></p>
        
        <form method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" name="login">Login Now</button>
            <button type="button" class="google-btn">Login with Google</button>
        </form>

        <?php
        if (isset($_POST['login'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            // VULNERABLE CODE - SENGGORENG
            $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                header("Location: dashboard.php");
            } else {
                echo "<p style='color:red;'>Login Gagal! Cek Query: <code>$sql</code></p>";
            }
        }
        ?>
    </div>
</body>
</html>