// Seleccionamos el elemento que queremos observar
const form = document.querySelector('.wpcf7-form');

// Función que cambia los estilos según la clase
function checkClassAndChangeStyles() {
    const titleElement = document.getElementById('title--get-in-touch');
    const showFormElement = document.getElementById('show-form');

    if (form.classList.contains('sent')) {
        titleElement.style.maxHeight = '0';
        titleElement.style.marginBottom = '0';
        showFormElement.style.maxHeight = '100px';
    }
}

// Creamos un observador para los cambios en las clases de la forma
const observerContact = new MutationObserver((mutations) => {
    mutations.forEach(mutation => {
        if (mutation.type === 'attributes' && mutation.attributeName === 'class') {
            checkClassAndChangeStyles();
        }
    });
});

// Iniciamos el observador
if (form) {
    observerContact.observe(form, { attributes: true });
}

// Llamamos a la función al cargar la página por si ya tiene la clase 'sent'
checkClassAndChangeStyles();

function showForm() {
    const titleElement = document.getElementById('title--get-in-touch');
    const showFormElement = document.getElementById('show-form');
    const formContent = document.querySelector('.wpcf7-form p');

    titleElement.style.maxHeight = 'auto';
    titleElement.style.marginBottom = '20px';
    showFormElement.style.maxHeight = '0';
    formContent.style.maxHeight = '100px';
}