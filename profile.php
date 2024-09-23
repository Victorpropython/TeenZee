<?php
include("php/connect.php");
session_start();


// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Fetch user data from the database based on session ID
$user_id = $_SESSION['user_id'];
$sql = "SELECT username, email, role FROM users WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

if (!$user) {
    echo "User not found.";
    exit();
}

$username = $user['username'];
$email = $user['email'];
$role = $user['role'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" >
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo ucfirst($role); ?> Profile - TeenZee</title>
    <link rel="stylesheet" href="style/style.css">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>

<body>

    <!-- Profile Page -->
    <header>
        <h1><?php echo ucfirst($role); ?> Profile</h1>
        <p>Welcome, <?php echo $username; ?>!</p>
        <nav>
            <a href="home.html">Home</a>
            <a href="logout.php">Logout</a>
        </nav>
    </header>

    <main>
        <!-- Display a different profile section based on the role -->
        <?php if ($role === 'student'): ?>
            <section class="student-profile">
                <h2>Student Dashboard</h2>
                <p>Email: <?php echo $email; ?></p>
                <p>Find resources tailored to help you in your studies and career path.</p>
                <!-- Add specific content for students here -->
                <a href="resources.php">View Resources</a>
            </section>
        <?php elseif ($role === 'mentor'): ?>
            <section class="mentor-profile">
                <h2>Mentor Dashboard</h2>
                <p>Email: <?php echo $email; ?></p><br>
                <p >Help students navigate their career by providing mentorship and guidance.</p>
                <!-- Add specific content for mentors here -->
                <a href="mentor-resources.php">Mentor Resources</a>
            </section>
        <?php endif; ?>
    </main>
    <div class="space"></div>
    <footer>
        <p>Follow us on social media:</p>
        <ul>
            <li><a href="https://www.facebook.com/victor chibuike" target="_blank">Facebook</a></li>
            <li><a href="https://www.instagram.com" target="_blank">Instagram</a></li>
            <li><a href="https://www.twitter.com/viktor chibuike" target="_blank">X (Twitter)</a></li>
            <li><a href="mailto:support@teenzee.com">Email Us</a></li>
        </ul>
        <p>&copy; 2024 TeenZee. All rights reserved.</p>
    </footer>
</body>
</html>
