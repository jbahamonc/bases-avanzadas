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
$("#btn-save-deporte").on("click", function(){

		var action = document.getElementById('type-action').value;
		var form = document.getElementById('form-save-deporte');
		var formdata = new FormData(form);
		$.ajax({
			url: "?url=deporte&accion="+action,
			type: "post",
			data: formdata,
			processData: false,
			contentType: false,
			success: function(response) {
				console.log(response);
				var res = JSON.parse(response);

			if (res.ok) {
				location.reload(true);
				$(this).parent().parent().remove();
				alert("se ha registrado el deporte");
			}
			else {
				alert("Error:! "+res.error);
			}
			}
		});
	});
$("body").on("click", "#delete-res", function(){
		var id = $(this).data('id');
		$.get("?url=deporte&accion=delete", {codDeporte: id}, function(response){
			console.log(response);
			var res = JSON.parse(response);
			if (res.ok) {
				location.reload(true);
				$(this).parent().parent().remove();
				alert("se ha eliminado el deporte");
			}
			else {
				alert("Error:! "+res.error);
			}
		});
	});

});