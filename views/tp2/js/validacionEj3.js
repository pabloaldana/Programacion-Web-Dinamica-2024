
$(document).ready(function () {
    "use strict";

    const form = $(".form");
    

    // Manejador de evento para el evento de envío del formulario
    form.on("submit", function (event) {
        const usario= $("#usuario").val();
        const clave= $("#clave").val();
        if (!this.checkValidity()) {
            event.preventDefault(); 
            event.stopPropagation();    
        }
        if (usario === clave) {
            event.preventDefault();
            $("#error-user-password").text(
              "La contraseña no puede ser igual al nombre de usuario"
            );
            $("#error-user-password").css({ color: "red", "font-size": "14px" });
        }else{
            $("#error-user-password").text("");
        }
      
          //* expresion regular: mim 8 caracteres entre letras/numeros
          const regex = /^(?=.*[a-zA-Z])(?=.*\d).{8,}$/;
      
          if (!regex.test(clave)) {
            event.preventDefault();
            $("#error-password").text(
              "La contraseña debe estar formada por letras y numeros"
            );
            $("#error-password").css({ color: "red", "font-size": "14px" });
          }
        $(this).addClass("was-validated");  
    });
    
});