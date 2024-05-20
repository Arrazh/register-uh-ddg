<!DOCTYPE html>
<html>
<head>
    <title>Register Form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container-register">
        <h2>Register Form</h2>
        <form method="post" action="index.php">
            <label for="Email">Email:</label>
            <input type="Email" id="Email" name="Email" required>
            <label for="Nama">Nama:</label>
            <input type="text" id="Nama" name="Nama" required>
            <label for="Password">Password:</label>
            <input type="Password" id="Password" name="Password" required>
            <button>Register</button>
            <p align="center">Have account? <a href="index.php">Login</a></p>
        </form>
    </div>
</body>
</html>