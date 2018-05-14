<content class="content-panel-container table-cell">
	<div class="content-panel-top">
		<div>
			<span>Dashboard</span>
		</div>
		<div>
			<i class="fas fa-bell"></i>
			<input type="text" name="" class="search" placeholder="Mot Clé de Recherche  ...">
		</div>
	</div>

	<div class="content-panel-bottom">
		<!-- Listing the fablab managers -->
		<div class="managers-list-container">
			<span class="managers-list-title">Liste des Managers de l'Openfactory</span>
			<div class="managers-boxes-container">
				<?php 
					for($i=0; $i<9; $i++){
						echo '
							<div class="manager-box">
								<div class="manager-picture manager-box-picture"><img src="../styles/logos/alex.jpg"></div>
								<div class="manager-box-infos">
									<p id="manager-box-name">Alexendre Peretjatko</p>
									<p id="manager-box-contact">alexendre.peretjatko@univ-brest.fr</p>
								</div>
								<div id="manager-box-option" class="dropdown">
									<i class="manager-box-title fas fa-ellipsis-v dropdown-toggle" data-toggle="dropdown"></i>
									<ul class="dropdown-menu">
							      <li><a href="#">Editer</a></li>
							      <li><a href="#">Désactiver</a></li>
							      <li><a href="#">Reinitiliser le mot de passe</a></li>
							    </ul>
						    </div>
							</div>
						';
					}
				?>
			</div>
		</div>
</content>

<!-- to complete the html web page tags -->
			</div>
		</div>
	</body>
</html>