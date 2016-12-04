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

//ADMINISTADOR
function del_admin(dni,nom,foto){
	$('#dni').val(dni);
    $('#nom').text(nom);
	$('#ima').src("../../fotosadmin/"+foto);
}
function edit_admin(dni,nom){
	$('#dniad').val(dni);
    $('#nombr').text(nom);
}

$(function(){
	$('.clik-eli').on('click',function(){
		$('#mod_eli').modal({
			show:true,
			backdrop:'static'
		});
	});
	
	
});
$(function(){
	$('.clik-edi').on('click',function(){
		$('#mod_edi').modal({
			show:true,
			backdrop:'static'
		});
	});
	
	
});