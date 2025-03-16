<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "student_management");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $student_name = $_POST['student_name'];
    $semester = $_POST['semester'];
    $faculty_id = $_POST['faculty_id'];
    $gpa = $_POST['gpa'];
    $backlogs = $_POST['backlogs'];
    $file = $_FILES['file']['name'];

    // File upload handling
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($file);
    move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);

    // Insert into database
    $sql = "INSERT INTO student_progress (student_name, semester, faculty_id, gpa, backlogs, file) 
            VALUES ('$student_name', '$semester', '$faculty_id', '$gpa', '$backlogs', '$file')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Progress added successfully!');</script>";
    } else {
        echo "<script>alert('Error: " . $conn->error . "');</script>";
    }
}
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
            width: 50%;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
            color: #555;
        }
        input, select, button {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        button {
            background-color: #5cb85c;
            color: #fff;
            font-weight: bold;
            cursor: pointer;
        }
        button:hover {
            background-color: #4cae4c;
        }
        .error {
            color: red;
            font-size: 12px;
        }
    </style>
    <script>
        function validateForm() {
            const gpa = document.getElementById("gpa").value;
            if (gpa < 0 || gpa > 10) {
                alert("GPA should be between 0 and 10");
                return false;
            }
            return true;
        }
    </script>

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
                <li><a href="home.php" >Home</a></li>
                <li><a href="addprogress.php">Add Progress</a></li>
				<li><a href="logoutt.php">Logout </a></li>
				
            </ul>
        </nav>
    </header>
    <div class="container">
        <h1>Add Student Progress</h1>
        <form method="POST" action="addprogress.php" enctype="multipart/form-data" onsubmit="return validateForm()">
            <label for="student_name">Student Name-USN-Current Semester:</label>
            <input type="text" name="student_name" id="student_name" required>

            <label for="semester">Joining Year-Graduation Year:</label>
            <input type="text" name="semester" id="semester" required>

            <label for="faculty_id">Assigned Faculty:</label>
            <select name="faculty_id" id="faculty_id" required>
                <option value="">-- Select Faculty --</option>
                <option value="1">Prof. P.K. Deshpande</option>
            </select>

            <label for="gpa">Previuos Year CGPA:</label>
            <input type="number" step="0.01" name="gpa" id="gpa" required>

            <label for="backlogs">Backlogs:</label>
            <input type="number" name="backlogs" id="backlogs" required>

            <label for="file">File Upload(Review Transcripts):</label>
            <input type="file" name="file" id="file" required>

            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>