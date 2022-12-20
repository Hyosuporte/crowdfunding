if (document.getElementById("bodyGaleria") != null) {
  document
    .getElementById("bodyGaleria")
    .addEventListener("OnLoad", listarGaleria(), false);
}

if (document.getElementById("configPerfil") != null) {
  document
    .getElementById("configPerfil")
    .addEventListener("onLoad", listarDatos(), true);
}

if (document.getElementById("cardsDestacados") != null) {
  document
    .getElementById("cardsDestacados")
    .addEventListener("onLoad", listarGaleriaDes(), true);
}

function listarGaleria() {
  const url = base_url + "proyecto/listarProyectos";
  const divGaleria = document.querySelector("#galeriaProyectos");
  const http = new XMLHttpRequest();
  http.open("POST", url, true);
  http.send();
  http.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      const res = JSON.parse(this.responseText);
      let numFil = 1;
      res.forEach((element) => {
        if (document.getElementById(`numFil${numFil}`) == null) {
          divFila = crearFila(numFil);
          divCardGal = crearCadGaleria(element);
          divFila.appendChild(divCardGal);
          divGaleria.appendChild(divFila);
        } else {
          if (
            document
              .querySelector(`#numFil${numFil}`)
              .querySelectorAll("div.cardGaleria").length < 2
          ) {
            divCardGal = crearCadGaleria(element);
            document.getElementById(`numFil${numFil}`).appendChild(divCardGal);
            numFil++;
          }
        }
      });
    }
  };
}

function listarGaleriaDes() {
  const url = base_url + "proyecto/listarProyectosDes";
  const divMain = document.querySelector("#cardsDestacados");
  const http = new XMLHttpRequest();
  http.open("POST", url, true);
  http.send();
  http.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      const res = JSON.parse(this.responseText);
      res.forEach((element) => {
        divCardGal = crearCadGaleria(element);
        divMain.appendChild(divCardGal);
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
  img.setAttribute("src", element.foto);
  divImg.appendChild(img);
  divCardGal.appendChild(divImg);
  let divBody = creacionCardBody(element);
  divCardGal.appendChild(divBody);
  return divCardGal;
}

function creacionCardBody(element) {
  let divBody = document.createElement("div");
  let divMeta = document.createElement("div");
  let h5 = document.createElement("h5");
  let p1 = document.createElement("p");
  let p2 = document.createElement("p");
  let ver = document.createElement("a");
  divBody.setAttribute("class", "card-body");
  h5.setAttribute("class", "tituloCardDestacado");
  h5.innerHTML =
    element.titulo +
    ` <p style="text-indent:22vw;"><img src="` +
    base_url +
    `Assets/img/personas.svg" alt="">  ${element["COUNT(d.monto)"]}/D</p>`;
  p1.setAttribute("class", "textoCard");
  p1.innerHTML = element.abstrac;
  divMeta.setAttribute("class", "meta");
  divMeta.innerHTML = `<p class="metaCardDestacado">Recibido $ ${
    element["SUM(d.monto)"] == null ? 0 : element["SUM(d.monto)"]
  }</p>
    <p style="text-indent: 15vw;" class="metaCardDestacado">Meta $ ${
      element.monto_financiacion
    }</p>`;
  p2.setAttribute("class", "barraProgresoCard");
  ver.setAttribute("class", "botonCardGaleria");
  ver.setAttribute("value", element.id_proyecto);
  ver.setAttribute("type", "submit");
  ver.setAttribute(
    "href",
    `${base_url}proyecto/listarProyecto?id_proyecto=${element.id_proyecto}`
  );
  ver.innerHTML = `Ver Proyecto <img class="imagenOjo" src="${base_url}Assets/img/Ojo.svg" width="20" alt="">`;
  divBody.appendChild(h5);
  divBody.appendChild(p1);
  divBody.appendChild(divMeta);
  divBody.appendChild(p2);
  divBody.appendChild(ver);
  return divBody;
}

function listarPais() {
  const url = base_url + "pais/obtenerPaises";
  const selectorPais = $("#paisUser");
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
  return true;
}

function listarCiudad() {
  const id_pais = document.getElementById("paisUser").value;
  const selectorCiudad = $("#ciudadUser");
  for (let i = selectorCiudad.children.length; i >= 0; i--) {
    document.getElementById("ciudadUser").remove(i);
  }
  const url = base_url + "ciudad/obtenerCiudades?id_pais=" + id_pais;
  const http = new XMLHttpRequest();
  http.open("GET", url, true);
  http.send(null);
  http.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      const res = JSON.parse(this.responseText);
      res.forEach((element) => {
        selectorCiudad.append(
          $("<option />", {
            text: element.ciudad,
            value: element.id_ciudad,
          })
        );
      });
    }
  };
}

function listarDatos(e) {
  listarPais();
  const url = base_url + "cliente/userData";
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
      document.getElementById("direccion").value = res.direccion;
      document.getElementById("telefonoUser").value = res.id_telefono;
      document
        .getElementById("paisUser")
        .options.item(res.id_pais - 1).selected = "selected";
      listarCiudad();
    }
  };
}

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
  const passwordNow = document.getElementById("passwordNow");
  const newPassword = document.getElementById("newPassword");
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
          } else if (res === "La contraseña actual es incorrecta") {
            Swal.fire({
              position: "top-end",
              icon: "warning",
              title: res,
              showConfirmButton: false,
              timer: 2500,
            });
          } else if (res === "fallo") {
            Swal.fire({
              position: "top-end",
              icon: "warning",
              title:
                "No se pudo actualizar la contraseña intente de nuevo mas tarde.",
              showConfirmButton: false,
              timer: 2500,
            });
          } else {
            Swal.fire({
              position: "top-end",
              icon: "warning",
              title: res,
              showConfirmButton: false,
              timer: 2500,
            });
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

function UpdateDates() {
  const nombreCompleto = document.getElementById("nombreCompleto").value;
  const pais = document.getElementById("paisUser").value;
  const ciudad = document.getElementById("ciudadUser").value;
  const direccion = document.getElementById("direccion").value;
  const telefono = document.getElementById("telefonoUser").value;
  if (
    nombreCompleto != "" ||
    pais != "" ||
    ciudad != "" ||
    direccion != "" ||
    telefono != ""
  ) {
    const url = base_url + "cliente/UpdateData";
    const frm = document.getElementById("frmUpdateData");
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
            title: "Datos Actualizados",
            showConfirmButton: false,
            timer: 2500,
          });
          setTimeout(function () {
            window.location.reload();
          }, 3500);
        } else if (res === "fallo") {
          Swal.fire({
            position: "top-end",
            icon: "warning",
            title: "Error al actualizar los datos intentelo mas tarde",
            showConfirmButton: false,
            timer: 2500,
          });
        } else {
          Swal.fire({
            position: "top-end",
            icon: "warning",
            title: res,
            showConfirmButton: false,
            timer: 2500,
          });
        }
      }
    };
  } else {
    Swal.fire({
      position: "top-end",
      icon: "warning",
      title: "Todos los campos son obligatorios",
      showConfirmButton: false,
      timer: 2500,
    });
  }
}
