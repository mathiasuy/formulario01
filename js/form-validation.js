// Wait for the DOM to be ready
$(function() {

$.validator.setDefaults({
    errorClass: 'invalid',
    validClass: "valid",
    //mensaje de error, elemento con el error, se ejecuta para cada uno cuando hay error
    errorPlacement: function (error, element) {
        $(element)
            .closest("form")
            .find("label[for='" + element.attr("id") + "']")
            .attr('data-error', error.text());
document.getElementById('image').innerHTML += " label[for='" + element.attr("id") + "']" + error.text();
      //      alert(error.text());
    },
});  

  //inicializa la validacion del form "registro"
  $("form[name='registro']").validate({
    //Reglas  de validacion
    rules: {
        //a la izquierda, id del control, a la derecha validacion
      nombre: "required",
      documento: {
        required: true,
        number : true,
        minlength : 8
        
      },
      email: {
        required: true,
          //usando validador de email del plugin
        email: true
      },
      password: {
        required: true,
        minlength: 5
      },
      foto:{
        required: true,
        extension: "jpg|png"
      }
    },
    //mensajes de error para cada  regla
     messages: {
          nombre: "Debe introducir su nombre.",
          documento: {
            required : "Debe introducir su documento",
            minlength : "Debe tener al menos 8 digitos sin puntos ni guiones y con digito verificador",
            number : "Solo se permiten números"
          },
          password: {
            required: "Proporcione una contraseña",
            minlength: "La clave debe tener al menos 5 caracteres"
          },
          email: "Proporcione un email válido",
          foto: {
            required : "¡Falta seleccionar la foto! debe ser *.jpg o *.png",
            extension : "Extensiones permitidas: *.jpg y *.png"
          }
    },
    submitHandler: function(form) {
      enviarDatos();
    }
  });
});