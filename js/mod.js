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

//OFERTA
function val_oferta(id,nom,rubro,email){
	$('#id').val(id);
    $('#nom').text(nom);
    $('#rubro').text(rubro);
    $('#email').val(email);
}
function obs_oferta(id,email,rubro){
	$('#idobs').val(id);
    $('#emailobs').val(email);
    $('#rubrobs').text(rubro);
    
}

$(function(){
	$('.clik-val').on('click',function(){
		$('#mod_val').modal({
			show:true,
			backdrop:'static'
		});
	});
	
	
});

$(function(){
	$('.clik-obs').on('click',function(){
		$('#mod_obs').modal({
			show:true,
			backdrop:'static'
		});
	});
	
	
});