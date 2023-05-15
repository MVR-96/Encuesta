function validarCombo(){
    var combo = document.getElementById("rbPrg2");
    if (combo.value == "") {
      document.getElementById("mensaje").innerHTML = '<div class="alert alert-danger" role="alert">Debe seleccionar una opción</div>';
      event.preventDefault(); // evita que se envíe el formulario
    } else {
      document.getElementById("mensaje").innerHTML = "";
      return true;
    }
}

function validarCombo2(){
  var combo = document.getElementById("rbPrg3");
  if (combo.value == "") {
    document.getElementById("mensaje2").innerHTML = '<div class="alert alert-danger" role="alert">Debe seleccionar una opción</div>';
    event.preventDefault(); // evita que se envíe el formulario
  } else {
    document.getElementById("mensaje2").innerHTML = "";
    return true;
  }
}

function validarCombo3(){
  var combo = document.getElementById("rbPrg4");
  if (combo.value == "") {
    document.getElementById("mensaje3").innerHTML = '<div class="alert alert-danger" role="alert">Debe seleccionar una opción</div>';
    event.preventDefault(); // evita que se envíe el formulario
  } else {
    document.getElementById("mensaje3").innerHTML = "";
    return true;
  }
}