
<?php
	$listaCarreteras = CarreterasData::getAll();
?>

<div class="bd-example table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Kilometros</th>
                <th scope="col">Categoria</th>
                <th scope="col">Carretera anterior</th>
                <th scope="col">Carretera posterior</th>
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
            </tr>
            <?php
                }
            ?>
            </tbody>
        </table>
</div>