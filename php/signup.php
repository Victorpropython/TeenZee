<?php
include("connect.php");
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Check if form is submitted using POST and the signup button is clicked
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['signup'])) {

    $username = $_POST['Username'];
    $email = $_POST['Email'];
    $password = $_POST['Password'];
    $confirmpassword = $_POST['ConfirmPassword'];
    $role = $_POST['role'];

    // Check if passwords match
    if ($password !== $confirmpassword) {
        echo "Passwords do not match!";
        exit(); // Stop the script if passwords don't match
    }

    // Check if email already exists
    $checkmail = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($checkmail);
    if (!$stmt) {
        echo "Error preparing the statement: " . $conn->error;
        exit();
    }
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // If email already exists, redirect back to form.php with an error message
        header("Location: ../form.php?error=email_exists");
        exit(); // Stop script execution after the redirect
    } else {
        // Hash the password and insert the new user
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $conn->prepare("INSERT INTO users (username, email, password, role) VALUES (?, ?, ?, ?)");
        
        if (!$stmt) {
            echo "Error preparing the insert statement: " . $conn->error;
            exit();
        }

        $stmt->bind_param("ssss", $username, $email, $hashed_password, $role);

        if ($stmt->execute()) {
            // Redirect to login page upon successful signup
            header("Location: ../form.php?success=signup");
            exit(); // Stop script execution after the redirect
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    }
} else {
    echo "Signup form not submitted."; // This will show if the form is not submitted
}

$conn->close();
?>
