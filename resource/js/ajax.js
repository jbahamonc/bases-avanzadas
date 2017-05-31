$(document).ready(function(){

	$("#btn-save-comp").on("click", function(){

		var action = document.getElementById('type-action').value;
		var form = document.getElementById('form-save-comp');
		var formdata = new FormData(form);
		$.ajax({
			url: "?url=Competencia&accion="+action,
			type: "post",
			data: formdata,
			processData: false,
			contentType: false,
			success: function(response) {
				console.log(response);
			}
		});
	});
});