function showPopup() {
    Swal.fire({
        html: '<h3>¡Gracias por enviar el formulario!</h3>',
        icon: 'success',
        didClose: () => {
          window.location.href = "index.php";
        }
      });
}