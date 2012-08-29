<?php
/** 囧
 * The template for displaying search forms in Twenty Eleven
 *
 * @package PIGGYBACK
 * @subpackage Whitecoat_Colombo
 */
?>
	<form class="navbar-form " method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<input type="text" class="field " style="" name="s" id="s" placeholder="Type in here..." />
		<input type="submit" class="submit btn" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'Search', 'twentyeleven' ); ?>" />
	</form>
