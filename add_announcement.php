<?php
// Database connection
$conn = new mysqli('localhost', 'root', '', 'student_management');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];

    if (!empty($title) && !empty($content)) {
        $stmt = $conn->prepare("INSERT INTO announcements (title, content) VALUES (?, ?)");
        $stmt->bind_param('ss', $title, $content);
        $stmt->execute();
        $stmt->close();
        echo "<script>alert('Announcement added successfully');</script>";
    } else {
        echo "<script>alert('All fields are required');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Announcement</title>
    <link rel="stylesheet" href="styles.css">
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
}</style>
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
                <li><a href="fachome.php">Home</a></li>
                <li><a href="faculty_view.php">Prof.P.K.Deshpande</a></li>
				<li><a href="add_announcement.php">Add Announcement</a></li>
                <li><a href="feedback.php">View Feedback </a></li>
				<li><a href="logoutt.php">Logout </a></li>
				
            </ul>
        </nav>
    </header>
<body>
    <div class="form-container">
        <h1>Add Announcement</h1>
        <form action="add_announcement.php" method="POST">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" required>

            <label for="content">Content:</label>
            <textarea id="content" name="content" rows="5" required></textarea>

            <button type="submit">Add Announcement</button>
        </form>
    </div>
</body>
</html>