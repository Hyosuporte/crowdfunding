if (document.getElementById("tblProyectosAdm") != null) {
  $(document).ready(function () {
    $("#tblProyectosAdm").DataTable({
      scrollY: "500px",
      scrollCollapse: true,
      paging: false,
      ordering: false,
      info: false,
      searching: false,
      dom: "Bfrtip",
      buttons: ["csv", "excel", "pdf"],
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
}

if (document.getElementById("tblProyectos") != null) {
  $(document).ready(function () {
    desaparecerVista("v-pills-subir-proyecto-1");
    desaparecerVista("v-pills-subir-proyecto-2");
    desaparecerVista("v-pills-subir-proyecto-3");
    $("#tblProyectos").DataTable({
      scrollY: "500px",
      scrollCollapse: true,
      paging: false,
      ordering: false,
      info: false,
      searching: false,
      dom: "Bfrtip",
      buttons: ["csv", "excel", "pdf"],
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
          data: "observaciones",
        },
        {
          data: "ver",
        },
      ],
    });
  });
}

if (document.getElementById("tblDonadores") != null) {
  $(document).ready(function () {
    $("#tblDonadores").DataTable({
      paging: false,
      ordering: false,
      info: false,
      searching: false,
      ajax: {
        url: base_url + "admin/getDonaciones",
        dataSrc: "",
      },
      columns: [
        {
          data: "titulo",
        },
        {
          data: ["SUM(d.monto)"],
        },
        {
          data: ["COUNT(d.monto)"],
        },
        {
          data: "ver",
        },
      ],
    });
  });
}

if (document.getElementById("Donaciones") != null) {
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
}

if (document.getElementById("tblInteresados") != null) {
  $(document).ready(function () {
    $("#tblInteresados").DataTable({
      paging: false,
      ordering: false,
      info: false,
      searching: false,
      ajax: {
        url: base_url + "admin/getInteresados",
        dataSrc: "",
      },
      columns: [
        {
          data: "correo",
        },
      ],
    });
  });
}

$(document).ready(function () {
  $("#Correos").DataTable({
    paging: false,
    ordering: false,
    info: false,
    searching: false,
    ajax: {
      url: base_url + "usuario/listarinteresados",
      dataSrc: "",
    },
    columns: [
      {
        data: "Correos",
      }
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

function updateEstado(id, name) {
  const estado = document.getElementById(`acciones${name}`).value;
  const url =
    base_url + `admin/UpdateEstado?id_proyecto=${id}&estado=${estado}`;
  const http = new XMLHttpRequest();
  http.open("GET", url, true);
  http.send();
  http.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      const res = JSON.parse(this.responseText);
      if (res === "exito") {
        Swal.fire({
          position: "top-end",
          icon: "success",
          title: "Se cambio correctamente el estado",
          showConfirmButton: false,
          timer: 2500,
        });
        setTimeout(function () {
          window.location.reload();
        }, 2700);
      } else {
        Swal.fire({
          position: "top-end",
          icon: "warning",
          title: "Error al actualizar el estado intente mas tarde",
          showConfirmButton: false,
          timer: 3500,
        });
      }
    }
  };
}

function UpdateObser(id, name) {
  const obser = document.getElementById(`observaciones${name}`).value;
  const url =
    base_url + `admin/UpdateObser?id_proyecto=${id}&obser=${obser}`;
  const http = new XMLHttpRequest();
  http.open("GET", url, true);
  http.send();
  http.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      const res = JSON.parse(this.responseText);
      if (res === "exito") {
        Swal.fire({
          position: "top-end",
          icon: "success",
          title: "Se enviaron correctamente las observaciones",
          showConfirmButton: false,
          timer: 2500,
        });
        setTimeout(function () {
          window.location.reload();
        }, 2700);
      } else {
        Swal.fire({
          position: "top-end",
          icon: "warning",
          title: "Error al subir las observaciones intente mas tarde",
          showConfirmButton: false,
          timer: 3500,
        });
      }
    }
  };
}

function verificarCampos(parametro1, parametro2) {
  const nombre = document.getElementById("nombre");
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
  ) {
    //TODO: Agregar css para indicar que todos los campos del registro son obligatorios

    desaparecerVista(parametro1);
    aparecerVista(parametro2);
  } else {
    console.log("Rellena los campos we");
    Swal.fire({
      position: "center",
      icon: "warning",
      title: "Todos los campos son obligatorios",
      showConfirmButton: false,
      timer: 1500,
    });
  }
}
function verificarCampos2(parametro1, parametro2) {
  const titulo = document.getElementById("titulo");
  const palabras = document.getElementById("palabras");
  const impacto = document.getElementById("impacto");
  const resumen = document.getElementById("resumen");
  const foto = document.getElementById("foto");
  const video = document.getElementById("video");
  const monto = document.getElementById("monto");
  const duracion = document.getElementById("duracion");
  const comienzo = document.getElementById("comienzo");
  const ejecucion = document.getElementById("ejecucion");
  const adicional = document.getElementById("adicional");
  if (
    titulo.value != "" &&
    palabras.value != "" &&
    impacto.value != "" &&
    resumen.value != "" &&
    foto.value != "" &&
    video.value != "" &&
    monto.value != "" &&
    duracion.value != "" &&
    comienzo.value != "" &&
    ejecucion.value != "" &&
    adicional.value != ""
  ) 
  {
    //TODO: Agregar css para indicar que todos los campos del registro son obligatorios

    desaparecerVista(parametro1);
    aparecerVista(parametro2);
  } 
  else{
    Swal.fire({
      position: "center",
      icon: "warning",
      title: "Todos los campos son obligatorios",
      showConfirmButton: false,
      timer: 1500,
    });
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

  function frmProyecto(e) {
    const titulo = document.getElementById("titulo");
    const keywords = document.getElementById("palabras");
    const indicador_impacto = document.getElementById("impacto");
    const abstrac = document.getElementById("resumen");
    const foto = document.getElementById("foto");
    const video = document.getElementById("video");
    const monto_financiacion = document.getElementById("monto");
    const fecha_comienzo = document.getElementById("comienzo");
    const tiempo_ejecucion = document.getElementById("ejecucion");
    const fecha_final = document.getElementById("final");
    const RUT = document.getElementById("tributario");
    const informacion_adicional = document.getElementById("adicional");
    const rep_legal = document.getElementById("existenciaYrepresentacion");
    const cedula = document.getElementById("cedula");
    const bancario = document.getElementById("bancario");
    const aprob_donacion = document.getElementById("acta");
    const form_declaraciones = document.getElementById("formulario");
    const camara = document.getElementById("camara");

    
      const url = base_url + "proyecto/insertarproyecto";
      const frm = document.getElementById("frmProyecto");
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
              title: 'Proyecto registrado con éxito',
              showConfirmButton: false,
              timer: 1500
            })
            
          }else{
            //TODO: Agregar notificacion de que hubo un error al registrar
            Swal.fire({
              position: 'top-end',
              icon: 'error',
              title: 'Hubo un error al registrar el proyecto',
              showConfirmButton: false,
              timer: 1500
            })
          }
        }
      };
    }
  
