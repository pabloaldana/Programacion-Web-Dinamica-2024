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
        const checkboxes = $(this).find('input[type="checkbox"]');
        if (checkboxes.length > 1) {
          const isChecked = checkboxes.is(":checked");
          checkboxes.toggleClass("is-invalid", !isChecked);
          checkboxes.next("label").toggleClass("text-danger", !isChecked);
        
          if (!isChecked) {
            event.preventDefault();
            event.stopPropagation();
            $(".errorCheck").text("Debe seleccionar al menos una opción.");
            $(".errorCheck").css({ color: "#dc3545", "font-size": "14px" });
          }
        }
        $(this).addClass("was-validated");  
    });
});