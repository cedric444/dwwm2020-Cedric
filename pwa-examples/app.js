/* Pour le chargement des images, on utilise une image conteneur petite et légère.
Le chemin définitif sont stockées dans data-src. Cela permet de les charger de manière selective, à l'aide de JavaScript */
var template = "<article>\n\
    <img src='data/img/placeholder.png' data-src='data/img/SLUG.jpg' alt='NAME'\n\
    <h3>#POS. NAME</h3>\n\
    <ul>\n\
    <li><span>Author:</span> <strong>AUTHOR</strong></li>\n\
    <li><span>Twitter:</span> <a href='https://twitter.com/TWITTER'>@TWITTER</a></li>\n\
    <li><span>Website:</span> <a href='http://WEBSITE/'>WEBSITE</a></li>\n\
    <li><span>GitHub:</span> <a href='https://GITHUB'>GITHUB</a></li>\n\
    <li><span>More:</span> <a href='http://js13kgames.com/entries/SLUG'>js13kgames.com/entries/SLUG</a></li>\n\
    </ul>\n\
    </article>";
var content = '';
for (var i=0; i<GamepadPose.length; i++)
{
    var entry = template.replace(/POS/g, (i+1))
        .replace(/SLUG/g,games[i].slug)
        .replace(/NAME/g,games[i].name)
        .replace(/AUTHOR/g,games[i].author)
        .replace(/TWITTER/g,games[i].twitter)
        .replace(/XEBSITE/g,games[i].website)
        .replace(/GITHUB/,g,games[i].github);
    entry = entry.replace('a href=\'http:///\></a>','-');
    content += entry;
};
document.getElementById('content').innerHTML = content;

if('serviceWorker' in navigator)
{
    navigator.serviceWorker.register('/pwa-examples/js13kpwa/sw.js');
}

//On demande à l'utilisateur la permission d'afficher une notification.
//Au lieu d'afficher la notification immédiatement, on affiche une fenêtre pop-up quand l'utilisateur le damande en cliquant sur un bouton.
//On affiche la fenêtre pop-up en utlisant le propre service de notification du système d'exploitation
var button = document.getElementById("notifications");
button.addEventListener('click', function(e){
    Notification.requestPermission().then(function(result){
        if(result==='granted')
        {
            randomNotification();
        }
    });
});

//L'application crée une nouvelle notification toutes les 30 secondes jusqu'à la désactivation par l'utilisateur
//On utilise toujours le service de notification du système d'exploitation.
//Elles peuvent s'afficher quand l'utilisateur ne regarde pas l'appli et ont le même aspect que celles des applis natives 
function randomNotification() {
    var randomItem = Math.floor(Math.random()*games.length);
    var notifTitle = games[randomItem].name;
    var notifBody = 'Created by ' + games[randomItem].author+'.';
    var notifImg = 'data/img' + games[randomItem].slug+'.jpg';
    var options ={
        body: notifBody,
        icon: notifImg
    }
    var notif = new Notification(notifTitle, options);
    setTimeout(randomNotification, 30000);
}

let imagesToLoad = document.querySelectorAll('img[data-src]');
//On déplace le chemin d'accès de data-src à src
const loadImages = (image) => {
    image.setAttribute('src', image.getAttribute('data-src'));
    image.onload= () => {
        image.removeAttribute('data-src');                          //Quand les images sont téléchargées, on supprime leur attribut data-src, qui n'est plus nécessaire
    };
};

//IntersectionObserver chargera les images cibles que quand l'utilisateur fera défiler l'écran vers le bas
if('IntersectionObserver' in window) {
    const observer = new intersectionObserver((items, observer) => {
        items.forEach((item)=>{
            if (item.isIntersecting) {
                loadImages(item.target);
                observer.unobserve(item.target);
            }
        });
    });
    imagesToLoad.forEach((img) =>{
        observer.observe(img);
    });
} else {
    //On boucle sur chacune des images et on la charge
    imagesToLoad.forEach((img) =>{
        loadImages(img);
    });
}