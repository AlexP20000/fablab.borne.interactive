<!DOCTYPE html>
<html>
	<head>
		<title>Connexion à l'espace d'administration</title>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css">

	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	  <style type="text/css">
	  	* {
	  		margin : 0px;
	  		padding: 0px;
	  	}
	  	body{
	  		background: url(../styles/imgs/back.jpg);
	  		background-repeat: no-repeat;
	  		background-size: 100vw 100vh;
	  		overflow: hidden;
	  		color: #fff; 
	  		font-family: 'comic sans ms'; 
	  		text-align: center;
	  	}
	  	.container{
	  		width: 360px;
	  		margin: auto;
	  		margin-top: 50vh;
	  		transform: translateY(-50%);
	  		padding: 40px;
	  		background: rgba(0,0, 0, 0.6);
	  		border-radius: 20px;
	  	}
	  	label{
	  		display: block;
	  		margin-top: 20px;
	  		padding-left: 5px;
	  		text-align: left;
	  	}
	  	.field{
	  		margin-top: 5px;
	  		padding: 10px;
	  		background: rgba(0,0, 0, 0.6);
	  		outline: none;
	  		border: 1px solid #6b757e;
	  		border-radius: 0px;
	  		color: #fff;
	  	}
	  	.connection{
	  		margin-top: 50px;
	  		border-radius: 0px;
	  	}
	  	.icon{
	  		color: #e4e4e4;
	  		font-size: 70px;
	  		display: block;
	  		text-align: center;
	  	}
	  	@media screen and (max-width: 400px) {
	  		body{
	  			transform: scale(0.8);
	  		}
	  	}
	  </style>
	</head>

	<body>
		<div class="container">
			<h4>Administration de l'Openfactory</h4>
			<h6>Veuillez vous identifier</h6>
			<i class="icon fas fa-sign-in-alt"></i>
			
			<form method="post" action="../compte/connect">
				<label for="username"> Nom d'utilisateur</label>
				<input type="text" name="username" placeholder="Veuillez saisir votre nom d'utilisateur" class="form-control field"/>

				<label for="password"> Mot de passe</label>
				<input type="password" name="password" placeholder="Veuillez saisir votre mot de passe" class="form-control field" />

				<button type="submit" class="form-control btn btn-info connection"><i class="fas fa-sign-in-alt"></i> Connexion</button>

			</form>
			
		</div>
	</body>

</html>