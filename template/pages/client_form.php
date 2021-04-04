<h4 class="font-weight-bold py-3 mb-0">Formulaire d'ajout des clients</h4>
<div class="text-muted small mt-0 mb-4 d-block breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
		<li class="breadcrumb-item"><a href="#">Clients</a></li>
		<li class="breadcrumb-item active">Data</li>
	</ol>
</div>

<div class="card mb-4">
	<div class="card-body">
		<form>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label class="form-label">Nom</label>
					<input type="text" class="form-control" placeholder="Nom" name="first_name">
					<div class="clearfix"></div>
				</div>
				<div class="form-group col-md-6">
					<label class="form-label">Prénom</label>
					<input type="text" class="form-control" placeholder="Prénom" name="last_name">
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label class="form-label">Sexe</label>
					<select class="custom-select" name="gender">
						<option>Monsieur</option>
						<option>Madame</option>
					</select>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12">
					<label class="form-label">Nationalité</label>
					<input type="text" class="form-control" placeholder="Nationalité" name="nationality">
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12">
					<label class="form-label">Adresse</label>
					<input type="text" class="form-control" placeholder="Adresse" name="address">
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12">
					<label class="form-label">Téléphone</label>
					<input type="text" class="form-control" placeholder="Numéro de téléphone" name="phone_number">
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12">
					<label class="form-label">CIN</label>
					<input type="text" class="form-control" placeholder="Carte d'Identité Nationale">
					<div class="clearfix"></div>
				</div>
			</div>
			
			<button type="submit" class="btn btn-primary">Enregistrer</button>
		</form>
	</div>
</div>