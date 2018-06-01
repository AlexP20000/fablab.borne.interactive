<?php include 'modals/edit_page.php'; ?>

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
			<h4><i class="fas fa-list"></i> Liste des Pages : </h4>
			<table id="all-pages" class="table table-striped table-bordered table-hover table-condensed">
				<thead>
					<tr>
						<th style="width: 3%;" class="center">id</th>
						<th style="width: 30%;">Titre de la Page</th>
						<th style="width: 8%;">Date</th>
						<th style="width: 8%;">Type</th>
						<th style="width: 15%;">Auteur</th>
						<th style="width: 8%;">Statut</th>
						<th style="width: 8%;" class="center">Actions</th>
					</tr>
				</thead>
				<tbody id="myTable">
					<?php 
						if(!empty($pages)){
							foreach($pages as $page){
								echo '
								<tr>
									<td class="center">'.$page['pag_id'].'</td>
									<td><p>'.$page['pag_titre'].'</p></td>
									<td class="center">'.$page['pag_date'].'</td>
									<td><p>'.$page['rub_libelle'].'</p></td>
									<td><p>'.$page['cmp_pseudo'].'</p></td>
									<td><p class="space">'.$page['pag_statut'].'</p></td>
									<td class="center">
										<a title="Visualiser la page" href=""><i class="green fas fa-eye"></i></a>
										<a title="Mettre à Jour la page" href="../page/edit/'.$page['pag_id'].'" target="frame" class="edit-page"><i class="space blue fas fa-edit"></i></a>
										<a title="Supprimer la page" href="../page/delete/'.$page['pag_id'].'"><i class="space red fas fa-trash-alt"></i></a>
									</td>
								</tr>
							';
							}
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