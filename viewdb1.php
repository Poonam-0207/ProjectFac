<?php
session_start();
$cn = mysqli_connect("localhost", "root", "");
mysqli_select_db($cn, "ufeedback");
include 'functions.php';

if (!isset($_SESSION['student_id'])) {
    echo '<script type="text/javascript">';
    echo 'alert("Please log in to add progress!");';
    echo 'window.location.href = "login.php";';
    echo '</script>';
    exit;
}

if (isset($_POST['fruit'])) {
    // Directory to store uploaded files
    $target_path = "uploads/";
    if (!is_dir($target_path)) {
        mkdir($target_path, 0777, true); // Create directory if not exists
    }
    $target_filepath = $target_path . basename($_FILES["t5"]["name"]);
    $imageFileType = strtolower(pathinfo($target_filepath, PATHINFO_EXTENSION));
    
    // Sanitize and validate input data
    $student_id = $_SESSION['student_id']; // Get student ID from session
    $fullname = protect($cn, $_POST["t2"]);
    $faculty = protect($cn, $_POST["t3"]);
    $sgpa = protect($cn, $_POST["t4"]);
    $cgpa = protect($cn, $_POST["t5"]);
    $backlogs = protect($cn, $_POST["t6"]);

    // Validate uploaded file
    $allowedTypes = array("jpg", "png", "jpeg");
    $filesize = $_FILES["t5"]["size"];
    $maxsize = 3 * 1024 * 1024; // 3 MB

    if (!in_array($imageFileType, $allowedTypes)) {
        echo '<script type="text/javascript">';
        echo 'alert("Only JPG, PNG, and JPEG files are allowed.");';
        echo 'window.location.href = "view.php";';
        echo '</script>';
        exit;
    }

    if ($filesize > $maxsize) {
        echo '<script type="text/javascript">';
        echo 'alert("File size exceeds 3 MB.");';
        echo 'window.location.href = "view.php";';
        echo '</script>';
        exit;
    }

    // Move uploaded file and insert data into the database
    if (move_uploaded_file($_FILES["t5"]["tmp_name"], $target_filepath)) {
        $query = "INSERT INTO student_records (student_id, fullname, faculty, sgpa, cgpa, backlogs, uploaded_file) 
                  VALUES ('$student_id', '$fullname', '$faculty', '$sgpa', '$cgpa', '$backlogs', '$target_filepath')";
        $result = mysqli_query($cn, $query);

        if ($result) {
            echo '<script type="text/javascript">';
            echo 'alert("Record has been successfully added!");';
            echo 'window.location.href = "view.php";';
            echo '</script>';
        } else {
            echo '<script type="text/javascript">';
            echo 'alert("Error: Unable to add the record.");';
            echo 'window.location.href = "view.php";';
            echo '</script>';
        }
    } else {
        echo '<script type="text/javascript">';
        echo 'alert("Error: Unable to upload the file.");';
        echo 'window.location.href = "view.php";';
        echo '</script>';
    }
}
?>
