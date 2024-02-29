$(document).ready(function () {
    // Oculta todos los divs de páginas, excepto el de "index"
    $("#biblioteca, #propuesta, #trabaja, #equipo, #origen, #mvv, #organigrama, #clientes, #contacto, #login, #interno").hide();

    // Bandera para controlar si se deben ignorar otros clics
    var ignoreClicks = false;

    // Función para mostrar una página específica
    function mostrarPagina(targetId) {
        // Oculta todos los divs de páginas
        $("#index, #biblioteca, #propuesta, #trabaja, #equipo, #origen, #mvv, #organigrama, #clientes, #contacto, #login, #interno").hide();

        // Mostrar div correspondiente
        $("#" + targetId).show();
    }

    // Escucha el click en los enlaces con las clases proporcionadas aquí abajo.
    $(".nav-link, .sign-link, .biblioteca-link, .propuesta-link, .trabaja-link, .login-link, .register-link").on("click", function (event) {
        if (ignoreClicks) {
            event.preventDefault(); // Evita la navegación real si se deben ignorar clics
        } else {
            // Obtiene el ID del div correspondiente al enlace
            var targetId = $(this).attr("href").substring(1);

            // Muestra la página correspondiente utilizando la función mostrarPagina
            mostrarPagina(targetId);
        }
    });

    // Agrega evento de clic al enlace con id "en"
    $("#en").on("click", function (event) {
        event.preventDefault(); // Evita la navegación real

        // Ignora todos los demás clics mientras se realiza la acción específica
        ignoreClicks = true;

        // Actualiza la ruta del archivo al que deseas navegar en la carpeta "en"
        window.location.href = "en/index.php";
    });

    $("#es").on("click", function (event) {
        event.preventDefault();
        ignoreClicks = true;
        window.location.href = "../index.php";
    });

    $("#ar").on("click", function (event) {
        event.preventDefault();
        ignoreClicks = true;
        window.location.href = "ar/index.php";
    });
});