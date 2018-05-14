<!-- the content of the html web page -->

<content class="content-panel-container table-cell">
	<div class="content-panel-top">
		<h2><i class="fas fa-cogs"></i> Bienvenue dans d'espace d'administration <i class="fas fa-cogs"></i></h2>
	</div>

	<div class="content-panel-bottom">
		<div class="filtrer-container">
			<h4><i class="fas fa-search"></i> Faire une Recherche : </h4>
			<input class="form-control search" id="myInput" type="text" placeholder="Saisir un mot clé pour la  Recherche ...">
		</div>
		<!-- Sum-up the last of actu & event & projects -->
		<div class="table-container">
			<h4><i class="fas fa-list"></i> Liste des Managers : </h4>
			<table class="table table-striped table-bordered table-hover table-condensed">
				<thead>
					<tr>
						<th style="width: 3%;" class="center">id</th>
						<th style="width: 10%;">Nom</th>
						<th style="width: 10%;">Prénom</th>
						<th style="width: 20%;">Contact</th>
						<th style="width: 10%;">Pseudo</th>
						<th style="width: 8%;" class="center">Statut</th>
						<th style="width: 8%;" class="center">Activer</th>
						<th style="width: 8%;" class="center">Désactiver</th>
						<th style="width: 8%;" class="center">Editer</th>
						<th style="width: 20%;" class="center">Regénérer Mot de Passe</th>
					</tr>
				</thead>
				<tbody id="myTable">
					<?php 
						for($i=1; $i<=9; $i++){
							echo '
								<tr>
									<td class="center">'.$i.'</td>
									<td><p>nom '.$i.'</p></td>
									<td><p>prénom '.$i.'</p></td>
									<td><p>nom.prenom@univ-brest.fr</p></td>
									<td><p>nom.prenom</p></td>
									<td class="center">Inactif</td>
									<td class="center"><i class="green fas fa-check"></i></td>
									<td class="center"><i class="space red fas fa-times"></i></td>
									<td class="center"><i class="blue fas fa-edit"></i></td>
									<td class="center"><i class="purple fas fa-reply-all"></i></td>
								</tr>
							';
						}
					?>
				</tbody>
			</table>
		</div>

		<div class="form-group btn-container">
    <button class="my-btn btn btn-primary">
      <i class="fas fa-plus"> </i>
     	Ajouter un nouveau manager
    </button>

    <button class="my-btn btn btn-warning">
      <i class="fas fa-reply-all"> </i>
      Regénérer tous les mots de passe
    </button>
  </div>
	</div>
</content>


<!-- to complete the html web page tags -->
			</div>
		</div>
	</body>
</html>