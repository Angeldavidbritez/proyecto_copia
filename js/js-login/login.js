function login(u, p) {
    $.ajax({
        url: "funciones_php/funcion_login.php",
        data: {'comprobar':'verificar', 'mail': u, 'password': p },
        type: "POST",
        dataType: "json",
        success: function (r) {
            console.log(r); // <-- Imprimir la respuesta del servidor en la consola
            if (r.error === "1") {
                alert("Inicio exitoso");
                window.location.href = "index.php";
            } else {
                alert("Inicio de sesión fallido");
            }
        }
    });
}
