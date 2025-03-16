<html>
<head>
<title>View page</title>
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
.c{
margin-left:5%;
margin-right:auto;
margin-bottom:45%;


}
.bg-img{
margin:auto;
width:60%;
padding:10px;

}
.E{
font-size:50px;
border-radius:25px;
margin-right:20%;

}
.D
{
	width:100px;
	height:30px;
}

</style>
</head>

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
                <li><a href="home.php" class="active">Home</a></li>
                <li><a href="view.php">AddProgress</a></li>
				
                <li><a href="viewann.php">View Announcement</a></li>
                <li><a href="feedback1.php">Provide Feedback </a></li>
            </ul>
        </nav>
    </header>
  
<form method="POST" action="viewdb1.php" enctype="multipart/form-data">
<div class="bg-img">
<center><h1 class="B">Add Progress</center>
<b>
<div class="C">
 <input type="hidden" class="E" name="t1" value="fruit"  size="30"/> 
 <h2>Student FullName and Sem:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" class="E" name="t2"  size="30"/>
<h2>Assigned Faculty:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" class="E" name="t2"  size="30"/>
<h2>SGPA:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" class="E" name="t2"  size="30"/>
<br>
CGPA:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="t3" class="E" size="30"/>
<br>
Backlogs:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="t4" class="E" size="30"/>
<br>
<br>


File Upload:<br></br>
<input type="file" class="t5"/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<br>
</br>
<input type="submit" class="D" value="Save" name="fruit"/>


</div>
</form>
</div>
</body>
</html>