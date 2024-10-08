/* agrega clases al hacer scroll */
function scrollActions() {
    const body = document.body;
    const scrollUp = "scroll-up";
    const scrollDown = "scroll-down";
    let lastScroll = 0;
    
    window.addEventListener("scroll", () => {
        const currentScroll = window.pageYOffset;
        if (currentScroll <= 0) {
            body.classList.remove(scrollUp);
            return;
        }
      
      if (currentScroll > lastScroll && !body.classList.contains(scrollDown)) {
        // down
        body.classList.remove(scrollUp);
        body.classList.add(scrollDown);
      } else if (currentScroll < lastScroll && body.classList.contains(scrollDown)) {
        // up
        body.classList.remove(scrollDown);
        body.classList.add(scrollUp);
      }
      lastScroll = currentScroll;
    });
}
scrollActions();

// F U N C I O N E S   D E L   M E N Ú   M O B I L E

// abrir el menú mobile
function openMenuMobile() {
    // agrega al menú la clase open, mostrándolo
    document.querySelector('.menu-mobile--wrapper').classList.add('open')
    // agrega la clase show a una capa que cubre el resto del sitio
    document.querySelector('#panel-overlay').classList.add('show')
    document.body.classList.add('lock')
}
// cerrar el menú mobile
function closeMenuMobile() {
    // quita al menú la clase open, ocultándolo
    document.querySelector('.menu-mobile--wrapper').classList.remove('open')
    // quita la clase show a una capa que cubre el resto del sitio
    document.querySelector('#panel-overlay').classList.remove('show')
    document.body.classList.remove('lock')
}
// cierra el menú mobile y el sidebar mobile si se presiona el panel que cubre el contenido
document.addEventListener("click", function(event) {
    if (event.target && event.target.id === 'panel-overlay') {
        closeMenuMobile()
    }
})
// Cierra el menú mobile si presionas la tecla esc
document.addEventListener('keydown', function(event) {
    if (event.key === 'Escape') {
        closeMenuMobile()
    }
})

function openSearchformMobile() {
    document.querySelector('#searchform-mobile').classList.add('open')
}

function closeSearchformMobile() {
    document.querySelector('#searchform-mobile').classList.remove('open')
}