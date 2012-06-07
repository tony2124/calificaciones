<?php 
	if(!defined("_access")) {
		die("Error: You don't have permission to access here..."); 
	}
?>
<div class="span10">
	<?php $this->load(isset($view) ? $view : NULL, TRUE); ?>
</div>
