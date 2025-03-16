<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty Advisor Management System</title>
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

header h1 {
    font-size: 1.8rem;
}

header h2 {
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

/* Content Styles */
main {
    padding: 2rem;
}

.department-image img {
    width: 100%;
    height: 750px;
    border-radius: 10px;
    margin-bottom: 1rem;
}

/* HOD Section */
.hod-container {
    display: flex;
    align-items: center;
    flex-wrap: wrap; /* Allows wrapping on smaller screens */
    justify-content: center; /* Centers the content horizontally */
    margin-bottom: 2rem;
}

.hod-image {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    margin: 0 1rem; /* Adds horizontal margin between image and details */
}

.hod-details {
    max-width: 500px; /* Prevents content from spreading too wide */
    text-align: left; /* Aligns text to the left for readability */
}

.hod-details h3 {
    margin: 0;
    color: #003366;
}

/* Faculty Row - Correct Horizontal Layout */
.faculty-row {
    display: flex; /* Flex layout for horizontal alignment */
    justify-content: space-between; /* Distribute items evenly */
    flex-wrap: wrap; /* Ensures wrapping for small screens */
    gap: 1rem; /* Adds space between cards */
}

.faculty-card {
    background: #fff;
    border-radius: 8px;
    text-align: center;
    padding: 1rem;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    flex: 1 1 calc(25% - 1rem); /* Make each card take 25% of the row */
    max-width: calc(25% - 1rem); /* Prevents cards from stretching too wide */
    margin: 0;
    transition: transform 0.3s;
}

.faculty-card img {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    margin-bottom: 0.5rem;
}

.faculty-card h3 {
    margin: 0.5rem 0 0.3rem;
    color: #003366;
}

.faculty-card:hover {
    transform: scale(1.05);
}

footer {
    background-color: #003366;
    color: #fff;
    text-align: center;
    padding: 1rem;
    margin-top: 2rem;
}
</style>
 <header>
 <body>
 
        <div class="header-container">
            <img src="college-logo.png" alt="College Logo" class="logo">
            <h1>Basaveshwara Engineering College,Bagalkote.</h1>
            <h2>Information Science and Engineering</h2>
        </div>
        <!-- Navigation Menu -->
        <nav>
            <ul class="menu">
                <li><a href="fachome.php">Home</a></li>
                <li><a href="faculty_view.php">View Students Progress</a></li>
                <li><a href="add_announcement.php">Add Announcement</a></li>
                <li><a href="feedback.php">View Feedback </a></li>
				<li><a href="logoutt.php">Logout </a></li>
            </ul>
        </nav>
    </header>
  <form method="POST" action="view.php" enctype="multipart/form-data">

    <!-- Main Content -->
    <main>
	
        <!-- Home Section -->
        <section id="home">
            <h2>Welcome to the Faculty Advisor Information Management System</h2>
            <div class="department-image">
                <img src="department-image.jpg" alt="Department of Information Science">
            </div>
            <p>
            </p>
        </section>

        <!-- HOD Section -->
        <section id="hod-introduction">
            <h2>Head of Department</h2>
            <div class="hod-container">
                <img src="hod.jpg" alt="HOD Image" class="hod-image">
                <div class="hod-details">
                    <h3>Dr. S.P. Bangarashetti</h3>
                    <p>
                        Welcome to the Department of Information Science and Engineering. </p?
                </div>
            </div>
        </section>

        <!-- Faculty Management Section -->
        <section id="faculty-management">
            <h2>Faculty List</h2>
            <div class="faculty-row">
                <!-- Faculty Member 1 -->
                <div class="faculty-card">
                    <img src="faculty1.jpg" alt="Faculty 1">
                    <h3>Sri.P.K.Deshapande</h3>
                    <p>Assistant Professor</p>
                </div>
                <!-- Faculty Member 2 -->
                <div class="faculty-card">
                    <img src="faculty2.jpg" alt="Faculty 2">
                    <h3>Smt. D.I.Kalappanavar</h3>
                    <p>Assistant Professor</p>
                </div>
                <!-- Faculty Member 3 -->
                <div class="faculty-card">
                    <img src="faculty3.jpg" alt="Faculty 3">
                    <h3>Sri.G.B.Shettar</h3>
                    <p>Assistant Professor</p>
                </div>
                <!-- Faculty Member 4 -->
                <div class="faculty-card">
                    <img src="faculty4.jpg" alt="Faculty 4">
                    <h3>Prof.P.V.Kulkarni</h3>
                    <p>Assistant Professor</p>
                </div>
				<div class="faculty-card">
                    <img src="faculty5.jpg" alt="Faculty 4">
                    <h3>Miss.C.R. Shivanagi</h3>
                    <p>Assistant Professor</p>
                </div>
				<div class="faculty-card">
                    <img src="faculty6.jpg" alt="Faculty 4">
                    <h3>Smt.Sheetal Pattanashetti</h3>
                    <p>Assistant Professor</p>
                </div>
				<div class="faculty-card">
                    <img src="faculty7.jpg" alt="Faculty 4">
                    <h3>Smt.Roopa Math</h3>
                    <p>Assistant Professor</p>
                </div>
				<div class="faculty-card">
                    <img src="faculty8.jpg" alt="Faculty 4">
                    <h3>Miss.G.M.Patil</h3>
                    <p>Assistant Professor</p>
                </div>
				<div class="faculty-card">
                    <img src="faculty9.jpg" alt="Faculty 4">
                    <h3>Sri.S.N.Kugali</h3>
                    <p>Assistant Professor</p>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer>
        <p>&copy;Department of Information Science and Engineering, Basaveshwara Engineering College,Bagalkote.</p>
    </footer>

    <!-- JavaScript -->
    <script>
        // Smooth Scroll for Navigation
        document.querySelectorAll('.menu a').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Highlight Active Menu Tab on Scroll
        const sections = document.querySelectorAll('section');
        const menuLinks = document.querySelectorAll('.menu a');

        window.addEventListener('scroll', () => {
            let current = '';
            sections.forEach(section => {
                const sectionTop = section.offsetTop - 50;
                if (pageYOffset >= sectionTop) {
                    current = section.getAttribute('id');
                }
            });

            menuLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href').substring(1) === current) {
                    link.classList.add('active');
                }
            });
        });
    </script>
</body>

</html>
