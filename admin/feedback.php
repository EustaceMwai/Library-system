<?php
include "navbar.php";
include "connection.php";

?>

<!DOCTYPE html>
<html>
<head>
	<title>Feedback</title>
	<link rel="stylesheet" type="text/css" href="style.css">
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">

     <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
     <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

     <style type="text/css">
     	body{
     		background-image: url("pics/A3.jpg");
     	}
     	.wrapper
     	{
     		padding: 10px;
     		margin: -20px auto;
     		width: 900px;
     		height: 600px;
     		background-color: black;
     		opacity: .8;
     		color: white;
     	}
     	.form-contol{
     		height: 70px;
     		width: 60%;
     	}
          .scroll{
               height: 300px;
               width: 100%;
               overflow: auto;
          }
     </style>

</head>
<body>
     <div class="wrapper">
     	<h4>If you have any suggestions or comments please comment below</h4>
     	<form style="" action="" method="POST">
     		<input class="form-control" type="text" name="comment" placeholder="Write Something..."><br>
     		<input class="btn btn-default" type="submit" name="submit" value="comment" style="width: 100px; height: 35px;" >
     		
     	</form>
     	<br><br>
     
     <div class="scroll">
     	<?php 
     		if(isset($_POST['submit'])) {
     			$sql="INSERT INTO `comments` VALUES('','$_POST[comment]');";
     			if(mysqli_query($db,$sql))
     			{
     				$q="SELECT * FROM `comments` ORDER BY `comment` ASC ";
     				$res=mysqli_query($db,$q);

     				echo "<table class='table table-borded'>";
     				while ($row=mysqli_fetch_assoc($res)) {
     					echo "<tr>";
     						echo "<td>"; echo $row['comment']; echo "</td>";
     					echo "</tr>";

     					
     				}
     			}
     			else{
     				$q="SELECT * FROM `comments` ORDER BY `comment` ASC ";
     				$res=mysqli_query($db,$q);

     				echo "<table class='table table-borded'>";
     				while ($row=mysqli_fetch_assoc($res)) {
     					echo "<tr>";
     						echo "<td>"; echo $row['comment']; echo "</td>";
     					echo "</tr>";

     			}
     		}

     		}

     	 ?>
     </div>
     </div>

</body>
</html>
