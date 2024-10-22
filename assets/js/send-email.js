// Crear un observer
const targetNode = document.getElementById('contact');
const config = { attributes: true, childList: true, subtree: true };

const callback = (mutationsList) => {
    for (let mutation of mutationsList) {
        if (mutation.type === 'attributes' || mutation.type === 'childList') {
            // Realiza la llamada AJAX aquí
            fetch('send-email.php')
                .then(response => response.text())
                .then(data => {
                    console.log('PHP ejecutado:', data);
                })
                .catch(error => console.error('Error:', error));
        }
    }
};

const observer = new MutationObserver(callback);
observer.observe(targetNode, config);
