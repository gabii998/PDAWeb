<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Inicia sesión</h4>
            </div>
            
            <div class="modal-body mx-3">
            <form action="/Login" method="POST">
                <div class="md-form mb-5">
                    <i class="fa fa-envelope prefix grey-text"></i>
                    <input type="email" id="correo" name="correo" class="form-control validate">
                    <label data-error="No es un correo válido"  for="defaultForm-email">Correo Electrónico</label>
                </div>
                <div class="md-form mb-4">
                    <i class="fa fa-lock prefix grey-text"></i>
                    <input type="password" id="contrasena" name="contrasena" class="form-control validate">
                    <label data-error="wrong"  for="defaultForm-pass">Contraseña</label>
                </div>
                <div class="text-center mt-2">
                  <button id="submit" class="btn  mx-auto" type="submit"  style="background: #720293" onclick="sendLogin()">Iniciar</button>
                </div>
            </form>
            </div>
            <div class="modal-footer d-flex justify-content-center">
                <span> O si no eres miembro</span>
                  <a class="blue-text " href="Registro">Registrate</a>
            </div>
        </div>
    </div>
</div>
