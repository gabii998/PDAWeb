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
                    app.llevarDatos(formulario)
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
                        required:true,
                        minlength: 8
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
                        required:"DNI requerido",
                        minlength:"Un DNI válido tiene más de 8 caracteres"
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
                    console.log(datos['estado']);
                    if(datos['estado']=="registrado"){
                        app.completarPerfil();
                    }else{
                        app.imprimirAlerta();
                    }
                },
                error: function(){

                }
            });
    
        };
        app.imprimirAlerta = function(){
            var contenido=`
            <div class="alert alert-info" role="alert">
                Al parecer ya te habías registrado con anterioridad
            </div>
            `;
            $("#mensaje").replaceWith(contenido);
        }
        app.completarPerfil = function(){
            var contenido=`
            <div class="row">
                <div class="col-md"></div>
                <div class="col-md">
                    <div class="card mt-5">
                        <div class="card-body text-center">
                            <div class="card-title">
                                <strong>Registrado correctamente</strong>
                            </div>
                            <div class="card-body">
                            <i class="fa fa-5x fa-check-circle"></i>
                            <div>Tu usuario fue creado con éxito, ahora puedes loguearte.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md"></div>
            </div>
            `;
            $("#contenido").replaceWith(contenido);
        };

        app.init();
    })(registro);
});