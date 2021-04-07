<?php 
	$db = require('connection.php');

	$title = 'Accueil';
	include('template/partials/breadcrumb.php'); 
?>

<?php
	$query = $db->query('SELECT bookings.id as id, clients.first_name as client_fn, clients.last_name as client_ln, bookings.created_at as created_at, bookings.updated_at as updated_at, bookings.`status` as status, rooms.number as room
	FROM bookings
	join clients ON bookings.client_id = clients.id 
	join rooms ON bookings.room = rooms.number');

	$bookings = $query->fetchAll(PDO::FETCH_OBJ);
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
                        <h2 class="mb-2"> 256 </h2>
                        <p class="text-muted mb-0"><span class="badge badge-primary">Revenue</span>
                           Today</p>
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
                        <h2 class="mb-2">8451</h2>
                        <p class="text-muted mb-0"><span class="badge badge-success">20%</span> Stock
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
                        <h2 class="mb-2"> 31% <small></small></h2>
                        <p class="text-muted mb-0">New <span class="badge badge-danger">20%</span>
                           Customer</p>
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
                        <h2 class="mb-2">158</h2>
                        <p class="text-muted mb-0"><span class="badge badge-warning">$143.45</span>
                           Profit</p>
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
					<?php
						$modal_config = array(
							'form_path'   => 'bookings/booking_edit',
							'data'        => $booking,
							'title'       => 'Mise à jour de la réservation',
							'action_form' => '/src/bookings/edit.php',
						);
						include('../partials/editModal.php');
					?>
					<?php
						}
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>