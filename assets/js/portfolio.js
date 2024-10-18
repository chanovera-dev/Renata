const portfolio = document.getElementById('portfolio');
const titlePortfolio = document.querySelector('.title-portfolio');
const cards = document.querySelectorAll('.card-portfolio');

// Función que se llamará cuando las tarjetas entren en la vista
const handleIntersection = (entries, observer) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            // Agrega la clase 'in' cuando el elemento es visible
            entry.target.classList.add('in');
            // Puedes dejar de observar el elemento si ya no necesitas hacerlo
            observer.unobserve(entry.target);
        }
    });
};

// Opciones para el observer
const options = {
    root: portfolio, // Elemento raíz (puedes usar null para el viewport)
    threshold: 0.1 // Porcentaje de visibilidad para activar el observer
};

// Crea una instancia del Intersection Observer
const observer = new IntersectionObserver(handleIntersection, options);

// Observa cada tarjeta
cards.forEach(card => {
    observer.observe(card);
});
