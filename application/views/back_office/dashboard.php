<?php 
	if(!empty($_SESSION['cmp_pseudo']) && !empty($_SESSION['cmp_mot_de_passe'])){
		/* Connect to the database */
			$mysqli = new mysqli("localhost", "root", "", "open_factory_manager");

		/* Retreiv datas from the databse */
			$result = $mysqli->query('
				SELECT * FROM t_compte_cmp 
				WHERE cmp_pseudo = \''.$_SESSION['cmp_pseudo'].'\'
				AND cmp_mot_de_passe = \''.$_SESSION['cmp_mot_de_passe'].'\'
			');

			$row = $result->fetch_array(MYSQLI_ASSOC);
		/* Verify if the user is correct or not */
			if(count($row)<1){
				header("Location: ../compte/login");
			}
	}
	else{
		header("Location: ../compte/login");
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Connexion à l'espace d'administration</title>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link href="https://fonts.googleapis.com/css?family=Amaranth" rel="stylesheet"> 
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css">

	  <link rel="stylesheet" href="../styles/css/dashboard/main_container_style.css">
	  <link rel="stylesheet" href="../styles/css/dashboard/navigation_panel_style.css">
	  <link rel="stylesheet" href="../styles/css/dashboard/content_panel_style.css">
	  <link rel="stylesheet" href="../styles/css/dashboard/prefered_modal_settings.css">

	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	  <script src="../styles/ckeditor/ckeditor.js"></script>

		<script> <?php include('script.js'); ?></script>
	</head>

	<body>
		<div class="main-container">
			<div class="table-row">
				<!-- The navigation Panel -->
				<?php include('dashboard_navigation_panel.php'); ?>

				<!-- The content panel -->
				
