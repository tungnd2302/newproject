$(document).ready(function(e){
	$("#btnChinhsua").click(function() {
		$("#btnChinhsua").css({display :'none'});
		$("#btnXong").css({display :'block'});
		$(".need-edit").css({display: 'none'});
		$(".edit").css({display: 'block',borderBottom:'2px solid #444'});

	});


	$("#btnXong").click(function() {
		$("#btnXong").css({display :'none'});
		$("#btnChinhsua").css({display :'block'});
		$(".edit").css({borderBottom: 'none'});
		var ma           =  $("#ma").html();
		var ten  		 =  $(":text[name='txtTen']").val();
		var ngaysinh     =  $(":text[name='txtSinhnhat']").val();
		var email        =  $(":text[name='txtEmail']").val();
		var sodienthoai  =  $(":text[name='txtSodienthoai']").val();
		var sothich      =  $(":text[name='txtSothich']").val();
		$.ajax({
			url: '../../PHP/Update/capnhatnhanvien-staff.php',
			type: 'POST',
			data: {
				'ma'         : ma,
				'ten'        : ten,
				'ngaysinh'   : ngaysinh,
				'email'      : email,
				'sodienthoai': sodienthoai,
				'sothich'    : sothich,
			},
		})
		.done(function(results) {
			alert("Cập nhật thành công!");
		})
		.fail(function() {
			console.log("error");
		})
		.always(function() {
			console.log("complete");
		});
		
	});
})