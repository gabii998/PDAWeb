//Este script sirve para poblar el contenido de la página Comercio
$(function(){
    var comercio={};

    (function(app){
        app.init=function(){
            app.traerDatos();
        };
        app.traerDatos= function(){
            $.ajax({
                url:window.location.origin+"/Comercios",
                type:'POST',
                dataType:"JSON",
                data: formulario,
                success:function(datos){
                    app.poblarPagina(datos);
                },
                error: function(){

                }
            })
        };
        app.poblarPagina=function(datos){
            $("#comercioNombre").append(datos['nombre']);
            $("#comercioNombre").append(datos['nombre']);
        };
    })(comercio);
});