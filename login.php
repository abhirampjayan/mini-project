<html>
	<head>
		<title>Home</title>
		<link rel="stylesheet" href="main.css">
	</head>
	<body>
        <nav>
        <h1>MtSA</h1>
        <div id=menu>
            
            <a href="index.html">Sign Out</a>
        </div>
        </nav>
		<div id="container">
		<div id="log">
			<div id=pro><img src="user-default.jpg"><h3>Welcome to Your Portal!</h3></div>
			<form method="post" action="login.php">
				<?php
$uname="root";
$passwd="";
$serv="localhost";
$db="mtsa";
$user=$_POST['uname'];
$paswd=$_POST['paswd'];
$conn=mysqli_connect($serv,$uname,$passwd,$db);
	if(!$conn)
	{
		die("<h2>connection Failed : ".mysqli_connect_error()."</h2>");
	}
$q="SELECT * FROM student WHERE username='$user' AND password='$paswd'";
$r=mysqli_query($conn,$q);
$d=mysqli_fetch_array($r);
if(!$d)
{
	echo "<h2>Account not found</h2>";
	exit();
}
elseif($d['username']==$user && $d['password']==$paswd)
{
	echo"<h2>Login successfull...</h2>";
}
		echo "Your Email is : ".$d['email'];
				mysqli_close($conn);
?>
			</form>
		</div><br>
			
		</div>	
		<footer><p>Created By Abhiram P Jayan | Targaryen Family ( 2016-2020 )</p></footer>
	</body>
</html>
