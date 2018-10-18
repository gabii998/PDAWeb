$(function(){
    $('[data-toggle="datepicker"]').datepicker();
    var registro={};

    (function(app){
        app.init = function(){
            app.binding();
        };
        app.binding = function(){
            
            $("#formRegistro").submit(function(e){
                var formulario=$("#formRegistro").serialize();
                console.log(formulario);
                app.llevarDatos(formulario);
                e.preventDefault();
                
            });
        };
        app.llevarDatos = function(formulario){
            $.ajax({
                url:window.location.origin+"/Registro",
                type:'POST',
                dataType:"JSON",
                data: formulario,
                success:function(datos){
                    if(datos['estado']=="registrado"){
                        console.log(datos['estado']);
                        app.completarPerfil();
                    }
                },
                error: function(){

                }
            });
    
        };
        app.completarPerfil = function(){
            var contenido=`
            
            `;
            $("#contenido").html(contenido)
        };

        app.init();
    })(registro);
});