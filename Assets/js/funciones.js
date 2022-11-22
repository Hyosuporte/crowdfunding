document
  .getElementById("configPerfil")
  .addEventListener("onLoad", listarDatos(), true);

/*window.onload = function () {
  var fecha = new Date();
  var mes = fecha.getMonth() + 1;
  var dia = fecha.getDate();
  var ano = fecha.getFullYear();
  if (dia < 10) dia = "0" + dia;
  if (mes < 10) mes = "0" + mes;

  let search_date = document.getElementById("ejecucion");
  let final_date = document.getElementById("final");
  search_date.value = ano + "-" + mes + "-" + dia;
  final_date.value = ano + "-" + mes + "-" + dia;
  search_date.min = ano + "-" + mes + "-" + dia;
  final_date.min = ano + "-" + mes + "-" + dia;
  //aqui se calcula el rango maximo de fecha a 6 meses
  var mesMAX = fecha.getMonth() + 7;
  var diaMAX = dia;
  var anoMAX = ano;
  if (mesMAX > 12) {
    mesMAX = "0" + (fecha.getMonth() + 7 - 12);
    anoMAX++;
  }
  search_date.max = anoMAX + "-" + mesMAX + "-" + diaMAX;

  var mesFIN = fecha.getMonth() + 2;
  var diaFIN = dia;
  var anoFIN = ano;
  if (mesFIN > 12) {
    mesFIN = "0" + (fecha.getMonth() + 2 - 12);
    anoFIN++;
  }
  final_date.max = anoFIN + "-" + mesFIN + "-" + diaFIN;
};

function listarDatos(e) {
  const url = base_url + "usuario/obtenerUsuario?id_usuario="+id_usuario;
  const http = new XMLHttpRequest();
  http.open("GET", url, true);
  http.send();
  http.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      const res = JSON.parse(this.responseText);
      console.log(res);
      document.getElementById("newCorreo").value = res.correo;
      document.getElementById("nombreCompleto").value = res.primer_nombre + " " + res.primer_apellido ;
      document.getElementById("correo").value = res.correo;
      document.getElementById("pais").value = res.pais;
      document.getElementById("ciudad").value = res.ciudad;
      document.getElementById("direccion").value = res.direccion;
      document.getElementById("telefono").value = res.id_usuario;
    }
  };
}*/
