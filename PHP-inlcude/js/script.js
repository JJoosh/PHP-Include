function validar_submit() {
  if (document.form.services.value.trim().length === 0) {
    alert("Por favor seleccione un servicio");
    document.form.services.focus();
    return false;
  }
  else if (document.form.time.value.trim().length === 0) {
    alert("Por favor seleccione un tiempo");
    document.form.time.focus();
    return false;
  }
  else {
    return true;
  }
}