<?php
// Database connection
$conn = new mysqli('localhost', 'root', '', 'student_management');
$result = $conn->query("SELECT * FROM announcements ORDER BY created_at DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
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
                <li><a href="home.php" class="active">Home</a></li>
                <li><a href="addprogress.php">AddProgress</a></li>
                <li><a href="view_announcements.php">View Announcements</a></li>
                <li><a href="feedback1.php">Provide Feedback </a></li>
				<li><a href="logoutt.php">Logout </a></li>
				
            </ul>
        </nav>
    </header>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Announcements</title>
    <link rel="stylesheet" href="styles.css">
    <script src="scripts.js" defer></script>
</head>
<body>
    <div class="announcements-container">
        <h1>Latest Announcements</h1>
        <div id="announcement-list">
            <?php while ($row = $result->fetch_assoc()) : ?>
                <div class="announcement">
                    <h2><?php echo htmlspecialchars($row['title']); ?></h2>
                    <p><?php echo htmlspecialchars($row['content']); ?></p>
                    <span><?php echo date('F j, Y, g:i a', strtotime($row['created_at'])); ?></span>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</body>
</html>