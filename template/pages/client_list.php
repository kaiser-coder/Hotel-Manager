<?php 
	$title = 'Liste des clients';
	include('template/partials/breadcrumb.php'); 
?>

<div class="card mb-4">
	<div class="card-body">
		<table class="table table-striped" id="my_table" style="width:100%">
			<thead>
				<tr>
					<th>Nom</th>
					<th>Prénom</th>
					<th>Tél</th>
					<th>Adresse</th>
					<th>Email</th>
					<th>Statut</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td class="actions">
						<div class="btn-group">
							<button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown"
								aria-haspopup="true" aria-expanded="false">
								Action
							</button>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#">Envoyer un push</a>
								<a class="dropdown-item" href="#">Tarif</a>

								<a class="dropdown-item" href="#">Envoyer un email</a>
								<div class="dropdown-divider"></div>
							</div>
						</div>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
