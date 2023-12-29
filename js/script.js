
document.addEventListener('DOMContentLoaded', function() {
    var hoy = new Date();
    var nombresMeses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
    var fecha = hoy.getDate() + ' de ' + nombresMeses[hoy.getMonth()] + ' de ' + hoy.getFullYear();
    document.getElementById('fecha-actual').textContent = fecha;
});

document.addEventListener('DOMContentLoaded', function () {
    var dropdown = document.getElementById('dropdownMenuButton');
    var dropdownMenu = document.querySelector('.dropdown-menu');

    dropdown.onmouseover = function () {
        dropdownMenu.classList.add('show');
    };

    dropdown.onmouseout = function () {
        dropdownMenu.classList.remove('show');
    };

    dropdownMenu.onmouseover = function () {
        dropdownMenu.classList.add('show');
    };

    dropdownMenu.onmouseout = function () {
        dropdownMenu.classList.remove('show');
    };
});

document.addEventListener('DOMContentLoaded', function () {
    var dropdown = document.getElementById('dropdownMenuButton1');
    var dropdownMenu = document.querySelector('.d1');

    dropdown.onmouseover = function () {
        dropdownMenu.classList.add('show');
    };

    dropdown.onmouseout = function () {
        dropdownMenu.classList.remove('show');
    };

    dropdownMenu.onmouseover = function () {
        dropdownMenu.classList.add('show');
    };

    dropdownMenu.onmouseout = function () {
        dropdownMenu.classList.remove('show');
    };
});

document.addEventListener('DOMContentLoaded', function () {
    var dropdown = document.getElementById('dropdownMenuButton2');
    var dropdownMenu = document.querySelector('.d2');

    dropdown.onmouseover = function () {
        dropdownMenu.classList.add('show');
    };

    dropdown.onmouseout = function () {
        dropdownMenu.classList.remove('show');
    };

    dropdownMenu.onmouseover = function () {
        dropdownMenu.classList.add('show');
    };

    dropdownMenu.onmouseout = function () {
        dropdownMenu.classList.remove('show');
    };
});



let botoncompra = document.getElementById('enseñarc');

botoncompra.addEventListener('click', function() {
    // Acciones a realizar cuando se haga clic en el botón
    let elemento =document.getElementById('contacto');
    elemento.classList.remove("ocultar_contacto");
});