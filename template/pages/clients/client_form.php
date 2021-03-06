<?php 
	$title = 'Formulaire d\'enregistrements des clients';
	include('template/partials/breadcrumb.php'); 
?>

<div class="card mb-4">
	<div class="card-body">
		<form action="/src/clients/store.php" method="post">
			<div class="form-row">
				<div class="form-group col-md-6">
					<label class="form-label">Nom</label>
					<input type="text" class="form-control" placeholder="Nom" name="first_name" required>
					<div class="clearfix"></div>
				</div>
				<div class="form-group col-md-6">
					<label class="form-label">Prénom</label>
					<input type="text" class="form-control" placeholder="Prénom" name="last_name" required>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label class="form-label">Genre</label>
					<select class="custom-select" name="gender" required>
						<option value="">Selectionnez une option</option>
						<option value="mr">Monsieur</option>
						<option value="m.">Madame</option>
					</select>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12">
					<label class="form-label">Nationalité</label>
					<input type="text" class="form-control" placeholder="Nationalité" name="nationality" required>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12">
					<label class="form-label">Adresse</label>
					<input type="text" class="form-control" placeholder="Adresse" name="address" required>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12">
					<label class="form-label">Téléphone</label>
					<input type="text" class="form-control" placeholder="Numéro de téléphone" name="phone_number" required>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12">
					<label class="form-label">CIN</label>
					<input type="text" name="id_card" class="form-control" placeholder="Carte d'Identité Nationale" required>
					<div class="clearfix"></div>
				</div>
			</div>
			
			<button type="submit" class="btn btn-primary">Enregistrer</button>
		</form>
	</div>
</div>