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
                <td><a href="./?view=tramo&opt=tramos&Carretera=<?php echo $row->Carretera;?>" class="btn btn-outline-gray btn-sm"><i class="fa fa-pencil"></i> Tramos </a> </td>
                <td><a href="./?view=confluye&opt=confluye&Carretera=<?php echo $row->Carretera;?>" class="btn btn-outline-gray btn-sm"><i class="fa fa-pencil"></i> Confluye </a> </td>
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
                <td><a href="./?view=tramo&opt=tramos&Carretera=<?php echo $row->Carretera;?>" class="btn btn-outline-gray btn-sm"><i class="fa fa-pencil"></i> Tramos </a> </td>
                <td><a href="./?view=confluye&opt=confluye&Carretera=<?php echo $row->Carretera;?>" class="btn btn-outline-gray btn-sm"><i class="fa fa-pencil"></i> Confluye </a> </td>
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
                <td><a href="./?view=tramo&opt=tramos&Carretera=<?php echo $row->Carretera;?>" class="btn btn-outline-gray btn-sm"><i class="fa fa-pencil"></i> Tramos </a> </td>
                <td><a href="./?view=confluye&opt=confluye&Carretera=<?php echo $row->Carretera;?>" class="btn btn-outline-gray btn-sm"><i class="fa fa-pencil"></i> Confluye </a> </td>
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
                <td><a href="./?view=tramo&opt=tramos&Carretera=<?php echo $row->Carretera;?>" class="btn btn-outline-gray btn-sm"><i class="fa fa-pencil"></i> Tramos </a> </td>
                <td><a href="./?view=confluye&opt=confluye&Carretera=<?php echo $row->Carretera;?>" class="btn btn-outline-gray btn-sm"><i class="fa fa-pencil"></i> Confluye </a> </td>
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
                <td><a href="./?view=tramo&opt=tramos&Carretera=<?php echo $row->Carretera;?>" class="btn btn-outline-gray btn-sm"><i class="fa fa-pencil"></i> Tramos </a> </td>
                <td><a href="./?view=confluye&opt=confluye&Carretera=<?php echo $row->Carretera;?>" class="btn btn-outline-gray btn-sm"><i class="fa fa-pencil"></i> Confluye </a> </td>
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
<div class="bd-example">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2" class="active" aria-current="true"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item">
                        <img src="imagenes/carros1.jpg">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                    <div class="carousel-item active">
                       <img src="imagenes/carros2.jpg">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="imagenes/carros3.jpg">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

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
                        <td><a href="./?view=tramo&opt=tramos&Carretera=<?php echo $row->Carretera;?>" class="btn btn-outline-gray btn-sm"><i class="fa fa-pencil"></i> Tramos </a> </td>
                        <td><a href="./?view=confluye&opt=confluye&Carretera=<?php echo $row->Carretera;?>" class="btn btn-outline-gray btn-sm"><i class="fa fa-pencil"></i> Confluye </a> </td>
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
