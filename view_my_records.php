<?php
// Start session to ensure the user is logged in
session_start();

// Check if the student is logged in
if (!isset($_SESSION['student_id'])) {
    // Redirect to login page if not logged in
    header("Location: login.php");
    exit;
}

// Include database connection
include 'db_connect.php';

// Get the logged-in student's ID from the session
$student_id = $_SESSION['student_id'];

// Fetch records for the logged-in student from the database
$query = "SELECT fullname, faculty, sgpa, cgpa, backlogs FROM student_records WHERE student_id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $student_id);
$stmt->execute();
$result = $stmt->get_result();

// HTML Page
?>
<!DOCTYPE html>
<html>
<head>
    <title>View My Records</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }
        header {
            background-color: #003366;
            color: #fff;
            padding: 1rem 0;
            text-align: center;
        }
        header h1 {
            font-size: 1.8rem;
        }
        header h2 {
            font-size: 1.2rem;
            margin-top: 0.5rem;
        }
        .menu {
            display: flex;
            justify-content: center;
            background: #00509e;
            list-style: none;
            padding: 0;
        }
        .menu li {
            margin: 0 1rem;
        }
        .menu a {
            color: #fff;
            text-decoration: none;
            padding: 0.5rem 1rem;
            display: block;
        }
        .menu a.active, .menu a:hover {
            background: #009688;
        }
        main {
            padding: 2rem;
        }
        table {
            width: 80%;
            margin: 2rem auto;
            border-collapse: collapse;
            background: #fff;
        }
        table th, table td {
            border: 1px solid #ddd;
            padding: 0.75rem;
            text-align: left;
        }
        table th {
            background-color: #003366;
            color: #fff;
        }
        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
<header>
    <h1>Basaveshwara Engineering College, Bagalkote</h1>
    <h2>Information Science and Engineering</h2>
</header>
<nav>
    <ul class="menu">
        <li><a href="home.php">Home</a></li>
        <li><a href="view.php">Add Progress</a></li>
        <li><a href="view_my_records.php" class="active">View My Records</a></li>
        <li><a href="viewann.php">View Announcement</a></li>
        <li><a href="feedback1.php">Provide Feedback</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
</nav>
<main>
    <h2>My Progress Records</h2>
    <?php if ($result->num_rows > 0): ?>
        <table>
            <tr>
                <th>Full Name</th>
                <th>Assigned Faculty</th>
                <th>SGPA</th>
                <th>CGPA</th>
                <th>Backlogs</th>
            </tr>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= htmlspecialchars($row['fullname']) ?></td>
                    <td><?= htmlspecialchars($row['faculty']) ?></td>
                    <td><?= htmlspecialchars($row['sgpa']) ?></td>
                    <td><?= htmlspecialchars($row['cgpa']) ?></td>
                    <td><?= htmlspecialchars($row['backlogs']) ?></td>
                </tr>
            <?php endwhile; ?>
        </table>
    <?php else: ?>
        <p>No records found.</p>
    <?php endif; ?>
</main>
<footer>
    <p>&copy; <?= date('Y') ?> Basaveshwara Engineering College, Bagalkote</p>
</footer>
</body>
</html>
