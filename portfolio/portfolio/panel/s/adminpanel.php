<?php
   session_start();
   if (!isset($_SESSION['login_user']))
   {
    header('location: ../admin/login.php');
   }
?>
<!DOCTYPE html>

<html class="no-js"> 
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>admin portfolio</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	
	<link rel="shortcut icon" href="favicon.ico">

	<link href="https://fonts.googleapis.com/css?family=Karla:400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700" rel="stylesheet">
	
	
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/panel.css">
	
	<link rel="stylesheet" href="css/icomoon.css">
	
	<link rel="stylesheet" href="css/bootstrap.css">
	
	
	<link rel="stylesheet" href="css/flexslider.css">

	<link rel="stylesheet" href="css/style.css">


	
	<script src="js/modernizr-2.6.2.min.js"></script>
	

	</head>
	<body>
		

	<nav id="fh5co-main-nav" role="navigation">
		<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle active"><i></i></a>
		<?php
		   
		   if (isset($_SESSION['login_user']))
		   {
		   ?> 
		<a href="admin/disco.php" ><span class="glyphicon glyphicon-log-out" ></span></a>

		   <?php

		   }
		?>
		
		<div class="js-fullheight fh5co-table">
			
			<div class="fh5co-table-cell js-fullheight">

				<img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="images/cutmypic.png" alt="" style="margin-bottom: 40px;">
				<h1 class="text-center"><a class="fh5co-logo" href="index.html">Mohamed Tahar Mazizi</a></h1>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="work.php">work</a></li>
					
					<li><a href="about.php">About</a></li>
					<li><a href="contact.php">Contact</a></li>
				</ul>
				<p class="fh5co-social-icon">
					<a href="https://twitter.com/tahar_mazizi" target="_blank "><i class="icon-twitter2"></i></a>
					<a href="https://www.facebook.com/taharmazizi" target="_blank "><i class="icon-facebook2"></i></a>
					<a href="https://www.instagram.com/med.tahar.mazizi/?hl=en" target="_blank "><i class="icon-instagram"></i></a>
					<a href="https://www.linkedin.com/in/med-tahar-mazizi-813577161/" target="_blank"><i class="icon-linkedin2"></i></a>
					
				</p>
			</div>
		</div>
	</nav>
	
	<div id="fh5co-page">
		<header style="position: relative;">
			<div class="container">
				<div class="fh5co-navbar-brand">
					<div class="row">
						
						<div class="col-xs-12">
							<p class="fh5co-social-icon text-right">
								<a href="https://twitter.com/tahar_mazizi" target="_blank "><i class="icon-twitter2"></i></a>
					<a href="https://www.facebook.com/taharmazizi" target="_blank "><i class="icon-facebook2"></i></a>
					<a href="https://www.instagram.com/med.tahar.mazizi/?hl=en" target="_blank "><i class="icon-instagram"></i></a>
					<a href="https://www.linkedin.com/in/med-tahar-mazizi-813577161/" target="_blank"><i class="icon-linkedin2"></i></a>
				
							</p>
						</div>
					</div>
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
				</div>
			</div>
		</header>
		
		
		
		
	</div>
	<main class="col-md-12">
			
				<form method="post" action="adminpanel.php"  class="zolo col-md-6 " enctype="multipart/form-data">
					
						<h3>Add new project</h3>
					<div class="col-md-6">
						<label class="">project title </label>
						<div class="form-group">
							<input type="text" class="form-control" name="title" placeholder="title">
						</div>
					</div>
					
					<div class="col-md-6">
						 <label class="">project link</label>
						<div class="form-group">
							<input type="text" class="form-control" name="link" placeholder="link">
						</div>
					</div>
					
					<input type="hidden" name="siz" value="1000000">
					<div class="col-md-6">
						 
						<div class="form-group">
							<input type="file"  name="file" placeholder="image">
						</div>
					</div>
					 
					<div class="col-md-12">
						<div class="form-group">
							<input type="submit" name="submit" value="ajouter" class="btn btn-primary">
						</div>
					</div>

				</form>	

			
			
		</main>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>

	<!-- Main JS  -->
	<script src="js/main.js"></script>

	</body>
</html>
<?php
include'connection.php';


$pdo=$cnx; 

	
	
	if(isset($_POST["submit"])) {
	$title= $_POST['title'];
	$link= $_POST['link'];

	$target_projet= "project/".$link."/index.html";
	

	$image=$_FILES["file"]["name"];
	$target_dir = "uploads/";
	$target_file = $target_dir . basename($image);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $check = getimagesize($_FILES["file"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }


	if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
	if ($_FILES["file"]["size"] > 500000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

		$sql='INSERT INTO panel values(NULL,?,?,?)';
		$q = $pdo->prepare($sql);	
    	$q->execute(array($title,$target_projet,$target_file));
}

	// // $target = "bdimages/".basename($_FILES['image']['name']);
	// $db= mysqli_connect("localhost","root","","portfolio"); 
	

	// $image       = $_POST['file']; 
	// $title       = $_POST['title'];
	// $link        = $_POST['link'];


	// $title=$_POST['title'];
	// $link=$_POST['link'];
	// $sql="INSERT INTO contacte (title, lien , image) values ('$title','$link' ,'$image' )" ; 
	// mysqli_query($db,$sql); 

	
	

	// $image=$_FILES['myimage']['name'];

 //    $imagetmp = addslashes(file_get_contents($image));
     
	
	
	
	
// 	$sql='INSERT INTO contacte values(NULL,?,?,?,?)';
// 		$q = $pdo->prepare($sql);	
//     	$q->execute(array($title,$link,$image,$imagetmp));
// }else{
// 	echo "machi talhih";


?>




