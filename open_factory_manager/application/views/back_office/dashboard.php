<!DOCTYPE html>
<html>
	<head>
		<title>Connexion à l'espace d'administration</title>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css">

	  <link rel="stylesheet" href="../styles/css/dashboard.css">

	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>

	<body>
		<div class="container-fluid">
			<div class="row table-row">
			<!-- lateral bar witch going to be the navigation menu -->
			<aside class="nav-menu table-cell">
				<div class="logo-open-factory"></div>
				<div class="manager-profil">
					<div class="picture"><img src="../styles/logos/alex.jpg"></div>
					<div>
						<p>Alexendre Peretjatko</p>
					</div>
					<div>
						<i class="fas fa-cog"></i>
						<i class="fas fa-sign-out-alt" style="font-size: 15px; line-height: 10px;"></i>
					</div>
				</div>
				<div class="navigation">
					<span class="title">Administration</span>
					<a href="" class="item"><i class="fas fa-plus"></i> Ajouter une Rubrique</a>
					<a href="" class="item"><i class="fas fa-users"></i> Gérer les Managers</a>
					<a href="" class="item"><i class="fas fa-mobile-alt"></i> Gérer la Borne</a>
					<a href="" class="item"><i class="fas fa-cog"></i> Configuration</a>
					<span class="title">Navigation</span>
					<a href="" class="item"><i class="fas fa-home"></i> Accueil</a>
					<a href="" class="item"><i class="fas fa-globe"></i> Actualites</a>
					<a href="" class="item"><i class="fas fa-calendar-alt"></i> Evenements</a>
					<a href="" class="item"><i class="fas fa-cogs"></i> Projets</a>
					<a href="" class="item"><i class="fas fa-puzzle-piece"></i> Stages</a>
					<a href="" class="item"><i class="fas fa-briefcase"></i> U.E</a>
				</div>
			</aside>

			<!-- the content of each navigation menu item -->
			<content class="table-cell" style="vertical-align: top;">
				<div class="content">
					<div class="top-menu">
						<div>
							<span>Dashboard</span>
						</div>
						<div>
							<i class="fas fa-bell"></i>
							<input type="text" name="" class="search" placeholder="Mot Clé de Recherche  ...">
						</div>
					</div>

					<div class="nav-content">
						<!-- Listing the fablab managers -->
						<div class="manager-list">
							<span class="box-tiltle">Liste des Managers de l'Openfactory</span>
							<div class="managers">
								<?php 
									for($i=0; $i<8; $i++){
										echo '
											<div class="manager manager-profil">
												<div class="picture"><img src="../styles/logos/alex.jpg"></div>
												<div class="manager-infos">
													<p id="manager-name">Alexendre Peretjatko</p>
													<p id="manager-contact">alexendre.peretjatko@univ-brest.fr</p>
												</div>
												<div id="manager-option"><i class="box-tiltle push-right fas fa-ellipsis-v"></i></div>
											</div>
										';
									}
								?>
							</div>
						</div>
						<!-- Sum-up the last of actu & event & projects -->
						<div class="tables-container">
							<!-- The 20 last actualies -->
							<div class="box">
								<div>
									<span class="box-tiltle">Les 10 dernieres actualites</span>
									<div class="dropdown push-right " style="width: 5px; margin: 0px; padding-top: 5px;">
										<i class="push-right fas fa-ellipsis-v dropdown-toggle" data-toggle="dropdown"></i>
										<ul class="dropdown-menu">
								      <li><a href="#">HTML</a></li>
								      <li><a href="#">CSS</a></li>
								      <li><a href="#">JavaScript</a></li>
								    </ul>
							    </div>
								</div>
								
								<table class="table table-condensed">
									<thead>
										<tr>
											<th>ID</th>
											<th>Intitullé de l'actualité</th>
											<th>Date</th>
											<th>Responsable</th>
										</tr>
									</thead>
									<tbody>
										<?php 
											for($i=0; $i<20; $i++){
												echo '
													<tr>
														<td>id</td>
														<td>intitulle</td>
														<td>date</td>
														<td>responsable</td>
													</tr>
												';
											}
										?>
									</tbody>
								</table>
							</div>
							<!-- the 20 last events -->
							<div class="box">
								<div>
									<span class="box-tiltle">Les 10 dernieres evenements</span>
									<i class="push-right fas fa-ellipsis-v"></i>
								</div>
								<table class="table table-condensed">
									<thead>
										<tr>
											<th>ID</th>
											<th>Intitullé de l'evenement</th>
											<th>Date</th>
											<th>Responsable</th>
										</tr>
									</thead>
									<tbody>
										<?php 
											for($i=0; $i<20; $i++){
												echo '
													<tr>
														<td>id</td>
														<td>intitulle</td>
														<td>date</td>
														<td>responsable</td>
													</tr>
												';
											}
										?>
									</tbody>
								</table>
							</div>
							<!-- the 20 last projects -->
							<div class="box">
								<div>
									<span class="box-tiltle">Les 10 dernieres evenements</span>
									<i class="push-right fas fa-ellipsis-v"></i>
								</div>
								<table class="table table-condensed">
									<thead>
										<tr>
											<th>ID</th>
											<th>Intitullé du projet</th>
											<th>Date</th>
											<th>Responsable</th>
										</tr>
									</thead>
									<tbody>
										<?php 
											for($i=0; $i<20; $i++){
												echo '
													<tr>
														<td>id</td>
														<td>intitulle</td>
														<td>date</td>
														<td>responsable</td>
													</tr>
												';
											}
										?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
			</div>
			</content>
		</div>
	</div>
	</body>

</html>