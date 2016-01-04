function validarDatos(){
  var variable = true;

  if(!document.form.nombre.value){
    alert("Se necesita un nombre...!");
    documet.form.nombre.value.focus;
    variable="false";
    }

  if(variable){
    document.form.submit;
    }
  }
  window.onlead.function(){
    document.getElemetById('boton').onclick.validarDatos,
}
