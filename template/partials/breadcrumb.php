<?php
	$url = explode('/', $_SERVER['PATH_INFO']);
?>

<h4 class="font-weight-bold py-3 mb-0"><?php echo $title; ?></h4>
<div class="text-muted small mt-0 mb-4 d-block breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
		<li class="breadcrumb-item"><a href="#"><?php echo ucfirst($url[1]); ?></a></li>
		<li class="breadcrumb-item active"><?php echo ucfirst($url[2]); ?></li>
	</ol>
</div>
