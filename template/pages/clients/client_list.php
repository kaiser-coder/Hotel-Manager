<?php 
	$db = require('connection.php');

	$title = 'Liste des clients';
	include('template/partials/breadcrumb.php'); 
?>

<?php
	$query = $db->query('SELECT * FROM clients');
	$clients = $query->fetchAll(PDO::FETCH_OBJ);
?>

<?php include('template/partials/alert.php'); ?>

<div class="card mb-4">
	<div class="card-body">
		<table class="table table-striped table-responsive" id="my_table" style="width:100%">
			<thead>
				<tr>
					<th>Nom & Prénom</th>
					<th>Tél</th>
					<th>Adresse</th>
					<th>CIN</th>
					<th>Ajouté le</th>
					<th>Mis à jour le</th>
					<th>Statut</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<?php
					foreach ($clients as $client) {
				?>
				<tr>
					<td><?php echo $client->first_name .' '. $client->last_name; ?></td>
					<td><?php echo $client->phone_number; ?></td>
					<td><?php echo $client->address; ?></td>
					<td><?php echo $client->ID_card; ?></td>
					<td><?php echo $client->created_at; ?></td>
					<td><?php echo $client->updated_at; ?></td>
					<td><?php echo $client->status; ?></td>
					<td class="actions">
						<div class="btn-group">
							<button type="button" class="btn btn-outline-primary btn-xs dropdown-toggle" data-toggle="dropdown"
								aria-haspopup="true" aria-expanded="false">
								Action
							</button>

							<div class="dropdown-menu">
								<a class="dropdown-item" data-toggle="modal" data-target="#editModal<?php echo $client->id; ?>" style="cursor: pointer">Modifier les infos</a>

								<a class="dropdown-item" href="/src/clients/status.php?id=<?php echo $client->id; ?>"><?php echo $label = $client->status == 'active' ? 'Désactiver' : 'Activer'; ?> le client</a>

								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="/src/clients/delete.php?id=<?php echo $client->id; ?>">Supprimer le client</a>
							</div>
						</div>
					</td>
				</tr>

				<!-- Modal -->
				<div class="modal fade" id="editModal<?php echo $client->id; ?>" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-lg" role="document">
						<form action="/src/clients/edit.php" method="post">
							<div class="modal-content">
								<div class="modal-header">
								<h5 class="modal-title" id="editModalLabel">Mise à jour du client</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
								</div>
								<div class="modal-body">
								<?php include('client_edit.php'); ?>
								</div>
								<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
								<button type="submit" class="btn btn-primary">Sauvegarder</button>
								</div>
							</div>
						</form>
					</div>
				</div>

				<?php } ?>
			</tbody>
		</table>
	</div>
</div>

