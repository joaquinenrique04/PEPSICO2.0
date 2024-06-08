function printForm() {
    var form = document.getElementById('registro-form');
    var formHtml = form.innerHTML;

    var newWindow = window.open('', '', 'height=500, width=500');
    newWindow.document.write('<html><head><title>Impresión de Formulario</title>');
    newWindow.document.write('<style>body { font-family: Arial, sans-serif; margin: 20px; }</style>');
    newWindow.document.write('</head><body>');
    newWindow.document.write(formHtml);
    newWindow.document.write('</body></html>');
    newWindow.document.close();
    newWindow.print();
}
document.addEventListener("DOMContentLoaded", function() {
    const menuButton = document.getElementById("menu");
    const navLat = document.getElementById("nav-lat");
    menuButton.addEventListener("click", function(event) {
        event.stopPropagation();  
        navLat.classList.toggle("open");
    });
    document.addEventListener("click", function(event) {
        if (!navLat.contains(event.target) && !menuButton.contains(event.target)) {
            navLat.classList.remove("open");
        }
    });
    navLat.addEventListener("wheel", function(event) {
        event.stopPropagation();
    });
    document.addEventListener("wheel", function(event) {
        if (!navLat.contains(event.target) && navLat.classList.contains("open")) {
            navLat.classList.remove("open");
        }
    });
});