const cacheName = 'v1';
const cacheAssets = [
    '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js',
    '/assets/js/vertical-responsive-menu.min.js',
    '/assets/js/app.js',
    '/assets/vendor/fontawesome-free/css/all.min.css',
    '/assets/vendor/bootstrap/css/bootstrap.min.css'
];

// Call Install Event
self.addEventListener('install', e => {
    console.log('Service Worker Installed');

    e.waitUntil(
        caches
            .open(cacheName)
            .then(cache => {
                cache.addAll(cacheAssets);
            })
            .then(() => self.skipWaiting())
    );
});

// Call Activate Event
self.addEventListener('activate', e => {
    console.log('Service Worker: Running');
});