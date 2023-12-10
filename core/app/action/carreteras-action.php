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

		if(($u->Nombre and $u->Kilometros) != null ){
			$u->add();
			Core::addToastr('success','Carretera agregada con exito!');
			Core::redir("./?view=home_admin");
		} else {
			Core::addToastr("error","Completa el formulario para poder agregar una carretera");
			Core::redir("./?view=anadir_carretera&opt=anadir");
		}

		

	}else{

		echo "NO";
	}
	
}else if(isset($_GET["opt"]) && $_GET["opt"] == "editar"){
	if(isset($_POST["id_Carretera"]) and isset($_POST["Nombre"]) and isset($_POST["Kilometros"]) and isset($_POST["Categoria_id"])
	 and isset($_POST["Carretera_Anterior"]) and isset($_POST["Carretera_Posterior"])){

		$u = CarreterasData::getByID($_POST['id_Carretera']);

		$u->Nombre = $_POST["Nombre"];
		$u->Kilometros = $_POST["Kilometros"];
		$u->Categoria_id = $_POST["Categoria_id"];
		$u->Carretera_Anterior = $_POST["Carretera_Anterior"];
		$u->Carretera_Posterior = $_POST["Carretera_Posterior"];

		if(($u->Nombre and $u->Kilometros) != null ){
			$u->update();
			Core::addToastr('success','Carretera actualizada con exito!');
			Core::redir("./?view=home_admin");
		} else {
			Core::addToastr("error","Completa el formulario para poder actualizar una carretera");
			Core::redir("./?view=editar_carretera&opt=editar");
		}

		

	}else{

		echo "NO";
	}

} else if(isset($_GET["opt"]) && $_GET["opt"] == "eliminar"){
	$user = CarreterasData::getByNombre_Admin($_GET['Carretera']);

	$user->updateOne("status",0);

	Core::addToastr('warning','Carretera eliminado con Exito !');
	Core::redir("./?view=home_admin");
}else if(isset($_GET["opt"]) && $_GET["opt"] == "activar"){
	$user = CarreterasData::getByNombre_Admin($_GET['Carretera']);

	$user->updateOne("status",1);

	Core::addToastr('warning','Carretera activada con Exito !');
	Core::redir("./?view=home_admin");

}


?>
