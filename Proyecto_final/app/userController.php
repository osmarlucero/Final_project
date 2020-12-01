<?php
	if (!isset($_SESSION)) {
    session_start();
	}
	include_ONCE "connectionController.php";
	if(isset($_POST['action'])){
		$UserController = new UserController();
		switch ($_POST['action']) {
			case 'store':
				$name = strip_tags($_POST['name']);
				$lastName = strip_tags($_POST['lastName']);
				$email = strip_tags($_POST['email']);
				$pass = strip_tags($_POST['pass']);				
				echo "mola";
				$UserController->store($name, $lastName, $email, $pass);
			break;
			/*case 'update':
				$name = strip_tags($_POST['name']);
				$description = strip_tags($_POST['description']);
				$status = strip_tags($_POST['status']);
				$id = strip_tags($_POST['id']);
				$CategoryController->update($id, $name, $description, $status);
			break;
			case 'delete':
				$id = strip_tags($_POST['id']);
				$CategoryController->delete($id);
			break;
			case 'add':
				$id = strip_tags($_POST['add']);
				$views = strip_tags($_POST['views']);
				$CategoryController->add($id, $views);
			break;*/
		}
	}

	class UserController{
		public function store($name, $lastName, $email, $pass){
			$conn = connect();
			if ($conn->connect_error==false){
				if($name!="" &&$lastName!=""&&$pass!=""){						
					$query="insert into usuario(nombre, apellidos, correoElectronico, contrasena) values(?,?,?,?)";
					$prepared_query = $conn->prepare($query);
					$prepared_query->bind_param('ssss',$name, $lastName, $email, $pass);
					if($prepared_query->execute()){
						header("Location:".$_SERVER["HTTP_REFERER"]);
						$_SESSION['success'] ="Datos enviados correctaqmente";
					}
					else{
						$_SESSION['error'] ="verifica datos";
						header("Location:".$_SERVER["HTTP_REFERER"]);
					}
				}
			}
			else{
				$_SESSION['error'] ="COnexion MAl BD";
				header("Location:".$_SERVER["HTTP_REFERER"]);
			}
		}
		/*public function update($id, $name, $description, $status){
			$conn = connect();
			if ($conn->connect_error==false){
				if($id!=""&&$name!="" &&$description!=""&&$status!=""){
					$query="update categories set name=?,description = ?, status=? where id=?";
					$prepared_query = $conn->prepare($query);
					$prepared_query->bind_param('sssi',$name, $description, $status, $id);
					if($prepared_query->execute()){
						header("Location:".$_SERVER["HTTP_REFERER"]);
					}
					else
						header("Location:".$_SERVER["HTTP_REFERER"]);

				}
			}
			else
				header("Location:".$_SERVER["HTTP_REFERER"]);
		}
		public function delete($id){
			$conn = connect();
			if ($conn->connect_error==false){
				if($id!=""){
					$query="delete from categories where id=?";
					$prepared_query = $conn->prepare($query);
					$prepared_query->bind_param('i',$id);
					if($prepared_query->execute()){
						header("Location:".$_SERVER["HTTP_REFERER"]);
					}
					else
						header("Location:".$_SERVER["HTTP_REFERER"]);

				}
			}
			else
				header("Location:".$_SERVER["HTTP_REFERER"]);
		}
		public function add($id, $views){
			$conn = connect();
			if ($conn->connect_error==false){
				if($id!=""&&$views!=""){
					$query="update pelicula set vizualizaciones=? where id=?";
					$prepared_query = $conn->prepare($query);
					$prepared_query->bind_param('ii',$views,$id);
					if($prepared_query->execute()){
						header("Location:".$_SERVER["HTTP_REFERER"]);
					}
					else
						header("Location:".$_SERVER["HTTP_REFERER"]);

				}
			}
			else
				header("Location:".$_SERVER["HTTP_REFERER"]);
		}
		public function get($name){
			$year = date("Y");
			$conn = connect();
			if ($conn->connect_error==false){			
				switch ($name) {
					case 'Inicio':
						$query = "select * FROM `pelicula` order by id DESC";
					break;
					case 'CLASICOS':
						$query = "SELECT * FROM `pelicula` where añoDeEstreno <1999 order by añoDeEstreno DESC";
					break;
					case 'ESTRENOS':
						$query = "select * FROM `pelicula` where añoDeEstreno ='$year' order by añoDeEstreno DESC";
					break;

					case '4K':
						$query = "select * FROM `pelicula` where tipo ='4k' order by añoDeEstreno DESC";
						
					break;
					case 'TRAILERS':
						$query = "select * FROM `pelicula` where tipo ='TRAILERS' order by añoDeEstreno DESC";
						
					break;
					case 'Serie':
						$query = "select * FROM `pelicula` where tipo ='Serie' order by añoDeEstreno DESC";
						
					break;
					case 'PELICULA':
						$query = "select * FROM `pelicula` where tipo ='PELICULA' order by añoDeEstreno DESC";
						
					break;
							
					default:
						$query = "select * FROM `pelicula` where categoria='".$name."' order by id DESC";
					break;
				}
				$prepared_query = $conn->prepare($query);
				$prepared_query->execute();
				$results = $prepared_query->get_result();
				$categories = $results->fetch_all(MYSQLI_ASSOC);

				if( count($categories)>0){
					return $categories;
				}else{
					return array();				
				}
			}else{
				echo "error";
			}
		}	*/	
	}
?>