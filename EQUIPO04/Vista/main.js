function enviar() {
  // Obtener los valores de los campos
  var nombre = $("#nombre").val();
  var correo = $("#correo").val();
  // Agregar aquí más campos si es necesario

  // Validar que los campos estén llenos
  if (nombre == "" || correo == "") {
      swal({
          title: "Error",
          text: "Por favor, complete todos los campos del formulario.",
          icon: "error"
      });
  } else {
      // Los campos están llenos, mostrar el SweetAlert de envío exitoso
      swal({
          title: "ENVIADO",
          text: "Se envió con éxito",
          icon: "success"
      }).then(function() {
          window.location.href = "index.php"; // Redirige a la página de solicitud
      });
  }
}
