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