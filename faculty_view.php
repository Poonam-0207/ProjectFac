<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "student_management");

// Fetch progress for a specific faculty
$faculty_id = 1; // Replace with dynamic faculty ID if needed
$sql = "SELECT * FROM student_progress WHERE faculty_id = '$faculty_id'";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Progress</title>
	<link rel="stylesheet" href="fac.css">
</head>
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

.logo {
    width: 80px;
    margin-bottom: 10px;
}

header h3 {
    font-size: 1.8rem;
}

header h4 {
    font-size: 1.2rem;
    margin-top: 0.5rem;
}

/* Navigation Menu */
.menu {
    display: flex;
    justify-content: center;
    background: #00509e;
    margin: 0;
    padding: 0;
    list-style: none;
}

.menu li {
    margin: 0 1rem;
}

.menu a {
    color: #fff;
    text-decoration: none;
    padding: 0.5rem 1rem;
    display: block;
    border-radius: 5px;
}

.menu a.active, .menu a:hover {
    background: #009688;
}
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 90%;
            margin: auto;
            margin-top: 30px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background: #fff;
        }
        th, td {
            text-align: left;
            padding: 10px;
            border: 1px solid #ddd;
        }
        th {
            background-color: #4caf50;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        a {
            text-decoration: none;
            color: #4caf50;
            font-weight: bold;
        }
        a:hover {
            text-decoration: underline;
        }
		

    </style>
<header>
<body>
<div class="header-container">
            <img src="college-logo.png" alt="College Logo" class="logo">
            <h3>Basaveshwara Engineering College,Bagalkote.</h3>
            <h4>Information Science and Engineering</h4>
        </div>
        <!-- Navigation Menu -->
        <nav>
            <ul class="menu">
                <li><a href="fachome.php" class="active">Home</a></li>
                <li><a href="faculty_view.php">Prof.P.K.Deshpande</a></li>
				<li><a href="logoutt.php">Logout </a></li>
				
            </ul>
        </nav>
    </header>
    <div class="container">
        <h1>Student Details</h1>
        <table>
            <thead>
                <tr>
                    <th>Student Name-USN-Current Semester</th>
                    <th>Joining Year-Graduation Year</th>
                    <th>Previous Year CGPA</th>
                    <th>Backlogs</th>
                    <th>File</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                            <td>{$row['student_name']}</td>
                            <td>{$row['semester']}</td>
                            <td>{$row['gpa']}</td>
                            <td>{$row['backlogs']}</td>
                            <td><a href='uploads/{$row['file']}'>verify</a></td>
                        </tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>No progress found.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>