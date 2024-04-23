<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['phone']) && isset($_POST['location'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password']; // Plain text password
        $phone = $_POST['phone'];
        $location = $_POST['location'];

        // Hash the password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Check if the email already exists in the database
        $stmt = $conn->prepare("SELECT * FROM customers WHERE email=?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // Email already exists, inform the user
            echo "The entered email is already associated with an existing account. If you are already a user, please log in.";
        } 
        else {
            // Email does not exist, proceed with registration
            $sql = "INSERT INTO customers (name, email, password, phone, location) VALUES (?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sssss", $name, $email, $hashed_password, $phone, $location);

            if ($stmt->execute()) {
                header("Location: page.php");
                exit();
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }

        // Close prepared statement
        $stmt->close();
        $conn->close();
    } else {
        echo "All fields are required.";
    }
}
?>
