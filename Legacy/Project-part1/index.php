<!DOCTYPE html>
<html>
<head>

<!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/scrolling-nav.css" rel="stylesheet">

	<!-- My custom css -->
	<link href="css/my.css" rel="stylesheet">
	
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar">


<?php 
	$resumeParts = array(
		"CS" => 
		"<br><b class=\"resumehead\" style=\"text-decoration:underline;\">B.S. in Computer Science</b>
		<div style=\"margin-right:18%;\">
			<ul class=\"resumelist\">
				<li>Expected Graduation Date: December 2016</li>
				<li>GPA: 3.803</li>
				<li>Relevant Coursework:
				<ul style=\"list-style-type:disc;\">
					<li>Data Structures</li>
					<li>Intro to Systems Software</li>
					<li>Algorithm Implementation</li>
					<li>Intro to Operating Systems</li>
					<li>Formal Methods in Computer Science</li>
				</ul>
				</li>
			</ul>
		</div>
		<i class=\"resumehead\" style=\"text-decoration:underline;\">Experience</i>
		
		<div style=\"margin-right:18%;\">
			<ul class=\"resumelist\">
				<li>Programming Languages:
				<ul style=\"list-style-type:disc;\">
					<li>Java</li>
					<li>C</li>
					<li>Assembly (MIPS and some x86)</li>
				</ul>
				</li>
				<li>Have written various implementations of data structures in Java: e.g. Hash tables, Heaps, Undirected Graph, Trie</li>
				<li>Built a \"jrMIPS\" processor in Logisim, which was able to handle simple assembly programs</li>
				<li>Have written a basic graphics library using Linux system calls</li>
				<li>Have written my own shell implementation in C</li>
			</ul>
		</div>",
		
		"Neuro" =>
		"<br><b class=\"resumehead\" style=\"text-decoration:underline;\">B.S. in Neuroscience</b>
		<b><i class=\"resumehead\" >Minor in Chemistry</i></b>		
		<div style=\"margin-right:18%;\">
			<ul class=\"resumelist\">
				<li>Finished Program: December 2014</li>
				<li>GPA: 3.967</li>
			</ul>
		</div>
		
		<i class=\"resumehead\" style=\"text-decoration:underline;\">Experience</i>
		<div style=\"margin-right:18%;\">
			<ul class=\"resumelist\">
				<li>Undergraduate Research
				<ul style=\"list-style-type:disc;\">
					<li>In Vitro Calcium Imaging at the Mouse Neuromuscular Junction</li>
					<li>Fixed Tissue Immunohistochemical Staining and Analysis of the Mouse NMJ using Confocal Microscopy</li>
				</ul>
				</li>
				<li>Experienced in giving scientific/technical presentations to both professional and lay audiences, including a neuroscience presentation given to a grade school class</li>
				<li>Have written mock research grant and also a mock thesis based on my undergraduate research</li>		
			</ul>
		</div>",
		
		"Work" =>
		"<div style=\"margin-right:18%;\">
		<br>
		<table style=\"width:100%; margin-left:5%;\">
			<th><b>January 2013-Present</b></th>
			<th><b>The Olive Garden</b></th>
			<th style=\"text-align:right;\"><b>Pittsburgh, PA</b></th>
			<tr style=\"text-align:left;\"><td><i>Server</i></td></tr>
		</table>
		<ul class=\"resumelist\">
			<li>Developed excellent interpersonal skills, dealing with many different kinds of people everyday</li> 
			<li>Honed the ability to effectively multi-task, while still maintaining attention to detail</li>
			<li>Find solutions to problems, ensuring the guest leaves satisfied</li>
		</ul>
		
		<br>
		<table style=\"width:100%; margin-left:5%;\">
			<th><b>April 2011-January 2013</b></th>
			<th><b>University of Pittsburgh</b></th>
			<th style=\"text-align:right;\"><b>Pittsburgh, PA</b></th>
			<tr style=\"text-align:left;\"><td><i>Research Assistant</i></td></tr>
		</table>
		<ul class=\"resumelist\">
			<li>Research pertained to subcelluar events occuring at the neuromuscular junction</li> 
			<li>Was the only undergraduate who worked on this research project</li>
			<li>Maintained laboratory and animal facilites</li>
		</ul>
		</div>" );
		

		

		
		
		
?>






<ul class="navbar">
  <li class="aboutli"><a class="page-scroll" class="active" href="#about">Mitchell Cleric</a></li>
  <li class="resumeli"><a class="page-scroll" href="#resume">Resume</a></li>
  <li class="contactli"><a class="page-scroll" href="#contact">Contact</a></li>
</ul>

 <!-- About Section -->
		
    <section id="about" class="about-section about">
        
		<div class="rMargin">
			<img id="profile" src="imgs/profile.jpg"></img>
			<h2>Who am I?</h2>
			<p id="bio">I am Computer/Neuro Science graduate from the University of Pittsburgh.  My time studying neuroscience has given me a strong background
				in not only the brain, but also the biochemistry responsible for things like homoeostasis, and the intra/inter cellular signalling events that occur
				in all living organisms. One of the most important skills I acquired in my pursuit of my neuroscience degree was the ability
				to sift through large amounts of scientific information (in research papers, articles, etc.) and identify/learn from the pertinent information.  This is a skill
				that has been particularly useful in my transfer to the field of computer science, as information about pretty much any facet of the field is readily available online.  
				By far my most valuable asset is my ability to quickly research and teach myself new topics, and is something that I genuinely enjoy to do.  I found myself drawn to the field of computer
				science because I love problem solving. I am also extremely interested in building/working on things that people never have before.  When I began on my computer science tract
				I envisioned a niche where I could implement my neuroscience as well.  As time has gone by, it seems as though the niche is widening.  My dream would be to work in something related
				to biotechnology, brain-machine interface, or advanced machine learning.</p>
		</div>
		
		
		
		
		
		
		<div class="side-img">
			<img src="imgs/tunnel4.png" class="tunnel"></img>	
		</div>
    </section>
	
	

    <!-- Resume Section -->
    <section id="resume" class="resume resume-section">
        
		<ul id="menubar">
				<li class="menu"><a href="index.php?page=CS#resume">Computer Science</a></li>
				<li class="menu"><a href="index.php?page=Neuro#resume">Neuroscience</a></li>
				<li class="menu"><a href="index.php?page=Work#resume">Work Experience</a></li>
				<li><a class="btn btn-default" href="docs/resume.pdf" download="Cleric_Mitchell_Resume">Download</a></li>
		</ul>
		<!-- php code here to determine page in $_GET var, and display proper section in resume-->
		
		<?php 
			
			if(!($_GET)):
			
				$_GET["page"] = "CS";
			endif;
			
			echo $resumeParts[$_GET["page"]];
			
		?>
		
			
			
		<div class="side-img">
				<img src="imgs/tunnel-approach.png" class="tunnel" style="top:120%;"></img>	
		</div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section contact">
        
		<div class="rMargin contactBox">
			<h2>Contact Me</h2>
			<form action="index.php#contact" method="post" class="contactForm">
			  First name:<br>
			  <input type="text" maxlength="30" name="firstname" required><br>
			  Last name:<br>
			  <input type="text" maxlength="30" name="lastname" required><br>
			  Email:<br>
			  <input type="text" maxlength="50" name="email" required><br><br>
			  Message:<br>
			  <textarea name="msg" maxlength="500" style="width:90%; height:10em; resize:none;"></textarea><br><br>
			  <input type="submit" value="Submit">
			</form>
			
			<?php
				$servername = "localhost";
				$username = "root";
				$password = "secret";
				$dbname = "myDB";

				if(empty($_POST))
				{
					$_POST["firstname"] = "";
					$_POST["lastname"] = "";
					$_POST["email"] = "";
					$_POST["msg"] = "";

				}

				// Create connection
				$conn = new mysqli($servername, $username, $password);


				// Create database
				
				$sql = "CREATE DATABASE IF NOT EXISTS myDB";
				$conn->query($sql);

				//connect to database
				$conn = new mysqli($servername, $username, $password, $dbname);
				

				//create table
				$sql = "CREATE TABLE IF NOT EXISTS myTable(
				id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
				firstname VARCHAR(30) NOT NULL,
				lastname VARCHAR(30) NOT NULL,
				email VARCHAR(50) NOT NULL,
				msg TEXT,
				date TIMESTAMP)";

				$conn->query($sql);
				
								
				$firstname = $_POST["firstname"];
				$lastname = $_POST["lastname"];
				$email = $_POST["email"];
				$msg = $_POST["msg"];
				$date = new DateTime();
				$timestamp = $date->format('Y-m-d H:i:s');

				$sql = "SELECT id FROM myTable WHERE firstname='".$firstname."' AND lastname='".$lastname."'";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
					echo $firstname." ".$lastname.", you have already contacted me.  I will get back to you as soon as possible.";
				} else {
					if(!($firstname == ""))
					{
						
						$sql = "INSERT INTO myTable (firstname, lastname, email, msg, date)
								VALUES ('".$firstname."', '".$lastname."', '".$email."', '".$msg."', '".$timestamp."')";

						$conn->query($sql);
						
						echo "Thank you ".$firstname." ".$lastname.", I will get back to you as soon as possible.";
					}
				}

				$conn->close();

			
			
			
			?>
			
			
		
			<div style="position:absolute; right:0; top:85%;">
				
				<h4>Administrator Login</h4>
				<form action="admin.php" method="post" style="border:1px solid; padding:3px;">
				Username:<br>
				<input type="text" name="user">
				<br>
				Password:<br>
				<input type="password" name="pass">
				<br><br>
				<input type="submit" value="Login">
			  
				</form>
			</div>
			
		
		
		
		
		
		</div>
		
		
		
		
		
		
		<div class="side-img">
				<img src="imgs/tunnel-city.png" class="tunnel" style="top:220%;"></img>	
		</div>
    </section>
	
	<!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>
	
</body>
</html>
