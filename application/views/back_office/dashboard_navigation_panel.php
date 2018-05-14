<?php include('modals/manager_settings.php'); ?>
<?php include('modals/born_settings.php'); ?>

<aside class="navigation-panel-container table-cell">
	<!-- Open factory logo -->
	<div class="open-factory-logo"></div>
	<!-- Fablab manager profil -->
	<div class="manager-profil-container">
		<!-- Fablab manager picture -->
		<div class="manager-picture"><img src="../styles/logos/alex.jpg"></div>
		<!-- Fablab manager name -->
		<div>
			<p> <?php echo $_SESSION['res_nom'].' '.$_SESSION['res_prenom']; ?></p>
		</div>
		<!-- Profil settings icons -->
		<div>
			<i id="manager-sttings" class="fas fa-cog"></i>
			<i id="log-out" class="fas fa-sign-out-alt" style="font-size: 15px; line-height: 10px;"></i>
		</div>
	</div>
	<!-- Navigation menu -->
	<div class="navigation-menu-container">
		<span class="navigation-menu-title">Navigation</span>
		<a href="../compte/home" class="item"><i class="fas fa-home"></i> Accueil</a>
		<a href="../rubric/add" class="item"><i class="fas fa-plus"></i> Ajouter une Rubrique</a>
		<a id="born-sttings" href="#" class="item"><i class="fas fa-mobile-alt"></i> Gérer la Borne</a>
		<a href="../manager/manage" class="item"><i class="fas fa-users"></i> Gérer les Managers</a>
	</div>
</aside>