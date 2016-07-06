<div class="modal fade" id="pupup_modal" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modal_title"></h4>
      </div>
      <div class="modal-body">
        <p id="modal_message"></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary btn-default" data-dismiss="modal">Cerrar</button>
       </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<script type="text/javascript">
  function showMessage($data){
    if($data != undefined && $data != null){
      console.log($data);
      $("#modal_title").html($data.title);
      $("#modal_message").html($data.message);
      $("#pupup_modal").modal("show");
    }
  }
</script>