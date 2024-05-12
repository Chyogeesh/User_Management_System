<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Fetch form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Fetch user data from database (replace with your database query)
    // Example: Fetch user data from a database table
    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        // Verify password
        if (password_verify($password, $row['password'])) {
            // Start session and set session variables
            session_start();
            $_SESSION['username'] = $username;
            // Redirect user to dashboard or profile page
            header("Location: dashboard.php");
            exit();
        } else {
            // Password incorrect
            $error = "Invalid username or password";
        }
    } else {
        // Username not found
        $error = "Invalid username or password";
    }
}
?>
