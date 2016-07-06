<?php 
echo '<h3>Administar Usuarios</h3>
      <form action="controllers/ucreador.php" method="post" role="form">
        <div class="form-group">
          <label for="rut">Rut:</label>
          <input type="rut" class="form-control" name="rut">
        </div>
        <div class="form-group">
          <label for="passwd">Contraseña:</label>
          <input type="password" class="form-control" name="passwd">
        </div>
        <div class="form-group">
          <label for="priv">Privilegio:</label>
          <select name="privielgio" id="priv" class="btn btn-default dropdown dropdown-toggle" name="priv">
                               <option value="0">Alumno</option>
                               <option value="1">Profesor</option>
                               <option value="2">Administrador</option>
                            </select>
        </div>
          <button type="submit" class="btn btn-success" id="btn-enviar">Crear</button>
      </form>';
?>