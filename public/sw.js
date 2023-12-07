// public/service-worker.js

self.addEventListener('install', function(event) {
    event.waitUntil(
        caches.open('my-cache').then(function(cache) {
            return cache.addAll([
                // Lista de archivos que quieres que se almacenen en caché
                '/',
                '/css/app.css',
                '/js/app.js',
                // Otros archivos estáticos
            ]);
        })
    );
});

self.addEventListener('fetch', event => {
    event.respondWith(
        new Promise(resolve => {
            setTimeout(() => {
                caches.match(event.request)
                    .then(response => response || fetch(event.request))
                    .then(resolve);
            }, 9000); // Ajusta el retardo según tus necesidades
        })
    );
});

self.addEventListener('activate', event => {
    event.waitUntil(
        caches.keys().then(cacheNames => {
        return Promise.all(
            cacheNames.map(cacheName => {
            if (cacheName !== CACHE_NAME) {
                return caches.delete(cacheName);
            }
            })
        );
        })
    );
    });
    self.addEventListener('install', event => {
        self.skipWaiting(); // Saltar la fase de espera y activar inmediatamente el Service Worker
        event.waitUntil(
            (async () => {
                const loadingPage = await caches.match('/loading.html');
                const precache = caches.open(CACHE_NAME);
                const [loadedPage, precacheResult] = await Promise.all([
                    loadingPage,
                    precache.then(cache => cache.addAll(urlsToCache)),
                ]);
                return loadedPage || precacheResult;
            })()
        );
    });
    
    // Ocultar la página de carga cuando el Service Worker está activado
    self.addEventListener('activate', event => {
        event.waitUntil(
            (async () => {
                await clients.claim(); // Reclamar el control de las páginas abiertas por el Service Worker
                const loadingPage = await caches.match('/loading.json');
                const clientsMatch = await clients.matchAll({ type: 'window' });
                clientsMatch.forEach(client => {
                    client.navigate(client.url);
                    client.postMessage({ action: 'hideLoading' });
                });
                return loadingPage;
            })()
        );
    });
    