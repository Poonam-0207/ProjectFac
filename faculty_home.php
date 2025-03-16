<?php
session_start();
include 'db.php';

if (!isset($_SESSION['user_id']) || $_SESSION['role'] != 'faculty') {
    header("Location: login.php");
    exit();
}

// Fetch faculty details
$user_id = $_SESSION['user_id'];
$stmt = $conn->prepare("SELECT * FROM faculty WHERE id=?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
$faculty = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Faculty Home</title>
</head>
<body>
    <h1>Welcome, <?php echo htmlspecialchars($faculty['username']); ?></h1>
    <p>Here you can view your students' records and feedback.</p>
    <a href="view_feedback.php">View Feedback from Students</a>
	<a href="view_student_records.php">View Student Records</a>
    <a href="announcements.php">View Announcements</a>
	<a href="view_announcements.php">View Announcements</a>
    <a href="logout.php">Logout</a>
</body>
</html>