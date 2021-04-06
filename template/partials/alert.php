<?php
	if(array_key_exists('alert-message', $_SESSION)) {
?>
<div class="alert alert-dark-<?php echo $_SESSION['alert-message']['title']; ?> alert-dismissible fade show">
	<button type="button" class="close" data-dismiss="alert">×</button>
	<?php echo $_SESSION['alert-message']['message']; ?>
</div>
<?php
	}

	unset($_SESSION['alert-message']);
?>