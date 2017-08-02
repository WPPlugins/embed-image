<div class="wrap">
	<?php    echo "<h2>" . __( 'Embed Image Integration Options', '' ) . "</h2>"; ?>
	<?php if($updated==true) { echo "Your settings have been updated!"; }?>
	<p>For instructions, please visit the following link:</p>
	<p><a href="http://www.embedarticle.com/">http://www.embedanything.com/</a></p>
	<p>*Please note: An Embed Anything account is required to use this plugin.</p>
	<form name="emba_form" method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
		<input type="hidden" name="emba_hidden" value="Y">
		<?php    echo "<h4>" . __( 'Settings', '' ) . "</h4>"; ?>
		<p><?php _e("Publisher ID" ); ?><input type="text" name="pub_value" value="<?php echo $pub_value; ?>" size="30"></p>
		<p class="submit">
		<input type="submit" name="Submit" value="<?php _e('Update Options', '' ) ?>" />
		</p>
	</form>
</div>
