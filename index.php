<?php
// Start a session for user authentication (if needed)
session_start();

// Include database connection file (You can customize this to connect to your actual DB)
include('db_connect.php');

// Check if the user is logged in (Example check)
if(!isset($_SESSION['student_id'])) {
    // Redirect to login if not logged in
    header('Location: login.php');
    exit();
}

// Assuming you have a function to get student data
$student_id = $_SESSION['student_id'];
// Example functions to fetch student info, enrolled courses, etc.
$student_name = getStudentName($student_id);
$courses = getEnrolledCourses($student_id);
$attendance = getStudentAttendance($student_id);
$schedule = getStudentSchedule($student_id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Portal</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to your CSS file -->
</head>
<body>
    <header>
        <h1>Welcome to Your Student Portal, <?php echo htmlspecialchars($student_name); ?>!</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="courses.php">Courses</a></li>
                <li><a href="attendance.php">Attendance</a></li>
                <li><a href="schedule.php">Schedule</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <!-- Course Enrollment Section -->
        <section id="course-enrollment">
            <h2>Course Enrollment</h2>
            <p>Below are your currently enrolled courses:</p>
            <ul>
                <?php foreach($courses as $course): ?>
                    <li><?php echo htmlspecialchars($course['course_name']); ?></li>
                <?php endforeach; ?>
            </ul>
            <a href="enroll.php" class="button">Enroll in a New Course</a>
        </section>

        <!-- Attendance Section -->
        <section id="attendance">
            <h2>Attendance</h2>
            <p>Here is your attendance summary:</p>
            <table>
                <thead>
                    <tr>
                        <th>Course</th>
                        <th>Attendance Percentage</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($attendance as $record): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($record['course_name']); ?></td>
                            <td><?php echo htmlspecialchars($record['attendance_percentage']); ?>%</td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </section>

        <!-- Schedule Section -->
        <section id="schedule">
            <h2>Your Schedule</h2>
            <p>Below is your class schedule:</p>
            <table>
                <thead>
                    <tr>
                        <th>Day</th>
                        <th>Time</th>
                        <th>Course</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($schedule as $class): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($class['day']); ?></td>
                            <td><?php echo htmlspecialchars($class['time']); ?></td>
                            <td><?php echo htmlspecialchars($class['course_name']); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 Student Portal. All Rights Reserved.</p>
    </footer>
</body>
</html>
