<?php
include ("php/connect.php");
session_start ();


if (isset($_GET['error']) && $_GET['error'] == 'email_exists') {
    echo "<p style='color: red;'>Email already exists. Please use a different email.</p>";
}

if (isset($_GET['success']) && $_GET['success'] == 'signup') {
    echo "<p style='color: green;'>Signup successful! Please log in.</p>";
}
?>

<!-- Your form HTML code continues here -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>TeenZee - Navigating Teenage Life</title>
    <link rel="stylesheet" href="style/style.css">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>

<body>


    <!-- Header section -->
    <header>
        
        <a href="home.html"><img class="h-logo" src="pictures/teenzee-logo.webp" alt=""></a>
        <h1>Welcome to TeenZee</h1>
        <p><b>Your guide to navigating life as a teenager</b></p>

    </header>
    <main>
        <!-- Navigation Bar -->
        <nav>
            <a href="form.php">Register</a>
            <a href="about.html">About Us</a>
            <a href="contact.html">Contact</a>
            <a href="resources.html">Resources</a>
            <a href="home.html"> Home</a>
        </nav>
<!-- Login Section -->
    <div class="bbody">
        <div class="login-container">
            <div class="form-box">
            <form id="login-form" action="php/login.php " method="POST" name="Formfill">
                <h2>Login</h2>
                <div class="input-box">
                    <i class="fa fa-user"></i>
                    <input type="text" name="Username" placeholder="Username" required>
                </div>
                <div class="input-box">
                    <i class="fa fa-envelope"></i>
                    <input type="email" name="Email" placeholder="Email" required>
                </div>
                <div class="input-box">
                    <i class="fa fa-lock"></i>
                    <input type="password" name="Password" placeholder="Password" required>
                </div>
                <div class="input-box">
                    <select id="role" name="role" required>
                        <option value="" disabled selected>Select Role</option>
                        <option value="student">Student</option>
                        <option value="mentor">Mentor</option>
                    </select>
                </div>
                <div class="btn">
                    <input type="submit" value="Login">
                </div>
                <div class="group">
                    <span><a href="#">Forgot Password</a></span>
                    <span><p>Don't have an account? <br><a href="ssignup.php">Sign up here</a></p></span>
                </div>
            </form>

            
        </div>
    </div>
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