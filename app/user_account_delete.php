<?php

session_start();

include '../data/user_data_access.php';
//include '../data/home_data_access.php';

$id=$_SESSION['user']['id'];
$email=$_SESSION['user']['email'];
$name=$_SESSION['user']['name'];
$imgname=$_SESSION['user']['image'];
$uname=$_SESSION['user']['username'];
$mobile=$_SESSION['user']['mobile'];
$gender=$_SESSION['user']['gender'];

 if(isset($_POST['delete']))
            	
                {
                    user_delete($email);
                    
                    echo "<script>document.location='logout.php?ms=delete';</script>";
    
            	}

   

?>
<html>
	<head>
		<title>Delete Account</title>
		<style>
			body{
				font-family: arial;
				color: white;
				margin: 0px;
				padding: 0px;
				background-color: #002630;
			}
			.profile{
				margin: -670px 0px 0px 25%;
				padding: 20px;
			}
			.heading h1{
				color: #FF7D00;
			}
			.details{
				padding: 20px 0px 0px 30px;
			}
			.details img{
				height: 100px;
				width: 100px;
				border: 1px dashed;
			}
			.details p{
				font-weight: bold;
				color: white;
				font-size: 20px;
				line-height: 30px;
			}
			.edit{
				margin: 50px 0px 0px 350px;
				width: 200px;
				height: 50px;
				background-color: black;
				border-radius: 50px;
				line-height: 50px;
				text-align: center;
			}
			.edit a{
				font-size: 20px;
				font-weight: bold;
				text-decoration: none;
				color: white;
			}
			.edit:hover{
				cursor: pointer;
				background-color: #FF7D00;
				border-radius: 50px;
			}
			.deletebtn{
				margin: 50px 0px 0px 0px;
				text-align: center;
			}
			.deletebtn button{
				width: 180px;
				height: 50px;
				border-radius: 50px;
				color: white;
				font-size: 20px;
				background-color: #FF7D00;
				border: 1px solid #FF7D00;
			}
			.deletebtn button:hover{
				cursor: pointer;
			}
		</style>
	</head>

	<body>
		<?php
			if($email==""){
                include 'header.php'; 
                echo "<script>document.location='home.php';</script>";
            }
            else if($_SESSION['type']=="user"){
				include 'user_profile_header.php';
				include 'user_sidenav.php';
            }
		?>
			
		<div class="profile">
			<div class="heading">
				<h1>Delete Account</h1>
			</div>
			
			<hr>
			
			<div class="details">
				<img src="../app/uploads/<?php echo $imgname;?>">
				<p>Name: <?=$name;?></p>
				<p>Username: <?=$uname;?></p>
				<p>Email: <?=$email;?></p>
				<p>Gender: <?=$gender;?></p>
				<p>Mobile No: <?=$mobile;?></p>
            </div>
            <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">

			<div class="deletebtn" > 
				<button  type="submit" name="delete">Delete Account</button>
			</div>
                </form>
        </div>
	</body>
</html>
