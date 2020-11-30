
<!DOCTYPE html>
<html lang="en">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link rel="StyleSheet" href= "CSS/app.css?v=0.0.2" />
     <title>Blockbuster</title>
     <link rel="shortcut icon" href="Imagenes/Blockbuster_logo.svg.png" />
     <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script src="../app/jquery-3.5.1.min.js"></script>
	    <script> 
		    $(function(){
		      $("#header").load("/pages/menu.php"); 
		    });
    	</script> 
       <script type="text/javascript">
            function muestraOculta() {
                var p =document.getElementById('list_container');
                var p2 =document.getElementById('container_register');
                if (window.getComputedStyle(p2).display === "none") {
                    p.style.display = "none";  
                	p2.style.display = "block";  
                	document.title = 'Blockbuster - Registro';
                 }
                 else{
                    p2.style.display = "none";  
                	p.style.display = "block";  
                 }
           }
             function regresoInicio() {
                var p =document.getElementById('list_container');
                var p2 =document.getElementById('container_register');
                if (window.getComputedStyle(p2).display === "none") {
                    p.style.display = "none";  
                	p2.style.display = "block";  
                 }
                 else{
                	document.title = 'Blockbuster';
                    p2.style.display = "none";  
                	p.style.display = "block";  
                 }
           }  
      
        </script>
</head>
<body>
	<div id="logo_location">
		<div id="logo_inner">
	    	 <img src="Imagenes/Blockbuster_logo.svg.png" id="image_logo">
	 	</div>
	</div>

	<div id="container">
		<!-- Inicio primer container-->
		<div id="main">
			<form action="../app/categoryController.php" method="POST">

				<div id="list_container">
					<div class="title">
						<h2 class="font_title"> Iniciar Sesion.</h2>
					</div>
					<ul>
						<li><input type="text" placeholder="Email" id="user" class="style_login font_style" required></li>
						<li><input type="password" placeholder="Contraseña" id="pass" class="style_login font_style" required></li>

					</ul>
					<div id="button_container">
						<!-- <button type="submit" class="font_style style_login button_style">
								Iniciar Sesion
						</button> -->
						<a href="Pages/start_page.php?name=Inicio" class="font_style style_login button_style">
								Iniciar Sesion
						</a>
						<a href="#" class="font_style style_login button_style" onclick="muestraOculta()">
								No tengo cuenta, Registrarme
						</a>
					</div>
				</div>
			</form>
			<form action="../app/categoryController.php" method="POST">
				<div id="container_register">
					<div class="title">
						<h2 class="font_title"> Registrate Para sentir la nostalgia.</h2>
					</div>
					<ul>
						<li><input type="text" placeholder="Ingresa Tu Nombre" id="nameRegister" class="style_login font_style" required></li>
						<li><input type="text" placeholder="Ingresa Tus Apellidos" id="lastNameRegister" class="style_login font_style" required></li>
						<li><input type="text" placeholder="Ingresa Tu Email" id="emailRegister" class="style_login font_style" required></li>
						<li><input type="password" placeholder="Ingresa Tu Contraseña" id="passRegister" class="style_login font_style" required></li>
						<li><input type="password" placeholder="Confirma Tu Contraseña" id="passRegisterCheck" class="style_login font_style" required></li>
						<li style="display: none;">
							<label>
                    			Status
                			</label>
                			<select name="status">
                    			<option> Admin </option>
                    			<option> Cliente </option>
                			</select>
            			</li>

					</ul>
					<div id="button_container">
						<button href="#" class="font_style style_login button_style">
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Registrar&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						</button>
						<a href="#" class="font_style style_login button_style" onclick="regresoInicio()">
								Regresar A Inicio
						</a>
					</div>
				</div>
			</form>
		</div>

	</div>
</body>						

</html>