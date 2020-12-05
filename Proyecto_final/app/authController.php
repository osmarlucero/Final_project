<?php
if (!isset($_SESSION)) {
    session_start();
	}
include_once "connectionController.php";
	if(isset($_POST['access'])){
		$AuthController = new AuthController();
		switch ($_POST['access']) {
			case 'login':
				$email = strip_tags($_POST['emailLog']);
				$pass = strip_tags($_POST['passLog']);
				$AuthController->login($email,$pass);
			break;

			case 'logout':
				$AuthController->logout();
			break;
		}
	
	}
 class AuthController{
 	public function login($email, $pass){
 		$conn = connect();
			if ($conn->connect_error==false){
				$query="select * FROM `usuario` WHERE correoElectronico= ? and contrasena=? or nombre= ? and contrasena=?";
				$prepared_query = $conn->prepare($query);
				$prepared_query->bind_param('ssss',$email,$pass,$email,$pass);
				if($prepared_query->execute()){
					$results = $prepared_query->get_result();
                	$user = $results->fetch_all(MYSQLI_ASSOC);
					if(count($user)>0){
							//echo  ("r".$_SERVER["HTTP_REFERER"]."d");
						$user = array_pop($user);
						$_SESSION['id'] = $user['id'];
						$_SESSION['nombre'] = $user['nombre'];
						$_SESSION['email'] = $user['correoElectronico'];
						$_SESSION['rol'] = $user['rol'];
						//if($_SESSION['rol']=="admin"){
							header("Location:../Pages/index.php?name=Inicio");
						//}
					}
				}
				else{
					$_SESSION['error'] =" verifica datos";
					//header("Location:".$_SERVER["HTTP_REFERER"]);
				}
			}
			else{
				$_SESSION['error'] ="COnexion MAl BD";
				header("Location:".$_SERVER["HTTP_REFERER"]);
			}
 	}
 	public function logout(){
        session_destroy();
	header("Location:".$_SERVER["HTTP_REFERER"]);
 	}
 }
?>