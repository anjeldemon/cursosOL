// busqueda en tablas
    $("#buscar").keyup(function(){
        _this = this;
        
        $.each($("#tabla tbody tr"), function() {
            if($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1)
               $(this).hide();
            else
               $(this).show();                
        });
    });


// validador inputs confirmacion nueva contraseña

$("#passNuevo2").keyup(function(){
 if(($("#passNuevo").val())==($("#passNuevo2").val())){
    $("#alerta").replaceWith('<div id="alerta" class="alert alert-success alert-dismissible fade show"> <strong>Correcto!</strong> Las contraseñas coinciden. </div>');
 }else{
    $("#alerta").replaceWith('<div id="alerta" class="alert alert-danger alert-dismissible fade show"> <strong>Cuidado!</strong> Las contraseñas no coinciden. </div>');
 }
    

});


// activar acualizacion de datos de perfil
$("#formPerfil").change(function(){
   $("#btnActualizarPerfil").show();
});


