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
}

/* function registrar(){
    const table = document.getElementById("proyectos");
    const url = base_url + "proyecto/obtenerProyectos";
    const http = new XMLHttpRequest();
    http.open("post", url, true);
    http.send(null);
}*/