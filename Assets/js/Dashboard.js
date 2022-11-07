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

/* function registrar(){
    const table = document.getElementById("proyectos");
    const url = base_url + "proyecto/obtenerProyectos";
    const http = new XMLHttpRequest();
    http.open("post", url, true);
    http.send(null);
}*/