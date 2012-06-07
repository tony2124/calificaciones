<?php 
	if(!defined("_access")) {
		die("Error: You don't have permission to access here..."); 
	}
?>
<div class="content" align="center">

	<div>
		<?php $this->load(isset($view) ? $view : NULL, TRUE); ?>
	</div>
</div>