<?php

if(!isset($_SESSION['user_id'])) Core::redir("./");


	
?>

<?php

if(isset($_GET["opt"]) && $_GET["opt"] == "anadir"){
    $listaCarreteras = CarreterasData::getAll();
?>
<div class="content-inner container-fluid pb-0" id="page_layout">
	<div class="col-xl-12 col-lg-12">
	   <div class="card">
	      <div class="card-header d-flex justify-content-between">
	         <div class="header-title">
	            <h4 class="card-title">Nueva carretera </h4>
	         </div>
	      </div>
	      <div class="card-body">
	         <div class="new-user-info">
	            <form method="post" action="./?action=carreteras&opt=anadir">
	               <div class="row">
	                  <div class="form-group col-md-6">
	                     <label class="form-label" for="fname">Nombre de la carretera:</label>
	                     <input type="text" class="form-control" name="Nombre" id="fname" placeholder="Nombre">
	                  </div>
	                  <div class="form-group col-md-6">
	                     <label class="form-label" for="lname">Kilometros:</label>
	                     <input type="number" class="form-control" id="lname"  name="Kilometros" placeholder="Kilometros">
	                  </div>
	                  
	                  <div class="form-group col-md-12">
                        <label class="form-label" for="Categoria_id">Categoría:</label>
                        <select class="form-control" id="Categoria_id" name="Categoria_id">
                            <option value=1>Locales</option>
                            <option value=2>Comerciales</option>
                            <option value=3>Regionales</option>
                            <option value=4>Nacionales</option>
                            <option value=5>Regionales</option>
                            <option value=6>Autovias</option>
                            <!-- Puedes agregar más opciones según tus necesidades -->
                        </select>
                        </div>
	                  
	               </div>
	               <div class="form-group col-md-12">
                        <label class="form-label" for="Carretera_Anterior">Carretera anterior:</label>
                        <select class="form-control" id="Carretera_Anterior" name="Carretera_Anterior">
                        <?php
		                    foreach ($listaCarreteras as $key => $row) {
		                ?>
                            <option value=<?php echo $row->id_Carretera; ?>><?php echo $row->Carretera; ?></option>
                        
                        <?php
                            }
                        ?>
                        </select>
                    </div>

                    <div class="form-group col-md-12">
                        <label class="form-label" for="Carretera_Posterior">Carretera posterior:</label>
                        <select class="form-control" id="Carretera_Posterior" name="Carretera_Posterior">
                        <?php
		                    foreach ($listaCarreteras as $key => $row) {
		                ?>
                            <option value=<?php echo $row->id_Carretera; ?>><?php echo $row->Carretera; ?></option>
                        
                        <?php
                            }
                        ?>
                        </select>
                    </div>
	               
	               <button type="submit" class="btn btn-primary">Agregar carretera</button>
	            </form>
	         </div>
	      </div>
	   </div>
	</div>
</div>

<?php
}
?>