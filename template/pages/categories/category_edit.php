<input type="hidden" name="id" value="<?php echo $category->id; ?>">

<div class="form-row">
	<div class="form-group col-md-12">
		<label class="form-label">Label</label>
		<input type="text" class="form-control" name="label" placeholder="Label" value="<?php echo $category->label; ?>" required>
		<div class="clearfix"></div>
	</div>
</div>
<div class="form-row">
	<div class="form-group col-md-12">
		<label class="form-label">Description</label>
		<textarea name="description" id="" class="form-control" cols="30" rows="10" placeholder="Description de la catégorie" required><?php echo $category->description; ?></textarea>
		<div class="clearfix"></div>
	</div>
</div>