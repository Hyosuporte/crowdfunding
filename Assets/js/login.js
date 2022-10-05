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
        }
      }
    };
  }
}

document.addEventListener('onLoad',listarPais(),true);

function listarPais(e){
  
  const url = base_url+"pais/obtenerPaises";
  const selectorPais = $("#pais");
  const http = new XMLHttpRequest();
  http.open("GET",url,true);
  http.send();
  http.onreadystatechange = function () {
    if(this.readyState == 4 && this.status == 200){
      const res = JSON.parse(this.responseText);
      res.forEach(element => {        
        selectorPais.append($('<option />',{
          text: element.pais,
          value: element.id_pais
        }));
      });
    }
  };
};

function listarCiudad(e){
  const id_pais = document.getElementById("pais").value;
  const selectorCiudad = $("#ciudad");
  for (let i = selectorCiudad.children.length;i>=0;i--){
    document.getElementById("ciudad").remove(i);
  }
  const url = base_url+"ciudad/obtenerCiudades?id_pais="+id_pais;  
  const http = new XMLHttpRequest();
  http.open("GET",url,true);
  http.send(null);
  http.onreadystatechange = function () {
    if(this.readyState == 4 && this.status == 200){
      const res = JSON.parse(this.responseText);
      res.forEach(element => {
        selectorCiudad.append($('<option />', {
          text: element.ciudad,
          value: element.id_ciudad
        }));
      });
    }
  };
};