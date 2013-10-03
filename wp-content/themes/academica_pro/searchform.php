<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
	<fieldset>
		<input type="text" onblur="if (this.value == '') {this.value = '<?php _e('Pesquisar', 'wpzoom') ?>';}" onfocus="if (this.value == '<?php _e('Pesquisar', 'wpzoom') ?>') {this.value = '';}" value="<?php _e('Pesquisar', 'wpzoom') ?>" name="s" id="setop" />
		<input type="submit" id="searchsubmit" value="<?php _e('Ok', 'wpzoom') ?>" />
	</fieldset>
</form>
 
