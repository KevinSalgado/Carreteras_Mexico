<?php
    if(isset($_GET["opt"]) && $_GET["opt"] == "locales"){
        $listaCarreteras_locales = CarreterasData::getByCat(1);
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
            </tr>
            <?php
                }
            ?>
            </tbody>
        </table>
</div>


<?php
    } else if (isset($_GET["opt"]) && $_GET["opt"] == "comerciales"){
        $listaCarreteras_locales = CarreterasData::getByCat(2);
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
            </tr>
            <?php
                }
            ?>
            </tbody>
        </table>
</div>

<?php
    } else if (isset($_GET["opt"]) && $_GET["opt"] == "regionales"){
        $listaCarreteras_locales = CarreterasData::getByCat(3);
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
            </tr>
            <?php
                }
            ?>
            </tbody>
        </table>
</div>

<?php
    } else if (isset($_GET["opt"]) && $_GET["opt"] == "nacionales"){
        $listaCarreteras_locales = CarreterasData::getByCat(4);
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
            </tr>
            <?php
                }
            ?>
            </tbody>
        </table>
</div>

<?php
    } else if (isset($_GET["opt"]) && $_GET["opt"] == "autovias"){
        $listaCarreteras_locales = CarreterasData::getByCat(5);
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
    $listaCarreteras = CarreterasData::getAll();
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
                        <td><a href="./?view=tramo&opt=tramos&Carretera=<?php echo $row->Carretera;?>" class="btn btn-warning"><i class="fa fa-pencil"></i> Editar </a> </td>
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
