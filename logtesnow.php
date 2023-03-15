<?php
session_start();

// Connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pound";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the user has submitted the login form
if (isset($_POST['username']) && isset($_POST['password'])) {

    // Sanitize user input to prevent SQL injection attacks
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Query the database to check if the user exists and the password is correct
    $sql = "SELECT *  FROM user WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Login successful
        $row = $result->fetch_assoc();
        $_SESSION['username'] = $row['uname'];

        // Redirect the user to a page based on their role
        if ($row['uname'] == 'staff') {
            header("Location: currenttik.php");
        } elseif ($row['role'] == 'manager') {
            header("Location: manager-page.php");
        } else {
            header("Location: user-page.php");
        }
    } else {
        // Login failed
        echo "Invalid username or password";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="post">
        <label>Username:</label>
        <input type="text" name="username" required><br><br>
        <label>Password:</label>
        <input type="password" name="password" required><br><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>
