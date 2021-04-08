<?php 
	$db = require('connection.php');

	$title = 'Liste des catégories';
	include('template/partials/breadcrumb.php'); 
?>

<?php
	$query = $db->query('SELECT * FROM categories');
	$categories = $query->fetchAll(PDO::FETCH_OBJ);
?>

<?php include('template/partials/alert.php'); ?>

<div class="card mb-4">
	<div class="card-body">
		<table class="table table-striped table-responsive" id="my_table" style="width:100%">
			<thead>
				<tr>
					<th>ID</th>
					<th>Label</th>
					<th>Description</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<?php
					foreach ($categories as $category) {
				?>
				<tr>
					<td><?php echo $category->id; ?></td>
					<td><?php echo $category->label; ?></td>
					<td>
						<?php echo $category->description; ?>
					</td>
					<td class="actions">
						<div class="btn-group">
							<button type="button" class="btn btn-outline-primary btn-xs dropdown-toggle" data-toggle="dropdown"
								aria-haspopup="true" aria-expanded="false">
								Action
							</button>

							<div class="dropdown-menu">
								<a class="dropdown-item" data-toggle="modal" data-target="#editModal<?php echo $category->id; ?>" style="cursor: pointer">Modifier les infos</a>

								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="/src/categories/delete.php?id=<?php echo $category->id; ?>">Supprimer la catégorie</a>
							</div>
						</div>
					</td>
				</tr>

				<!-- Modal -->
				<div class="modal fade" id="editModal<?php echo $category->id; ?>" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-lg" role="document">
						<form action="/src/categories/edit.php" method="post">
							<div class="modal-content">
								<div class="modal-header">
								<h5 class="modal-title" id="editModalLabel">Mise à jour du client</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
								</div>
								<div class="modal-body">
								<?php include('category_edit.php'); ?>
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

