<?php
var_dump($_POST);
if(!isset($_SESSION['user_id'])) Core::redir("./");

if(isset($_GET["opt"]) && $_GET["opt"] == "anadir"){



	if(isset($_POST["Nombre"]) and isset($_POST["Kilometros"]) and isset($_POST["Carretera_id"])
    and isset($_POST["Tramo_Anterior"]) and isset($_POST["Tramo_Posterior"]) and isset($_POST["Pos_Inicio"]) and isset($_POST["Pos_Final"])){

		$u = new TramoData();

		$u->Nombre = $_POST["Nombre"];
		$u->Pos_Inicio = $_POST["Pos_Inicio"];
		$u->Pos_Final = $_POST["Pos_Final"];
		$u->Tramo_Anterior = $_POST["Tramo_Anterior"];
		$u->Tramo_Posterior = $_POST["Tramo_Posterior"];
        $u->Kilometros = $_POST["Kilometros"];
        $u->Carretera_id = $_POST["Carretera_id"];

		if(($u->Nombre and $u->Kilometros and ($u->Pos_Inicio or $u->Pos_Inicio==0) and $u->Pos_Final) != null ){
			$u->add();
			Core::addToastr('success','Tramo agregada con exito!');
			Core::redir("./?view=home_admin");
		} else {
			Core::addToastr("error","Completa el formulario para poder agregar un tramo");
			Core::redir("./?view=anadir_tramos&opt=anadir");
		}

		

	}else{

		echo "NO";
	}
	
}else if(isset($_GET["opt"]) && $_GET["opt"] == "editar"){
	if(isset($_POST["id_Tramo"]) and isset($_POST["Nombre"]) and isset($_POST["Kilometros"]) and isset($_POST["Carretera_id"])
	 and isset($_POST["Tramo_Anterior"]) and isset($_POST["Tramo_Posterior"]) and isset($_POST["Pos_Inicio"]) and isset($_POST["Pos_Final"])){

		$u = TramoData::getByID($_POST['id_Tramo']);

        $u->Nombre = $_POST["Nombre"];
		$u->Pos_Inicio = $_POST["Pos_Inicio"];
		$u->Pos_Final = $_POST["Pos_Final"];
		$u->Tramo_Anterior = $_POST["Tramo_Anterior"];
		$u->Tramo_Posterior = $_POST["Tramo_Posterior"];
        $u->Kilometros = $_POST["Kilometros"];
        $u->Carretera_id = $_POST["Carretera_id"];

		if(($u->Nombre and $u->Kilometros and ($u->Pos_Inicio or $u->Pos_Inicio==0) and $u->Pos_Final) != null ){
			$u->update();
			Core::addToastr('success','Carretera actualizada con exito!');
			Core::redir("./?view=home_admin");
		} else {
			Core::addToastr("error","Completa el formulario para poder actualizar un tramo");
			Core::redir("./?view=editar_tramo&opt=editar");
		}

		

	}else{

		echo "NO";
	}

} else if(isset($_GET["opt"]) && $_GET["opt"] == "eliminar"){
	$user = TramoData::getByNombre_Admin($_GET['Tramo']);

	$user->updateOne("status",0);

	Core::addToastr('warning','Tramo desactivado con Exito !');
	Core::redir("./?view=home_admin");
}else if(isset($_GET["opt"]) && $_GET["opt"] == "activar"){
	$user = TramoData::getByNombre_Admin($_GET['Tramo']);

	$user->updateOne("status",1);

	Core::addToastr('warning','Tramo activado con Exito !');
	Core::redir("./?view=home_admin");

}


?>