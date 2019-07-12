$(document).ready(function(){
	$("#btnSubmit").on('click',function(){
			var user = $("input[name='txtUser']").val();
			var pass = $("input[name='txtPassword']").val();
			console.log(user);
			console.log(pass);
			$.ajax({
				url: '../../PHP/login/login.php',
				type: 'POST',
				data: {"user" : user,
					"pass" : pass},
			})
			.success(function(result) {
				// alert(result);
				if(result==1){
					window.location.href = "admin.php";
				}
			})
	})
})