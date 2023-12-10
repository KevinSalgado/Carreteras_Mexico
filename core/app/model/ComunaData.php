<?php

class ComunaData extends Extra{

	public static $tablename = "comunas";
	public $extra_fields_strings;
	public $extra_fields;

	public function __construct(){
		$this->extra_fields = array();
		$this->extra_fields_strings = array();
        $this->id_Comuna = "";
		$this->Nombre = "";
		$this->Kilometros = "";
		$this->Pos_Inicio = "";
		$this->Pos_Final = "";
		$this->Tramo_id = "";
        $this->Comuna_Anterior = "";
        $this->Comuna_Posterior = "";
		//$this->status;
	}

	public static function getByID($id_Comuna)
	{
		$sql = "select * from comunas where status=1 and id_Comuna=".$id_Comuna;
		$query = Executor::doit($sql);
		return Model::one($query[0],new ComunaData()); 
	}

	public static function getByTramo($Tramo)
	{
        $sql = "select
            c.id_Comuna,
            c.Nombre AS Nombre_Comuna,
            c.Pos_Inicio,
            c.Pos_Final,
            c.Kilometros AS Kilometros,
            ca.Nombre AS Comuna_Anterior,
            cp.Nombre AS Comuna_Posterior
            FROM
                comunas c
            JOIN
                tramos t ON t.id_Tramo = c.Tramo_id
            LEFT JOIN
                comunas ca ON c.Comuna_Anterior = ca.id_Comuna
            LEFT JOIN
                comunas cp ON c.Comuna_Posterior = cp.id_Comuna
            WHERE
                t.Nombre = '$Tramo' and c.status=1";
		$query = Executor::doit($sql);
		return Model::many($query[0],new ComunaData()); 
	}

	public static function getLastComuna($id_tramo){
		$sql = "select c.id_Comuna as id_Comuna, c.Nombre as Nombre 
		FROM comunas c
		INNER JOIN tramos t ON c.Tramo_id = t.id_Tramo
		WHERE t.id_tramo = '$id_tramo' and c.status=1
		ORDER BY c.Pos_Final DESC
		LIMIT 1;";
		$query = Executor::doit($sql);
		return Model::one($query[0],new ComunaData());
	}

	public static function getAll(){
		$sql = "select
		c.id_Comuna,
		c.Nombre AS Nombre_Comuna,
		c.Pos_Inicio,
		c.Pos_Final,
		c.Kilometros AS Kilometros,
		ca.Nombre AS Comuna_Anterior,
		cp.Nombre AS Comuna_Posterior
		FROM
			comunas c
		JOIN
			tramos t ON t.id_Tramo = c.Tramo_id
		LEFT JOIN
			comunas ca ON c.Comuna_Anterior = ca.id_Comuna
		LEFT JOIN
			comunas cp ON c.Comuna_Posterior = cp.id_Comuna;";
		$query = Executor::doit($sql);
		return Model::many($query[0],new ComunaData());
	}

	public static function getByNombre($nombre){
		$sql = "select * from comunas where status=1 and Nombre='$nombre'";
		$query = Executor::doit($sql);
		return Model::one($query[0],new ComunaData());
	}

	public function add(){
		$sql = "insert into comunas (Nombre, Kilometros, Pos_Inicio, Pos_Final, Tramo_id, Comuna_Anterior, Comuna_Posterior) value
		 (\"$this->Nombre\",\"$this->Kilometros\",\"$this->Pos_Inicio\",\"$this->Pos_Final\",
		 \"$this->Tramo_id\", \"$this->Comuna_Anterior\", \"$this->Comuna_Posterior\")";
		print $sql;
		return Executor::doit($sql);

	}

	public function	update(){
		$sql  = "update comunas set Nombre= \"$this->Nombre\",Kilometros= \"$this->Kilometros\",Pos_Inicio= \"$this->Pos_Inicio\",Pos_Final=\"$this->Pos_Final\", Tramo_id=\"$this->Tramo_id\",Comuna_Anterior=\"$this->Comuna_Anterior\",Comuna_Posterior=\"$this->Comuna_Posterior\" where id_Comuna=".$this->id_Comuna;

		return Executor::doit($sql);

	}

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