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
    menuMobile = document.querySelector('.menu-mobile--wrapper')
    panelOverlay = document.querySelector('#panel-overlay')

    menuMobile.style.transition = "all .3s ease"
    menuMobile.style.left = "0"
    menuMobile.style.boxShadow = "0 10px 20px rgba(61, 70, 81, 1)"
    panelOverlay.style.transition = "opacity .5s ease"
    panelOverlay.style.left = "0"
    panelOverlay.style.opacity = "1"
}

// cerrar el menú mobile
function closeMenuMobile() {
    menuMobile = document.querySelector('.menu-mobile--wrapper')
    panelOverlay = document.querySelector('#panel-overlay')

    menuMobile.style.transition = "all 1s ease"
    menuMobile.style.left = "-100%"
    menuMobile.style.boxShadow = "0 10px 20px rgba(61, 70, 81, 0)"
    panelOverlay.style.transition = "opacity 1s ease"
    panelOverlay.style.left = "-100%"
    panelOverlay.style.opacity = "0"
}

// cierra el menú mobile y el sidebar mobile si se presiona el panel que cubre el contenido
document.addEventListener("click", function(event) {
    if (event.target && event.target.id === 'panel-overlay') {
        closeMenuMobile();
    }
});