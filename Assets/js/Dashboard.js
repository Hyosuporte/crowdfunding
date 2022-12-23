$(document).ready(function () {
  $("#tblProyectosAdm").DataTable({
    paging: false,
    ordering: false,
    info: false,
    ajax: {
      url: base_url + "proyecto/obtenerProyectos",
      dataSrc: "",
    },
    columns: [
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

$(document).ready(function () {
  $("#tblProyectos").DataTable({
    paging: false,
    ordering: false,
    info: false,
    searching: false,
    ajax: {
      url: base_url + "cliente/getProyectos",
      dataSrc: "",
    },
    columns: [
      {
        data: "titulo",
      },
      {
        data: "estado",
      },
      {
        data: "miComen",
      },
      {
        data: "ver",
      },
    ],
  });
});

$(document).ready(function () {
  $("#Donaciones").DataTable({
    paging: false,
    ordering: false,
    info: false,
    searching: false,
    ajax: {
      url: base_url + "cliente/getDonaciones",
      dataSrc: "",
    },
    columns: [
      {
        data: "titulo",
      },
      {
        data: "monto",
      },
      {
        data: "fecha_donacion",
      },
      {
        data: "ver",
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
  const nit = document.getElementById("nit");
  const nombre = document.getElementById("nombreorg");
  const telefono = document.getElementById("telefono");
  const web = document.getElementById("web");
  const redes = document.getElementById("redes");
  const banco = document.getElementById("banco");
  const cuenta = document.getElementById("cuenta");
  const organizacion = document.getElementById("organizacion_tipo");
  if (
    nit.value != "" &&
    nombre.value != "" &&
    telefono.value != "" &&
    web.value != "" &&
    redes.value != "" &&
    banco.value != "" &&
    cuenta.value != "" &&
    organizacion.value != "0"
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
function verificarCampos2(parametro1,parametro2){
  const titulo = document.getElementById("titulo");
  const palabras = document.getElementById("palabras");
  const impacto = document.getElementById("impacto");
  const resumen = document.getElementById("resumen");
  const foto = document.getElementById("foto");
  const video = document.getElementById("video");
  const banco = document.getElementById("banco");
  const final = document.getElementById("final");
  if (
    titulo.value != "" &&
    palabras.value != "" &&
    impacto.value != "" &&
    resumen.value != "" &&
    foto.value != "" &&
    video.value != "" &&
    banco.value != "" &&
    final.value != "" 
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

function frmOrg(e) {
  const id_organizacion = document.getElementById("nit");
  const nombre_org = document.getElementById("nombreorg");
  const id_tipo = document.getElementById("organizacion_tipo");
  const pagina_web = document.getElementById("web");
  const redes_sociales = document.getElementById("redes");
  const telefono_contacto = document.getElementById("telefono");
  const banco = document.getElementById("banco");
  const nro_cuenta = document.getElementById("cuenta");
  
    const url = base_url + "organizacion/insertarorg";
    const frm = document.getElementById("frmorg");
    const http = new XMLHttpRequest();
    http.open("POST", url, true);
    http.send(new FormData(frm));
    http.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        const res = JSON.parse(this.responseText);
        console.log(res);
        if (res === "registrado") {
          //TODO: Agregar notificacion de registro exitoso
          Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: 'Organización registrada con éxito',
            showConfirmButton: false,
            timer: 1500
          })
          
        }else{
          //TODO: Agregar notificacion de que hubo un error al registrar
          Swal.fire({
            position: 'top-end',
            icon: 'error',
            title: 'Hubo un error al registrar la organización',
            showConfirmButton: false,
            timer: 1500
          })
        }
      }
    };
  }

  function frmProy(e) {
    const id_organizacion = document.getElementById("nit");
    const nombre_org = document.getElementById("nombreorg");
    const id_tipo = document.getElementById("organizacion_tipo");
    const pagina_web = document.getElementById("web");
    const redes_sociales = document.getElementById("redes");
    const telefono_contacto = document.getElementById("telefono");
    const banco = document.getElementById("banco");
    const nro_cuenta = document.getElementById("cuenta");
    
      const url = base_url + "proyecto/insertarproyecto";
      const frm = document.getElementById("frmorg");
      const http = new XMLHttpRequest();
      http.open("POST", url, true);
      http.send(new FormData(frm));
      http.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
          const res = JSON.parse(this.responseText);
          console.log(res);
          if (res === "registrado") {
            //TODO: Agregar notificacion de registro exitoso
            Swal.fire({
              position: 'top-end',
              icon: 'success',
              title: 'Organización registrada con éxito',
              showConfirmButton: false,
              timer: 1500
            })
            
          }else{
            //TODO: Agregar notificacion de que hubo un error al registrar
            Swal.fire({
              position: 'top-end',
              icon: 'error',
              title: 'Hubo un error al registrar la organización',
              showConfirmButton: false,
              timer: 1500
            })
          }
        }
      };
    }
  