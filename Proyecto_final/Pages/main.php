
<?php

	include "../app/categoryController.php";
	$categoryController = new categoryController();
	$categories = $categoryController->getMovie($_GET['id']);
	$nameMovie = $categoryController->getName($_GET['id']);
	$page_title = $nameMovie;

	if(isset($_SESSION)==false || $_SESSION['id']==false){
		header("Location:../");
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link rel="StyleSheet" href= "../CSS/main_style.css?v=0.0.2" />
	<link rel="StyleSheet" href= "../CSS/menu.css?v=0.0.2" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

     <title>Blockbuster-Pelicula </title>
     <link rel="shortcut icon" href="../Imagenes/Blockbuster_logo.svg.png" />

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="../app/jquery-3.5.1.min.js"></script>
	    <script> 
		    $(function(){
		      $("#sidebar").load("sidebar.php"); 
		      $("#header").load("menu.php"); 
		    });
    	</script> 
    	 <script type="text/javascript">
            function Disapear(id, views) {
                var p =document.getElementById('counter');
                p.style.display = "none"; 
                views++;
                //event.preventDefault();
                var add=document.getElementById('add').value = id;
                var views=document.getElementById('views').value = views;
                var rute ="add="+add+"&views="+views+"&action=add";
                $.ajax({
                	url:"../app/categoryController.php",
                	type: 'POST',
                	data: rute,
                })
                .done(function(){
                	console.log("succes");
                })
                .fail(function(){
                	console.log("ERROR");
                })
                .always(function(){
                	console.log("complete");
                });
                //document.getElementById('addForm').submit();
           }      
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
	<!-- Inicio primer container-->
		<?php foreach ($categories as $category): ?>
			<div id="main">
			<ul>
				<li>
					<ul class="font_style">
						<?php if ($_SESSION['rol']=="admin"): ?>
							<li style="position: fixed; padding-left: 5%;"><a href="edit.php?id=<?php echo $_GET['id']; ?>"" class=" font_style font_color">EDITAR</a></li>
						<?php endif ?>
						<li class="image_movie_container"><div class="image_movie"><img class="image_desc" src=" <?= $category['portada'] ?>"></div></li>
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
								<p class="budget">Vizualizaciones: <?= $category['vizualizaciones'] ?></p>
																
							</div>
						</li>
					</ul>	
				</li>
			</ul>
			<hr>
			<ul id="video">
				<li>
					<div id="counter" onclick="Disapear(<?= $category['id'] ?>, <?= $category['vizualizaciones'] ?>)"></div>
					<iframe width="560" height="315" src="https://www.youtube.com/embed/<?= $category['link'] ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</li>
			</ul>
		</div>
		<?php endforeach ?>
		<form id="addForm" action="../app/categoryController.php">
			<input type="hidden" name="action" value="add">
			<input type="hidden" name="add" id="add">
			<input type="hidden" name="views" id="views">
		</form>
		<script>
			$('#counter')
		</script>
		
	</div>
</body>						

</html>
