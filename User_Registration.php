<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Fetch form data
    $username = $_POST['username'];
    $password = $_POST['password'];
    // Hash password for security
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Save user data to database or perform validation
    // Example: Insert user data into a database table
    // Connect to database (replace with your database connection code)
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // SQL query to insert user data
    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$hashed_password')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>
