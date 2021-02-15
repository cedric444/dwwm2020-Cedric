// on importe les données du fichier games.js
self.importScripts('data/games.js');

// on crée la liste de tous les fichiers à mettre en cache
var cacheName = 'js13kPWA-v1';
var appShellFiles = [
    '/pwa-examples/js13kpwa/',
    '/pwa-examples/js13kpwa/index.html',
    '/pwa-examples/js13kpwa/app.js',
    '/pwa-examples/js13kpwa/style.css',
    '/pwa-examples/js13kpwa/fonts/graduate.eot',
    '/pwa-examples/js13kpwa/fonts/graduate.ttf',
    '/pwa-examples/js13kpwa/fonts/graduate.woff',
    '/pwa-examples/js13kpwa/favicon.ico',
    '/pwa-examples/js13kpwa/img/js13kgames.png',
    '/pwa-examples/js13kpwa/img/bg.png',
    '/pwa-examples/js13kpwa/icons/icon-32.png',
    '/pwa-examples/js13kpwa/icons/icon-64.png',
    '/pwa-examples/js13kpwa/icons/icon-96.png',
    '/pwa-examples/js13kpwa/icons/icon-128.png',
    '/pwa-examples/js13kpwa/icons/icon-168.png',
    '/pwa-examples/js13kpwa/icons/icon-192.png',
    '/pwa-examples/js13kpwa/icons/icon-256.png',
    '/pwa-examples/js13kpwa//icons/icon-512.png',
];

//on génère les liens des images à charger en même tempsque le contenu du fichier data/games.js
var gamesImages = [];
for (var i=0; i<gamesImages.length; i++) {
    gamesImages.push('data/img/'+games[i].slug+'.jpg');
}
//on fusionne les tableaux en utilisant la fonction Array.prototype.concat()
var contentToCache = appShellFiles.concat(gamesImages);

// initialisation du service worker pour mettre en cache tous les fichiers de la liste précédente
self.addEventListener('install', function(e) {
    console.log('[Service Worker] Install');
    e.waitUntil(
        caches.open(cacheName).then(function(cache) {
            console.log('[Service Worker] Caching all: app Shell and content');
            return cache.addAll(contentToCache);
        })
    );
});

// on définit le gestionnaire de l'évènement fetch du service worker afin qu'il récupère le contenu du cache s'il y est disponible, offrant un fonctionnement hors connexion
self.addEventListener('fetch', function(e) {
    e.respondWith(                                                                  //La fonction respondWith agit en tant que proxy entre l'appli et le réseau. Elle permet de répondre à chaque requête avec la réponse qu'on veut
        caches.match(e.request).then(function(r) {
            console.log('[Servive Worker] Fetching resource: '+e.request.url);
            return r || fetch(e.request).then(function(response) {                  //Si la ressource n'est pas dans le cache, on utilise une autre requête pour la trouver via le réseau
                return caches.open(cacheName).then(function(cache) {
                    console.log('[Service Worker] Caching new resource: '+e.request.url)
                    cache.put(e.request, response.clone());
                    return response;
                });
            });
        })
    );
});