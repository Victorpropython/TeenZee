<?php
include('php/connect.php');
session_start();
if (!isset($_SESSION['username']) || $_SESSION['role'] != 'mentor') {
    header("Location: login.php"); // Redirect to login if not logged in or not a mentor
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TeenZee Mentor Dashboard</title>
    <link rel="stylesheet" href="style/style.css"> <!-- Link your CSS here -->
</head>
<body>
    <header>
        <h1>Welcome to TeenZee, <span><?php echo $_SESSION['username']; ?></span> (Mentor)</h1>
    </header>
    
    <nav>
        <ul>
            <li><a href="mentor-dashboard.php">Dashboard</a></li>
            <li><a href="profile.php">Profile</a></li>
            <li><a href="resources.html">Resources</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>

    <main>
        <section class="dashboard">
            <h2>Mentor Dashboard</h2>
            <p>Welcome to the mentor area of TeenZee! Here, you can manage your sessions, provide guidance, and access tools to support your students.</p>
            
            <div class="dashboard-cards">
                <div class="card">
                    <h3>My Students</h3>
                    <p>View and manage the students you're mentoring.</p>
                    <a href="#">View Students</a>
                </div>

                <div class="card">
                    <h3>Schedule Sessions</h3>
                    <p>Schedule upcoming mentorship sessions with students.</p>
                    <a href="#">Schedule a Session</a>
                </div>

                <div class="card">
                    <h3>Resources</h3>
                    <p>Access useful resources for guiding students.</p>
                    <a href="#">View Resources</a>
                </div>
            </div>
        </section>
    </main>
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

