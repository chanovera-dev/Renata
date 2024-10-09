/* agrega clases al hacer scroll */
function scrollActions() {
    const body = document.body
    const scrollUp = "scroll-up"
    const scrollDown = "scroll-down"
    let lastScroll = 0
    
    window.addEventListener("scroll", () => {
        const currentScroll = window.pageYOffset;
        if (currentScroll <= 0) {
            body.classList.remove(scrollUp);
            return
        }
      
      if (currentScroll > lastScroll && !body.classList.contains(scrollDown)) {
        // down
        body.classList.remove(scrollUp)
        body.classList.add(scrollDown)
      } else if (currentScroll < lastScroll && body.classList.contains(scrollDown)) {
        // up
        body.classList.remove(scrollDown)
        body.classList.add(scrollUp)
      }
      lastScroll = currentScroll
    })
}
scrollActions()

// F U N C I O N E S   D E L   M E N Ú   M O B I L E

// abrir el menú mobile
function openMenuMobile() {
    // agrega al menú la clase open, mostrándolo
    document.querySelector('.menu-mobile--wrapper').classList.add('open')
    document.querySelector('.menu-mobile--wrapper').style.transition = "all .3s ease-in-out"
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
        closeSearchformMobile()
    }
})

// abrir el formulario de búsqueda mobile
function openSearchformMobile() {
    document.querySelector('#searchform-mobile').classList.add('open')
}
// cerrar el formulario de búsqueda mobile
function closeSearchformMobile() {
    document.querySelector('#searchform-mobile').classList.remove('open')
}

// crea los botones de submenús para el menú mobile
function menuMobileWithChildrens() {
    // Obtener todos los elementos li con la clase 'menu-item-has-children'
    let menuItems = document.querySelectorAll('#menu-mobile .menu .menu-item-has-children')
    // asigna el tiempo de apertura y cierre
    document.querySelectorAll('li.menu-item-has-children ul.sub-menu').forEach(function(subMenu) {
        subMenu.style.transition = "all .5s ease-in-out";
    });
    // Iterar sobre cada elemento y agregar el botón con el SVG
    menuItems.forEach(function(item) {
        // Crear un nuevo botón
        var button = document.createElement('button')
        // Agregar la clase 'mobile-links__item-toggle' al botón
        button.classList.add('mobile-links__item-toggle')
        button.setAttribute('onclick', 'toggleSubMenu(this)')
        
        // Crear el elemento SVG
        var svg = document.createElementNS("http://www.w3.org/2000/svg", "svg")
        svg.setAttribute('xmlns', 'http://www.w3.org/2000/svg')
        svg.setAttribute('width', '13')
        svg.setAttribute('height', '13')
        svg.setAttribute('fill', 'currentColor')
        svg.setAttribute('class', 'bi bi-chevron-down')
        svg.setAttribute('viewBox', '0 0 16 16')

        // Crear el elemento path dentro del SVG
        var path = document.createElementNS("http://www.w3.org/2000/svg", "path")
        path.setAttribute('fill-rule', 'evenodd')
        path.setAttribute('d', 'M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z')

        // Agregar el path al elemento SVG
        svg.appendChild(path)
        // Agregar el SVG al botón
        button.appendChild(svg)

        // Agregar el botón al elemento li sin borrar su contenido existente
        item.appendChild(button)
    })
}
menuMobileWithChildrens()

// función toggle para el botón del submenú mobile
function toggleSubMenu(button) {
    let parentLi = button.closest('li')
    let subMenu = parentLi.querySelector('.sub-menu')

    // Alternar la clase 'open' para el submenú actual
    subMenu.classList.toggle('open')

    // Alternar la clase 'rotate' para el botón actual
    button.classList.toggle('rotate')
}
