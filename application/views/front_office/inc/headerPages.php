<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $page['pag_titre'] ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front_office/css/w3.css">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url(); ?>assets/front_office/css/final-page.css" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>

	<!-- begin region of page slider  -->
<div class="container">
	<!-- begin region of w3-display-container -->
	<div id="container" class="w3-display-container w3-mobile">
		<!-- begin region of header -->
		<div id="header" class="w3-cell-row w3-display-top w3-card-2 w3-mobile">
			<!-- <div id="header" class="w3-container  w3-display-topmiddle"> -->
			<div id="bonjourCircle" class="w3-container w3-cell w3-cell-middle w3-mobile img-responsive ">
				<a href="<?php echo base_url(); ?>Home/index">Bonjour</a>
			</div>
			<div id="rubricName" class="w3-container w3-cell w3-cell-middle w3-mobile ">
				<a href="<?php echo base_url(); ?>"><?php echo $page['rub_libelle']; ?></a>
			</div>
			<div id="timeBlock" class="w3-container w3-cell w3-cell-middle w3-mobile">
				<a href="<?php echo base_url(); ?>"><?php echo date(DATE_RFC850); ?></a>
			</div>
			<!-- </div> -->
	</div>
	<!-- end region of header -->
