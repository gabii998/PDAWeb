$(function(){
    $('[data-toggle="datepicker"]').datepicker();
    var registro={};

    (function(app){
        app.init = function(){
            app.binding();
            app.validar();
            
        };
        app.binding = function(){
            
            $("#formRegistro").submit(function(e){
                e.preventDefault();
                var formulario=$("#formRegistro").serialize();
                console.log(formulario);
                if($("#formRegistro").valid()){
                    app.llevarDatos()
                }
            });
        };
        app.validar= function(){
            $("#formRegistro").validate({
                debug:true,
                rules:{
                    registroCorreo:{
                        required:true,
                        email:true
                    },
                    dni:{
                        required:true
                    },
                    registroContrasena:{
                        required:true
                    },
                    registroConfirmarContrasena:{
                        required:true,
                        equalTo: "#registroContrasena"
                    },
                    registroNombre:{
                        required:true
                    },
                    registroApellido:{
                        required:true
                    },
                    registroTelefono:{
                        required:true
                    },
                    registroFecha:{
                        required:true
                    }

                },
                messages:{
                    registroCorreo:{
                        required:"Correo requerido",
                        email:"No parece un correo válido"
                    },
                    dni:{
                        required:"DNI requerido"
                    },
                    registroContrasena:{
                        required:"Contrasena requerida"
                    },
                    registroConfirmarContrasena:{
                        required:"Campo obligatorio",
                        equalTo: "Las contraseñas no coinciden"
                    },
                    registroNombre:{
                        required: "Campo obligatorio"
                    },
                    registroApellido:{
                        required: "Campo obligatorio"
                    },
                    registroTelefono:{
                        required: "Campo obligatorio"
                    },
                    registroFecha:{
                        required: "Campo obligatorio"
                    },
                    checkbox:{
                        required:"Debe aceptar los terminos de uso"
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