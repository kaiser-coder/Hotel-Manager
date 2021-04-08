<?php 
	$title = 'Formulaire d\'ajout des nouvelles catégories de chambres';
	include('template/partials/breadcrumb.php'); 
?>

<div class="card mb-4">
	<div class="card-body">
		<form action="/src/categories/store.php" method="post">
			<div class="form-row">
				<div class="form-group col-md-12">
					<label class="form-label">Label</label>
					<input type="text" class="form-control" name="label" placeholder="Label" required>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12">
					<label class="form-label">Description</label>
					<textarea name="description" id="" class="form-control" cols="30" rows="10" placeholder="Description de la catégorie" required></textarea>
					<div class="clearfix"></div>
				</div>
			</div>
			
			<button type="submit" class="btn btn-primary">Enregistrer</button>
		</form>
	</div>
</div>