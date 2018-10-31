$(function(){
    var login={};
    (function(app){
        app.init= function(){
            app.binding();
            app.validar();
        };
        app.binding= function(){
            $("#loginForm").submit(function(e){
                e.preventDefault();
                var formulario=$("#loginForm").serialize();
                console.log(formulario);
                if($("#loginForm").valid()){
                    app.iniciarSesion(formulario);
                    console.log("hola")
                }
            });
        };
        app.validar= function(){
            $("#loginForm").validate({
                rules:{
                    correo:{
                        required:true
                    },
                    contrasena:{
                        required:true
                    }
                },
                messages:{
                    correo:{
                        required:"Ingresa tu correo"
                    },
                    contrasena:{
                        required:"Tu contraseña es necesaria"
                    }

                },
                errorElement : 'div',
                errorPlacement: function(error, element) {
                                var placement = $(element).data('error');
                                if (placement) {
                                    $(placement).append(error);
                                } else {
                                    error.insertAfter(element);
                                }
                            }
            })
        };
        app.iniciarSesion=function(formulario){
            $.ajax({
                url:window.location.origin+"/Login",
                type:'POST',
                dataType:"JSON",
                data: formulario,
                success:function(datos){
                    console.log(datos);
                    if(datos['estado']!="logueado"){
                        app.imprimirAlerta(datos['estado']);
                    }else{
                        location.reload();
                    }
                },
                error: function(){

                }
            });
        };
        app.imprimirAlerta = function($mensaje){
            var contenido=`
            <div class="alert alert-danger text-center" role="alert">
                `+$mensaje+`
            </div>
            `;
            $("#mensajeLogin").html(contenido);
        };

        app.init();
    })(login);
});