
<?php

	include "../app/categoryController.php";
	if(isset($_SESSION)==false){
		header("Location:../");
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link rel="StyleSheet" href= "../CSS/menu_style.css?v=0.0.2" />
	<link rel="StyleSheet" href= "../CSS/menu.css?v=0.0.2" />
     <title>Blockbuster</title>
     <link rel="shortcut icon" href="../Imagenes/Blockbuster_logo.svg.png" />

     <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <script type="text/javascript">
           
        </script>
</head>
<body>
	<header id="header">
		<div id="header_image">
			<img src="../Imagenes/Blockbuster_logo.svg.png" id="image_header">
		</div>
		<div id="header_menu">
			<ul>
				<li><a href="index.php?name=Inicio" class=" font_style font_color">INICIO</a></li>
				<li><a href="index.php?name=PELICULA" class=" font_style font_color">PELICULAS</a></li>
				<li><a href="index.php?name=ESTRENOS" class=" font_style font_color">ESTRENOS</a></li>
				<li><a href="index.php?name=CLASICOS" class=" font_style font_color">CLASICOS</a></li>
				<li><a href="index.php?name=4K" class=" font_style font_color">4K</a></li>
				<li><a href="index.php?name=TRAILERS" class=" font_style font_color">TRAILERS</a></li>
				<li><a href="index.php?name=Serie" class=" font_style font_color">T.V.</a></li>
				<?php if ($_SESSION['rol']=="admin"): ?>
				<li><a href="upload.php" class=" font_style font_color">UPLOAD</a></li>
				<?php endif ?>
				<li>
					<form action="../app/authController.php" method="POST">
						<input type="hidden" name="access" value="logout">
						<button type="submit" id="logout" class=" font_style font_color">LOGOUT
						</button>
					</form>
				</li>

		</div>
	</header>
	
</body>						

</html>