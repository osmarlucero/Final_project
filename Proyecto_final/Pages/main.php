
<?php

	include "../app/categoryController.php";
	$categoryController = new categoryController();
	$categories = $categoryController->getMovie($_GET['id']);
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link rel="StyleSheet" href= "../CSS/main_style.css?v=0.0.2" />
	<link rel="StyleSheet" href= "../CSS/menu.css?v=0.0.2" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
     <title>Blockbuster</title>
     <link rel="shortcut icon" href="../Imagenes/Blockbuster_logo.svg.png" />

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="../app/jquery-3.5.1.min.js"></script>
	    <script> 
		    $(function(){
		      $("#header").load("menu.php"); 
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
			<div id="categories">
				<ul>
					<li class="image_cat"><img src="../Imagenes/Blockbuster_logo.svg.png" class="image_cat_inner"></li>
					<li class="font_style title_cat">Cine clasico</li>
					<li class="font_style count_cat">128575</li>
				</ul><ul>
					<li class="image_cat"><img src="../Imagenes/Blockbuster_logo.svg.png" class="image_cat_inner"></li>
					<li class="font_style title_cat">Cine clasico</li>
					<li class="font_style count_cat">128575</li>
				</ul><ul>
					<li class="image_cat"><img src="../Imagenes/Blockbuster_logo.svg.png" class="image_cat_inner"></li>
					<li class="font_style title_cat">Cine clasico</li>
					<li class="font_style count_cat">128575</li>
				</ul><ul>
					<li class="image_cat"><img src="../Imagenes/Blockbuster_logo.svg.png" class="image_cat_inner"></li>
					<li class="font_style title_cat">Cine clasico</li>
					<li class="font_style count_cat">128575</li>
				</ul><ul>
					<li class="image_cat"><img src="../Imagenes/Blockbuster_logo.svg.png" class="image_cat_inner"></li>
					<li class="font_style title_cat">Cine clasico</li>
					<li class="font_style count_cat">128575</li>
				</ul><ul>
					<li class="image_cat"><img src="../Imagenes/Blockbuster_logo.svg.png" class="image_cat_inner"></li>
					<li class="font_style title_cat">Cine clasico</li>
					<li class="font_style count_cat">128575</li>
				</ul><ul>
					<li class="image_cat"><img src="../Imagenes/Blockbuster_logo.svg.png" class="image_cat_inner"></li>
					<li class="font_style title_cat">Cine clasico</li>
					<li class="font_style count_cat">128575</li>
				</ul><ul>
					<li class="image_cat"><img src="../Imagenes/Blockbuster_logo.svg.png" class="image_cat_inner"></li>
					<li class="font_style title_cat">Cine clasico</li>
					<li class="font_style count_cat">128575</li>
				</ul><ul>
					<li class="image_cat"><img src="../Imagenes/Blockbuster_logo.svg.png" class="image_cat_inner"></li>
					<li class="font_style title_cat">Cine clasico</li>
					<li class="font_style count_cat">128575</li>
				</ul><ul>
					<li class="image_cat"><img src="../Imagenes/Blockbuster_logo.svg.png" class="image_cat_inner"></li>
					<li class="font_style title_cat">Cine clasico</li>
					<li class="font_style count_cat">128575</li>
				</ul><ul>
					<li class="image_cat"><img src="../Imagenes/Blockbuster_logo.svg.png" class="image_cat_inner"></li>
					<li class="font_style title_cat">Cine clasico</li>
					<li class="font_style count_cat">128575</li>
				</ul><ul>
					<li class="image_cat"><img src="../Imagenes/Blockbuster_logo.svg.png" class="image_cat_inner"></li>
					<li class="font_style title_cat">Cine clasico</li>
					<li class="font_style count_cat">128575</li>
				</ul><ul>
					<li class="image_cat"><img src="../Imagenes/Blockbuster_logo.svg.png" class="image_cat_inner"></li>
					<li class="font_style title_cat">Cine clasico</li>
					<li class="font_style count_cat">128575</li>
				</ul><ul>
					<li class="image_cat"><img src="../Imagenes/Blockbuster_logo.svg.png" class="image_cat_inner"></li>
					<li class="font_style title_cat">Cine clasico</li>
					<li class="font_style count_cat">128575</li>
				</ul><ul>
					<li class="image_cat"><img src="../Imagenes/Blockbuster_logo.svg.png" class="image_cat_inner"></li>
					<li class="font_style title_cat">Cine clasico</li>
					<li class="font_style count_cat">128575</li>
				</ul><ul>
					<li class="image_cat"><img src="../Imagenes/Blockbuster_logo.svg.png" class="image_cat_inner"></li>
					<li class="font_style title_cat">Cine clasico</li>
					<li class="font_style count_cat">128575</li>
				</ul><ul>
					<li class="image_cat"><img src="../Imagenes/Blockbuster_logo.svg.png" class="image_cat_inner"></li>
					<li class="font_style title_cat">Cine clasico</li>
					<li class="font_style count_cat">128575</li>
				</ul><ul>
					<li class="image_cat"><img src="../Imagenes/Blockbuster_logo.svg.png" class="image_cat_inner"></li>
					<li class="font_style title_cat">Cine clasico</li>
					<li class="font_style count_cat">128575</li>
				</ul><ul>
					<li class="image_cat"><img src="../Imagenes/Blockbuster_logo.svg.png" class="image_cat_inner"></li>
					<li class="font_style title_cat">Cine clasico</li>
					<li class="font_style count_cat">128575</li>
				</ul><ul>
					<li class="image_cat"><img src="../Imagenes/Blockbuster_logo.svg.png" class="image_cat_inner"></li>
					<li class="font_style title_cat">Cine clasico</li>
					<li class="font_style count_cat">128575</li>
				</ul><ul>
					<li class="image_cat"><img src="../Imagenes/Blockbuster_logo.svg.png" class="image_cat_inner"></li>
					<li class="font_style title_cat">Cine clasico</li>
					<li class="font_style count_cat">128575</li>
				</ul><ul>
					<li class="image_cat"><img src="../Imagenes/Blockbuster_logo.svg.png" class="image_cat_inner"></li>
					<li class="font_style title_cat">Cine clasico</li>
					<li class="font_style count_cat">128575</li>
				</ul><ul>
					<li class="image_cat"><img src="../Imagenes/Blockbuster_logo.svg.png" class="image_cat_inner"></li>
					<li class="font_style title_cat">Cine clasico</li>
					<li class="font_style count_cat">128575</li>
				</ul><ul>
					<li class="image_cat"><img src="../Imagenes/Blockbuster_logo.svg.png" class="image_cat_inner"></li>
					<li class="font_style title_cat">Cine clasico</li>
					<li class="font_style count_cat">128575</li>
				</ul><ul>
					<li class="image_cat"><img src="../Imagenes/Blockbuster_logo.svg.png" class="image_cat_inner"></li>
					<li class="font_style title_cat">Cine clasico</li>
					<li class="font_style count_cat">128575</li>
				</ul><ul>
					<li class="image_cat"><img src="../Imagenes/Blockbuster_logo.svg.png" class="image_cat_inner"></li>
					<li class="font_style title_cat">Cine clasico</li>
					<li class="font_style count_cat">128575</li>
				</ul><ul>
					<li class="image_cat"><img src="../Imagenes/Blockbuster_logo.svg.png" class="image_cat_inner"></li>
					<li class="font_style title_cat">Cine clasico</li>
					<li class="font_style count_cat">128575</li>
				</ul><ul>
					<li class="image_cat"><img src="../Imagenes/Blockbuster_logo.svg.png" class="image_cat_inner"></li>
					<li class="font_style title_cat">Cine clasico</li>
					<li class="font_style count_cat">128575</li>
				</ul><ul>
					<li class="image_cat"><img src="../Imagenes/Blockbuster_logo.svg.png" class="image_cat_inner"></li>
					<li class="font_style title_cat">Cine clasico</li>
					<li class="font_style count_cat">128575</li>
				</ul><ul>
					<li class="image_cat"><img src="../Imagenes/Blockbuster_logo.svg.png" class="image_cat_inner"></li>
					<li class="font_style title_cat">Cine clasico</li>
					<li class="font_style count_cat">128575</li>
				</ul><ul>
					<li class="image_cat"><img src="../Imagenes/Blockbuster_logo.svg.png" class="image_cat_inner"></li>
					<li class="font_style title_cat">Cine clasico</li>
					<li class="font_style count_cat">128575</li>
				</ul><ul>
					<li class="image_cat"><img src="../Imagenes/Blockbuster_logo.svg.png" class="image_cat_inner"></li>
					<li class="font_style title_cat">Cine clasico</li>
					<li class="font_style count_cat">128575</li>
				</ul><ul>
					<li class="image_cat"><img src="../Imagenes/Blockbuster_logo.svg.png" class="image_cat_inner"></li>
					<li class="font_style title_cat">Cine clasico</li>
					<li class="font_style count_cat">128575</li>
				</ul><ul>
					<li class="image_cat"><img src="../Imagenes/Blockbuster_logo.svg.png" class="image_cat_inner"></li>
					<li class="font_style title_cat">Cine clasico</li>
					<li class="font_style count_cat">128575</li>
				</ul><ul>
					<li class="image_cat"><img src="../Imagenes/Blockbuster_logo.svg.png" class="image_cat_inner"></li>
					<li class="font_style title_cat">Cine clasico</li>
					<li class="font_style count_cat">128575</li>
				</ul><ul>
					<li class="image_cat"><img src="../Imagenes/Blockbuster_logo.svg.png" class="image_cat_inner"></li>
					<li class="font_style title_cat">Cine clasico</li>
					<li class="font_style count_cat">128575</li>
				</ul><ul>
					<li class="image_cat"><img src="../Imagenes/Blockbuster_logo.svg.png" class="image_cat_inner"></li>
					<li class="font_style title_cat">Cine clasico</li>
					<li class="font_style count_cat">128575</li>
				</ul>
			</div>
		</div>
		<!-- fin sidebar container-->
	<!-- Inicio primer container-->
		<?php foreach ($categories as $category): ?>
			<div id="main">
			<ul>
				<li>
					<ul class="font_style">
						<li class="image_movie_container"><div class="image_movie"><img class="image_desc" src="../Imagenes/test.jpg"></div></li>
						<li class="image_movie_text">
							<div class="title"><?= $category['nombre'] ?></div>
							<div class="description">
								<p class="resume"><?= $category['descripcion'] ?></p>
								</div>
						</li>
						<li class="image_movie_info">
							<div class="info">
								<a href="../Pages/edit.php" id ="edit" class="font_style"><i class="far fa-edit"></i> Edit</a>
								<p class="date">Fecha de estreno: <?= $category['fechaDeEstreno'] ?></p>
								<p class="directors">Director-es: <?= $category['directores'] ?></p>
								<p class="founded">Recaudación: <?= $category['recaudacion'] ?></p>
								<p class="year">Año: <?= $category['añoDeEstreno'] ?></p>
								<p class="budget">Presupuesto: <?= $category['presupuesto'] ?></p>
							</div>
						</li>
					</ul>	
				</li>
			</ul>
		</div>
		<?php endforeach ?>
	</div>
</body>						

</html>
