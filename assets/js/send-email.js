// Selecciona el elemento con el ID 'contact'
const contactSection = document.getElementById('contact');

// Función para cargar los archivos JavaScript
function loadScript(src) {
    return new Promise((resolve, reject) => {
        const script = document.createElement('script');
        script.src = src;
        script.onload = () => resolve();
        script.onerror = () => reject();
        document.head.appendChild(script);
    });
}

// Configuración del Intersection Observer
const observerContact = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            // Carga los archivos cuando el elemento es visible
            Promise.all([
                loadScript('/wp-includes/js/dist/hooks.min.js'),
                loadScript('/wp-includes/js/dist/i18n.min.js'),
                loadScript('/wp-content/plugins/contact-form-7/includes/js/index.js'),
                loadScript('/wp-content/plugins/contact-form-7/includes/swv/js/index.js')
            ]).then(() => {
                console.log('Todos los scripts se han cargado correctamente.');
            }).catch((error) => {
                console.error('Error al cargar uno de los scripts:', error);
            });

            // Dejar de observar una vez que se ha cargado
            observerContact.unobserve(contactSection);
        }
    });
}, {
    threshold: 0.1 // Ajusta este valor según necesites
});

// Comienza a observar el elemento
if (contactSection) {
    observerContact.observe(contactSection);
}
