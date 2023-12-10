<?php
    if(isset($_GET["opt"]) && $_GET["opt"] == "tramos"){
        if(!isset($_SESSION['user_id']))
	        Core::redir("./");
        //validar si es numero
			$tramo = TramoData::getByCarre_Admin($_GET['Carretera']);
			$found = false;
			if($tramo!=null){
					$found=true;
			}

		
if($found){
?>
<p class="h1">Tramo de la carretera</p>
<div class="bd-example table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Tramo</th>
                <th scope="col">Posicion inicio en la carretera</th>
                <th scope="col">Posicion final en la carretera</th>
                <th scope="col">Tramo anterior</th>
                <th scope="col">Tramo posterior</th>
                <th scope="col">Kilometros</th>
                <th scope="col">Estatus</th>
            </tr>
            </thead>
            <tbody>
            <?php
		        foreach ($tramo as $key => $row) {
		    ?>
            <tr>
                <td><?php echo $row->Nombre_Tramo; ?></td>
                <td><?php echo $row->Pos_Inicio; ?></td>
                <td><?php echo $row->Pos_Final; ?></td>
                <td><?php echo $row->Tramo_Anterior; ?></td>
                <td><?php echo $row->Tramo_Posterior; ?></td>
                <td><?php echo $row->Kilometros_Tramo; ?></td>
                <td><?php echo ($row->status == 1) ? 'Activo' : 'Inactivo'; ?></td>
                <td><a href="./?view=comuna_admin&opt=comuna&Comuna=<?php echo $row->Nombre_Tramo;?>" class="btn btn-warning"><i class="fa fa-pencil"></i> Comunas </a> </td>
                <td><a href="./?view=editar_tramo&opt=editar&Tramo=<?php echo $row->Nombre_Tramo;?>" class="btn btn-warning"><i class="fa fa-pencil"></i> Editar </a> </td>
                <td><a href="./?action=tramos&opt=eliminar&Tramo=<?php echo $row->Nombre_Tramo;?>" class="btn btn-warning"><i class="fa fa-pencil"></i> Eliminar </a> </td>
                <td><a href="./?action=tramos&opt=activar&Tramo=<?php echo $row->Nombre_Tramo;?>" class="btn btn-warning"><i class="fa fa-pencil"></i> Activar </a> </td>
            </tr>
            <?php
                }
            ?>
            </tbody>
        </table>
</div>


<?php
}
    }
?>