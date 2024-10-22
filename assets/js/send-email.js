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
                loadScript('https://www.chanovera.com/wp-includes/js/dist/hooks.min.js'),
                loadScript('https://www.chanovera.com/wp-includes/js/dist/i18n.min.js'),
                loadScript('https://www.chanovera.com/wp-content/plugins/contact-form-7/includes/swv/js/index.js'),
                loadScript('https://www.chanovera.com/wp-content/plugins/contact-form-7/includes/js/index.js'),
                loadScript('https://www.chanovera.com/wp-content/plugins/contact-form-7/includes/css/styles.css')
                
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

// Envío del formulario mediante AJAX utilizando Contact Form 7
document.addEventListener('wpcf7submit', function(event) {
    // Aquí puedes manejar la respuesta de Contact Form 7
    if (event.detail.status === 'mail_sent') {
        // Mostrar mensaje de éxito y ocultar el formulario
        
    } else {
        // Manejar errores si es necesario
        console.log("Hubo un error al enviar el formulario.");
    }
}, false);

function showForm() {
    let form = document.getElementById("contact-form");
    let message = document.getElementById("message-sent__wrapper");
    let title = document.getElementById("title--get-in-touch");
    let showForm = document.getElementById('show-form');
    
    title.style.maxHeight = "300px";
    title.style.marginBottom = "20px";
    form.reset();
    form.style.maxHeight = "700px";
    message.style.maxHeight = "0";
    showForm.style.maxHeight = "0";
}