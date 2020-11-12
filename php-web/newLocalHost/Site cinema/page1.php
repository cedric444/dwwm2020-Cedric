<?php
if (file_exists('head.php'))
{
	include ('head.php');
}
else
{
	echo'erreur';
}
if (file_exists('header.php'))
{
	include('header.php');
}
else
{
	echo 'erreur';
}
echo'<div class="espace"></div>';
if (file_exists('nav.php'))
{
	include ('nav.php');
}
else
{
	echo 'erreur';
}

echo'<div class="page column">
	<div class="article">
		<h2>John Mctiernan</h2>
		<article>
			<div class="espace"></div>
			<div class="photo"><img src= "IMG/Mctiernan.jpg" alt= "photo de John Mctiernan"><div class="legende">John Mctiernan en 2016</div></div>
			<div class="texte">Après les années 70 et le Nouvel Hollywood qui fut caractérisé par des questions idéologiques et existentielles, dues au contexte de la guerre
du Vietnam et au Watergate, les années 80 voient le retour d\'un cinéma plus de divertissement et notemment du héros.
En 1985, un film à petit budget, Nomads, se fait remarquer malgré son manque de succès et permet à son réalisateur et scénariste de se retrouver à la tête d\'une grosse
production, Predator. C\'est ainsi que John Mctiernan va se faire un nom et devenir un des réalisateurs les plus novateurs et influents
de ces trentes dernières années.</div>
			<div class="espace"></div>
		</article>
	</div>
	<div class="espaceHor"></div>
	<div class="article">
		<h3>De <strong>Predator</strong> à <strong>Die Hard With a vengeance</strong>, le code du héros revu et corrigé</h3>
		<article>
		<div class="photo"><img src="IMG/Predator.jpg" alt="predator"><div class="legende">Arnomd Schwarzenegger dans Predator en 1986</div></div>
			<div class="texte">Dès le début de sa carrière, John Mctiernan prend le cinéma comme jeu. Très souvent, un film de McTiernan semble procéder d’un pari astucieux et ludique : mélanger film de guerre et monstre de science-fiction,
 enfermer son personnage dans une tour de Los Angeles, imaginer des poursuites de sous-marins. Le jeu est même le sujet de Die Hard With a vengeance , où le héros du film est soumis à une série d’épreuves par le « méchant » dans un temps compté.
 Le braquage d’œuvres d’art devient un passe-temps de riche dilettante (Thomas Crown). Basic imagine une habile combinatoire narrative où les événements montrés varient en fonction des bifurcations possibles du récit.
 Le cinéma semble être pour le réalisateur un terrain d’expérimentation au centre duquel il peut ainsi appliquer toute sorte de trouvailles à la fois esthétiques et techniques, sans arrêt obsédé par l’idée de faire de la caméra elle-même « un narrateur, une voix active, presque un commentaire de l’action en train de se faire ».
 Si tout désormais se doit d’être bouclé, dans un cinéma américain qui rejette le doute, l’incertitude et les contradictions non résolues, McTiernan déplace le centre névralgique du divertissement dans la figuration de nouveaux types de corps, dans l’invention d’une silhouette humaine postmoderne, à la fois fragile et irréelle.</div>

		 </article>
		 <div class="espaceHor"></div>
		 <div class="photo"><img src="IMG/Die_Hard_3.jpg" alt="Die Hard 3"><div class="legende">Bruce Willis dans Die Hard 3, sorti en 1995</div></div>
	 </div>
</page>
</body>
</html>';


