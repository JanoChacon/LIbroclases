$(document).ready(function(){
        $("#btn-notas").click(function(){
          $.get("vistas/selNotas.php", function(htmlext){
              $("#contenido").html(htmlext);
          });
        });
        $("#btn-anotaciones").click(function(){
          $.get("vistas/selAnotacion.php", function(htmlext){
              $("#contenido").html(htmlext);
          });
        });
        $("#btn-asist").click(function(){
          $.get("vistas/selAsist.php", function(htmlext){
              $("#contenido").html(htmlext);
          });
        });
        $("#btn-alumnos").click(function(){
          $.get("vistas/selAlumno.php", function(htmlext){
              $("#contenido").html(htmlext);
          });
        });
        $("#btn-activ").click(function(){
          $.get("vistas/selActiv.php", function(htmlext){
              $("#contenido").html(htmlext);
          });
        });
        $("#btn-curso").click(function(){
          $.get("vistas/selCurso.php", function(htmlext){
              $("#contenido").html(htmlext);
          });
        });
        $("#btn-ueditar").click(function(){
          $.get("vistas/selActiv.php", function(htmlext){
              $("#contenido").html(htmlext);
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

//llena el modal con las notas del alumno
function buscarNotas(rutAl,idAsign,idSem,icurso){
	
	$('#edit-notas-form')[0].reset();
	//resetea los datos del formulario
	var url = 'conexiones/buscarNotas.php';
		$.ajax({
		type:'POST',
		url:url,
		data:'rutAl='+rutAl+'&Asign='+idAsign+'&Sem='+idSem,
		success: function(valores){
				var datos = eval(valores);
				$('#modalnotastitle').html("<b>Edicion de notas para el alumno: "+rutAl+"</b>");
				$('#inrut').val(rutAl);
				$('#insem').val(idSem);
				$('#incurso').val(icurso);
				$('#n1').val(datos[1]);
				$('#n2').val(datos[2]);
				$('#n3').val(datos[3]);
				$('#n4').val(datos[4]);
				$('#n5').val(datos[5]);
				$('#n6').val(datos[6]);
				$('#n7').val(datos[7]);
				$('#n8').val(datos[8]);
				$('#n9').val(datos[9]);
				$('#n10').val(datos[10]);
				$('#inasign').val(idAsign);
				$('#edit-notas-modal').modal({
					show:true,
					backdrop:'static'
				});
		}
		});
}

function verHoja(rutAl){
	var url = 'vistas/Anotaciones.php';
		$.ajax({
		type:'POST',
		url:url,
		data:'rutAl='+rutAl,
		success: function(htmlext){
			$('#rutAl').val(rutAl);
			$("#anotaciones").html(htmlext);
		}
	});	
}

function modalAnotacion(rutAl){
        $('#rutAl').val(rutAl);
        $('#edit-anot-modal').modal({
            show:true,
            backdrop:'static'
        });
  }