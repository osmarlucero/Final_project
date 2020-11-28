<?php
	if (!isset($_SESSION)) {
    session_start();
	}
	include "connectionController.php";
	if(isset($_POST['action'])){
		$CategoryController = new CategoryController();
		switch ($_POST['action']) {
			case 'store':
				$name = strip_tags($_POST['name']);
				$description = strip_tags($_POST['description']);
				$date = strip_tags($_POST['date']);
				$directors = strip_tags($_POST['directors']);
				$clasificacion = strip_tags($_POST['clasificacion']);
				$duration = strip_tags($_POST['duration']);
				$categorie = strip_tags($_POST['categorie']);
				$budget = strip_tags($_POST['budget']);
				$found = strip_tags($_POST['found']);
				$year = strip_tags($_POST['year']);
				$status = strip_tags($_POST['status']);
				$contentType = strip_tags($_POST['contentType']);
				$link = strip_tags($_POST['link']);
				$CategoryController->store(
					$name,
					$description,
					$date,
					$directors,
					$clasificacion,
					$duration,
					$categorie,
					$budget,
					$year,
					$status,$found,$contentType,$link);
			break;
			case 'update':
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
			break;
		}
	}

	class CategoryController{
		public function store($name,$description,$date,$directors,$clasificacion,$duration,	$categorie,
					$budget,$year,$status,$found,$contentType,$link){
			$conn = connect();
			if ($conn->connect_error==false){
				if($name!="" &&$description!=""&&$status!=""){
					$target_path="../Imagenes/Covers";
						
					$new_path = $target_path.basename($_FILES['imageCover']['name']);
					if(move_uploaded_file($_FILES['imageCover']['tmp_name'], $new_path)){
						$query="insert into pelicula (nombre, descripcion, fechaDeEstreno, directores, clasificacion, duracion, categoria,
						presupuesto, añoDeEstreno, status, recaudacion, portada,tipo, link) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
						$prepared_query = $conn->prepare($query);
						$prepared_query->bind_param('ssssssssisssss',$name,$description,$date,$directors,$clasificacion,$duration,$categorie,
						$budget,$year,$status,$found, $new_path,$contentType,$link);
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
			}
			else{
				$_SESSION['error'] ="COnexion MAl BD";
				header("Location:".$_SERVER["HTTP_REFERER"]);
			}

		}
		public function update($id, $name, $description, $status){
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
		}
		
		public function getMovie($id){
			$conn = connect();
			if ($conn->connect_error==false){
				$query = "select * from pelicula where id=?";
				$prepared_query = $conn->prepare($query);
				$prepared_query->bind_param('i',$id);
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
		}
		public function getName($id){
			$conn = connect();
			if ($conn->connect_error==false){
				$query = "select nombre from pelicula where id=?";
				$prepared_query = $conn->prepare($query);
				$prepared_query->bind_param('i',$id);
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
		}

		public function getSidebar(){
			$conn = connect();
			if ($conn->connect_error==false){
				$query = "select DISTINCT  categoria FROM `pelicula`";
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
		}	
		public function getSidebarCount($name){
			$conn = connect();
			if ($conn->connect_error==false){
				$query = "select COUNT(*) categoria from pelicula WHERE categoria='$name'";
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
		}
	}
?>