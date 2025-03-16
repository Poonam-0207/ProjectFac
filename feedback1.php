<html>
<head>
<title>user</title>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Progress</title>
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


  
.A
{
background-color:aqua;
border:;
display:block;
height:6%;
font-size:20px;
font-family:algerian;
}
.B{
background-color:;
border:solid black 2px;
border-radius:1%;
font-color:red;
font-size:120%;
font color:blue;
width:40%;
height:5%;
margin-left:25%;
margin-right:30%;

}
.c
{
background-color:;
border:solid black 2px;
border-style:none;
width:20%;
margin-right:20%;
font-size:50px;
}
.D
{
color:red;
height:2%;
font-size:20px;
font-family:italic;
}
.E
{
background-color:;
border-radius:5px;

margin-left:40%;
font-size:100%;
width:20%;
height:5%;

}

.a1
{
background-color:;
height:20px;
width:;
padding-top:5px;
text-decoration:none;
margin-top:5px;
center;
}
.H{
	font-size:30px;
font-family:cursive;
margin-left:28%;
}
.G{
border:solid black 2px;
border-radius:1%;
width:40%;
height:12%;
margin-left:25%;
margin-right:30%;
font-size:120%;
}
.z,.F {
margin:10px;
padding:0
color:green;
}	
	
	margin-left:12%;
	
}
.s{
	background-color:Lightgray;
}
h1.C, h2 {
	margin:10px 0;
	margin-right:5%;
}
.good{
	margin-right:5%;
}

	.bad{
		margin-left:5%;
	}
	.H {
		margin-right:30%;
		font-size:20px;
        font-family:serif;
		
	}
		


	
</style>
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
                <li><a href="addprogress.php">AddProgress</a></li>
                <li><a href="view_announcements.php">View Announcement</a></li>
                <li><a href="feedback1.php">Provide Feedback </a></li>
				<li><a href="logoutt.php">Logout </a></li>
            </ul>
        </nav>
    </header>
<div>

<form method="post" action="feedbackdb1.php"> <center><h1 class="C">FEEDBACK</h1></center>
<h3 class="H">Kindly drop your suggestions or feedback for your faculty advisors.</h3></center>
<h2 style="text-align: center;">Your feedback is important!</h2>
<h3 class="H"></h3></center>
<center class="good">
<input type="radio" name="a1" value="Good" >
<label for="html">Good</label>
<input type="radio" name="a1" value="Average">
<label for="css">Average</label>
<input type="radio"  name="a1" value="Bad">
<label for="javascript">Bad</label>
</center ><br></br>
<center class="bad">
<b><input type="text" name="t1" placeholder="Full Name/Email" class="B"><br></br></b>
<b><input type="text" name="t2" placeholder="Assigned Faculty" class="B"><br></br></b>
<b><input type="text" name="t3" placeholder="Phone Number" class="B"><br></br></b>
<b><input type="text" name="t4" placeholder="Message" class="G"><br></br></b>
</center>

<input type="submit" class="E" name="feed" value="submit">
</form>
</div>
</div>
</body>
</html>

