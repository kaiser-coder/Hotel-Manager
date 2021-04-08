<input type="hidden" name="id" value="<?php echo $client->id; ?>">

<div class="form-row">
   <div class="form-group col-md-6">
      <label class="form-label">Nom</label>
      <input type="text" class="form-control" placeholder="Nom" name="first_name" value="<?php echo $client->first_name ?>" required>
      <div class="clearfix"></div>
   </div>
   <div class="form-group col-md-6">
      <label class="form-label">Prénom</label>
      <input type="text" class="form-control" placeholder="Prénom" name="last_name" value="<?php echo $client->last_name ?>" required>
      <div class="clearfix"></div>
   </div>
</div>
<div class="form-row">
   <div class="form-group col-md-6">
      <label class="form-label">Genre</label>
      <select class="custom-select" name="gender" required>
         <option value="">Selectionnez une option</option>
         <option value="mr">Monsieur</option>
         <option value="m.">Madame</option>
      </select>
   </div>
</div>
<div class="form-row">
   <div class="form-group col-md-12">
      <label class="form-label">Nationalité</label>
      <input type="text" class="form-control" placeholder="Nationalité" name="nationality" value="<?php echo $client->nationality ?>" required>
      <div class="clearfix"></div>
   </div>
</div>
<div class="form-row">
   <div class="form-group col-md-12">
      <label class="form-label">Adresse</label>
      <input type="text" class="form-control" placeholder="Adresse" name="address" value="<?php echo $client->address ?>"  required>
      <div class="clearfix"></div>
   </div>
</div>
<div class="form-row">
   <div class="form-group col-md-12">
      <label class="form-label">Téléphone</label>
      <input type="text" class="form-control" placeholder="Numéro de téléphone" name="phone_number" value="<?php echo $client->phone_number ?>" required>
      <div class="clearfix"></div>
   </div>
</div>
<div class="form-row">
   <div class="form-group col-md-12">
      <label class="form-label">CIN</label>
      <input type="text" class="form-control" placeholder="Carte d'Identité Nationale" value="<?php echo $client->ID_card ?>"  required>
      <div class="clearfix"></div>
   </div>
</div>