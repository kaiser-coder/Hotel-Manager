<?php 
	$title = 'Formulaire d\'ajout d\'une chambre';
	include('template/partials/breadcrumb.php'); 
?>

<?php
	$db = require('connection.php');
	$query = $db->query('SELECT * FROM categories');
	$categories = $query->fetchAll(PDO::FETCH_OBJ);
?>

<div class="card mb-4">
	<div class="card-body">
		<form action="/src/bookings/store.php" method="post">
			<div class="form-row">
				<div class="form-group col-md-12">
					<label class="form-label mb-2">Catégories</label>
					<select name="category_id" id="customSelect" class="custom-select" required>
						<option value="">Sélectionner une option</option>
						<?php
							foreach($categories as $category) {
						?>
							<option value="<?php echo $category->id; ?>">
								<?php echo $category->label; ?>
							</option>
						<?php 
							}
						?>
					</select>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12">
					<label class="form-label">Numéro de chambre</label>
					<input type="text" class="form-control" name="number" placeholder="Numéro de chambre" required>
					<div class="clearfix"></div>
				</div>
			</div>
			
			<button type="submit" class="btn btn-primary">Enregistrer</button>
		</form>
	</div>
</div>