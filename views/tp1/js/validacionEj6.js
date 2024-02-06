$.validator.setDefaults( {
    submitHandler: function () {
       alert( "submitted!" );
    }
 });
 
 
 $(document).ready(function(){
    $('#idForm').validate({
       rules: {
          nombre: {
             required: true,
             minlength: 5
          },
          apellido: {
             required: true
          },
          edad: {
             required: true,
          },
          direccion: {
             required: true,
             minlength: 5,
             equalTo: "#password"
          },
       },
       messages: {           
          nombre: {
            required: "Por favor ingresa tu nombre ",
            minlength: "Tu nombre debe ser de no menos de 5 caracteres"
          },
          apellido: {
            required: "Por favor ingresa tu apellido ",
            minlength: "Tu nombre debe ser de no menos de 5 caracteres"
          },
          edad: {
             required: "Por favor ingresa tu edad",
          },
          direccion: {
             required: "Ingresa tu direccion",
          },
       },
       errorElement: "em",
       errorPlacement: function (error, element) {
          // Add the `help-block` class to the error element
          error.addClass("help-block");
 
          if (element.prop( "type" ) === "checkbox") {
             error.insertAfter(element.parent("label") );
          } else {
             error.insertAfter(element);
          }
       },
       highlight: function ( element, errorClass, validClass ) {
          $( element ).parents( ".col-sm-10" ).addClass( "has-error" ).removeClass( "has-success" );
       },
       unhighlight: function (element, errorClass, validClass) {
          $( element ).parents( ".col-sm-10" ).addClass( "has-success" ).removeClass( "has-error" );  
       } 
    });
 });


 
 