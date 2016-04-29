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



<ul class="navbar">
  <li id="about_btn" class="aboutli">
	<a class="page-scroll" class="active" href="#home">
		<span id="a0">M</span><span id="a1">i</span><span id="a2">t</span><span id="a3">c</span><span id="a4">h</span><span id="a5">e</span><span id="a6">l</span><span id="a7">l</span> 
		<span id="a8">C</span><span id="a9">l</span><span id="a10">e</span><span id="a11">r</span><span id="a12">i</span><span id="a13">c</span>
	</a>
  </li>
  <li id="resume_btn" class="resumeli">
	<a class="page-scroll" href="#resume">
		<span id="r0">R</span><span id="r1">e</span><span id="r2">s</span><span id="r3">u</span><span id="r4">m</span><span id="r5">e</span>
	</a>
  </li>
  <li id="contact_btn" class="contactli">
	<a class="page-scroll" href="#contact">
		<span id="c0">C</span><span id="c1">o</span><span id="c2">n</span><span id="c3">t</span><span id="c4">a</span><span id="c5">c</span><span id="c6">t</span>
	</a>
  </li>
</ul>

    <!-- Contact Section -->
    <section id="contact" class="contact-section contact">
        
		
		
		<div class="rMargin contactBox">
			<h2>Contact Me</h2>
			<div id="curtain" style="background:url(imgs/curtain.png); width:30%; height:1%; z-index:99; left:4%; position:absolute;"></div>
			<form action="index.php#contact" method="post" id="contactForm">
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
			<button id="clear">Clear</clear></button>
			<p id="out"></p>
			
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
				
				$jscrib = array('firstname' => $firstname, 'lastname' => $lastname);
				$jscrib = json_encode($jscrib);		
				if ($result->num_rows > 0) {
				?>	
				<!--script that uses json to transfer info from php to javascript -->
						<script>
							(function(){
								
								var person = <?php echo json_encode($jscrib);?>;
								person = JSON.parse(person);
								document.getElementById('out').innerHTML = person.firstname + " " + person.lastname + " you have already contacted me.  I will get back to you as soon as possible.";
							})();
						</script>
			
				<?php	
				
				} else {
					if(!($firstname == ""))
					{
						
						$sql = "INSERT INTO myTable (firstname, lastname, email, msg, date)
								VALUES ('".$firstname."', '".$lastname."', '".$email."', '".$msg."', '".$timestamp."')";

						$conn->query($sql);
						
						
						
			?>			
						<!--script that uses json to transfer info from php to javascript -->
						<script>
							(function(){
							
								var person = <?php echo json_encode($jscrib);?>;
								person = JSON.parse(person);
								document.getElementById('out').innerHTML = "Thank you " + person.firstname + " " + person.lastname + ", I will get back to you as possible";
							})();
						</script>
			
			<?php		}
				}

				$conn->close();

			
			
			
			?>
			
			
		
			<div style="position:absolute; right:2%; top:12%; border:5px inset; background-color:LightSteelBlue;">
				
				<h4>Administrator Login</h4>
				<form action="admin.php" method="post" style="border:1px solid; margin:5px; padding:5px;">
				Username:<br>
				<input type="text" name="user">
				<br>
				Password:<br>
				<input type="password" name="pass">
				<br><br>
				<input style="position:relative; left:35%; right:35%; margin-bottom:10px;" type="submit" value="Login">
			  
				</form>
			</div>
			
		
		
		
		
		
		</div>
		
		
		
		
		
		
		<div class="side-img">
				<img src="imgs/tunnel4.png" class="tunnel" style="top:220%;"></img>	
		</div>
    </section>
		
	

    <!-- Resume Section -->
    <section id="resume" class="resume resume-section">
        <a style="float:left; margin-left:1%; margin-top:1%;"class="btn btn-default" href="docs/resume.pdf" download="Cleric_Mitchell_Resume">Download PDF</a>
		
		
		<ul id="menubar">
				<li id="cs_btn" class="menu"><a style="cursor:pointer;" onclick="load_s('cs')">Computer Science</a></li>
				<li id="neuro_btn" class="menu"><a style="cursor:pointer;" onclick="load_s('neuro')">Neuroscience</a></li>
				<li id="work_btn" class="menu"><a style="cursor:pointer;" onclick="load_s('work')">Work Experience</a></li>

		</ul>
		
		<!-- div where ajax requests are loaded into -->
		<div id="res_load" style="margin-left:18%; margin-top:1%; width:67%; padding-left:7%; padding-top:3.3%; background:url(imgs/note.png);">
		</div>
		
			
		<div class="side-img">
				<img src="imgs/tunnel-approach.png" class="tunnel" style="top:120%;"></img>	
		</div>
    </section>
	
	<!-- About Section -->
		
    <section id="home" class="about-section about">
        
		
		<div class="rMargin">
			<img id="profile" src="imgs/profile.jpg"></img>
			<h2 id="bio_head">Who am I?</h2>
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
			<img src="imgs/tunnel-city.png" class="tunnel"></img>	
		</div>
    </section>
	
	


	<!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>
	
	<!--My Javascript-->
	<script src="js/my.js"></script>
	
	<script src="js/jquery.shuffleLetters.js"></script>
	
	
</body>
</html>
