// Añadir año dinámico en el footer
document.getElementById("year").textContent = new Date().getFullYear();

// Seleccionamos los elementos que abrirán los submenús
const activosLink = document.querySelector('[href="#activosCollapse"]');
const mantenimientoLink = document.querySelector('[href="#mantenimientoCollapse"]');
const sidebar = document.querySelector('.sidebar');
const content = document.querySelector('.content'); // Contenido principal

const activosCollapse = document.getElementById('activosCollapse');
const mantenimientoCollapse = document.getElementById('mantenimientoCollapse');

// Función para verificar el estado de los submenús
function checkSidebarExpansion() {
    // Si el submenú de activos está abierto, aplicamos el margen para ese submenú
    if (activosCollapse.classList.contains('show')) {
        content.classList.add('sidebar-open-activos');
    } else {
        content.classList.remove('sidebar-open-activos');
    }

    // Si el submenú de mantenimiento está abierto, aplicamos el margen para ese submenú
    if (mantenimientoCollapse.classList.contains('show')) {
        content.classList.add('sidebar-open-mantenimiento');
    } else {
        content.classList.remove('sidebar-open-mantenimiento');
    }

    // Si cualquiera de los submenús está abierto, añadimos la clase 'open' a la sidebar
    if (activosCollapse.classList.contains('show') || mantenimientoCollapse.classList.contains('show')) {
        sidebar.classList.add('open');
        content.classList.add('sidebar-open'); // Ajustamos el margen del contenido principal
    } else {
        sidebar.classList.remove('open');
        content.classList.remove('sidebar-open'); // Quitamos el ajuste cuando se cierra
    }
}

// Escucha los eventos de "show.bs.collapse" y "hide.bs.collapse" de Bootstrap
activosCollapse.addEventListener('shown.bs.collapse', checkSidebarExpansion);
activosCollapse.addEventListener('hidden.bs.collapse', checkSidebarExpansion);
mantenimientoCollapse.addEventListener('shown.bs.collapse', checkSidebarExpansion);
mantenimientoCollapse.addEventListener('hidden.bs.collapse', checkSidebarExpansion);

// Seleccionamos el botón para alternar la visibilidad de la sidebar en pantallas pequeñas
const sidebarToggleBtn = document.getElementById('sidebarToggleBtn');

// Ocultar la sidebar al cargar la página
window.addEventListener('load', function () {
    sidebar.style.visibility = "hidden"; // Sidebar oculta por defecto
});

// Función para alternar la visibilidad de la sidebar en pantallas pequeñas
sidebarToggleBtn.addEventListener('click', function () {
    // Alternar la clase 'sidebar-visible' para mostrar/ocultar la sidebar
    sidebar.classList.toggle('sidebar-visible');

    // Alternar la clase 'sidebar-shifted' para desplazar el contenido
    content.classList.toggle('sidebar-shifted');

    // Manejar dinámicamente la visibilidad y la transformación de la sidebar
    if (sidebar.classList.contains('sidebar-visible')) {
        sidebar.style.visibility = "visible";
    } else {
        sidebar.style.visibility = "hidden";

        // Cerrar los submenús si la sidebar se oculta
        if (activosCollapse.classList.contains('show')) {
            activosCollapse.classList.remove('show'); // Oculta el submenú de activos
        }
        if (mantenimientoCollapse.classList.contains('show')) {
            mantenimientoCollapse.classList.remove('show'); // Oculta el submenú de mantenimiento
        }

        // También podemos disparar los eventos de Bootstrap manualmente si es necesario
        activosCollapse.dispatchEvent(new Event('hidden.bs.collapse'));
        mantenimientoCollapse.dispatchEvent(new Event('hidden.bs.collapse'));
    }
});
