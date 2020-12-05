
<!DOCTYPE html>
<html lang="en">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link rel="StyleSheet" href= "CSS/app.css?v=0.0.2" />
     <title>Blockbuster</title>
     <link rel="shortcut icon" href="Imagenes/Blockbuster_logo.svg.png" />
     <meta charset="UTF-8">
     <meta http-equiv =»Cache-Control» content =»no-cache»/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script src="app/jquery-3.5.1.min.js"></script>

	   
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
        <script type="text/javascript">
           function Upload() {
                //event.preventDefault();
                var name=document.getElementById('name').value;
                var lastName=document.getElementById('lastName').value;
                var email=document.getElementById('email').value;
                var pass=document.getElementById('pass').value;
                var passCheck=document.getElementById('passCheck').value;
                if(pass==passCheck){
	                var rute ="name="+name+"&lastName="+lastName+"&email="+email+"&pass="+pass+"&action=store";
	                $.ajax({
	                	url:"app/userController.php",
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
	            	var name=document.getElementById('name').value = "";
                	var lastName=document.getElementById('lastName').value="";
                	var email=document.getElementById('email').value="";
                	var pass=document.getElementById('pass').value="";
                	var passCheck=document.getElementById('passCheck').value="";
                	alert("Registro Realizado Exitosamente");
            	}
            	else
            		alert("Las contraseñas no coinciden")

                //document.getElementById('addForm').submit();
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
			<form action="app/authController.php" method="POST">

				<div id="list_container">
					<div class="title">
						<h2 class="font_title"> Iniciar Sesion.</h2>
					</div>
					<ul>
						<li><input type="text" name="emailLog"placeholder="Email" id="user" class="style_login font_style" required></li>
						<li><input type="password" name="passLog" placeholder="Contraseña" id="passs" class="style_login font_style" required></li>

					</ul>
					<div id="button_container">
						<input type="hidden" name="access" value="login">
						
						<!--<a href="Pages/start_page.php?name=Inicio" class="font_style style_login button_style">
								Iniciar Sesion
						</a> -->
						<button type="submit" class="font_style style_login button_style">
								Iniciar Sesion
						</button>
						<a href="#" class="font_style style_login button_style" onclick="muestraOculta()">
								No tengo cuenta, Registrarme
						</a>
					</div>
				</div>
			</form>
			<form action="app/userController.php">
				<div id="container_register">
					<div class="title">
						<h2 class="font_title"> Registrate Para sentir la nostalgia.</h2>
					</div>
					<ul>
						<li><input type="text" placeholder="Ingresa Tu Nombre" name="name" id="name" class="style_login font_style" required></li>
						<li><input type="text" placeholder="Ingresa Tus Apellidos" name="lastName" id="lastName" class="style_login font_style" required></li>
						<li><input type="text" placeholder="Ingresa Tu Email" name="email" id="email" class="style_login font_style" required></li>
						<li><input type="password" placeholder="Ingresa Tu Contraseña" name="pass" id="pass" class="style_login font_style" required></li>
						<li><input type="password" placeholder="Confirma Tu Contraseña" id="passCheck" class="style_login font_style" required></li>
						<li style="display: block;">
									                <input type="hidden" name="action" value="store">

				    			<select style="display: none;" name="status">
                    			<option> Cliente </option>
                    			<option> Admin </option>
                			</select>
            			</li>

					</ul>
					<div id="button_container">
						<a href="#" class="font_style style_login button_style" onclick="regresoInicio()">
								Regresar A Inicio
						</a>
						<a onclick="Upload()" href="#" class="font_style style_login button_style">
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Registrar&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						</a>
					</div>
				</div>
			</form>
		</div>

	</div>
</body>						

</html>