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
	<link rel="StyleSheet" href= "../CSS/edit.css?v=0.0.2" />
	<link rel="StyleSheet" href= "../CSS/menu.css?v=0.0.2" />
     <title>Blockbuster - Editar</title>
     <link rel="shortcut icon" href="../Imagenes/Blockbuster_logo.svg.png" />

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="../app/jquery-3.5.1.min.js"></script>
	    <script> 
		    $(function(){
		      $("#header").load("menu.php"); 
		    });

		    function readURL(input) {
  				if (input.files && input.files[0]) {
    			var reader = new FileReader();
    			reader.onload = function (e) {
      			$('#image')
        		.attr('src', e.target.result)
        		.width('100%')
        		.height('100%');
    			};
    			reader.readAsDataURL(input.files[0]);
  				}
  				$("#image").width('30%');
  				$('#image_preview').css("border", "none");
			}
    	</script> 
</head>
<body>
	<header id="header">
		
	</header>
	
	<div id="container">
		<!-- Inicio primer container-->
			
		<?php foreach ($categories as $category): ?>
			<div id="main">
				<div id="title_recent" class="font_style">
					<h2 id="categorie">Agregar Pelicula/Serie</h2>
				</div>		
				<div id="sub_container">
					<div style="width: 30%; height:1rem;border:none;" id="image_preview">
						<img style="width: 100%;" id="image" src="<?= $category['portada']?>" alt="Imagen de pelicula" />
					</div>
					<div id="form_add" class="font_style">
						<form action="../app/categoryController.php" method="POST" id="add_form" enctype="multipart/form-data" >
			                <br>
			                <br>
			                <input type="text" name="name" placeholder="Nombre" required="" class="style_form font_style_reverse"
			                	value="<?= $category['nombre'] ?>"> 
			                <br>
			                <textarea  name="description" placeholder="Descripcion"  rows="5" required="" class="style_form font_style_reverse">
			                	<?= $category['descripcion']?>
			                </textarea>
			                <br>
			                <input value="<?= $category['fechaDeEstreno']?>" type="text" name="date" placeholder="Fecha De Estreno" required="" class="style_form font_style_reverse"> 
			                <br>
			                <input value="<?= $category['directores']?>"type="text" name="directors" placeholder="Directores" required="" class="style_form font_style_reverse"> 
			                <br>
			                <input value="<?= $category['recaudacion']?>" type="text" name="found" placeholder="Recaudacion" required="" class="style_form font_style_reverse"> 
			                <br>
			               
			                <input value="<?= $category['duracion']?>"type="text" name="duration" placeholder="Duracion" required="" class="style_form font_style_reverse"> 
			                <br>
			                <input value="<?= $category['categoria']?>" type="text" name="categorie" placeholder="Categoria" required="" class="style_form font_style_reverse"> 
			                <br>
			                <input  value="<?= $category['presupuesto']?>"type="text" name="budget" placeholder="Presupuesto" required="" class="style_form font_style_reverse"> 
			                <br> 
			                <input value="<?= $category['link']?>" type="text" name="link" placeholder="Link" required="" class="style_form font_style_reverse"> 
			                <br>
			                <input value="<?= $category['añoDeEstreno']?>"type="text" name="year" placeholder="Año de Estreno" required="" class="style_form font_style_reverse"> 
			                <br>
			                <input value="<?= $category['id']?>" type="hidden" name="id" placeholder="Link" required="" class="style_form font_style_reverse"> 
			               
			                <br>
			                <br>
			                
			                <br>
			                <button type="submit" class="style_form font_style_reverse"> 
			                Subir Pelicula/Serie</button>
			                <input type="hidden" name="action" value="update">
			        	</form>
			        	<form action="../app/categoryController.php" method="POST" id="add_form" enctype="multipart/form-data" >
			                <input type="hidden" name="action" value="deleteThis"> 
			                <input type="hidden" name="id" value="<?= $category['id']?>"> 
			        		<button type="submit" class="style_form font_style_reverse"> 
				                Eliminar Pelicula/Serie
				            </button>
						</form>

		        	</div>
				</div>
			</div>
		<?php endforeach ?>

	</div>
</body>						

</html>