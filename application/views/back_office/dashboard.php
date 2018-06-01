<?php 
	if(!empty($_SESSION['cmp_pseudo']) && !empty($_SESSION['cmp_mot_de_passe'])){
		/* Connect to the database */
			$mysqli = new mysqli("localhost", "admin", "123456789", "open_mag");

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
		<title>Open-Mag</title>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link href="https://fonts.googleapis.com/css?family=Amaranth" rel="stylesheet"> 
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css">

	  <link rel="stylesheet" href="../assets/back_office/css/main_container_style.css">
	  <link rel="stylesheet" href="../assets/back_office/css/navigation_panel_style.css">
	  <link rel="stylesheet" href="../assets/back_office/css/content_panel_style.css">
	  <link rel="stylesheet" href="../assets/back_office/css/prefered_modal_settings.css">

	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	  <script src="../assets/back_office/ckeditor/ckeditor.js"></script>

	  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.css"/>
		<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.js"></script>
		<link rel="stylesheet" href="../assets/back_office/css/prefered_table_settings.css">

		<!-- Bootstrap Date-Picker Plugin -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

		<script type="text/javascript">
			$(document).ready( function () {
				/* DataTable */
    			$('#all-pages').DataTable();
    		/* The filtrer */
			  	$("#myInput").on("keyup", function() {
			      var value = $(this).val().toLowerCase();
			      $("#myTable tr").filter(function() {
			        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
			      });
			    });
			  /* Show the manager settings */
			    $("#manager-sttings").click(function(){
			        $("#manager-sttings-modal").modal();
			    });
			  /* chnage manager picture */
			    $("#update-manager-picture").click(function(){
			      $("#update-picture-modal").modal();
			    });
			  /* Logout from the back-office */
			    $("#log-out").click(function(){
			    	document.location.href = "../compte/logout";
			    });
			  /* Add a manager */
			    $("#add-manager").click(function(event){
			    	event.preventDefault();
			      $("#add-manager-modal").modal("show");
			    });
			  /* add page type */
			    $("#add-type").click(function(){
			      $("#add-type-modal").modal();
			    });
			  /* manage page types */
			    $("#manage-types").click(function(){
			      $("#manage-types-modal").modal();
			    });
			  /* manage page link types */
			    $("#manage-link-types").click(function(){
			      $("#manage-link-types-modal").modal();
			    });
			  /* edit a page */
			  	$(".edit-page").on('click', function(){
			  		$("#edit-page-modal").modal();
			  		var id = $(this).attr("id");

			  	});
			  	$('#edit-page-modal').on('hidden.bs.modal', function () {
					 location.reload();
					});

			  /* Born settings */
			    $("#born-sttings").click(function(){
			    	$("#born-sttings-modal").modal();
			    });
			} );
		</script>
		<script>
	    $(document).ready(function(){
        var date_input=$('input[name="pag_date"]'); //our date input has the name "date"
        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
            format: 'yyyy-mm-dd',
            container: container,
            todayHighlight: true,
            autoclose: true,
        });
	    });
		</script>
	</head>

	<body>
		<div class="main-container">
			<div class="table-row">
				<!-- The navigation Panel -->
				<?php include('dashboard_navigation_panel.php'); ?>

				<!-- The content panel -->
				
