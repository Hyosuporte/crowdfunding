window.onload = function(){
    var fecha = new Date();
    var mes = fecha.getMonth()+1;
    var dia = fecha.getDate();
    var ano = fecha.getFullYear();
    if(dia<10)
        dia='0'+dia;
    if(mes<10)
        mes='0'+mes;

    let search_date = document.getElementById('ejecucion');
    let final_date = document.getElementById('final');
    search_date.value=ano+"-"+mes+"-"+dia;
    final_date.value=ano+"-"+mes+"-"+dia;
    search_date.min=ano+"-"+mes+"-"+dia;
    final_date.min=ano+"-"+mes+"-"+dia;
    //aqui se calcula el rango maximo de fecha a 6 meses
    var mesMAX = fecha.getMonth()+7;
    var diaMAX = dia;
    var anoMAX = ano;
    if(mesMAX>12){
        mesMAX='0'+((fecha.getMonth()+7)-12);
        anoMAX++;        
    }
    search_date.max=anoMAX+"-"+mesMAX+"-"+diaMAX;

    var mesFIN = fecha.getMonth()+2;
    var diaFIN = dia;
    var anoFIN = ano;
    if(mesFIN>12){
        mesFIN='0'+((fecha.getMonth()+2)-12);
        anoFIN++;        
    }
    final_date.max=anoFIN+"-"+mesFIN+"-"+diaFIN;
}
const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input');
const expresiones = {
	usuario: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
	nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
	password: /^.{4,12}$/, // 4 a 12 digitos.
	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
	telefono: /^\d{7,14}$/ // 7 a 14 numeros.
}

const campos ={
    telefono: false
}

const validarFormulario = (e) =>{
    switch(e.target.name){
        case "pagina":{
            
            break;
        }
        case "telefono":{
            if(expresiones.telefono.test(e.target.value)){
                console.log('exitoso telefono');
                document.getElementById('telefono').classList.remove('formulario-incorrecto');
                document.getElementById('telefono').classList.add('formulario-correcto');
            }else{
                console.log('no exitoso telefono');
                document.getElementById('telefono').classList.add('formulario-incorrecto');
                document.getElementById('telefono').classList.remove('formulario-correcto');
            }
           //validarCampo(e.telefono, e.target, 'iconoTelefono');
           break;
        }
        case "redes":{
            break;
        }
        case "video":{
            break;
        }
        case "keywords":{
            break;
        }
        case "info":{
            break;
        }
        case "titulo":{
            break;
        }
        case "impacto":{
            break;
        }
        case "monto":{
            break;
        }
        case "cuenta":{
            break;
        }
    }
}

const validarCampo = (expresion, input, campo) =>{
    if(expresion.test(input.value)){
        document.querySelector(`#${campo}`).classList.add('fa-check-circle');
		document.querySelector(`#${campo}`).classList.remove('fa-times-circle');
    }else{
        document.querySelector(`#${campo}`).classList.remove('fa-check-circle');
		document.querySelector(`#${campo}`).classList.add('fa-times-circle');
    }
}

inputs.forEach((input) =>{
    input.addEventListener('keyup',validarFormulario);
    input.addEventListener('blur',validarFormulario);
});

formulario.addEventListener('submit',(e) =>{
    e.preventDefault();
});