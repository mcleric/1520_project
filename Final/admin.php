<!DOCTYPE html>
<html>
<head>
	<link href="css/bootstrap.min.css" rel="stylesheet">

<style>
	ul.menu {
		
		list-style-type: none;
		background-color: DarkGray;
		border:1px solid;
		padding-top:1%;
		padding-bottom:1%;
		position:absolute;
		padding-right:3%;
		top:2%;
		left:2%;
		
		
		
	}
	
	ul.menu li {
		padding-top:1px;
		padding-bottom:1px;
		
	}
	
	li a {
		display: block;
		text-align: center;
		width: 100%;
		text-decoration: none;
	
	
	}
	
	.output{
		position:absolute;
		left:20%;
	
	
	}
	
	table {
		table-layout:fixed;
		width:100%;
		
	}
	
	th, td{
		padding:2px;
		
	}
	
	
	table, th, td {
     border: 1px solid black;
	 
	 <!--white-space:pre-wrap ; 
	 word-wrap:break-word;-->
	}



</style>
	
</head>


	<?php
	$username = "mcleric";
	$password = "secret";
	
	
	if(!(empty($_GET["task"])))
	{
		$_POST["user"] = $username;
		$_POST["pass"] = $password;
	
	}else{
		$_GET["task"] = "";
	
	}
	
	$user = $_POST["user"];
	$pass = $_POST["pass"];
	
	
	if(!($user == $username && $pass == $password))
	{
		header('Location: http://localhost/project/index.php#contact');
	}else
	{
		
		$servername = "localhost";
		$dbuser = "root";
		$dbpass = "secret";
		$dbname = "myDB";

		// Create connection
		$conn = new mysqli($servername, $dbuser, $dbpass);


		// Create database
		
		$sql = "CREATE DATABASE IF NOT EXISTS myDB";
		$conn->query($sql);

		//connect to database
		$conn = new mysqli($servername, $dbuser, $dbpass, $dbname);
	?>
		<div class="box">
			<ul class="menu">
				<li><a class="btn btn-default" href="admin.php?task=print">Print Contacts</a></li>
				<li><a class="btn btn-default" href="admin.php?task=remove">Drop Table</a></li>
				<li><a class="btn btn-default" href="admin.php?task=return">Return</a></li>
			</ul>
		</div>
		
		<div class="output">
	<?php
	
		
		if($_GET["task"] == "print")
		{
			$sql = "SELECT id, firstname, lastname, email, msg, date FROM myTable";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				echo "<table><tr><th>ID</th><th>Name</th><th>Email</th><th>Message</th><th>Date</th></tr>";
				// output data of each row
				while($row = $result->fetch_assoc()) {
					echo "<tr rowspan=\"3\"><td>".$row["id"]."</td><td>".$row["firstname"]." ".$row["lastname"]."</td><td>".$row["email"]."</td><td>"
					.$row["msg"]."</td><td>".$row["date"]."</td></tr>";
				}
				echo "</table>";
			}
		
		
		}elseif($_GET["task"] == "remove")
		{
			$sql = "DROP TABLE IF EXISTS myTable";
			$conn->query($sql);
		
		
		}elseif($_GET["task"] == "return")
		{
			header('Location: http://localhost/project/index.php');
		
		
		
		}
		
		$conn->close();
	}

	
	?>
		</div>







</html>






