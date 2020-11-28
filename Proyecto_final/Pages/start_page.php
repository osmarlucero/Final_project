<?php

	include "../app/categoryController.php";
	$categoryController = new categoryController();
	$categories = $categoryController->get($_GET['name']);
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link rel="StyleSheet" href= "../CSS/start_style.css?v=0.0.2" />
	<link rel="StyleSheet" href= "../CSS/menu.css?v=0.0.2" />
     <title>Blockbuster</title>
     <link rel="shortcut icon" href="../Imagenes/Blockbuster_logo.svg.png" />

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="../app/jquery-3.5.1.min.js"></script>
	    <script> 
		    $(function(){
		      $("#header").load("menu.php"); 
		      $("#sidebar").load("sidebar.php"); 
		    });
    	</script> 
</head>
<body>
	<header id="header">
		
	</header>
	
	<div id="container">
		<!-- Inicio primer container-->
			<!-- Inicio sidebar container-->
		<div id="sidebar">
			
		</div>
		<!-- fin sidebar container-->
		<div id="main">
			<div id="title_recent" class="font_style">
				<h2><?=$_GET['name']?></h2>
			</div>
			
				<?php foreach ($categories as $category): ?>
						<div class="movie">
							<div class="movie_inner">
								<a href="main.php?id=<?= $category['id'] ?>"> <img class="image_desc" src=" <?= $category['portada'] ?>"></a>
								<div class="movie_info">
									<div class="title_movie font_style">
										<?= $category['nombre'] ?>
									</div>
									<div class="calification_movie font_style">
										<?= $category['duracion'] ?>
									</div>				
								</div>
							</div>
						</div>									
				<?php endforeach ?>
	</div>
</body>						

</html>