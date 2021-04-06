
<!-- Modal -->
<div class="modal fade" id="editModal<?php echo $modal_config['data']->id; ?>" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <form action="<?php echo $modal_config['action_form']; ?>" method="post">
		 <div class="modal-content">
			<div class="modal-header">
			  <h5 class="modal-title" id="editModalLabel"><?php echo $modal_config['title']; ?></h5>
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				 <span aria-hidden="true">&times;</span>
			  </button>
			</div>
			<div class="modal-body">
			  <?php include('template/pages/'. $modal_config['form_path'] .'.php'); ?>
			</div>
			<div class="modal-footer">
			  <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
			  <button type="submit" class="btn btn-primary">Sauvegarder</button>
			</div>
		 </div>
	 </form>
  </div>
</div>