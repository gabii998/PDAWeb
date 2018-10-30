$(function(){
  var comercio={};

  (function(app){
    app.init=function(){
      //console.log("hola")
      app.traerComercio();
    };

    app.traerComercio=function(){
      $.ajax({
        url:window.location.origin+"/GetComercio",
                type:'GET',
                dataType:"JSON",
                data: app.obtenerURLVars(),
                success:function(datos){
                    console.log(datos);
                    app.poblarPagina(datos);
                },
                error: function(){

                }
      })
    };
    app.poblarPagina=function(datos){
      $("#comercioNombre").append(datos['nombre']);
      $("#comercioSitio").append("<a href="+datos['paginaWeb']+">"+datos['paginaWeb']+"</a>")
      $("#comercioDescripcion").append(datos['descripcion']);
      $("#imgQR").attr('src' , window.location.origin+"/Qr?id="+datos['id']);
    };

    app.obtenerURLVars=function () {
      var vars = {};
      var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
          vars[key] = value;
      });
      return vars;
  }

  app.init();
  })(comercio);
});