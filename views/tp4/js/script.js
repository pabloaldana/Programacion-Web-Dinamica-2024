$(document).ready(function () {
    "use strict";

    const form = $(".form");

    // Manejador de evento para el evento de envío del formulario
    form.on("submit", function (event) {
        if (!this.checkValidity()) {
            event.preventDefault(); 
            event.stopPropagation();    
        }
         //controla que exista checks en el formulario
   
        $(this).addClass("was-validated");  
    });
});