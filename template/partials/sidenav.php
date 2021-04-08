<div id="layout-sidenav" class="layout-sidenav sidenav sidenav-vertical bg-white logo-dark">
	<!-- Brand demo (see assets/css/demo/demo.css) -->
	<div class="app-brand demo">
		<span class="app-brand-logo demo">
			<img src="/assets/img/logo.png" alt="Brand Logo" class="img-fluid">
		</span>
		<a href="index.html" class="app-brand-text demo sidenav-text font-weight-normal ml-2">Hotel Manager App</a>
		<a href="javascript:" class="layout-sidenav-toggle sidenav-link text-large ml-auto">
			<i class="ion ion-md-menu align-middle"></i>
		</a>
	</div>
	<div class="sidenav-divider mt-0"></div>

	<!-- Links -->
	<ul class="sidenav-inner py-1">

		<!-- Dashboards -->
		<li class="sidenav-item active">
			<a href="/index.php/dashboard/home" class="sidenav-link">
				<i class="sidenav-icon feather icon-home"></i>
				<div>Accueil</div>
			</a>
		</li>

		<!-- Layouts -->
		<li class="sidenav-divider mb-1"></li>
		<li class="sidenav-header small font-weight-semibold">Général</li>

		<li class="sidenav-item">
			<a href="/index.php/bookings/register" class="sidenav-link">
				<i class="sidenav-icon feather icon-plus"></i>
				<div>Nouvelle réservation</div>
			</a>
		</li>

		<li class="sidenav-item">
			<a href="javascript:" class="sidenav-link sidenav-toggle">
				<i class="sidenav-icon feather icon-box"></i>
				<div>Clients</div>
			</a>
			<ul class="sidenav-menu">
				<li class="sidenav-item">
					<a href="/index.php/clients/list" class="sidenav-link">
						<div>Liste des clients</div>
					</a>
				</li>
				<li class="sidenav-item">
					<a href="/index.php/clients/register" class="sidenav-link">
						<div>Enregistrer le client</div>
					</a>
				</li>
			</ul>
		</li>

		<li class="sidenav-item">
			<a href="javascript:" class="sidenav-link sidenav-toggle">
				<i class="sidenav-icon feather icon-clipboard"></i>
				<div>Chambres</div>
			</a>
			<ul class="sidenav-menu">
				<li class="sidenav-item">
					<a href="forms_layouts.html" class="sidenav-link">
						<div>Liste des chambres</div>
					</a>
				</li>
				<li class="sidenav-item">
					<a href="forms_input-groups.html" class="sidenav-link">
						<div>Ajout d'une chambre</div>
					</a>
				</li>
			</ul>
		</li>

		<li class="sidenav-item">
			<a href="javascript:" class="sidenav-link sidenav-toggle">
				<i class="sidenav-icon feather icon-tag"></i>
				<div>Catégories</div>
			</a>
			<ul class="sidenav-menu">
				<li class="sidenav-item">
					<a href="/index.php/categories/list" class="sidenav-link">
						<div>Liste des catégories</div>
					</a>
				</li>
				<li class="sidenav-item">
					<a href="/index.php/categories/add" class="sidenav-link">
						<div>Ajout de catégorie</div>
					</a>
				</li>
			</ul>
		</li>
	</ul>
</div>