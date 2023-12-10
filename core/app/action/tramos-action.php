<?php
var_dump($_POST);
if(!isset($_SESSION['user_id'])) Core::redir("./");

if(isset($_GET["opt"]) && $_GET["opt"] == "anadir"){



	// if(isset($_POST["Nombre"]) and isset($_POST["Kilometros"]) and isset($_POST["Categoria_id"])
	//  and isset($_POST["Carretera_Anterior"]) and isset($_POST["Carretera_Posterior"])){

	// 	$u = new CarreterasData();

	// 	$u->Nombre = $_POST["Nombre"];
	// 	$u->Kilometros = $_POST["Kilometros"];
	// 	$u->Categoria_id = $_POST["Categoria_id"];
	// 	$u->Carretera_Anterior = $_POST["Carretera_Anterior"];
	// 	$u->Carretera_Posterior = $_POST["Carretera_Posterior"];

	// 	if(($u->Nombre and $u->Kilometros) != null ){
	// 		$u->add();
	// 		Core::addToastr('success','Carretera agregada con exito!');
	// 		Core::redir("./?view=home_admin");
	// 	} else {
	// 		Core::addToastr("error","Completa el formulario para poder agregar una carretera");
	// 		Core::redir("./?view=anadir_carretera&opt=anadir");
	// 	}

		

	// }else{

	// 	echo "NO";
	// }
	
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

		if(($u->Nombre and $u->Kilometros and $u->Pos_Inicio and $u->Pos_Final) != null ){
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

}


?>