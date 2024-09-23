<?php
include('php/connect.php');
session_start();
if (!isset($_SESSION['username']) || $_SESSION['role'] != 'student') {
    header("Location: login.php"); // Redirect to login if not logged in or not a student
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TeenZee Student Dashboard</title>
    <link rel="stylesheet" href="style/style.css"> <!-- Link your CSS here -->
</head>
<body>
    <header>
        <h1>Welcome to TeenZee, <span><?php echo $_SESSION['username']; ?></span></h1>
    </header>
    
    <nav>
        <ul>
            <li><a href="student-dashboard.php">Dashboard</a></li>
            <li><a href="profile.php">Profile</a></li>
            <li><a href="resources.html">Resources</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>

    <main>
        <section class="dashboard">
            <h2>Student Dashboard</h2>
            <p>Welcome to the student area of TeenZee! Here, you can access study resources, connect with mentors, and explore various opportunities for growth.</p>
            
            <div class="dashboard-cards">
                <div class="card">
                    <h3>My Courses</h3>
                    <p>Explore your ongoing courses and track your progress.</p>
                    <a href="https://coursera.org">Go to Courses</a>
                </div>

                <div class="card">
                    <h3>Job Opportunities</h3>
                    <p>Find remote gigs and internships in tech.</p>
                    <a href="https://www.freelancer.com">Explore Jobs</a>
                </div>

                <div class="card">
                    <h3>Mentor Sessions</h3>
                    <p>Schedule one-on-one sessions with your mentor.</p>
                    <a href="https://www.tonyrobbins.com/">Book a Session</a>
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

