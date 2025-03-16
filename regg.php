<html>
<head>
<title>Reg</title>
<style>
.A{background-color:white;
border:solid black 2px;
font-color:red;
font-size:120%;
font color:blue;
width:60%;
height:40px;
margin-left:25%;
margin-right:30%;
border-radius:20px;


}
.B
{
background-color:;
border:solid black 2px;
color:white;
width:45%;
margin-left:5%;

}
.C
{
background-color:powderblue;
}
.D
{
background-color:DodgerBlue;
border-radius:5px;
margin-left:10%;
margin-right:30%;
font-size:100%;
width:20%;
height:40px;

}
#E
{
background-color:pink;
margin-left:10%;
width
}
p{
margin-left:20%;
width:15%;

}
.F{
border:solid black 5px;
margin-left:30%;
margin-right:20%;
margin-bottom:35%;
margin-top:5%;
width:40%;
border-radius:20px;
background-color:black;
}
.G{
background-color:DodgerBlue;
border-radius:8px;
margin-left:100%;
border:2px solid black;
margin-bottom:5%;
font-size:100%;
width:20%;
height:24%;
margin-bottom:-5px;
float:right;
}
.reg{
background-color:DodgerBlue;
border-radius:5px;
font-size:100%;
width:20%;
height:40px;
text-decoration:none;
}
.button {
  background-color: DodgerBlue; /* Green */
  border: none;
  color: white;
  border-radius:5px;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin-left:21%;
  
}
</style>
<body bgcolor="#B0B0B0">
<div class="F">
<form method="POST" action="reg1.php" >
<center><h1 class="B">Sign-Up</h1></center>
<b><input type="text"  name="t1" placeholder="FullName:"  id="a1" class="A" required><br></br></b>
<input type="text"  name="t2"  placeholder="Email:" id="a2" class="A" required><br></br>
<input type="text"   name="t3" placeholder="PhoneNo:" id="a3" class="A" required><br></br>
<input type="text"   name="t4" placeholder="Password:" id="a4" class="A" required><br></br>
<input type="text"   name="t5" placeholder="Confirm Password:" id="a5" class="A" required><br></br>
<br></br>


<input type="submit" class="button" value="Register" name="reg" id="a6">
 <a href="loginn.php" class="button">Login</a>


</form>
</div>
</body>
</html>
