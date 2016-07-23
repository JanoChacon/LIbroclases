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