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