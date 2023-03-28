<!DOCTYPE html>
<HTML>

<head>
	<meta charset="ISO-8859-1">
	<TITLE>Start/Stop Codilog</TITLE>
	<link rel="stylesheet" href="./css/index.css">
	<link rel="icon" href="./img/600px-Blason_Chatou.svg.png">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
	<div class="navbar">
		<ul>
			<li><a href="/cod/">Home</a></li>
			<li><a onclick="history.go(0);">Refresh</a></li>
			<li><a href="index.php">ControlCenter</a></li>
		</ul>
	</div>

	<div class="flex-container">
		<div class="flex-items">
			<p><img src="img/ON.png"> <img src="img/OFF.png"></p>
		</div>
		<div class="flex-items">
			<p>
				Les carrés de couleur indiquent le statut de la VM et de SAP
			</p>
		</div>
	</div>

	<div class="flex-container">
		<div class="flex-items">
			<p><img src="img/01-08-2022 17-53-41.png"></p>
		</div>
		<div class="flex-items">
			<p>
				En arrivant sur la page d'accueil, le bouton des VM à gérer est affiché. Il suffit de cliquer sur la zone du bouton pour déployer les options (ici Stop et Start)
			</p>
		</div>
	</div>

	<div class="flex-container">
		<div class="flex-items">
			<p><img src="./img/01-08-2022 17-53-52.png"></p>
			<p><img src="./img/01-08-2022 17-53-59.png"></p>
		</div>
		<div class="flex-items">
			<p>
				Comme leurs noms l'indiquent le bouton "Stop VM" arrête la VM, le bouton "Start VM" démarre la VM, puis un script démarre la DB puis SAP. Il faut donc environ 10 minutes pour un allumage complet.
			</p>
		</div>
	</div>
</body>

</HTML>