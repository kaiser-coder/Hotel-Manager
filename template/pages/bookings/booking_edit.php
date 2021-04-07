<?php
	/* $db = require('connection.php');
	$query = $db->query('SELECT id, first_name, last_name FROM clients');
	$clients = $query->fetchAll(PDO::FETCH_OBJ); */
?>

<?php
	var_dump($modal_config);
	exit;
?>
<div class="form-row">
   <div class="form-group col-md-12">
      <label class="form-label mb-2">Client</label>
      <select name="client_id" id="customSelect" class="custom-select" required>
         <option value="">Sélectionner une option</option>
         <?php
				foreach($clients as $client) {
			?>
         <option value="<?php echo $client->id; ?>">
            <?php echo $client->first_name .' '. $client->last_name; ?>
         </option>
         <?php 
				}
			?>
      </select>
      <div class="clearfix"></div>
   </div>
</div>


<div class="form-row">
   <div class="form-group col-md-6">
      <label class="form-label">Chambre</label>
      <input type="text" class="form-control" name="room" placeholder="Numéro de chambre" value="<?php echo $modal_config['data']->room; ?>" required>
      <div class="clearfix"></div>
   </div>
</div>
<div class="form-row">
   <div class="form-group col-md-6">
      <label class="form-label">Debut</label>
      <input type="date" class="form-control" placeholder="Début du séjour" name="begin" value="<?php echo $modal_config['data']->begin; ?>" required>
      <div class="clearfix"></div>
   </div>
</div>
<div class="form-row">
   <div class="form-group col-md-6">
      <label class="form-label">Durée</label>
      <input type="number" class="form-control" placeholder="Durée du séjour" name="duration" value="<?php echo $modal_config['data']->duration; ?>" required>
      <div class="clearfix"></div>
   </div>
</div>