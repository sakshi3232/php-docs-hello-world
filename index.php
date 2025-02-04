<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Portal</title>
    <style>
        /* General Body Styles */
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #F5F7FA; /* Light Grey Background */
            margin: 0;
            padding: 0;
            color: #333333; /* Dark Grey Text */
            display: flex;
            flex-direction: column;
            height: 100vh;
            justify-content: space-between;
        }

        /* Header Section */
        .header {
            background-color: #4A90E2; /* Soft Blue Header */
            padding: 20px;
            text-align: center;
            font-size: 32px;
            font-weight: bold;
            letter-spacing: 2px;
            text-transform: uppercase;
            color: white;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        }

        /* Navigation Bar */
        .nav-bar {
            background-color: #333333; /* Dark Grey Nav Bar */
            padding: 15px 0;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        }

        .nav-bar a {
            color: white;
            text-decoration: none;
            margin: 15px;
            font-size: 18px;
            padding: 8px 16px;
            border-radius: 5px;
            transition: 0.3s;
        }

        .nav-bar a:hover {
            background-color: #7ED321; /* Light Green on Hover */
            color: #333333;
            transform: scale(1.05);
        }

        /* Container for Main Content */
        .container {
            width: 90%;
            max-width: 1000px;
            margin: 30px auto;
            text-align: center;
            display: flex;
            flex-direction: column;
            gap: 30px;
        }

        /* Card Component Styles */
        .card {
            background-color: #FFFFFF; /* White Cards */
            padding: 25px;
            margin-bottom: 20px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            color: #333333;
            transition: 0.3s ease-in-out;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }

        /* Button Styles */
        .btn {
            background-color: #4A90E2; /* Soft Blue Buttons */
            color: white;
            padding: 12px 18px;
            margin: 10px;
            border: none;
            cursor: pointer;
            text-decoration: none;
            border-radius: 8px;
            font-size: 16px;
            transition: 0.3s ease;
            display: inline-block;
        }

        .btn:hover {
            background-color: #7ED321; /* Light Green on Hover */
            transform: translateY(-3px);
        }

        /* Footer Styles */
        .footer {
            text-align: center;
            padding: 15px;
            background-color: #333333; /* Dark Grey Footer */
            color: white;
            font-size: 14px;
        }

        /* Responsive Design for Mobile */
        @media (max-width: 768px) {
            .container {
                width: 100%;
                padding: 0 10px;
            }

            .nav-bar a {
                font-size: 16px;
                margin: 10px;
            }
        }
    </style>
</head>
<body>

    <!-- Header Section -->
    <div class="header">Student Portal</div>

    <!-- Navigation Bar -->
    <div class="nav-bar">
        <a href="index.php">Home</a>
        <a href="enrollments.php">Enrollments</a>
        <a href="attendance.php">Attendance</a>
        <a href="schedule.php">Schedule</a>
        <a href="profile.php">Profile</a>
    </div>

    <!-- Main Content Container -->
    <div class="container">
        <!-- Welcome Card -->
        <div class="card">
            <h2>Welcome to the Student Portal</h2>
            <p>Manage your course enrollments, attendance, and schedules with ease.</p>
            <a href="enrollments.php" class="btn">Manage Enrollments</a>
            <a href="attendance.php" class="btn">View Attendance</a>
            <a href="schedule.php" class="btn">View Schedule</a>
            <a href="profile.php" class="btn">View Profile</a>
        </div>

        <!-- Announcements Card -->
        <div class="card">
            <h2>Latest Announcements</h2>
            <p>📢 Exam schedules have been updated. Check the schedule for details.</p>
            <p>📢 New courses are now available for enrollment.</p>
        </div>
    </div>

    <!-- Footer Section -->
    <div class="footer">
        &copy; <?php echo date("Y"); ?> Student Portal | All Rights Reserved
    </div>

</body>
</html>
