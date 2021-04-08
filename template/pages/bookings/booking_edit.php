<div class="form-row">
   <div class="form-group col-md-6">
      <label class="form-label">Chambre</label>
      <input type="text" class="form-control" name="room" placeholder="Numéro de chambre" value="<?php echo $booking->room; ?>" required>
      <div class="clearfix"></div>
   </div>
</div>
<div class="form-row">
   <div class="form-group col-md-6">
      <label class="form-label">Debut</label>
      <input type="date" class="form-control" placeholder="Début du séjour" name="begin" value="<?php echo $booking->begin; ?>" required>
      <div class="clearfix"></div>
   </div>
</div>
<div class="form-row">
   <div class="form-group col-md-6">
      <label class="form-label">Durée</label>
      <input type="number" class="form-control" placeholder="Durée du séjour" name="duration" value="<?php echo $booking->duration; ?>" required>
      <div class="clearfix"></div>
   </div>
</div>