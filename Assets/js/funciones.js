document
  .getElementById("bodyGaleria")
  .addEventListener("OnLoad", listarProyectos(), false);

<<<<<<< HEAD
window.onload = function () {
  var fecha = new Date();
  var mes = fecha.getMonth() + 1;
  var dia = fecha.getDate();
  var ano = fecha.getFullYear();
  if (dia < 10) dia = "0" + dia;
  if (mes < 10) mes = "0" + mes;
=======
if (document.getElementById("configPerfil") != null) {
  document
    .getElementById("configPerfil")
    .addEventListener("onLoad", listarDatos(), true);
}
>>>>>>> origin/daniel

function listarProyectos() {
  const url = base_url + "proyecto/listarProyectos";
  const divGaleria = document.querySelector("#galeriaProyectos");
  const http = new XMLHttpRequest();
  http.open("POST", url, true);
  http.send();
  http.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      const res = JSON.parse(this.responseText);
      console.log({ res });
      let numFil = 1;
      res.forEach((element) => {
        if (document.getElementById(`numFil${numFil}`) == null) {
          console.log({ element });
          divFila = crearFila(numFil);
          divCardGal = crearCadGaleria(element);
          divFila.appendChild(divCardGal);
          divGaleria.appendChild(divFila);
        } else {
          if (divElement.length < 2) {
            let divCard = document.createElement("div");
            divCard.addClass("card cardGaleria");
            $(".numFil" + numFil);
          } else {
            numFil++;
          }
        }
      });
    }
  };
}

function crearFila(numFil) {
  let divFila = document.createElement("div");
  divFila.classList.add("proyectosFila");
  divFila.setAttribute("id", `numFil${numFil}`);
  return divFila;
}

function crearCadGaleria(element) {
  //TODO:Creacion del cardGaleria
  let divCardGal = document.createElement("div");
  divCardGal.classList.add("card");
  divCardGal.classList.add("cardGaleria");
  divCardGal.setAttribute("id", element.id_proyecto);
  //TODO:Creacion del Contenido del cardGaleria
  //TODO:Creacion del div con la imagen del proyecto
  let divImg = document.createElement("div");
  let img = document.createElement("img");
  img.setAttribute("class", "imageDestacado");
  img.setAttribute("src", base_url + "Assets/img/Destacados.svg");
  divImg.appendChild(img);
  divCardGal.appendChild(divImg);
  let divBody = creacionCardBody(element);
  divCardGal.appendChild(divBody);
  return divCardGal;
}

function creacionCardBody(element) {
  let divBody = document.createElement("div");
  divBody.setAttribute("class", "card-body");
  let h5 = document.createElement("h5");
  h5.setAttribute("class", "tituloCardDestacado");
  h5.innerHTML =
    element.titulo +
    `<p style=text-indent: 22vw;"><img src="` +
    base_url +
    `Assets/img/personas.svg" alt=""> ` +
    element["COUNT(d.monto)"] +
    `/D</p>`;
  
  divBody.appendChild(h5);
  return divBody;
}

function listarPais(e) {
  const url = base_url + "pais/obtenerPaises";
  const selectorPais = $("#pais");
  const http = new XMLHttpRequest();
  http.open("GET", url, true);
  http.send();
  http.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      const res = JSON.parse(this.responseText);
      res.forEach((element) => {
        selectorPais.append(
          $("<option />", {
            text: element.pais,
            value: element.id_pais,
          })
        );
      });
    }
  };
}

function listarDatos(e) {
  const url = base_url + "usuario/obtenerUsuario?id_usuario=" + id_usuario;
  const http = new XMLHttpRequest();
  http.open("GET", url, true);
  http.send();
  http.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      const res = JSON.parse(this.responseText);
      document.getElementById("newCorreo").value = res.correo;
      document.getElementById("ActCorreo").value = res.correo;
      document.getElementById("nombreCompleto").value =
        res.primer_nombre + " " + res.primer_apellido;
      document.getElementById("correo").value = res.correo;
      document.getElementById("pais").value = res.pais;
      document.getElementById("ciudad").value = res.ciudad;
      document.getElementById("direccion").value = res.direccion;
      document.getElementById("telefono").value = res.id_usuario;
    }
  };
}
<<<<<<< HEAD
=======

function UpdateCorreo() {
  const url = base_url + "cliente/UpdateCorreo";
  const frm = document.getElementById("frmUpdateCorreo");
  const http = new XMLHttpRequest();
  http.open("POST", url, true);
  http.send(new FormData(frm));
  http.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      const res = JSON.parse(this.responseText);
      if (res === "Correo actualizado con exito") {
        Swal.fire({
          position: "top-end",
          icon: "success",
          title: res,
          showConfirmButton: false,
          timer: 2500,
        });
        setTimeout(function () {
          window.location.reload();
        }, 4000);
      } else if (res === "El correo no se encuentra disponible") {
        Swal.fire({
          position: "top-end",
          icon: "error",
          title: res,
          showConfirmButton: false,
          timer: 2500,
        });
      }
    }
  };
}

function UpdatePassword() {
  const passwordNow = document.getElementById("$passwordNow");
  const newPassword = document.getElementById("$newPassword");
  const newPasswordTry = document.getElementById("newPasswordTry");
  if (
    passwordNow.value != "" ||
    newPassword.value != "" ||
    newPasswordTry.value != ""
  ) {
    if (newPassword.value === newPasswordTry.value) {
      const url = base_url + "cliente/UpdatePassword";
      const frm = document.getElementById("frmUpdatePassword");
      const http = new XMLHttpRequest();
      http.open("POST", url, true);
      http.send(new FormData(frm));
      http.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
          const res = JSON.parse(this.responseText);
          if (res === "exito") {
            Swal.fire({
              position: "top-end",
              icon: "success",
              title: "Contraseña Actualizada con exito",
              showConfirmButton: false,
              timer: 2500,
            });
            setTimeout(function () {
              window.location.reload();
            }, 4000);
          }
        }
      };
    } else {
      Swal.fire({
        position: "top-end",
        icon: "warning",
        title: "Las contraseñas no coinciden",
        showConfirmButton: false,
        timer: 2500,
      });
    }
  }
}
>>>>>>> origin/daniel
