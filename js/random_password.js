
$(document).ready(function(){
	$(".generate-btn").click(function(e){
		e.preventDef$;
		$.ajax({
			type:"POST",
			url:"php/random_password.php",
			success:function(r){
				$("#password").val(r);
			}
		});
	});
});