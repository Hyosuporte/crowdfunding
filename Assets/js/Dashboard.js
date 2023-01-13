if (document.getElementById("tblProyectosAdm") != null) {
  $(document).ready(function () {
    $("#tblProyectosAdm").DataTable({
      scrollY: "50vh",
      scrollX: "90vw",
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
          data: "estado",
        },
        {
          data: "acciones",
        },
        {
          data: "observaciones",
        },
        {
          data: "desc_comercio",
        },
        {
          data: "RUT",
        },
        {
          data: "rep_legal",
        },
        {
          data: "cedula",
        },
        {
          data: "bancario",
        },
        {
          data: "aprob_donacion",
        },
        {
          data: "form_declaraciones",
        },
        {
          data: "abstrac",
        },
        {
          data: "keywords",
        },
        {
          data: "tiempo_ejecucion",
        },
        {
          data: "foto",
        },
        {
          data: "duracion_campana",
        },
        {
          data: "indicador_impacto",
        },
        {
          data: "monto_financiacion",
        },
        {
          data: "video",
        },
        {
          data: "informacion_adicional",
        },
        {
          data: "primer_nombre",
        },
        {
          data: "nombre_org",
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
      scrollY: "50vh",
      scrollX: "90vw",
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
      columnsDefs:[
        {width : 1, targets:1}
      ],
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
          data: "camara_comercio",
        },
        {
          data: "RUT",
        },
        {
          data: "rep_legal",
        },
        {
          data: "cedula",
        },
        {
          data: "bancario",
        },
        {
          data: "aprob_donacion",
        },
        {
          data: "form_declaraciones",
        },
        {
          data: "abstrac",
        },
        {
          data: "keywords",
        },
        {
          data: "tiempo_ejecucion",
        },
        {
          data: "foto",
        },
        {
          data: "duracion_campana",
        },
        {
          data: "indicador_impacto",
        },
        {
          data: "monto_financiacion",
        },
        {
          data: "video",
        },
        {
          data: "informacion_adicional",
        },
        {
          data: "primer_nombre",
        },
        {
          data: "nombre_org",
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
      dom: "Bfrtip",
      buttons: ["csv", "excel", "pdf"],
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

function verificarCampos(parametro1, parametro2) {
  const nombre = document.getElementById("nombre");
  const telefono = document.getElementById("telefono");
  const web = document.getElementById("web");
  const redes = document.getElementById("redes");
  const banco = document.getElementById("banco");
  const cuenta = document.getElementById("cuenta");
  const organizacion = document.getElementById("organizacion");
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
    banco.value != "" &&
    final.value != ""
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
  const url = base_url + `admin/UpdateObser?id_proyecto=${id}&obser=${obser}`;
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
function newFromProyec(from1, from2) {
  const frmProyecto = document.createElement("form");
  for (let i = 0; i < 4; i++) {
    for (const field of from1.elements) {
      frmProyecto.appendChild(field);
    }
  }
  for (let i = 0; i < 3; i++) {
    for (const field of from2.elements) {
      frmProyecto.appendChild(field);
    }
  }
  return frmProyecto;
}

function subirProyecto() {
  const frmOrganiza = new FormData(document.forms.frmOrganiza);
  const newFrom = newFromProyec(
    document.forms.frmProyec,
    document.forms.frmDocuments
  );
  const frmProyec = new FormData(newFrom);
  fetch(base_url + "organizacion/insertarorg", {
    method: "POST",
    body: frmOrganiza,
  })
    .then((response) => response.json())
    .then((data) => {
      if (data == "org registrada") {
        fetch(base_url + "proyecto/insertarproyecto", {
          method: "POST",
          body: frmProyec,
        })
          .then((response) => response.json())
          .then((data) => {
            console.log(data);
          });
      } else {
        Swal.fire({
          position: "top-end",
          icon: "warning",
          title: "Error al registrar la org",
          showConfirmButton: false,
          timer: 2500,
        });
      }
    });
}

function reginteresado(e) {
  const correo = document.getElementById("correo");

    const url = base_url + "usuario/reginteresado";
    const frm = document.getElementById("frminteresado");
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
            title: 'Correo registrado con éxito',
            showConfirmButton: false,
            timer: 1500
          })

        }else{
          //TODO: Agregar notificacion de que hubo un error al registrar
          Swal.fire({
            position: 'top-end',
            icon: 'error',
            title: 'Hubo un error al registrar el correo',
            showConfirmButton: false,
            timer: 1500
          })
        }
      }
    };
}

function alertaExitosa(){
  Swal.fire({
    position: 'center',
    icon: 'success',
    title: 'Archivo descargado',
    showConfirmButton: false,
    timer: 1500
  })
}