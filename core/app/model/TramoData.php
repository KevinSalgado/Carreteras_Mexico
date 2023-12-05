<?php

class TramoData extends Extra{

	public static $tablename = "tramos";
	public $extra_fields_strings;
	public $extra_fields;

	public function __construct(){
		$this->extra_fields = array();
		$this->extra_fields_strings = array();
        //$this->id = "";
		$this->Nombre = "";
		$this->Pos_Inicio = "";
		$this->Pos_Final = "";
		$this->Tramo_Anterior = "";
		$this->Tramo_Posterior = "";
        $this->Kilometros = "";
        $this->Carretera_id = "";
	}


	public static function getByCarre($Carretera)
	{
        $sql = "select
                t.id_Tramo,
                t.Nombre AS Nombre_Tramo,
                t.Pos_Inicio,
                t.Pos_Final,
                t.Kilometros AS Kilometros_Tramo,
                t.Tramo_Anterior,
                t.Tramo_Posterior
            FROM
                carreteras c
            JOIN
                tramos t ON c.id_Carretera = t.Carretera_id
            WHERE
                c.Nombre = '$Carretera'";
		$query = Executor::doit($sql);
		return Model::many($query[0],new TramoData()); 
	}

	// public static function getAll(){
	// 	$sql = "select
	// 			c.Nombre AS Carretera,
	// 			c.Kilometros AS Kilometros,
	// 			cat.Nombre AS Categoria,
	// 			ca.Nombre AS Carretera_Anterior,
	// 			cp.Nombre AS Carretera_Posterior
	// 		FROM
	// 			carreteras c
	// 		LEFT JOIN categorias cat ON c.Categoria_id = cat.id_Categoria
	// 		LEFT JOIN carreteras ca ON c.Carretera_Anterior = ca.id_Carretera
	// 		LEFT JOIN carreteras cp ON c.Carretera_Posterior = cp.id_Carretera;";
	// 	$query = Executor::doit($sql);
	// 	return Model::many($query[0],new CarreterasData());
	// }

	// public static function getByCat($id_cat){
	// 	$sql = "select
	// 			c.Nombre AS Carretera,
	// 			c.Kilometros AS Kilometros,
	// 			cat.Nombre AS Categoria,
	// 			ca.Nombre AS Carretera_Anterior,
	// 			cp.Nombre AS Carretera_Posterior
	// 		FROM
	// 			carreteras c
	// 		LEFT JOIN categorias cat ON c.Categoria_id = cat.id_Categoria
	// 		LEFT JOIN carreteras ca ON c.Carretera_Anterior = ca.id_Carretera
	// 		LEFT JOIN carreteras cp ON c.Carretera_Posterior = cp.id_Carretera
	// 			where c.Categoria_id =".$id_cat;
	// 	$query = Executor::doit($sql);
	// 	return Model::many($query[0],new CarreterasData());
	// }

	// // public static function getUsersbyKind($k=1)
	// // {
	// // 	$sql = "select * from user where status=1 and kind=".$k;
	// // 	$query = Executor::doit($sql);
	// // 	return Model::many($query[0],new UserData()); 
	// // }

	// public function add(){
	// 	$sql = "insert into carreteras (Nombre, Kilometros, Categoria_id, Carretera_Anterior, Carretera_Posterior) value
	// 	 (\"$this->Nombre\",\"$this->Kilometros\",\"$this->Categoria_id\",\"$this->Carretera_Anterior\",
	// 	 \"$this->Carretera_Posterior\"";

	// 	return Executor::doit($sql);

	// }

	// public function	update(){
	// 	$sql  = "update user set nombre= \"$this->nombre\",apellido= \"$this->apellido\",email= \"$this->email\",username= \"$this->username\" where id=".$this->id;

	// 	return Executor::doit($sql);

	// }

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