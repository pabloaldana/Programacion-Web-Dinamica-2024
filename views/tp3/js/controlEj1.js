$(document).ready(function () {
    "use strict";
  
    const forms = $(".form");
  
    // Manejador de evento para el evento de envío del formulario
    forms.on("submit", function (event) {
      if (!this.checkValidity()) {
        event.preventDefault();
        event.stopPropagation();
      }
  
      $(this).addClass("was-validated");
    });
  });
  