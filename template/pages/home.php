<?php 
	$db = require('connection.php');

	$title = 'Accueil';
	include('template/partials/breadcrumb.php'); 
?>

<?php
	$query1 = $db->query('SELECT bookings.id as id, bookings.duration as duration, bookings.begin, clients.first_name as client_fn, clients.last_name as client_ln, bookings.created_at as created_at, bookings.updated_at as updated_at, bookings.`status` as status, rooms.number as room
	FROM bookings
	join clients ON bookings.client_id = clients.id 
	join rooms ON bookings.room = rooms.number');

	$bookings = $query1->fetchAll(PDO::FETCH_OBJ);
?>

<?php
	# Counts
	$query2 = $db->query('SELECT (SELECT COUNT(id) FROM clients) AS clients_count,
		(SELECT COUNT(id) FROM bookings WHERE status = "en attente") AS bookings_count,
		(SELECT COUNT(id) FROM rooms WHERE available = false) AS rooms_unavailable_count,
		(SELECT COUNT(id) FROM rooms WHERE available = true) AS rooms_available_count');

	$counts = $query2->fetch(PDO::FETCH_ASSOC);
?>

<?php include('template/partials/alert.php'); ?>

<div class="row">
   <div class="col-lg-12">
      <div class="row">
         <div class="col-md-3">
            <div class="card mb-4">
               <div class="card-body">
                  <div class="d-flex align-items-center justify-content-between">
                     <div class="">
                        <h2 class="mb-2"><?php echo $counts['clients_count']; ?></h2>
                        <p class="text-muted mb-0"><span class="badge badge-primary">Total</span>
                           Clients</p>
                     </div>
                     <div class="lnr lnr-leaf display-4 text-primary"></div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-3">
            <div class="card mb-4">
               <div class="card-body">
                  <div class="d-flex align-items-center justify-content-between">
                     <div class="">
                        <h2 class="mb-2"><?php echo $counts['bookings_count']; ?></h2>
                        <p class="text-muted mb-0"><span class="badge badge-success">Total</span> Réservations
                        </p>
                     </div>
                     <div class="lnr lnr-chart-bars display-4 text-success"></div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-3">
            <div class="card mb-4">
               <div class="card-body">
                  <div class="d-flex align-items-center justify-content-between">
                     <div class="">
                        <h2 class="mb-2"> <?php echo $counts['rooms_unavailable_count']; ?> <small></small></h2>
                        <p class="text-muted mb-0"><span class="badge badge-danger">Total</span>
                           Chambres indisponibles</p>
                     </div>
                     <div class="lnr lnr-rocket display-4 text-danger"></div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-3">
            <div class="card mb-4">
               <div class="card-body">
                  <div class="d-flex align-items-center justify-content-between">
                     <div class="">
                        <h2 class="mb-2"><?php echo $counts['rooms_available_count']; ?></h2>
                        <p class="text-muted mb-0"><span class="badge badge-warning">Total</span>
                           Chambres dispo.</p>
                     </div>
                     <div class="lnr lnr-cart display-4 text-warning"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<div class="row card mb-4">
	<div class="col-lg-12">
		<div class="card-header pb-0">
			<h5>Réservations</h5>
		</div>
		<div class="card-body">
			<table class="table table-striped" id="my_table" style="width:100%">
				<thead>
					<tr>
						<th>ID</th>
						<th>Numéro de chambre</th>
						<th>Au nom de</th>
						<th>Faite le</th>
						<th>Modifié le</th>
						<th>Statut</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<?php
						foreach ($bookings as $booking) {
					?>
					<tr>
						<td><?php echo $booking->id; ?></td>
						<td><?php echo $booking->room; ?></td>
						<td><?php echo $booking->client_fn .' '. $booking->client_ln; ?></td>
						<td><?php echo $booking->created_at; ?></td>
						<td><?php echo $booking->updated_at; ?></td>
						<td><?php echo $booking->status; ?></td>
						<td class="actions">
							<div class="btn-group">
								<button type="button" class="btn btn-outline-primary btn-xs dropdown-toggle"
									data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Action
								</button>
								<div class="dropdown-menu">
									<a class="dropdown-item" data-toggle="modal" data-target="#editModal<?php echo $booking->id; ?>"
										style="cursor: pointer">Modifier les infos</a>

									<?php
										if($booking->status == 'en attente') {
									?>
										<a class="dropdown-item" href="/src/bookings/status.php?id=<?php echo $booking->id; ?>&status=cancel">Annuler la réservation</a>
									<?php
										}
									?>

									<?php
										if($booking->status == 'annulee') {
									?>
										<a class="dropdown-item" href="/src/bookings/status.php?id=<?php echo $booking->id; ?>&status=regain">Reprendre la réservation</a>
									<?php
										}
									?>

									<?php
										if($booking->status != 'prise') {
									?>
										<a class="dropdown-item" href="/src/bookings/status.php?id=<?php echo $booking->id; ?>&status=take">Prendre la réservation</a>
									<?php
										}
									?>

									<div class="dropdown-divider"></div>

									<a class="dropdown-item" href="/src/bookings/delete.php?id=<?php echo $booking->id; ?>">Supprimer la réservation</a>
								</div>
							</div>
						</td>
					</tr>

					<!-- Modal -->
					<div class="modal fade" id="editModal<?php echo $booking->id; ?>" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-lg" role="document">
							<form action="/src/bookings/edit.php" method="post">
								<div class="modal-content">
									<div class="modal-header">
									<h5 class="modal-title" id="editModalLabel">Mise à jour de la réservation</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									</div>
									<div class="modal-body">
									<?php include('bookings/booking_edit.php'); ?>
									</div>
									<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
									<button type="submit" class="btn btn-primary">Sauvegarder</button>
									</div>
								</div>
							</form>
						</div>
					</div>

					<?php
						}
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>