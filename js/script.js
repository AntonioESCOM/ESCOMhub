document.addEventListener('DOMContentLoaded', function() {
    var hoy = new Date();
    var fecha = hoy.getDate() + '/' + (hoy.getMonth() + 1) + '/' + hoy.getFullYear();
    document.getElementById('fecha-actual').textContent = fecha;
});