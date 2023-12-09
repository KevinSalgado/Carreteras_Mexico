<?php

class CarreterasData extends Extra{

	public static $tablename = "carreteras";
	public $extra_fields_strings;
	public $extra_fields;

	public function __construct(){
		$this->extra_fields = array();
		$this->extra_fields_strings = array();
		$this->id_Carretera = "";
		$this->Nombre = "";
		$this->Kilometros = "";
		$this->Categoria_id = "";
		$this->Carretera_Anterior = "";
		$this->Carretera_Posterior = "";
		//$this->status;
	}


	public static function getByID($id_Carretera)
	{
		$sql = "select * from carreteras where status=1 and id_Carretera=".$id_Carretera;
		$query = Executor::doit($sql);
		return Model::one($query[0],new CarreterasData()); 
	}

	public static function getByNombre($nombre){
		$sql = "select * from carreteras where status=1 and Nombre='$nombre'";
		$query = Executor::doit($sql);
		return Model::one($query[0],new CarreterasData());
	}

	public static function getByPosterior($posterior){
		$sql = "select * from carreteras where status=1 and id_Carretera='$posterior'";
		$query = Executor::doit($sql);
		return Model::one($query[0],new CarreterasData());
	}

	public static function getAll(){
		$sql = "select
				c.Nombre AS Carretera,
				c.Kilometros AS Kilometros,
				cat.Nombre AS Categoria,
				ca.Nombre AS Carretera_Anterior,
				cp.Nombre AS Carretera_Posterior
			FROM
				carreteras c
			LEFT JOIN categorias cat ON c.Categoria_id = cat.id_Categoria
			LEFT JOIN carreteras ca ON c.Carretera_Anterior = ca.id_Carretera
			LEFT JOIN carreteras cp ON c.Carretera_Posterior = cp.id_Carretera
			where c.status=1;";
		$query = Executor::doit($sql);
		return Model::many($query[0],new CarreterasData());
	}

	public static function getByCat($id_cat){
		$sql = "select
				c.Nombre AS Carretera,
				c.Kilometros AS Kilometros,
				cat.Nombre AS Categoria,
				ca.Nombre AS Carretera_Anterior,
				cp.Nombre AS Carretera_Posterior
			FROM
				carreteras c
			LEFT JOIN categorias cat ON c.Categoria_id = cat.id_Categoria
			LEFT JOIN carreteras ca ON c.Carretera_Anterior = ca.id_Carretera
			LEFT JOIN carreteras cp ON c.Carretera_Posterior = cp.id_Carretera
				where c.status=1 and c.Categoria_id =".$id_cat;
		$query = Executor::doit($sql);
		return Model::many($query[0],new CarreterasData());
	}

	// public static function getUsersbyKind($k=1)
	// {
	// 	$sql = "select * from user where status=1 and kind=".$k;
	// 	$query = Executor::doit($sql);
	// 	return Model::many($query[0],new UserData()); 
	// }

	public function add(){
		$sql = "insert into carreteras (Nombre, Kilometros, Categoria_id, Carretera_Anterior, Carretera_Posterior) value
		 (\"$this->Nombre\",$this->Kilometros,$this->Categoria_id,$this->Carretera_Anterior,
		 $this->Carretera_Posterior)";


		return Executor::doit($sql);

	}

	public function	update(){
		$sql  = "update carreteras set Nombre= \"$this->Nombre\",Kilometros= $this->Kilometros,Categoria_id= $this->Categoria_id ,Carretera_Anterior= $this->Carretera_Anterior, Carretera_Posterior= $this->Carretera_Posterior where id_Carretera=".$this->id_Carretera;
		print $sql;
		return Executor::doit($sql);

	}

	// public function	updatePass(){
	// 	$sql  = "update user set password= \"$this->password\" where id=".$this->id;
	// 	return Executor::doit($sql);
	// }

	// public function	updateOne($key,$val){
	// 	$sql  = "update user set $key= \"$val\" where id=".$this->id;
	// 	return Executor::doit($sql);
	// }
}

?>