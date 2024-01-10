<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login </title>
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
                <a href="#checkout">checkout</a>
            </ul>
        </nav>
    </div>
    <center>
        <div class="container">
            <div class="right-division">
                <h2>LOG IN</h2>
                <form action="login.php" method="post">

                    <div class="form-group">
                        <label for="email">EMAIL</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">PASSWORD</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <p>Don't have an account? <a href="signup.php">SIGN UP NOW!</a></p>
                    <center><button type="submit"></a>LOG IN</button></center>
                </form>
            </div>
        </div>
    </center>
</body>

</html>

      
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Fetch the user data from the 'users' table
    $conn = new mysqli("localhost", "root", "", "mern_k");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT id, username, email, password FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row["password"])) {
            echo "Login successful. Welcome, " . $row["username"];
            // You can set session variables or redirect to the home page here
        } else {
            echo "Invalid password";
        }
    } else {
        echo "User not found";
    }

    $conn->close();
}
?>
