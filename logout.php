
<?php
session_start();
include 'db.php';

if (!isset($_SESSION['user_id']) || $_SESSION['role'] != 'faculty') {
    header("Location: login.php");
    exit();
}

// Fetch feedback from students
$stmt = $conn->prepare("SELECT * FROM feedback");
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Feedback</title>
</head>
<body>
    <h1>Feedback from Students</h1>
    <table>
        <tr>
            <th>Student ID</th>
            <th>Feedback</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo htmlspecialchars($row['student_id']); ?></td>
            <td><?php echo htmlspecialchars($row['feedback']); ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
    <a href="faculty_home.php">Back to Home</a>
</body>
</html>