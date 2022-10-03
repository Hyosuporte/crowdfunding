function frmLogin(e) {
  const email = document.getElementById("email");
  const password = document.getElementById("password");
  if (email.value == "") {
    //TODO: Agregar css para indicar que el usuario es obligatorio
  } else if (password.value == "") {
    //TODO: Agregar css para indicar que la contraseña es obligatoria
  } else {
    const url = base_url + "usuario/validar";
    const frm = document.getElementById("frmLogin");
    const http = new XMLHttpRequest();
    http.open("POST", url, true);
    http.send(new FormData(frm));
    http.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        const res = JSON.parse(this.responseText);
        console.log(res);
        if (res == "1") {
          window.location = base_url + "administrador";
        } else if (res == "2") {
          window.location = base_url + "cliente";
        } else {
          //TODO: Agregar css para indicar al usuario porque fallo la validacion
        }
      }
    };
  }
}

window.onload = function (){
  var opciones = {
    "nombre":nombre
}
$ajax({
    data:opciones,
    url: base_url+'pais/obtenerPaises',
    type: 'get',
    dataType: "json",
    success: function(response){
        response.forEach(element => {
            $("#pais").append("<option>"+element.nombre+"</option>");
        });            
    }
});
}
  

