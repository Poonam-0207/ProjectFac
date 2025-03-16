<?php
// Database connection
$conn = new mysqli('localhost', 'root', '', 'faculty_student_db');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$student_name = $_POST['student_name'];
$semester = $_POST['semester'];
$faculty_id = $_POST['faculty_id'];
$gpa = $_POST['gpa'];
$backlogs = $_POST['backlogs'];

// Handle file upload
$targetDir = "uploads/";
$fileName = basename($_FILES['file']['name']);
$targetFilePath = $targetDir . $fileName;

// Move the uploaded file to the target directory
if (move_uploaded_file($_FILES['file']['tmp_name'], $targetFilePath)) {
    // Insert data into the database
    $sql = "INSERT INTO student_faculty (student_name, semester, faculty_id, gpa, backlogs, file_path)
            VALUES ('$student_name', '$semester', '$faculty_id', '$gpa', '$backlogs', '$targetFilePath')";
    if ($conn->query($sql) === TRUE) {
        echo "Progress added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "File upload failed!";
}

$conn->close();
?>