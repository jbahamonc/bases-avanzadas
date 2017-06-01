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
				var res = JSON.parse(response);
				if (res.ok) {
					alert("La informacion se ha guardado");
				}
				else {
					alert("Error:! "+res.error);
				}
			}
		});
	});

	$("body").on("click", "#delete-com", function(){
		var id = $(this).data('id');
		$.get("?url=Competencia&accion=eliminar", {id: id}, function(response){
			console.log(response);
			var res = JSON.parse(response);
			if (res.ok) {
				$(this).parent().parent().remove();
				alert("se ha eliminado el registro");
			}
			else {
				alert("Error:! "+res.error);
			}
		});
	});

	$("#btn-save-res").on("click", function(){

		var action = document.getElementById('type-action').value;
		var form = document.getElementById('form-resultados');
		var formdata = new FormData(form);
		$.ajax({
			url: "?url=Resultado&accion="+action,
			type: "post",
			data: formdata,
			processData: false,
			contentType: false,
			success: function(response) {
				console.log(response);
				var res = JSON.parse(response);
				if (res.ok) {
					alert("La informacion se ha guardado");
				}
				else {
					alert("Error:! "+res.error);
				}
			}
		});
	});

	$("body").on("click", "#delete-res", function(){
		var id = $(this).data('id');
		$.get("?url=Resultado&accion=eliminar", {id: id}, function(response){
			console.log(response);
			var res = JSON.parse(response);
			if (res.ok) {
				$(this).parent().parent().remove();
				alert("se ha eliminado el registro");
			}
			else {
				alert("Error:! "+res.error);
			}
		});
	});
});