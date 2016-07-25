<?php include('../conexiones/vsession.php'); ?>
  <script type="text/javascript">
  $(document).ready(function(){
    $("#btn-ucrear").click(function(e){
      e.preventDefault();
      $.post("conexiones/crearUsuario.php", $("#ucrea-form").serialize(), function(htmlext){
          $("#userinfo").html(htmlext);
      });
    });
    $("#btn-editarUser").click(function(e){
      e.preventDefault();
      $.post("conexiones/editarUsuario.php", $("#edit-user-form").serialize(), function(info){
        $("#Useroption").html(info);
      });
    }); 
    $("#btn-editusermenu").click(function(){
      $.get("vistas/selUser.php", function(htmlext){
          $("#Useroption").html(htmlext);
      });
    });
    $("#btn-crearusermenu").click(function(){
      $.get("vistas/crearUser.php", function(htmlext){
          $("#admincont").html(htmlext);
      });
    });
  });
</script>
<h3>Administar Usuarios</h3>
<br>
 <div class="btn-group btn-group-justified">
 	<a href="#" class="btn btn-default" id="btn-crearusermenu">Crear</a>
	<a href="#" class="btn btn-default" id="btn-editusermenu">Editar</a>
</div>
<br>
<div id="Useroption">
      <br>
      <form class="form-horizontal" action="conexiones/ucreador.php" method="post" role="form" id="ucrea-form">
        <div class="form-group">
          <label class="control-label col-sm-2" for="rut">Rut:</label>
          <div class="col-sm-10">
            <input type="rut" class="form-control" name="rut">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="passwd">Contraseña:</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" name="passwd">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="priv">Privilegio:</label>
          <div class="col-sm-10">
            <select id="priv" class="btn btn-default dropdown dropdown-toggle" name="priv">
              <option value="0">Alumno</option>
              <option value="1">Profesor</option>
              <option value="2">Administrador</option>
            </select>
          </div>
        </div>
          <button type="submit" class="btn btn-success" id="btn-ucrear">Crear</button>
      </form>
<div id="userinfo"></div>
</div>
<div class="modal fade" id="edit-user-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title"><div id="modal-usertitle"></div></h4>
            </div>
            <form id="edit-user-form" class="form-horizontal">
                <div class="modal-body">
                        <div>
                        <label class="control-label" for="inpriv">Privilegio:</label>
                          <select id="inpriv" crequired="required" lass="btn btn-default dropdown dropdown-toggle" name="inpriv">
                            <option value="Alumno">Alumno</option>
                            <option value="Profesor">Profesor</option>
                            <option value="Administrador">Administrador</option>
                          </select>
                      </div>
                        <div>
                            <label class="control-label" for="inpass">Clave: </label>
                            <input type="password" required="required" class="form-control" name="inpass" id="inpass"/></td>
                        </div>
                        <div>
                            <label class="control-label" for="pass2">Confirmar clave: </label>
                            <input type="password" class="form-control" name="pass2" id="pass2"/></td>
                        </div>
                        <div class="row">
                            <input type="text" required="required" readonly="readonly" id="inrut" name="inrut" readonly="readonly" style="visibility:hidden; height:1px;"/>
                        </div>
                </div>
            <div class="modal-footer">
                <input type="submit" value="Editar" class="btn btn-warning" data-dismiss="modal" id="btn-editarUser"/>
            </div>
            </form>
        </div>
    </div>
</div>