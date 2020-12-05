
<?php
		
	include "../app/categoryController.php";
	$categoryController = new categoryController();
	if(isset($_SESSION)==false|| $_SESSION['rol']!="admin"){
		header("Location:../Pages/index.php?name=Inicio");
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link rel="StyleSheet" href= "../CSS/upload.css?v=0.0.2" />
	<link rel="StyleSheet" href= "../CSS/menu.css?v=0.0.2" />
     <title>Blockbuster - Cargar</title>
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
			
		<div id="main">
			<div id="title_recent" class="font_style">
				<h2 id="categorie">Agregar Pelicula/Serie</h2>
			</div>		
			<div id="sub_container">
				<div id="image_preview">
					<img id="image" src="#" alt="Imagen de pelicula" />
				</div>
				<div id="form_add" class="font_style">
					<form action="../app/categoryController.php" method="POST" id="add_form" enctype="multipart/form-data" >
		                <br>
		                <br>
		                <label>Tipo</label>
		                <select name="contentType" class="style_form font_style_reverse">
		                    <option>Pelicula</option>
		                    <option>Serie</option>
		                    <option>Trailers</option>
		                    <option>4K</option>
		                </select>
		                <br>
		                <br>
		                <input type="text" name="name" placeholder="Nombre" required="" class="style_form font_style_reverse"> 
		                <br>
		                <textarea 		name="description" placeholder="Descripcion"  rows="5" required="" class="style_form font_style_reverse"></textarea>
		                <br>
		                <input type="text" name="date" placeholder="Fecha De Estreno" required="" class="style_form font_style_reverse"> 
		                <br>
		                <input type="text" name="directors" placeholder="Directores" required="" class="style_form font_style_reverse"> 
		                <br>
		                <input type="text" name="found" placeholder="Recaudacion" required="" class="style_form font_style_reverse"> 
		                <br>
		               
		                <input type="text" name="duration" placeholder="Duracion" required="" class="style_form font_style_reverse"> 
		                <br>
		                <input type="text" name="categorie" placeholder="Categoria" required="" class="style_form font_style_reverse"> 
		                <br>
		                <input type="text" name="budget" placeholder="Presupuesto" required="" class="style_form font_style_reverse"> 
		                <br> 
		                <input type="text" name="link" placeholder="Link" required="" class="style_form font_style_reverse"> 
		                <br>
		                <input type="text" name="year" placeholder="Año de Estreno" required="" class="style_form font_style_reverse"> 
		                <br>
		                <input type="file" name="imageCover"  required="" onchange="readURL(this);" placeholder="Imagen Pelicula" accept="image/*"  class="style_form font_style_reverse"> 
		                <br>
		                <br>
		                <label>Clasificacion</label>
		                <select name="clasificacion" class="style_form font_style_reverse">
		                    <option> A </option>
		                    <option> B </option>
		                    <option> B-15 </option>
		                    <option> C </option>
		                    <option> D </option>
		                </select>
		                <br>
		                <br>
		                <label>Status</label>
		                <select name="status" class="style_form font_style_reverse">
		                    <option> Activo </option>
		                    <option> Inactivo </option>
		                </select>
		                <br>
		                <button type="submit" class="style_form font_style_reverse"> 
		                Subir Pelicula/Serie</button>
		                <input type="hidden" name="action" value="store">
		        	</form>
	        	</div>
		</div>
	</div>
	</div>
</body>						
</html>