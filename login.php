<?php
session_start();
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = md5($_POST['password']); // Hash the password using md5
    $role = $_POST['role'];

    if ($role == 'student') {
        $stmt = $conn->prepare("SELECT * FROM students WHERE username=? AND password=?");
        $stmt->bind_param("ss", $username, $password);
    } else {
        $stmt = $conn->prepare("SELECT * FROM facultie WHERE username=? AND password=?");
        $stmt->bind_param("ss", $username, $password);
    }
    
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        session_regenerate_id(true);
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['role'] = $role;
        header("Location: " . ($role == 'student' ? 'home.php' : 'fachome.php'));
        exit();
    } else {
        $error = "Invalid credentials!";
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* General styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        /* Centering the form */
        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 300px;
            text-align: center;
        }

        /* Input fields and select dropdown */
        input[type="text"], input[type="password"], select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            transition: border-color 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }

        input[type="text"]:focus, input[type="password"]:focus, select:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
            outline: none;
        }

        /* Submit button */
        button[type="submit"] {
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease-in-out, transform 0.2s ease;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }

        /* Error message */
        p {
            margin-top: 10px;
            color: red;
        }

        /* Links */
        .register-links {
            margin-top: 15px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .register-links a {
            color: #007bff;
            text-decoration: none;
            margin: 5px 0;
            font-size: 14px;
            transition: color 0.3s ease;
        }

        .register-links a:hover {
            color: #0056b3;
        }

        /* Adding animation */
        .form-container {
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <div class="form-container">
        <form method="POST" action="">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <select name="role">
                <option value="student">Student</option>
                <option value="faculty">Faculty</option>
            </select>
            <button type="submit">Login</button>
            <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
        </form>
        <div class="register-links">
            <a href="register_student.php">Register as Student</a>
            <a href="register_faculty.php">Register as Faculty</a>
        </div>
    </div>
</body>
</html>