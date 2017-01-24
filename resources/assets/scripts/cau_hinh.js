// JavaScript Document
$(document).ready(function() {
    // Hiển thị hình khi upload
	$("#hinh").on('change', function () {

		if (typeof (FileReader) != "undefined") {
	
			var image_holder = $("#image-holder");
			image_holder.empty();
	
			var reader = new FileReader();
			reader.onload = function (e) {
				$("<img />", {
					"src": e.target.result,
					"class": "thumb-image"
				}).appendTo(image_holder);
	
			}
			image_holder.show();
			reader.readAsDataURL($(this)[0].files[0]);
		} else {
			alert("This browser does not support FileReader.");
		}
	});// end Hiển thị hình khi upload

	// Ngày
	$( ".datepicker" ).datepicker();
	
	// Cap nhat tieu bieu
	$(".chk").change(function(){
			
			var id=$(this).attr("id");
			var check=$(this).attr("checked");
			if(check=="checked")
			{
				check=1;

			}
			else
			{
				check=0;	
			}
			// Ajax
			var form_data = {ID:id,cn:check};
			// Ajax
			$.ajax({
				url: "xu_ly_tieu_bieu.php",
				type: 'POST',
				data: form_data,
				success: function(data) {
						
						alert("Cập nhật thành công");
					  },
				error: function(err){alert("Lỗi:" + err.status +"\n" + err.statusText)}	  
			}) // end Ajax
			
			
			
		
	})
	
	
}); // end ready

