<?php
session_start(); // Start the session
include("connect.php");

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if username and password are set
    if (isset($_POST['Username']) && isset($_POST['Password'])) {
        $username = $_POST['Username'];
        $password = $_POST['Password']; // Plain password from the form

        // Prepare the SQL statement to fetch the user based on the username
        $sql = "SELECT id, username, password, role FROM users WHERE username = ?";
        $stmt = $conn->prepare($sql);
        if ($stmt === false) {
            echo "Error preparing statement: " . $conn->error;
            exit();
        }

        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            
            // Verify the password using password_verify (instead of comparing hashes manually)
            if (password_verify($password, $user['password'])) { // Verify hashed password
                // Store user data in the session
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['role'] = $user['role']; // 'student' or 'mentor'
                
                // Redirect to the correct dashboard based on the role
                if ($user['role'] == 'student') {
                    header("Location: ../student-dashboard.php"); // Redirect to student dashboard
                } elseif ($user['role'] == 'mentor') {
                    header("Location: ../mentor-dashboard.php"); // Redirect to mentor dashboard
                }
                exit(); // End the script after redirecting
            } else {
                echo "Incorrect password.";
            }
        } else {
            echo "User not found!";
        }

        $stmt->close();
    } else {
        echo "Username and password must be provided.";
    }

    $conn->close();
}
?>
