$(document).ready(function(){
	$(".show-icon").click(function(){
		
		if($("#password").attr("type") == "password")
		{
			$("#password").attr("type","text");
			$(".show-icon").css("color","black");
			
		}
		else
			{
				$("#password").attr("type","password");
				$(".show-icon").css("color","#ccc");
			}
	});
});