document
  .getElementById("configPerfil")
  .addEventListener("onLoad", listarDatos(), true);

$(document).ready(function () {
    
    $('#tblProyectos').DataTable({
        ajax:{
            url: base_url+"proyecto/obtenerProyectos",
            dataSrc:"",
        },
        columns:[
            {
                data:"id_proyecto",
            },
            {
                data:"titulo",
            },
            {
                data:"fecha_comienzo",
            },
            {
                data:"fecha_final",
            },
            {
                data:"id_estado",
            },
            {
                data:"acciones",
            },
            {
                data:"observaciones",
            },
        ],
    });
    console.log("cambia la puta madre")
});

function consultarProyectos(){
  const url = base_url +"proyecto/obtenerProyectos";
  const http = new XMLHttpRequest();
  http.open("GET", url, true);
  http.send();
  http.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      const res = JSON.parse(this.responseText);
      console.log(res)     
    }else{

    }
  };
}

function aparecerVista(panel){
    element = document.getElementById(panel);
    element.style.display='block';
}
function aparecerVistas(panel){
    panel.forEach(i => {
        element = document.getElementById(i);
        element.style.display='block';        
    });    
}
function desaparecerVista(panel){
    element = document.getElementById(panel);
    element.style.display='none';
}
function desaparecerVistas(panel){
    panel.forEach(i => {
        element = document.getElementById(i);
        element.style.display='none';        
    });    
}

/* function registrar(){
    const table = document.getElementById("proyectos");
    const url = base_url + "proyecto/obtenerProyectos";
    const http = new XMLHttpRequest();
    http.open("post", url, true);
    http.send(null);
}*/