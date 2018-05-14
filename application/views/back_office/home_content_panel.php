<!-- the content of the html web page -->

<content class="content-panel-container table-cell">
	<div class="content-panel-top">
		<h2><i class="fas fa-cogs"></i> Bienvenue dans d'espace d'administration <i class="fas fa-cogs"></i></h2>
	</div>

	<div class="content-panel-bottom">
		<div class="filtrer-container">
			<h4><i class="fas fa-search"></i> Faire une Recherche : </h4>
			<input class="form-control search" id="myInput" type="text" placeholder="Saisir un mot clé pour la  Recherche">
		</div>
		<!-- Sum-up the last of actu & event & projects -->
		<div class="table-container">
			<h4><i class="fas fa-list"></i> Liste des rubriques : </h4>
			<table class="table table-striped table-bordered table-hover table-condensed">
				<thead>
					<tr>
						<th style="width: 3%;" class="center">id</th>
						<th style="width: 30%;">Intitullé de la rubrique</th>
						<th style="width: 8%;">Date</th>
						<th style="width: 8%;">Type</th>
						<th style="width: 10%;">Responsable</th>
						<th style="width: 8%;">Statut</th>
						<th style="width: 8%;" class="center">Publication</th>
						<th style="width: 8%;" class="center">M.à.J</th>
						<th style="width: 8%;" class="center">Visualiser</th>
						<th style="width: 8%;" class="center">Supprimer</th>
					</tr>
				</thead>
				<tbody id="myTable">
					<?php 
						for($i=1; $i<=100; $i++){
							echo '
								<tr>
									<td class="center">'.$i.'</td>
									<td><p>intitulé de la rubrique d\'actualite numero '.$i.'</p></td>
									<td class="center">12-12-2018</td>
									<td><p>Actualité</p></td>
									<td><p>AlexeP2eret</p></td>
									<td><p class="center">non publié</p></td>
									<td class="center"><i class="green fas fa-check"></i> <i class="space red fas fa-times"></i></td>
									<td class="center"><i class="blue fas fa-edit"></i></td>
									<td class="center"><i class="purple fas fa-eye"></i></td>
									<td class="center"><i class="red fas fa-trash-alt"></i></td>
								</tr>
							';
						}
					?>
				</tbody>
			</table>
		</div>
	</div>
</content>


<!-- to complete the html web page tags -->
			</div>
		</div>
	</body>
</html>