
<?php  
	session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<title>Online Library Management System
	</title>
	<link rel="stylesheet" type="text/css" href="style.css">
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     
</head>
<style type="text/css">
	nav{
		float: right;
		word-spacing: 30px;
		padding: 20px;
	}
	nav li{
		display: inline-block;
		line-height: 70px;
	}
</style>
<body>
	<div class="wrapper">
		
	
		<header>
			<div class="logo">
			    <img src="pics/d.jpg" width="100px" ;">
			    <h1 style="color: white">ONLINE LIBRARY MANAGEMENT SYSTEM</h1>
			</div>

			<?php 
				if(isset($_SESSION['login_user'])){
				
				?>		
					<nav>
					<ul>
						<li> <a href="index.php">HOME</a></li> 
						<li><a href="books.php">BOOKS</a></li>
						<li><a href="logout.php">LOGOUT</a></li>
					
						<li><a href="feedback.php">FEEDBACK</a></li>
					</ul>
				</nav>
			<?php  
				}
				else{?>
						<nav>
					<ul>
						<li> <a href="index.php">HOME</a></li> 
						<li><a href="books.php">BOOKS</a></li>
						<li><a href="student_login.php">STUDENTS-LOGIN</a></li>
					
						<li><a href="feedback.php">FEEDBACK</a></li>
					</ul>
				</nav>
				<?php }
			 ?>


			
			
		</header> 
		<section>
		<div class="sec_img">
<!--		<div class="w3-content w3schools" style="width: 100%; height: 400px;" >
			<img class="mySlides  w3-animate-left" src="pics/a14.jpg"  style="width: 100%">
			<img class="mySlides  w3-animate-left" src="pics/a175.jpg" style="width: 100%">
			<img class="mySlides  w3-animate-fading" src="pics/a177.jpg" style="width: 100%">
			<img class="mySlides  w3-animate-fading" src="pics/a191.jpg" style="width: 100%">
		
	 	</div>

<script type="text/javascript">
	var a=0;
	carousel();

	function carousel()
	{
		var i;
		var x= document.getElementsByClassName("mySlides");


		for (var i = 0; i < x.length; i++) {
			x[i].style.display="none";
		}

		a++;
		if (a>x.length) {a=1}
			x[a-1].style.display = "block";
		    setTimeout(carousel, 5000);
	}
	

</script>
-->
			<br><br><br>
			<div class="box">

				<h1 style="text-align: center; font-size: 30px;">Welcome to the Library</h1><br>
				<h1 style="text-align: center; font-size: 15px;">Opens at: 0800hrs</h1><br>
				<h1 style="text-align: center; font-size: 15px;">Closes at:2000hrs</h1><br>

				
			</div>

			</div>
		</section>
		
	    </div>
	    <?php 
	    	include "footer.php";
	    ?>
</body>
</html>