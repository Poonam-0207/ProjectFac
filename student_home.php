<?php
session_start();
include 'db.php';

if (!isset($_SESSION['user_id']) || $_SESSION['role'] != 'student') {
    header("Location: login.php");
    exit();
}

// Fetch student details
$user_id = $_SESSION['user_id'];
$stmt = $conn->prepare("SELECT * FROM students WHERE id=?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
$student = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Home</title>
</head>
<body>
    <h1>Welcome, <?php echo htmlspecialchars($student['username']); ?></h1>
    <p>CGPA: <?php echo htmlspecialchars($student['cgpa']); ?></p>
    <p>Backlogs: <?php echo htmlspecialchars($student['backlogs']); ?></p>
    <?php if ($student['proof_image']): ?>
        <img src="uploads/<?php echo htmlspecialchars($student['proof_image']); ?>" alt="Proof Image">
    <?php endif; ?>
	<a href="view_announcements.php">View Announcements</a>
    <a href="logout.php">Logout</a>
</body>
</html>