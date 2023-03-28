<!DOCTYPE html>
<HTML>

<head>
	<meta charset="ISO-8859-1">
	<TITLE>Start/Stop Codilog</TITLE>
	<link rel="stylesheet" href="./css/index.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
	<script>
		var coddevlin = {
			host: 'cod-dev-lin',
			start: 'http://elk.codilog.fr:4440/api/41/webhook/KR3yzSkrxmMVi3Rk6l3UOBhldvu5vkek#Start_cod-dev-lin',
			stop: 'http://elk.codilog.fr:4440/api/41/webhook/CUvwshC8iAaCKTh1sjjG5gT98sv1RpiF#Stop_cod-dev-lin',
			addtag: '',
			deltag: ''
		};

		function help() {
			alert("== Version en développement == \n\n Reste à faire:  \n - Changer la couleur des prods \n\n *: Check via nmap ")
		}

		function reload() {
			var r = confirm("Do you want to leave page!");

		}

		function stopvm(param) {
			var _url = param.stop;
			var _r = confirm("Voulez-vous vraiment arreter " + param.host);
			if (_r) {
				$.ajax({
					type: 'POST',
					url: _url
				});
			} else {
				alert('Action annulée');
			}
		}

		function startvm(param) {
			var _url = param.start;
			_r = confirm("Voulez-vous vraiment lancer " + param.host);
			confirm("Comptez 10 minutes le temps du démarrage de la VM, de la BdD puis de SAP");
			if (_r) {
				$.ajax({
					type: 'POST',
					url: _url
				});
			} else {
				alert('Action annulée');
			}
			$.ajax({
				type: 'POST',
				url: _url
			});
		}

		function deltag(param) {
			var _url = param.deltag;
			_r = confirm("Voulez-vous vraiment désactiver l'arrêt automatique de " + param.host);
			if (_r) {
				$.ajax({
					type: 'POST',
					url: _url
				});
			} else {
				alert('Action annulée');
			}
			$.ajax({
				type: 'POST',
				url: _url
			});
		}

		function addtag(param) {
			var _url = param.addtag;
			confirm("Voulez-vous vraiment activer l'arrêt automatique de " + param.host);
			if (_r) {
				$.ajax({
					type: 'POST',
					url: _url
				});
			} else {
				alert('Action annulée');
			}
			$.ajax({
				type: 'POST',
				url: _url
			});
		}

		function hidediv(param) {
			var x = document.getElementById(param.host);
			console.log(x);
			if (x.style.display === "block") {
				x.style.display = "none";
			} else {
				x.style.display = "block";
			}
		}
	</script>
<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin']) || $_SESSION['client'] != 'cod') {
    header('Location: http://cod-elk-lin1/index.html');
    exit;
}
?>

	<?php
	$outputOS = shell_exec('sh ./scripts/check_os.sh');
	if ($outputOS == 0) {
		$outputSAP = shell_exec('sh ./scripts/check_disp.sh');
	} else {
		$outputSAP = 1;
	}
	?>

	<div class="navbar">
		<ul>
			<li><a href="/cod">Home</a></li>
			<li><a onclick="history.go(0);">Refresh</a></li>
			<li><a href="help.php">Help</a></li>
		</ul>
	</div>

	<div class="conteneur">
		<div class="dropdown-coddevlin">
			<nav>
				<label for="touch"><span>cod-dev-lin </span></label>
				<input type="checkbox" id="touch">
				<ul class="slide">
					<li><a onclick="stopvm(coddevlin)">Stop VM</a></li>
					<li><a onclick="startvm(coddevlin)">Start VM</a></li>
				</ul>
			</nav>
		</div>
		<div>
			<div class="os">
				<?php
				if ($outputOS == 0) { ?>
					<div class="led-green-os">os</div>
				<?php } else { ?>
					<div class="led-red-os">os</div>
				<?php } ?>
			</div>
			<div class="sap">
				<?php
				if ($outputSAP == 0) { ?>
					<div class="led-green">sap</div>
				<?php } else { ?>
					<div class="led-red">sap</div>
				<?php } ?>
			</div>

		</div>
	</div>
	</div>

	</div>
</BODY>

</HTML>