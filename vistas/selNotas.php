<?php
    include('../conexiones/vsession.php');
    include("../conexiones/connection.php");
    $db=conectar();
    $sql = "SELECT * FROM Asignatura;";
    $sql2 = "SELECT * FROM Curso;";
    //estoy seguro que hay una forma mas estilizada y eficiente, pero me funciona por ahora
    if(!$resultado = $db->query($sql)){
        die('Ocurrio un error ejecutando el query [' . $db->error . ']');
    }
    if(!$resultado2 = $db->query($sql2)){
        die('Ocurrio un error ejecutando el query [' . $db->error . ']');
    }
    $db->close();
 ?>
    <script type="text/javascript">
      $(document).ready(function(){
        $("#btn-vnotas").click(function(e){
          e.preventDefault();
          $.post("vistas/notas.php", $("#notas-form").serialize(), function(htmlext){
              $("#notas").html(htmlext);
          });
        });

        $("#btn-editNotas").click(function(e){
          e.preventDefault();
          $.post("conexiones/editarNotas.php", $("#edit-notas-form").serialize(), function(htmlext){
              $("#notas").html(htmlext);
          });
        });
      });
    </script>

<!--envio de datos por post sin recargar pagina
  evita que el evento default del boton submit, luego serializa los datos del formulario, y los envia a notas.php, ultimo carga la informacion de notas.php en el div señalado
-->

<!-- modal de edicion de notas-->
<div class="modal fade" id="edit-notas-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title"><div id="modalnotastitle"></div></h4>
            </div>
            <form id="edit-notas-form" class="form-horizontal">
              <div class="modal-body">
                        <div class="row">
                          <div class="col-sm-4">
                            <label class="control-label" for="n1">Nota 1: </label>
                            <input type="number"  name="n1" id="n1"/></td>
                          </div>
                          <div class="col-sm-4">
                            <label class="control-label" for="n2">Nota 2: </label>
                            <input type="number"  name="n2" id="n2"/></td>
                          </div>
                          <div class="col-sm-4">
                            <label class="control-label" for="n3">Nota 3: </label>
                            <input type="number"  name="n3" id="n3"/></td>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-xs-4">
                            <label class="control-label" for="n4">Nota 4: </label>
                            <input type="number"  name="n4" id="n4" maxlength="100"/></td>
                          </div>
                          <div class="col-xs-4">
                            <label class="control-label" for="n5">Nota 5: </label>
                            <input type="number"  name="n5" id="n5" maxlength="100"/></td>
                          </div>
                          <div class="col-xs-4">
                            <label class="control-label" for="n6">Nota 6: </label>
                            <input type="number"  name="n6" id="n6" maxlength="100"/></td>
                          </div>
                        </div>
                         <div class="row">
                          <div class="col-xs-4">
                            <label class="control-label" for="n7">Nota 7: </label>
                            <input type="number"  name="n7" id="n7" maxlength="100"/></td>
                          </div>
                          <div class="col-xs-4">
                            <label class="control-label" for="n8">Nota 8: </label>
                            <input type="number"  name="n8" id="n8" maxlength="100"/></td>
                          </div>
                          <div class="col-xs-4">
                            <label class="control-label" for="n9">Nota 9: </label>
                            <input type="number"  name="n9" id="n9" maxlength="100"/></td>
                          </div>
                         </div>
                        <div class="row">
                          <div class="col-xs-4">
                            <label class="control-label" for="n10">Nota 10: </label>
                            <input type="number"  name="n10" id="n10" maxlength="100"/></td>
                          </div>
                          <div class="col-xs-4">
                            <input type="text" required="required" readonly="readonly" id="inrut" name="inrut" readonly="readonly" style="visibility:hidden; height:1px;"/>
                            <input type="text" required="required" readonly="readonly" id="inasign" name="inasign" readonly="readonly" style="visibility:hidden; height:1px;"/>
                            <input type="number" required="required" readonly="readonly" id="insem" name="insem" readonly="readonly" style="visibility:hidden; height:1px;"/>
                            <input type="text" required="required" readonly="readonly" id="incurso" name="incurso" readonly="readonly" style="visibility:hidden; height:1px;"/>
                          </div>
                        </div>
              </div>
            <div class="modal-footer">
                <input type="submit" value="Editar" class="btn btn-warning" data-dismiss="modal" id="btn-editNotas"/>
            </div>
            </form>
        </div>
    </div>
</div>

<h3>Calificaciones</h3>
      <br>
     <form action="vistas/notas.php" method="post" role="form" id="notas-form">
        <div class="form-group">
          <div class="col-xs-4">
            <label for="Asign">Asingnatura:</label>
             <select class="form-control" name="Asign">
                <option value="" selected="selected"></option>
                <?php 
                while($fila = $resultado->fetch_assoc()){
                  echo '<option value='.$fila['idAsignatura'].'>'.$fila['nAsignatura'].'</option>';
                }?>
            </select>
          </div>
          <div class="col-xs-3">
            <label for="Curso">Curso:</label>
             <select class="form-control" name="Curso">
                <option value="" selected="selected"></option>
                <?php 
                while($fila2 = $resultado2->fetch_assoc()){
                  echo '<option value='.$fila2['idCurso'].'>'.$fila2['idCurso'].'</option>';
                }?>
            </select>
            </div>
          <div class="col-xs-3">
              <label for="Sem">Semestre: </label>
             <select class="form-control" name="Sem">
                <option value="" selected="selected"></option>
                <option value=1>1°Semestre</option>
                <option value=2>2°Semestre</option>
            </select>
          </div>
          <div class="col-xs-2">
            <br>
            <button type="submit" class="btn btn-success" id="btn-vnotas">Mostrar</button>
          </div>
        </div>
     </form>
        <br>
        <br>
        <br>
        <br>
    <div id="notas">
    </div>

