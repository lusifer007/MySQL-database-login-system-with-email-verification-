$(document).ready(function(){
	$(".activate-btn").click(function(){
		var code = btoa($("#code").val());
		var username = btoa($("#email").val());
		$.ajax({
			type:"POST",
			url:"php/activator.php",
			data:{
				code:code,
				username:username
			},
			beforeSend:function(){
				$(".activate-btn").html("Please wait we are checking..");
			},
			success:function(r){
				alert(r);
			}
		});
	});
});