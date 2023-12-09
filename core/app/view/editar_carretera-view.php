<?php

if(isset($_GET["opt"]) && $_GET["opt"] == "editar"){
		//Todas las validaciones
		if(!isset($_GET["Carretera"]) or $_GET["Carretera"] == "")
		{
			Core::addToastr('info',"Ups un error");			
			Core::redir("./?view=home_admin");

		}

			$Carretera = CarreterasData::getByNombre($_GET['Carretera']);
			$found = false;
			if($Carretera!=null){
					$found=true;
			}

		
if($found){
    $listaCarreteras = CarreterasData::getAll();
?>

<div class="content-inner container-fluid pb-0" id="page_layout">
	<div class="col-xl-12 col-lg-12">
	   <div class="card">
	      <div class="card-header d-flex justify-content-between">
	         <div class="header-title">
	            <h4 class="card-title"> Editar la carretera <?php echo $Carretera->Nombre; ?></h4>
	         </div>
	      </div>
	      <div class="card-body">
	         <div class="new-user-info">
	            <form method="post" action="./?action=carreteras&opt=editar">
                <input type="hidden" name="id_Carretera" value="<?php echo $Carretera->id_Carretera;?>">
	               <div class="row">
	                  <div class="form-group col-md-6">
	                     <label class="form-label" for="fname">Nombre de la carretera:</label>
	                     <input type="text" class="form-control" value="<?php echo $Carretera->Nombre; ?>" name="Nombre" id="fname" placeholder="Nombre">
	                  </div>
	                  <div class="form-group col-md-6">
	                     <label class="form-label" for="lname">Kilometros:</label>
	                     <input type="number" class="form-control" id="lname" value="<?php echo $Carretera->Kilometros; ?>" name="Kilometros" placeholder="Kilometros">
	                  </div>
	                  
	                  <div class="form-group col-md-12">
                        <label class="form-label" for="Categoria_id">Categoría:</label>
                        <select class="form-control" id="Categoria_id"  name="Categoria_id">
                        <option value="1" <?php echo ($Carretera->Categoria_id == 1) ? 'selected' : ''; ?>>Locales</option>
                        <option value="2" <?php echo ($Carretera->Categoria_id == 2) ? 'selected' : ''; ?>>Comerciales</option>
                        <option value="3" <?php echo ($Carretera->Categoria_id == 3) ? 'selected' : ''; ?>>Regionales</option>
                        <option value="4" <?php echo ($Carretera->Categoria_id == 4) ? 'selected' : ''; ?>>Nacionales</option>
                        <option value="5" <?php echo ($Carretera->Categoria_id == 5) ? 'selected' : ''; ?>>Regionales</option>
                        <option value="6" <?php echo ($Carretera->Categoria_id == 6) ? 'selected' : ''; ?>>Autovias</option>
                            <!-- Puedes agregar más opciones según tus necesidades -->
                        </select>
                    </div>
	                  
	               </div>
	               <div class="form-group col-md-12">
                        <label class="form-label" for="Carretera_Anterior">Carretera anterior:</label>
                        <select class="form-control" id="Carretera_Anterior" name="Carretera_Anterior">
                        <?php
							$contador = 1;
		                    foreach ($listaCarreteras as $key => $row) {
                                $selected = ($contador == $Carretera->Carretera_Anterior) ? 'selected' : '';
		                ?>
                            <option value=<?php echo $contador; ?>  <?php echo $selected; ?>><?php echo $row->Carretera; ?></option>
                        
                        <?php
                            $contador = $contador + 1;
						}
                        ?>
                        </select>
                    </div>

                    <div class="form-group col-md-12">
                        <label class="form-label" for="Carretera_Posterior">Carretera posterior:</label>
                        <select class="form-control" id="Carretera_Posterior" value="<?php echo $Carretera->Carretera_Posterior; ?>" name="Carretera_Posterior">
                        <?php
							$contador = 1;
		                    foreach ($listaCarreteras as $key => $row) {
                                $selected = ($contador == $Carretera->Carretera_Posterior) ? 'selected' : '';
		                ?>
                            <option value=<?php echo $contador; ?> <?php echo $selected; ?>><?php echo $row->Carretera; ?></option>
                        
                        <?php
                            $contador = $contador + 1;
							}
                        ?>
                        </select>
                    </div>
	               
	               <button type="submit" class="btn btn-primary">Actualizar carretera</button>
	            </form>
	         </div>
	      </div>
	   </div>
	</div>
</div>

<?php
}
}
?>