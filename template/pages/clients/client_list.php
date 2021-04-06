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
		<table class="table table-striped" id="my_table" style="width:100%">
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

				<?php
				   $modal_config = array(
						'form_path'   => 'clients/client_edit',
						'data'        => $client,
						'title'       => 'Mise à jour du client',
						'action_form' => '/src/clients/edit.php',
					);

					include('template/partials/editModal.php'); 
				?>

				<?php } ?>
			</tbody>
		</table>
	</div>
</div>

