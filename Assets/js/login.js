function frmLogin(e) {
  const email = document.getElementById("email");
  const password = document.getElementById("password");
  if (email.value == "") {
    //TODO: Agregar css para indicar que el usuario es obligatorio
  } else if (password.value == "") {
    //TODO: Agregar css para indicar que la contraseña es obligatoria
  } else {
    const url = base_url + "usuario/validar";
    const frm = document.getElementById("frmLogin");
    const http = new XMLHttpRequest();
    http.open("POST", url, true);
    http.send(new FormData(frm));
    http.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        const res = JSON.parse(this.responseText);
        console.log(res);
        if (res == "1") {
          window.location = base_url + "administrador";
        } else if (res == "2") {
          window.location = base_url + "cliente";
        } else {
          //TODO: Agregar css para indicar al usuario porque fallo la validacion
          Swal.fire({
            position: 'center',
            icon: 'warning',
            title: res,
            showConfirmButton: false,
            timer: 1500
          })
        }
      }
    };
  }
}

document.addEventListener("onLoad", listarPais(), true);

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

function listarCiudad(e) {
  const id_pais = document.getElementById("pais").value;
  const selectorCiudad = $("#ciudad");
  for (let i = selectorCiudad.children.length; i >= 0; i--) {
    document.getElementById("ciudad").remove(i);
  }
  const url = base_url + "ciudad/obtenerCiudades?id_pais=" + id_pais;
  const http = new XMLHttpRequest();
  http.open("GET", url, true);
  http.send(null);
  http.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      const res = JSON.parse(this.responseText);
      console.log(res)
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

function frmRegistro(e) {
  const nombre = document.getElementById("nombre");
  const apellido = document.getElementById("apellido");
  const correo = document.getElementById("correo");
  const password = document.getElementById("password");
  const passwordConf = document.getElementById("passwordConf");
  const direccion = document.getElementById("direccion");
  const pais = document.getElementById("pais");
  const ciudad = document.getElementById("ciudad");
  if (
    nombre.value == "" ||
    apellido.value == "" ||
    correo.value == "" ||
    password.value == "" ||
    direccion.value == "" ||
    pais.value == "" ||
    ciudad.value == "" ||
    passwordConf.value == ""
  ) 
  {
    //TODO: Agregar css para indicar que todos los campos del registro son obligatorios
    Swal.fire({
      position: 'center',
      icon: 'warning',
      title: 'Todos los campos son obligatorios',
      showConfirmButton: false,
      timer: 1500
    })
  } else if (password.value !== passwordConf.value) {
    //TODO: Agregar css para indicar que las contraseñas deben ser iguales
    Swal.fire({
      position: 'top-end',
      icon: 'error',
      title: 'Las contraseñas no coinciden',
      showConfirmButton: false,
      timer: 1500
    })
  } else {
    const url = base_url + "usuario/registrar";
    const frm = document.getElementById("frmRegistro");
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
            title: 'Registrado exitosamente',
            showConfirmButton: false,
            timer: 1500
          })
          setTimeout(function(){
            location.replace(base_url+"Home/login")
          },2000)
        } else if (res === "Usuario no disponible") {
          //TODO: Agregar notificacion de que ya existe el usuario
          Swal.fire({
            position: 'top-end',
            icon: 'error',
            title: 'El usuario ya existe',
            showConfirmButton: false,
            timer: 1500
          })
        } else{
          //TODO: Agregar notificacion de que hubo un error al registrar
          Swal.fire({
            position: 'top-end',
            icon: 'error',
            title: 'Hubo un error al registrarse',
            showConfirmButton: false,
            timer: 1500
          })
        }
      }
    };
  }
}
