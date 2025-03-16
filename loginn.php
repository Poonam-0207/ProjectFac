<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Login</title>
<link rel="stylesheet" href="style.css">
</head>
<style>
@import url('https://fonts.googleapis.com/css2? family=Poppins:wght@300;400;500;600; 700; 800; 900&display=swap');
*
{
margin: 0;
padding: 0;
box-sizing: border-box;
font-family: 'Poppins', sans-serif;
}
body
{
display: flex;
justify-content: center;
align-items: center; 
min-height: 100vh;
background-color: #23242a;
}
.box
{
position: relative;
width:380px;
height:420px;
background:#1c1c1c;
border-radius:8px;
overflow:hidden;
}
.box::before
{
    content:'';
    position:absolute;
    top:-50%;
    left:-50%;
    width:380px;
    height:420px;
    background: linear-gradient(0deg,transparent,
    transparent,#45f3ff,#45f3ff,#45f3ff);
    z-inex:1;
    transform-origin:bottom right;
    animation: animate 6s linear infinite;    
}
.box::after
{
    content:'';
    position:absolute;
    top:-50%;
    left:-50%;
    width:380px;
    height:420px;
    background: linear-gradient(0deg,transparent,
    transparent,#45f3ff,#45f3ff,#45f3ff);
    z-inex:1;
    transform-origin:bottom right;
    animation: animate 6s linear infinite;  
    animation-delay: -3s;  
}
.borderline
{
    position: absolute;
    top:0;
    inset:0;
}
.borderline::before
{
    content:'';
    position:absolute;
    top:-50%;
    left:-50%;
    width:380px;
    height:420px;
    background: linear-gradient(0deg,transparent,
    transparent,#ff2770,#ff2770,#ff2770);
    z-inex:1;
    transform-origin:bottom right;
    animation: animate 6s linear infinite;    
    animation-delay: -1.5s;
}
.borderline::after
{
    content:'';
    position:absolute;
    top:-50%;
    left:-50%;
    width:380px;
    height:420px;
    background: linear-gradient(0deg,transparent,
    transparent,#ff2770,#ff2770,#ff2770);
    z-inex:1;
    transform-origin:bottom right;
    animation: animate 6s linear infinite;    
    animation-delay: -4.5s;
}
@keyframes animate
{
    100%
    {
        transform:rotate(360deg);
    }
}
.box form
{
position:absolute;
inset:4px;
background:#222;
padding:50px 40px;
border-radius:8px;
z-index:2;
display:flex;
flex-direction: column;
}
.box form h2
{
color:#fff;
font-weight:500;
text-align:center;
letter-spacing:0.1em;
}
.box form .inputbox
{
position:relative;
width:300px;
margin-top:35px;
}
.box form .inputbox input
{
    position:relative;
    width:100%;
    padding:20px 0px 10px;
    background:transparent;
    outline:none;
    box-shadow:none;
    color:#23242a;
    font-size:1em;
    letter-spacing:0.05em;
    transition: 0.5s;
    z-index:10;
}
.box form .inputbox span{
    position:absolute;
    left:0;
    padding:20px 10px 10px;
    pointer-events:none;
    color: #8f8f8f;
    font-size:1em;
    letter-spacing:0.05em;
    transition: 0.5s;
}
.box form .inputbox input:valid ~ span,
.box form .inputbox input:valid ~ span
{
    color:#fff;
    font-size:0.75em;
    transform:translateY(-34px);
}
.box form .inputbox i{
    position:absolute;
    left:0;
    bottom:0;
    width:100%;
    height:2px;
    background: #fff;
    border-radius:4px;
    overflow:hidden;
    transition: 0.5s;
    pointer-events: none;
}
.box form .inputbox input:valid ~ i,
.box form .inputbox input:focus ~ i
{
    height:44px;
}
.box form .inputbox input[type="submit"]
{
    border:none;
    outline:none;
    padding:9px 25px;
    background: #fff;
    cursor:pointer;
    font-size:0.9em;
    border-radius:4px;
    font-weight:600;
    width:100px;
    margin-top:10px;
}
.box form input[type="submit"]:active{
    {
        opacity:0.8;
    }
.a1{

color:white;
margin-left:4%;
}
}
p{
	color:white;
	font-family:cursive;
	font-size:20px;
	argin-top:20px;
	
}

</style>
<body>
<div class="box">
<span class="borderline"></span>
<form method="POST" action="logdb.php">
<h2>Sign in</h2>
<div class="inputbox">
<input type="text" required="required" name="t1">
<span>Email</span>
<i></i>
</div>
<div class="inputbox">
<input type="password" required="required" name="t2">
<span>Password</span>
<i></i>
</div>
<input type="submit" value="LOGIN" name="login">
<p>Don't have an account? <a href="regg.php" class="a1"> Sign up</a></p>
</div>

</form>
</div>
</body>
</html>




