<div>
	<?php //echo '<pre>'; print_r($_SESSION); echo '</pre>';?>
</div>

<?php include('modals/add_manager.php'); ?>
<?php include('modals/edit_manager.php'); ?>
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
						<th style="width: 30%;">Contact</th>
						<th style="width: 15%;">Pseudo</th>
						<th style="width: 10%;" class="center">Statut</th>
						<th style="width: 20%;" class="center">Actions sur le Manager</th>
					</tr>
				</thead>
				<tbody id="myTable">
					<?php
						if(!empty($managers)){
							foreach ($managers as $row){
								if($row['cmp_pseudo'] != $_SESSION['cmp_pseudo']){
									echo '
										<tr>
											<td class="center">'.$row['res_id'].'</td>
											<td><p>'.$row['res_nom'].'</p></td>
											<td><p>'.$row['res_prenom'].'</p></td>
											<td><p>'.$row['res_contact'].'</p></td>
											<td><p>'.$row['cmp_pseudo'].'</p></td>
											<td class="center">'.$row['cmp_statut'].'</td>
											<td class="center">
												<a title="Activer le manager" href="../manager/enable/'.$row['cmp_pseudo'].'"><i class="green fas fa-check"></i></a>
												<a title="Désactiver le manager" href="../manager/disable/'.$row['cmp_pseudo'].'"><i class="space red fas fa-times"></i></a>
												<a title="Réinitialiser le mot de passe du manager" href="../manager/reset_password/'.$row['cmp_pseudo'].'"><i class="space purple fas fa-reply-all"></i></a>
												<a title="Mettre à jour les infos du manager" class="edit-manager" id="'.$row['cmp_pseudo'].'"><i class="space blue fas fa-edit"></i></a>
											</td>
										</tr>
									';
								}
							}
						}
					?>
				</tbody>
			</table>
			<?php
				if(empty($managers)){
					echo '<p class="red center" style="margin-top: 20px; font-size: 16px;">Aucun contenu n\'a été chargé !</p>';
				} 
			?>
		</div>

		<div class="form-group btn-container">
    <button id="add-manager" class="my-btn btn btn-primary">
      <i class="fas fa-plus"> </i>
     	Ajouter un nouveau manager
    </button>

    <a href="../manager/reset_all_passwords" class="my-btn btn btn-warning">
      <i class="fas fa-reply-all"> </i>
      Regénérer tous les mots de passe
    </a>
  </div>
	</div>
</content>


<!-- to complete the html web page tags -->
			</div>
		</div>
		<script type="text/javascript">
			var manager_tab = <?php echo json_encode($managers);?>;
		  $(".edit-manager").click(function(){
		    $("#edit-manager-modal").modal();
		    var pseudo = $(this).attr('id');
		      for (var i=0; i<manager_tab.length; i++){
		        if(manager_tab[i]['cmp_pseudo'] == pseudo){
		          $('#edit-name').val(manager_tab[i]['res_nom']);
		          $('#edit-firstname').val(manager_tab[i]['res_prenom']);
		          $('#edit-contact').val(manager_tab[i]['res_contact']);
		          $('#edit-status').val(manager_tab[i]['cmp_statut']);
		          $('#edit-pseudo').val(manager_tab[i]['cmp_pseudo']);
		          $('#edit-pseudo-old').val(manager_tab[i]['cmp_pseudo']);
		          break;
		        }
		      }
		  });
		</script>
	</body>
</html>