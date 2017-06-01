  <script src="resource/js/jquery-2.2.3.min.js"></script>
  <script src="resource/js/jquery.slimscroll.min.js"></script>
  <script src="resource/js/bootstrap.min.js"></script>
  <script src="resource/js/app.min.js"></script>
  <script src="resource/js/ajax.js"></script>
  <script>
  	$('body').on('show.bs.modal', "#myModalArchivos", function (event) {
	  var button = $(event.relatedTarget);
	  var recipient = button.data('whatever');
    if (recipient == 'actualizar') {
      var tr = button.parent().parent();
      document.getElementById('deporte-com').value = tr[0].cells[1].innerHTML;
      document.getElementById('descripcion-com').value = tr[0].cells[2].innerHTML;
      document.getElementById('inte-com').value = tr[0].cells[3].innerHTML;
    }
	  var modal = $(this);
	  modal.find('#type-action').val(recipient);
	});
  </script>
  <script>
    $('body').on('show.bs.modal', "#modal-resultados", function (event) {
    var button = $(event.relatedTarget);
    var recipient = button.data('whatever');
    if (recipient == 'actualizar') {
      var tr = button.parent().parent();
      document.getElementById('deportista-res').value = tr[0].cells[0].innerHTML;
      document.getElementById('competencia-res').value =tr[0].cells[3].innerHTML;
      document.getElementById('posicion-res').value = tr[0].cells[1].innerHTML
    }
    var modal = $(this);
    modal.find('#type-action').val(recipient);
  });
  </script>
</body>
</html>