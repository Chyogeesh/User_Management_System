<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Fetch form data
    $new_username = $_POST['new_username'];
    $new_password = $_POST['new_password'];

    // Update user data in database (replace with your database query)
    // Example: Update user data in a database table
    $sql = "UPDATE users SET username='$new_username', password='$new_password' WHERE id='$user_id'";
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>
