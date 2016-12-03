$(function(){
	$('.clik-ver').on('click',function(){
		$('#mod_eliminar').modal({
			show:true,
			backdrop:'static'
		});
	});
	
	
});

function del_usuario(dni,nom,foto){
	$('#dni').val(dni);
    $('#nom').text(nom);
	$('#ima').src("../../fotosadmin/"+foto);
}
