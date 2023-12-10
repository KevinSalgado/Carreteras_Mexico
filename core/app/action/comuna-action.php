<?php
var_dump($_POST);
if(!isset($_SESSION['user_id'])) Core::redir("./");

if(isset($_GET["opt"]) && $_GET["opt"] == "anadir"){



	if(isset($_POST["Nombre"]) and isset($_POST["Kilometros"]) and isset($_POST["Tramo_id"])
    and isset($_POST["Comuna_Anterior"]) and isset($_POST["Comuna_Posterior"]) and isset($_POST["Pos_Inicio"]) and isset($_POST["Pos_Final"])){

		$u = new ComunaData();

		$u->Nombre = $_POST["Nombre"];
		$u->Pos_Inicio = $_POST["Pos_Inicio"];
		$u->Pos_Final = $_POST["Pos_Final"];
		$u->Comuna_Anterior = $_POST["Comuna_Anterior"];
		$u->Comuna_Posterior = $_POST["Comuna_Posterior"];
        $u->Kilometros = $_POST["Kilometros"];
        $u->Tramo_id = $_POST["Tramo_id"];

		if(($u->Nombre and $u->Kilometros and ($u->Pos_Inicio or $u->Pos_Inicio==0) and $u->Pos_Final) != null ){
			$u->add();
			Core::addToastr('success','Comuna agregada con exito!');
			Core::redir("./?view=home_admin");
		} else {
			Core::addToastr("error","Completa el formulario para poder agregar una comuna");
			//Core::redir("./?view=anadir_comuna&opt=anadir");
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
			Core::redir("./?view=editar_carretera&opt=editar");
		}

		

	}else{

		echo "NO";
	}

}


?>