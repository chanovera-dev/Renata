// Selecciona todas las tarjetas dentro del contenedor con clase 'cards-portfolio'
const cardsPortfolio = document.querySelectorAll('.cards-portfolio .card-portfolio');

// Función de callback que se ejecuta cuando hay cambios en la visibilidad
const callback = (entries, observerPortfolio) => {
  entries.forEach(entry => {
    // Verifica si el elemento es visible en al menos un 10%
    if (entry.isIntersecting) {
      entry.target.classList.add('in');
      // Opcionalmente, dejar de observar el elemento después de agregar la clase
      observerPortfolio.unobserve(entry.target);
    }
  });
};

// Configuración del observer
const options = {
  root: null, // El viewport del navegador
  rootMargin: '0px',
  threshold: 0.1 // 10% de visibilidad
};

// Crea el observer
const observerPortfolio = new IntersectionObserver(callback, options);

// Comienza a observar cada tarjeta
cardsPortfolio.forEach(card => {
  observerPortfolio.observe(card);
});
