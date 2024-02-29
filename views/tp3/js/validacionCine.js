$(document).ready(function () {
  "use strict";

  const form = $(".form");

  // Manejador de evento para el evento de envío del formulario
  form.on("submit", function (event) {
    if (!this.checkValidity()) {
      event.preventDefault();
      event.stopPropagation();
    }
    //validacion para que la duracion no tenga mas de 3 digitos
    const duracion = $("#duracion").val();
    console.log(duracion);
    if (duracion.length > 3) {
      event.preventDefault();
      $("#error-long").text(
        "La duración debe ser un número entero con máximo 3 dígitos."
      );
      $("#error-long").css({ color: "red", "font-size": "14px" });
    } else {
      $("#error-long").text("");
    }
    //validacion para que el año no tenga mas de 4 digitos y no sea mayor al año actual
    const anio = $("#anio").val();
    var fechaActual = new Date();
    var añoActual = fechaActual.getFullYear();

    //!CORREGIR PORQUE NO SE BORRA CUANDO CAMBIO  AUN AÑO CORRECTO
    if (parseInt(anio) <= añoActual) {
      $("#error-anio").text("");
    } else {
      event.preventDefault();
      $("#error-anio").text("El año es mayor al trasncurrido");
      $("#error-anio").css({ color: "red", "font-size": "14px" });
    }

    //validacion para que los campos no esten vacios

    $(this).addClass("was-validated");
  });
});
