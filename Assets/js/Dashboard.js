$(document).ready(function () {
  $("#tblProyectos").DataTable({
    paging: false,
    ordering: false,
    info: false,
    ajax: {
      url: base_url + "proyecto/obtenerProyectos",
      dataSrc: "",
    },
    columns: [
      {
        data: "id_proyecto",
      },
      {
        data: "titulo",
      },
      {
        data: "fecha_comienzo",
      },
      {
        data: "fecha_final",
      },
      {
        data: "id_estado",
      },
      {
        data: "acciones",
      },
      {
        data: "observaciones",
      },
    ],
  });
});

function consultarProyectos() {
  const url = base_url + "proyecto/obtenerProyectos";
  const http = new XMLHttpRequest();
  http.open("GET", url, true);
  http.send();
  http.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      const res = JSON.parse(this.responseText);
      console.log(res);
    } else {
    }
  };
}

function aparecerVista(panel) {
  element = document.getElementById(panel);
  element.style.display = "block";
}
function aparecerVistas(panel) {
  panel.forEach((i) => {
    element = document.getElementById(i);
    element.style.display = "block";
  });
}
function desaparecerVista(panel) {
  element = document.getElementById(panel);
  element.style.display = "none";
}
function desaparecerVistas(panel) {
  panel.forEach((i) => {
    element = document.getElementById(i);
    element.style.display = "none";
  });
}

function verificarCampos(parametro1,parametro2){
  const nombre = document.getElementById("nombre");
  const telefono = document.getElementById("telefono");
  const web = document.getElementById("web");
  const redes = document.getElementById("redes");
  const banco = document.getElementById("banco");
  const cuenta = document.getElementById("cuenta");
  const organizacion = document.getElementById("organizacion");
  if (
    nombre.value != "" &&
    telefono.value != "" &&
    web.value != "" &&
    redes.value != "" &&
    banco.value != "" &&
    cuenta.value != "" &&
    organizacion.value != "1"
  ) 
  {
    //TODO: Agregar css para indicar que todos los campos del registro son obligatorios
    
    desaparecerVista(parametro1);
    aparecerVista(parametro2);
  } 
  else{
    console.log("Rellena los campos we");
    Swal.fire({
      position: 'center',
      icon: 'warning',
      title: 'Todos los campos son obligatorios',
      showConfirmButton: false,
      timer: 1500
    }) 
  }
}