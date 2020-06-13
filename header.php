<header> 
	<div id="header">
		<p id="titre_site">SUPFILE</p>
		<div id="div_date_heure">
			<div id="div_date"></div>
			<div id="div_horloge"></div>
		</div>
	</div>

		<script type="text/javascript">
			window.onload=function() {
				date_du_jour('div_date');
				horloge('div_horloge');
			};
			 
			function date_du_jour(dt) {		
				if(typeof dt=="string") {		
				dt = document.getElementById(dt);
				}			 	
			function actualiser() {
			   	var date = new Date();
				var j = new Array("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");
				var jour = j[date.getDay()];
				var num = date.getDate();
				var m = new Array('Janvier', 'F&eacute;vrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Ao&ucirc;t', 'Septembre', 'Octobre', 'Novembre', 'D&eacute;cembre');
				var mois = m[date.getMonth()];
				var annee = date.getFullYear();
				var strDate = jour + ' ' + num + ' ' + mois + ' ' + annee;
			    dt.innerHTML = strDate;
			    dt.innerHTML = strDate ;
			  }
			actualiser();
			setInterval(actualiser,1000);
			}

			function horloge(el) {
				if(typeof el=="string") {
				el = document.getElementById(el);
			 	}
			function actualiser() {
			    var heure = new Date();
			    var strHeure = heure.getHours();
			    strHeure += ':'+(heure.getMinutes()<10?'0':'')+heure.getMinutes();
			    strHeure += ':'+(heure.getSeconds()<10?'0':'')+heure.getSeconds();
			    el.innerHTML =strHeure;
			  }
			actualiser();
			setInterval(actualiser,1000);
			}
		</script>
</header>