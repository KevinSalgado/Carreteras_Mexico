<?php
var_dump($_POST);
if(!isset($_SESSION['user_id'])) Core::redir("./");

if(isset($_GET["opt"]) && $_GET["opt"] == "anadir"){



	if(isset($_POST["Nombre"]) and isset($_POST["Kilometros"]) and isset($_POST["Categoria_id"])
	 and isset($_POST["Carretera_Anterior"]) and isset($_POST["Carretera_Posterior"])){

		$u = new CarreterasData();

		$u->Nombre = $_POST["Nombre"];
		$u->Kilometros = $_POST["Kilometros"];
		$u->Categoria_id = $_POST["Categoria_id"];
		$u->Carretera_Anterior = $_POST["Carretera_Anterior"];
		$u->Carretera_Posterior = $_POST["Carretera_Posterior"];

		$u->add();

		Core::addToastr('success','Carretera agregada con exito!');
		Core::redir("./?view=home_admin");

	}else{

		echo "NO";
	}
}


?>
