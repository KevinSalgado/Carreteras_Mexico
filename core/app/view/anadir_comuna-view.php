<?php

if(isset($_GET["opt"]) && $_GET["opt"] == "anadir"){
    if(!isset($_SESSION['user_id']))
	    Core::redir("./");

	$listaComunas = ComunaData::getAll();
	$listaTramos = TramoData::getAll();
?>

<div class="content-inner container-fluid pb-0" id="page_layout">
	<div class="col-xl-12 col-lg-12">
	   <div class="card">
	      <div class="card-header d-flex justify-content-between">
	         <div class="header-title">
	            <h4 class="card-title"> Añadir una nueva comuna </h4>
	         </div>
	      </div>
	      <div class="card-body">
	         <div class="new-user-info">
	            <form method="post" action="./?action=comuna&opt=anadir">
	               <div class="row">
	                  <div class="form-group col-md-6">
	                     <label class="form-label" for="fname">Nombre de la comuna:</label>
	                     <input type="text" class="form-control"  name="Nombre" id="fname" placeholder="Nombre">
	                  </div>
	                  <div class="form-group col-md-6">
	                     <label class="form-label" for="lname">Kilometros:</label>
	                     <input type="number" class="form-control" id="lname" name="Kilometros" placeholder="Kilometros">
	                  </div>

                      <div class="form-group col-md-6">
	                     <label class="form-label" for="lname">Kilometro de inicio en la carretera:</label>
	                     <input type="number" class="form-control" id="lname"  name="Pos_Inicio" placeholder="Pos_Inicio">
	                  </div>

                      <div class="form-group col-md-6">
	                     <label class="form-label" for="lname">Kilometro finalización en la carretera:</label>
	                     <input type="number" class="form-control" id="lname" name="Pos_Final" placeholder="Pos_Final">
	                  </div>
	                  
	                  <div class="form-group col-md-12">
                        <label class="form-label" for="Carretera_id">Tramo al que pertenece:</label>
                        <select class="form-control" id="Tramo_id"  name="Tramo_id">
                        <?php
							$contador = 1;
		                    foreach ($listaTramos as $key => $row) {
		                ?>
                            <option value=<?php echo $contador; ?>><?php echo $row->Nombre_Tramo; ?></option>
                        
                        <?php
                            $contador = $contador + 1;
						}
                        ?>

                        </select>
                    </div>
	                  
	               </div>
	               <div class="form-group col-md-12">
                        <label class="form-label" for="Tramo_Anterior">Comuna anterior:</label>
                        <select class="form-control" id="Comuna_Anterior" name="Comuna_Anterior">
                        <?php
							$contador = 1;
		                    foreach ($listaComunas as $key => $row) {
		                ?>
                            <option value=<?php echo $contador; ?>><?php echo $row->Nombre_Comuna; ?></option>
                        
                        <?php
                            $contador = $contador + 1;
						}
                        ?>
                        </select>
                    </div>

                    <div class="form-group col-md-12">
                        <label class="form-label" for="Tramo_Posterior">Comuna posterior:</label>
                        <select class="form-control" id="Comuna_Posterior" name="Comuna_Posterior">
                        <?php
							$contador = 1;
		                    foreach ($listaComunas as $key => $row) {
		                ?>
                            <option value=<?php echo $contador; ?>><?php echo $row->Nombre_Comuna; ?></option>
                        
                        <?php
                            $contador = $contador + 1;
							}
                        ?>
                        </select>
                    </div>
	               
	               <button type="submit" class="btn btn-primary">Agregar comuna</button>
	            </form>
	         </div>
	      </div>
	   </div>
	</div>
</div>

<?php
}
?>