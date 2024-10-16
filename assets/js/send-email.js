function onloadRecaptcha(entries, observer) {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            // Cargar el archivo JavaScript
            const script = document.createElement('script');
            script.src = 'https://www.google.com/recaptcha/api.js';
            document.body.appendChild(script);
            // Dejar de observar la sección una vez que se carga el script
            observer.unobserve(entry.target);
        }
    });
}

// Observador de intersección para la sección
const observer1 = new IntersectionObserver(onloadRecaptcha, {
    root: null,
    rootMargin: '0px',
    threshold: 0.5 // Cuando el 50% de la sección sea visible
});

// Elemento a observar
const form = document.getElementById('contact');

observer1.observe(form);

function enableSubmitButton() {
    document.getElementById('submitBtn').removeAttribute('disabled');
    document.getElementById('submitBtn').classList.remove('disabled');
}

document.addEventListener("DOMContentLoaded", function() {
    let form = document.getElementById("contact-form");
    let message = document.getElementById("message-sent__wrapper");
    let title = document.getElementById("title--get-in-touch");
    let showForm = document.getElementById('show-form');
    form.addEventListener("submit", function(event) {
        event.preventDefault(); // Evitar el envío predeterminado del formulario

        let formData = new FormData(form);

        // Envío del formulario mediante AJAX
        let xhr = new XMLHttpRequest();
        xhr.open("POST", my_ajax_obj.send_email_url, true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    // Mostrar mensaje de éxito y ocultar el formulario
                    title.style.maxHeight = "0";
                    title.style.marginBottom = "0";
                    form.style.maxHeight = "0";
                    message.style.maxHeight = "300px";
                    showForm.style.maxHeight = "100px";
                } else {
                    // Manejar errores si es necesario
                    console.log("Hubo un error al enviar el formulario.");
                }
            }
        };
        xhr.send(formData);
    });
});

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