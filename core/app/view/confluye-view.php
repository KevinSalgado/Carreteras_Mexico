<?php
    if(isset($_GET["opt"]) && $_GET["opt"] == "confluye"){
        //validar si es numero
			$Carretera = CarreterasData::getByNombre($_GET['Carretera']);
            if($Carretera->Carretera_Posterior){
                $Carretera_Posterior = $Carretera->Carretera_Posterior;
                $Carretera_Posterior = CarreterasData::getByPosterior($Carretera_Posterior);
                $Posterior_existencia = true;
            }
            else{
                $Carretera_Posterior = false;
                $Posterior_existencia = false;
            }
            if($Carretera_Posterior){
            $Tramo = TramoData::getLastTramo($Carretera->id_Carretera);
            } else {
                $Tramo = false;
            }
            if($Tramo){
                $comuna = ComunaData::getLastComuna($Tramo->id_Tramo);
            } else {
            $comuna = false;
            }
			$found = false;
			if($Carretera!=null){
					$found=true;
			}


if($found && $Posterior_existencia){
?>
<p class="h3">La carretera <?php echo $Carretera->Nombre?> confluye con <?php echo $Carretera_Posterior->Nombre?> en los siguientes tramos, comunas</p>
<div class="bd-example table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Comuna</th>
                <th scope="col">Tramo</th>
                <th scope="col">Kilometro</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><?php try {
                        echo $comuna ? $comuna->Nombre : '';
                    } catch (Exception $e) {
                        // Manejo de excepciones si es necesario
                        echo 'Error al acceder a la propiedad Nombre de $comuna.';
                    } ?></td>
                <td><?php try {
                        echo $Tramo ? $Tramo->Nombre : '';
                    } catch (Exception $e) {
                        // Manejo de excepciones si es necesario
                        echo 'Error al acceder a la propiedad Nombre de $Tramo.';
                    } ?></td>
                <td><?php try {
                        echo $Carretera ? $Carretera->Kilometros : '';
                    } catch (Exception $e) {
                        // Manejo de excepciones si es necesario
                        echo 'Error al acceder a la propiedad Nombre de $Carretera.';
                    } ?></td>
            </tr>
            </tbody>
        </table>
</div>


<?php
    } elseif($found && $Posterior_existencia==null){
?>
<p class="h3">La carretera <?php echo $Carretera->Nombre?> no confluye con otra carretera y concluye en el Kilometro <?php  echo $Carretera->Kilometros?></p>

<?php
    }
}
?>
