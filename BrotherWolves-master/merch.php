<?php
$servername = "localhost";
$username = "root";
$password = "H@yd3N!!2613";
$dbname = "merch";

try {
    $db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO merch ('user_name', 'user_email', 'user_howl', 'user_bio')
    VALUES ('user_name', 'user_email', 'user_howl', 'user_bio')";
    // use exec() because no results are returned
    $db->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$db = null;
?>

<html>
	
	<head>
		<meta charset="utf-8"/>
		<title>Brother Wolves | the band</title>
		<link rel="stylesheet" href="css/normalize.css">
		<link href='https://fonts.googleapis.com/css?family=Berkshire+Swash|Fredoka+One|Comfortaa:400,700,300' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="css/responsive.css">
	</head>

	<body>
		<header>
			<a href="merch.html" id="logo">
				<h1>Brother Wolves</h1>
				<h2>the band</h2>
			</a>
 			<nav>
 				<ul>
 					<li><a href="index.html">Home</a></li>
 					<li><a href="music.html">Music</a></li>
 					<li><a href="shows.html">Shows</a></li>
 					<li><a href="merch.php" class="selected">Merch</a></li>
 					<li><a href="contact.php">Contact</a></li>
 				</ul>
 			</nav>
 		</header>
 		
 		<div id="wrapper"> 
 			<section id="merchorder">
 			
 			   
 			   <form action="index.html" method="post">

 			   	<h1>Sign Up</h1>
 			   	<fieldset class="backEndForm">

 			   		<legend><span class="number">1</span> Your Info </legend>
	 			
	 			   	<label for="name">Name:</label>
	 			   	<input type="text" id="name" name="user_name" tabindex="1"><br>
 			   	
	 			   	<label for="email">Email:</label>	
	 			   	<input type="email" id="email" name="user_email" tabindex="2"><br>

	 			   	<label for="howl">Howl:</label>
	 			   	<input type="text" id="howl" name="user_howl" tabindex="3"><br>
	 			
	 				
	 			</fieldset>
	 			<fieldset class="backEndForm">
	 			<legend><span class="number">2</span> Tell us a story! </legend>	
	 			   	<label for="bio">Bio:</label>
	 			   	<textarea id="bio" name="user_bio" tabindex="4"></textarea>
	 			
	 			</fieldset>
	 			   	
	 			   	<button type="submit" tabindex="5">Submit</button>
 			   

 			   </form>	


 			
 			<section>
	 			<ul id="home">
		 			<li>	
			 			<a href="img/IMGtreehouse2.jpg" alt="Studio">
			 			<img src="img/IMGtreehouse2.jpg" alt="Studio" id="home"></a>
		 			</li>
	 			</ul>
 			</section>
			<section id="merchorder">
 				<form action="index.html" method="post">
				<h1>Buy some stuff!</h1>
 			   	<fieldset>

 			   		<legend><span class="number"></span>  </legend>
	 			
	 			   	<label for="tshirts">T-Shirts</label>	
	 			   	<input type="checkbox" id="tshirt" name="user_tshirt" tabindex="6"><br>
 			   	
	 			   	<label for="cds">CDs</label>	
	 			   	<input type="checkbox" id="cds" name="user_cds" tabindex="7"><br>

	 			   	<label for="stickers">Stickers</label>
	 			   	<input type="checkbox" id="stickers" name="user_stickers" tabindex="8"><br>
	 			
	 			</fieldset>

	 				<button type="submit" tabindex="9">Submit</button>

	 			<fieldset class="backEndForm">

	 				<legend><span class="number"></span> Tell us what you want! </legend>

	 			   	<label for="ideas"></label>
	 			   	<textarea id="ideas" name="user_ideas" tabindex="10"></textarea>
	 			
	 			</fieldset>
	 			   	
	 			   	<button type="submit" tabindex="11">Submit</button>
 			   
				</form>	

 			</section>
 			<section>
	 			<ul id="home">
		 			<li>	
			 			<a href="img/IMGtreehouse.jpg" alt="Studio">
			 			<img src="img/IMGtreehouse.jpg" alt="Studio" id="home"></a>
		 			</li>
	 			</ul>
 			</section>
 			
 		</div>
 		<div>		
 			

	 		<footer id="footer">
	 			<a href="http://facebook.com/brotherwolveshowl"><img src="img/facebook-logo.png" alt="Facebook Logo" class="socialIcon"></a>
	 			<a href="http://twitter.com/brotherwolves"><img src="img/twitter-wrap.png" alt="Twitter Logo" class="socialIcon"></a>
	 			<a href="http://instagram.com/brotherwolves"><img src="img/instagram.png" alt="Instagram Logo" class="socialIcon"></a>
	 			
	 			<p>&copy; 2015 Brother Wolves</p>	
	 			
	 		</footer>
 		</div>




	</body>
	

</html>