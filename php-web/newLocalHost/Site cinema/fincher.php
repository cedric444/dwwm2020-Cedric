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
    include ('header.php');
}
else
{
    echo'erreur';
}
if (file_exists('nav.php'))
{
    include ('nav.php');
}
else
{
    echo'erreur';
}
echo'<div class="page column">
	<div class="article">
		<h2>David Fincher</h2>
		<article>
			<div class="photo"><img src= "IMG/Fincher.jpg" alt= "photo de David Fincher"><div class="legende">David Fincher</div></div>
            <div class="texte">David Fincher est l\'un des auteurs les plus ambitieux et controversés d\'Hollywood. Un cinéaste exigeant, perfectionniste,
             qui en plus de vingt ans d\'activité et à peine plus d\'une poignée de films a su s\'imposer comme un réalisateur qui compte. 
             Pas facile de le situer, un temps nouvelle star d\'une génération avec Fight Club (1999), il fut presque aussi vite oublié par ceux qui l\'avaient encensé lorsqu\'il réalise son film le plus passionnant, Zodiac (2007).</div>
		</article>
	</div>
	<div class="espaceHor"></div>
	<div class="article">
		<h3>L\'esthétique au service du propos</h3>
		<article>
		<div class="photo"><img src="IMG/Fight_Club.jpg" alt="Fight Club"><div class="legende">Fight Club, 1999</div></div>
            <div class="texte">Fincher est un maniériste éduqué à l\'image de cinéma, de télévision ; son cinéma cherche l\'efficacité, l\'impact visuel fort, explicite, novateur,
             sans pourtant jamais rogner sur le sens. Il conçoit des mécaniques, des rapports (presque mentaux), entièrement structurés autour d\'un récit et de ses personnages
              dont chaque plan est une illustration balisée. Ses films sont tous portés par une vision, une angoisse, un sentiment de destruction, une impossible ou difficile réconciliation
            avec le monde. Ils ont la marque d\'une forme de nihilisme ou de cynisme. Un peu anar, punk, ils cherchent la provocation, l\'effet coup de poing, de l\'esthétique saumâtre de Seven (1995)
             au discours démagogique et post teenager de Fight Club, grande quête de pureté désespérée dans un monde pourri par l\'argent et le consumérisme.</div>
		 </article>
		 <div class="espaceHor"></div>
		 <div class="photo"><img src="IMG/Seven.jpg" alt="Seven"><div class="legende">Brad Pitt et Morgan Freeman dans Seven, sorti en 1995</div></div>
	 </div>
</page>
</body>
</html>';