<?php 
	$title = 'Formulaire d\'enregistrements des réservations';
	include('template/partials/breadcrumb.php'); 
?>

<?php
	$db = require('connection.php');
	$query = $db->query('SELECT id, first_name, last_name FROM clients');
	$clients = $query->fetchAll(PDO::FETCH_OBJ);
?>
<div class="card mb-4">
	<div class="card-body">
		<form action="/src/bookings/store.php" method="post">
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
					<input type="text" class="form-control" name="room" placeholder="Numéro de chambre">
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label class="form-label">Debut</label>
					<input type="date" class="form-control" placeholder="Début du séjour" name="begin" required>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label class="form-label">Durée</label>
					<input type="number" class="form-control" placeholder="Durée du séjour" name="duration" required>
					<div class="clearfix"></div>
				</div>
			</div>
			
			<button type="submit" class="btn btn-primary">Enregistrer</button>
		</form>
	</div>
</div>