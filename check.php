<?php

include 'connection.php';

// Check if it's a POST request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if both email and password are provided
    if(isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Retrieve the hashed password from the database
        $stmt = $conn->prepare("SELECT password FROM customers WHERE email=?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
    
        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $hashed_password = $row['password'];

            // Verify the password
            if (password_verify($password, $hashed_password)) {
                // Password is correct, log in the user
            header("Location: https://google.com/");
                exit();
            } else {
                // Password is incorrect
                echo "Invalid email or password.";
            }
        } else {
            // Email not found
            echo "Invalid email or password.";
        }

        // Close prepared statement
        $stmt->close();
    }
}
?>
