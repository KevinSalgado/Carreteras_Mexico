<?php
    if(isset($_GET["opt"]) && $_GET["opt"] == "comuna"){
        if(!isset($_SESSION['user_id']))
	        Core::redir("./");
        //validar si es numero
			$comuna = ComunaData::getByTramo($_GET['Comuna']);
			$found = false;
			if($comuna!=null){
					$found=true;
			}

		
if($found){
?>
<p class="h1">Comuna de la carretera</p>
<div class="bd-example table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Comuna</th>
                <th scope="col">Posicion inicio en la carretera</th>
                <th scope="col">Posicion final en la carretera</th>
                <th scope="col">Comuna anterior</th>
                <th scope="col">Comuna posterior</th>
                <th scope="col">Kilometros</th>
            </tr>
            </thead>
            <tbody>
            <?php
		        foreach ($comuna as $key => $row) {
		    ?>
            <tr>
                <td><?php echo $row->Nombre_Comuna; ?></td>
                <td><?php echo $row->Pos_Inicio; ?></td>
                <td><?php echo $row->Pos_Final; ?></td>
                <td><?php echo $row->Comuna_Anterior; ?></td>
                <td><?php echo $row->Comuna_Posterior; ?></td>
                <td><?php echo $row->Kilometros; ?></td>
                <td><a href="./?view=editar_comuna&opt=editar&Comuna=<?php echo $row->Nombre_Comuna;?>" class="btn btn-warning"><i class="fa fa-pencil"></i> Editar </a> </td>
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