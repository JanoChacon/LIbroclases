<?php 
echo '<h3>Administar Usuarios</h3>
      <br>
      <form class="form-horizontal" action="conexiones/ucreador.php" method="post" role="form">
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
          <button type="submit" class="btn btn-success" id="btn-enviar">Crear</button>
      </form>';
?>