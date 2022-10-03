$(document).on("change", "#pais", function(){
    var ciudad = $("#pais").val();
    var opciones = {
        "nombre":nombre
    }
    $ajax({
        data:opciones,
        url: '',
        type: 'get',
        dataType: "json",
        success: function(response){
            response.forEach(element => {
                $("#ciudad").append("<option>"+element.nombre+"</option>");
            });            
        }
    });
})