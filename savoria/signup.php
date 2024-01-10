<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>
    <link rel="stylesheet" href="styles.css">

</head>

<body>
    <div class="header">
        <nav>
            <div class="logo">
                <h1>Savoria</h1>
            </div>

            <ul>
                <a href="index.html">Home</a>
                <a href="Cart.html">Cart</a>
                <a href="#Menu">Menu</a>
                <a href="#checkout">checkOut</a>
            </ul>
        </nav>
    </div>
    <center>
        <div class="container">
            <div class="right-division">
                <h2>SIGN UP</h2>
                <form action="signup.php" method="post">
                    <div class="form-group">
                        <label for="username">USERNAME</label>
                        <input type="text" id="username" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="email">EMAIL</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">PASSWORD</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <div class="form-group">
                        <label for="password">CONFIRM PASSWORD</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <p>Already have an account? <a href="login.php">LOG IN NOW!</a></p>
                    <center><button type="submit">SIGN UP</button></center>
                </form>
            </div>
        </div>
    </center>
</body>

</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    // Insert the user data into the 'users' table
    $conn = new mysqli("localhost", "root", "", "mern_k");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO users(username, email, password) VALUES ('$username', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "User registered successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
