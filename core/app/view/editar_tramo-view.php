<?php

if(isset($_GET["opt"]) && $_GET["opt"] == "editar"){
    if(!isset($_SESSION['user_id']))
	    Core::redir("./");
		//Todas las validaciones
		if(!isset($_GET["Tramo"]) or $_GET["Tramo"] == "")
		{
			Core::addToastr('info',"Ups un error");			
			Core::redir("./?view=home_admin");

		}

			$tramo = TramoData::getByNombre($_GET['Tramo']);
			$found = false;
			if($tramo!=null){
					$found=true;
			}

		
if($found){
    $listaCarreteras = CarreterasData::getAll();
    $listaTramos = TramoData::getAll();
?>

<div class="content-inner container-fluid pb-0" id="page_layout">
	<div class="col-xl-12 col-lg-12">
	   <div class="card">
	      <div class="card-header d-flex justify-content-between">
	         <div class="header-title">
	            <h4 class="card-title"> Editar el tramo <?php echo $tramo->Nombre; ?></h4>
	         </div>
	      </div>
	      <div class="card-body">
	         <div class="new-user-info">
	            <form method="post" action="./?action=tramos&opt=editar">
                <input type="hidden" name="id_Tramo" value="<?php echo $tramo->id_Tramo;?>">
	               <div class="row">
	                  <div class="form-group col-md-6">
	                     <label class="form-label" for="fname">Nombre del tramo:</label>
	                     <input type="text" class="form-control" value="<?php echo $tramo->Nombre; ?>" name="Nombre" id="fname" placeholder="Nombre">
	                  </div>
	                  <div class="form-group col-md-6">
	                     <label class="form-label" for="lname">Kilometros:</label>
	                     <input type="number" class="form-control" id="lname" value="<?php echo $tramo->Kilometros; ?>" name="Kilometros" placeholder="Kilometros">
	                  </div>

                      <div class="form-group col-md-6">
	                     <label class="form-label" for="lname">Kilometro de inicio en la carretera:</label>
	                     <input type="number" class="form-control" id="lname" value="<?php echo $tramo->Pos_Inicio; ?>" name="Pos_Inicio" placeholder="Pos_Inicio">
	                  </div>

                      <div class="form-group col-md-6">
	                     <label class="form-label" for="lname">Kilometro finalización en la carretera:</label>
	                     <input type="number" class="form-control" id="lname" value="<?php echo $tramo->Pos_Final; ?>" name="Pos_Final" placeholder="Pos_Final">
	                  </div>
	                  
	                  <div class="form-group col-md-12">
                        <label class="form-label" for="Carretera_id">Carretera a la que pertenece:</label>
                        <select class="form-control" id="Carretera_id"  name="Carretera_id">
                        <?php
							$contador = 1;
		                    foreach ($listaCarreteras as $key => $row) {
                                $selected = ($contador == $tramo->Carretera_id) ? 'selected' : '';
		                ?>
                            <option value=<?php echo $contador; ?>  <?php echo $selected; ?>><?php echo $row->Carretera; ?></option>
                        
                        <?php
                            $contador = $contador + 1;
						}
                        ?>

                        </select>
                    </div>
	                  
	               </div>
	               <div class="form-group col-md-12">
                        <label class="form-label" for="Tramo_Anterior">Tramo anterior:</label>
                        <select class="form-control" id="Tramo_Anterior" name="Tramo_Anterior">
                        <option value=<?php  echo "null" ;?> <?php echo ($tramo->Tramo_Anterior === null) ? 'selected' : ''; ?>>Nulo</option>
                        <?php
							$contador = 1;
		                    foreach ($listaTramos as $key => $row) {
                                $selected = ($contador == $tramo->Tramo_Anterior) ? 'selected' : '';
		                ?>
                            <option value=<?php echo $contador; ?>  <?php echo $selected; ?>><?php echo $row->Nombre_Tramo; ?></option>
                        
                        <?php
                            $contador = $contador + 1;
						}
                        ?>
                        </select>
                    </div>

                    <div class="form-group col-md-12">
                        <label class="form-label" for="Tramo_Posterior">Tramo posterior:</label>
                        <select class="form-control" id="Tramo_Posterior" name="Tramo_Posterior">
                        <option value=<?php  echo "null" ;?> <?php echo ($tramo->Tramo_Posterior === null) ? 'selected' : ''; ?>>Nulo</option>
                        <?php
							$contador = 1;
		                    foreach ($listaTramos as $key => $row) {
                                $selected = ($contador == $tramo->Tramo_Posterior) ? 'selected' : '';
		                ?>
                            <option value=<?php echo $contador; ?> <?php echo $selected; ?>><?php echo $row->Nombre_Tramo; ?></option>
                        
                        <?php
                            $contador = $contador + 1;
							}
                        ?>
                        </select>
                    </div>
	               
	               <button type="submit" class="btn btn-primary">Actualizar tramo</button>
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