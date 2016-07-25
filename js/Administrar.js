//llena el modal con los datos del usuario
function editarUsuario(rutUser){
	$('#edit-user-form')[0].reset();
	//resetea los datos del formulario
	var url = 'conexiones/buscarUsuario.php';
		$.ajax({
		type:'POST',
		url:url,
		data:'rutUser='+rutUser,
		success: function(valores){
				var datos = eval(valores);
				$('#modal-usertitle').html("<b>Edicion de usuario: "+rutUser+"</b>");
				$('#inrut').val(rutUser);
				$('#inpass').val(datos[1]);
				switch(datos[2]){
				    case '0':
				        $('#inpriv').val('Alumno');
				        break;
				    case '1':
				        $('#inpriv').val('Profesor');
				        break;
					case '2':
				        $('#inpriv').val('Administrador');
				        break;
				}
				$('#edit-user-modal').modal({
					show:true,
					backdrop:'static'
				});
		}
		});
}

function eliminarUsuario(rutUser){
	var url = 'conexiones/borrarUsuario.php';
	var pregunta = confirm('¿Esta seguro de eliminar este Usuario?');
	if(pregunta==true){
		$.ajax({
		type:'POST',
		url:url,
		data:'rutUser='+rutUser,
		success: function(info){
			$("#Useroption").html(info);
		}
	});	
	}
}