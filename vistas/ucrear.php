<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Crear usuarios</title>
</head>
  <script type="text/javascript">
  $(document).ready(function(){
    $("#btn-ucrea").click(function(e){
      e.preventDefault();
      $.post("conexiones/ucreador.php", $("#ucrea-form").serialize(), function(htmlext){
          $("#userv").html(htmlext);
      });
    });
  });
</script>
<body>
<h3>Administar Usuarios</h3>
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
            <select name="privielgio" id="priv" class="btn btn-default dropdown dropdown-toggle" name="priv">
              <option value="0">Alumno</option>
              <option value="1">Profesor</option>
              <option value="2">Administrador</option>
            </select>
          </div>
        </div>
          <button type="submit" class="btn btn-success" id="btn-ucrea">Crear</button>
      </form>
<div id="userv"></div>
</body>
</html>