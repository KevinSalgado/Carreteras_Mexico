<?php 


if(!isset($_SESSION['user_id']))
	Core::redir("./");


	$user  = UserData::getByID($_SESSION['user_id']);
?>

<?php
    if(isset($_GET["opt"]) && $_GET["opt"] == "locales"){
        $listaCarreteras_locales = CarreterasData::getByCat_Admin(1);
?>
<p class="h1">Carreteras locales</p>
<div class="bd-example table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Kilometros</th>
                <th scope="col">Categoria</th>
                <th scope="col">Carretera anterior</th>
                <th scope="col">Carretera posterior</th>
                <th scope="col">Estatus</th>
            </tr>
            </thead>
            <tbody>
            <?php
		        foreach ($listaCarreteras_locales as $key => $row) {
		    ?>
            <tr>
                <td><?php echo $row->Carretera; ?></td>
                <td><?php echo $row->Kilometros; ?></td>
                <td><?php echo $row->Categoria; ?></td>
                <td><?php echo $row->Carretera_Anterior; ?></td>
                <td><?php echo $row->Carretera_Posterior; ?></td>
                <td><?php echo ($row->status == 1) ? 'Activo' : 'Inactivo'; ?></td>
                <td><a href="./?view=tramo_admin&opt=tramos&Carretera=<?php echo $row->Carretera;?>" class="btn btn-warning"><i class="fa fa-pencil"></i> Tramos </a> </td>
                <td><a href="./?view=confluye&opt=confluye&Carretera=<?php echo $row->Carretera;?>" class="btn btn-warning"><i class="fa fa-pencil"></i> Confluye </a> </td>
				<td><a href="./?view=editar_carretera&opt=editar&Carretera=<?php echo $row->Carretera;?>" class="btn btn-warning"><i class="fa fa-pencil"></i> Editar </a> </td>
                <td><a href="./?action=carreteras&opt=eliminar&Carretera=<?php echo $row->Carretera;?>" class="btn btn-warning"><i class="fa fa-pencil"></i> Desactivar </a> </td>
                <td><a href="./?action=carreteras&opt=activar&Carretera=<?php echo $row->Carretera;?>" class="btn btn-warning"><i class="fa fa-pencil"></i> Activar </a> </td>	
            </tr>
            <?php
                }
            ?>
            </tbody>
        </table>
</div>


<?php
    } else if (isset($_GET["opt"]) && $_GET["opt"] == "comerciales"){
        $listaCarreteras_locales = CarreterasData::getByCat_Admin(2);
?>

<p class="h1">Carreteras comerciales</p>
<div class="bd-example table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Kilometros</th>
                <th scope="col">Categoria</th>
                <th scope="col">Carretera anterior</th>
                <th scope="col">Carretera posterior</th>
                <th scope="col">Estatus</th>
            </tr>
            </thead>
            <tbody>
            <?php
		        foreach ($listaCarreteras_locales as $key => $row) {
		    ?>
            <tr>
                <td><?php echo $row->Carretera; ?></td>
                <td><?php echo $row->Kilometros; ?></td>
                <td><?php echo $row->Categoria; ?></td>
                <td><?php echo $row->Carretera_Anterior; ?></td>
                <td><?php echo $row->Carretera_Posterior; ?></td>
                <td><?php echo ($row->status == 1) ? 'Activo' : 'Inactivo'; ?></td>
                <td><a href="./?view=tramo_admin&opt=tramos&Carretera=<?php echo $row->Carretera;?>" class="btn btn-warning"><i class="fa fa-pencil"></i> Tramos </a> </td>
                <td><a href="./?view=confluye&opt=confluye&Carretera=<?php echo $row->Carretera;?>" class="btn btn-warning"><i class="fa fa-pencil"></i> Confluye </a> </td>
				<td><a href="./?view=editar_carretera&opt=editar&Carretera=<?php echo $row->Carretera;?>" class="btn btn-warning"><i class="fa fa-pencil"></i> Editar </a> </td>
                <td><a href="./?action=carreteras&opt=eliminar&Carretera=<?php echo $row->Carretera;?>" class="btn btn-warning"><i class="fa fa-pencil"></i> Eliminar </a> </td>
                <td><a href="./?action=carreteras&opt=activar&Carretera=<?php echo $row->Carretera;?>" class="btn btn-warning"><i class="fa fa-pencil"></i> Activar </a> </td>
            </tr>
            <?php
                }
            ?>
            </tbody>
        </table>
</div>

<?php
    } else if (isset($_GET["opt"]) && $_GET["opt"] == "regionales"){
        $listaCarreteras_locales = CarreterasData::getByCat_Admin(3);
?>

<p class="h1">Carreteras regionales</p>
<div class="bd-example table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Kilometros</th>
                <th scope="col">Categoria</th>
                <th scope="col">Carretera anterior</th>
                <th scope="col">Carretera posterior</th>
                <th scope="col">Estatus</th>
            </tr>
            </thead>
            <tbody>
            <?php
		        foreach ($listaCarreteras_locales as $key => $row) {
		    ?>
            <tr>
                <td><?php echo $row->Carretera; ?></td>
                <td><?php echo $row->Kilometros; ?></td>
                <td><?php echo $row->Categoria; ?></td>
                <td><?php echo $row->Carretera_Anterior; ?></td>
                <td><?php echo $row->Carretera_Posterior; ?></td>
                <td><?php echo ($row->status == 1) ? 'Activo' : 'Inactivo'; ?></td>
                <td><a href="./?view=tramo_admin&opt=tramos&Carretera=<?php echo $row->Carretera;?>" class="btn btn-warning"><i class="fa fa-pencil"></i> Tramos </a> </td>
                <td><a href="./?view=confluye&opt=confluye&Carretera=<?php echo $row->Carretera;?>" class="btn btn-warning"><i class="fa fa-pencil"></i> Confluye </a> </td>
				<td><a href="./?view=editar_carretera&opt=editar&Carretera=<?php echo $row->Carretera;?>" class="btn btn-warning"><i class="fa fa-pencil"></i> Editar </a> </td>
                <td><a href="./?action=carreteras&opt=eliminar&Carretera=<?php echo $row->Carretera;?>" class="btn btn-warning"><i class="fa fa-pencil"></i> Eliminar </a> </td>
                <td><a href="./?action=carreteras&opt=activar&Carretera=<?php echo $row->Carretera;?>" class="btn btn-warning"><i class="fa fa-pencil"></i> Activar </a> </td>
            </tr>
            <?php
                }
            ?>
            </tbody>
        </table>
</div>

<?php
    } else if (isset($_GET["opt"]) && $_GET["opt"] == "nacionales"){
        $listaCarreteras_locales = CarreterasData::getByCat_Admin(4);
?>

<p class="h1">Carreteras nacionales</p>
<div class="bd-example table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Kilometros</th>
                <th scope="col">Categoria</th>
                <th scope="col">Carretera anterior</th>
                <th scope="col">Carretera posterior</th>
                <th scope="col">Estatus</th>
            </tr>
            </thead>
            <tbody>
            <?php
		        foreach ($listaCarreteras_locales as $key => $row) {
		    ?>
            <tr>
                <td><?php echo $row->Carretera; ?></td>
                <td><?php echo $row->Kilometros; ?></td>
                <td><?php echo $row->Categoria; ?></td>
                <td><?php echo $row->Carretera_Anterior; ?></td>
                <td><?php echo $row->Carretera_Posterior; ?></td>
                <td><?php echo ($row->status == 1) ? 'Activo' : 'Inactivo'; ?></td>
                <td><a href="./?view=tramo_admin&opt=tramos&Carretera=<?php echo $row->Carretera;?>" class="btn btn-warning"><i class="fa fa-pencil"></i> Tramos </a> </td>
                <td><a href="./?view=confluye&opt=confluye&Carretera=<?php echo $row->Carretera;?>" class="btn btn-warning"><i class="fa fa-pencil"></i> Confluye </a> </td>
				<td><a href="./?view=editar_carretera&opt=editar&Carretera=<?php echo $row->Carretera;?>" class="btn btn-warning"><i class="fa fa-pencil"></i> Editar </a> </td>
                <td><a href="./?action=carreteras&opt=eliminar&Carretera=<?php echo $row->Carretera;?>" class="btn btn-warning"><i class="fa fa-pencil"></i> Eliminar </a> </td>
                <td><a href="./?action=carreteras&opt=activar&Carretera=<?php echo $row->Carretera;?>" class="btn btn-warning"><i class="fa fa-pencil"></i> Activar </a> </td>
            </tr>
            <?php
                }
            ?>
            </tbody>
        </table>
</div>

<?php
    } else if (isset($_GET["opt"]) && $_GET["opt"] == "autovias"){
        $listaCarreteras_locales = CarreterasData::getByCat_Admin(5);
?>

<p class="h1">Autovías</p>
<div class="bd-example table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Kilometros</th>
                <th scope="col">Categoria</th>
                <th scope="col">Carretera anterior</th>
                <th scope="col">Carretera posterior</th>
                <th scope="col">Estatus</th>
            </tr>
            </thead>
            <tbody>
            <?php
		        foreach ($listaCarreteras_locales as $key => $row) {
		    ?>
            <tr>
                <td><?php echo $row->Carretera; ?></td>
                <td><?php echo $row->Kilometros; ?></td>
                <td><?php echo $row->Categoria; ?></td>
                <td><?php echo $row->Carretera_Anterior; ?></td>
                <td><?php echo $row->Carretera_Posterior; ?></td>
                <td><?php echo ($row->status == 1) ? 'Activo' : 'Inactivo'; ?></td>
                <td><a href="./?view=tramo_admin&opt=tramos&Carretera=<?php echo $row->Carretera;?>" class="btn btn-warning"><i class="fa fa-pencil"></i> Tramos </a> </td>
                <td><a href="./?view=confluye&opt=confluye&Carretera=<?php echo $row->Carretera;?>" class="btn btn-warning"><i class="fa fa-pencil"></i> Confluye </a> </td>
				<td><a href="./?view=editar_carretera&opt=editar&Carretera=<?php echo $row->Carretera;?>" class="btn btn-warning"><i class="fa fa-pencil"></i> Editar </a> </td>
                <td><a href="./?action=carreteras&opt=eliminar&Carretera=<?php echo $row->Carretera;?>" class="btn btn-warning"><i class="fa fa-pencil"></i> Eliminar </a> </td>
                <td><a href="./?action=carreteras&opt=activar&Carretera=<?php echo $row->Carretera;?>" class="btn btn-warning"><i class="fa fa-pencil"></i> Activar </a> </td>
            </tr>
            <?php
                }
            ?>
            </tbody>
        </table>
</div>

<?php
    } else {
?>


<?php
    $listaCarreteras = CarreterasData::getAll_Admin();
?>

<p class="h1">Carreteras general</p>
<div class="bd-example table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Kilometros</th>
                <th scope="col">Categoria</th>
                <th scope="col">Carretera anterior</th>
                <th scope="col">Carretera posterior</th>
                <th scope="col">Estatus</th>
            </tr>
            </thead>
            <tbody>
            <?php
                foreach ($listaCarreteras as $key => $row) {
            ?>
                    <tr>
                        <td><?php echo $row->Carretera; ?></td>
                        <td><?php echo $row->Kilometros; ?></td>
                        <td><?php echo $row->Categoria; ?></td>
                        <td><?php echo $row->Carretera_Anterior; ?></td>
                        <td><?php echo $row->Carretera_Posterior; ?></td>
                        <td><?php echo ($row->status == 1) ? 'Activo' : 'Inactivo'; ?></td>
                        <td><a href="./?view=tramo_admin&opt=tramos&Carretera=<?php echo $row->Carretera;?>" class="btn btn-warning"><i class="fa fa-pencil"></i> Tramos </a> </td>
                        <td><a href="./?view=confluye&opt=confluye&Carretera=<?php echo $row->Carretera;?>" class="btn btn-warning"><i class="fa fa-pencil"></i> Confluye </a> </td>
						<td><a href="./?view=editar_carretera&opt=editar&Carretera=<?php echo $row->Carretera;?>" class="btn btn-warning"><i class="fa fa-pencil"></i> Editar </a> </td>
                        <td><a href="./?action=carreteras&opt=eliminar&Carretera=<?php echo $row->Carretera;?>" class="btn btn-warning"><i class="fa fa-pencil"></i> Eliminar </a> </td>
                        <td><a href="./?action=carreteras&opt=activar&Carretera=<?php echo $row->Carretera;?>" class="btn btn-warning"><i class="fa fa-pencil"></i> Activar </a> </td>
                    </tr>
            <?php
                }
            ?>
            </tbody>
        </table>
</div>

<?php
    }
?>
