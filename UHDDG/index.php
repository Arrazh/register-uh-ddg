<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <!-- php start -->
    <?php
    include_once ('database.php');

    // register proses start
    if ($_SERVER["REQUEST_METHOD"] == "POST") { 
        $Nama = $_POST['Nama'];
        $Email = $_POST['Email'];
        $Password = $_POST['Password'];
    
        $insert = $db->query("INSERT INTO user (Nama, Email, Password) 
        VALUES 
        ('$Nama', '$Email', '$Password')");
    };

    // register proses end
    ?>
    <!-- php end -->
    <div class="container-login">
        <h3>Login Form</h3>
        <form method="post" action="login.php">
            <label for="Nama">Username</label>
            <input type="text" id="Nama" name="Nama" required>

            <label for="Password">Password</label>
            <input type="Password" id="Password" name="Password" required>

            <button>Login</button>
            <p align="center">Don't have account? <a href="register.php">Register</a></p>
        </form>
    </div>
</body>
</html>