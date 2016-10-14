<?php
/**
 * Footer Admin Template
 *
 * @package GetSimple
 */

?>
		<div id="footer">
      	<div class="footer-left" >
      	<?php 
      		include(GSADMININCPATH ."configuration.php");
      		if (cookie_check()) { 
      			echo '<p><a href="pages.php">'.i18n_r('PAGE_MANAGEMENT').'</a> &nbsp;&bull;&nbsp; <a href="upload.php">'.i18n_r('FILE_MANAGEMENT').'</a> &nbsp;&bull;&nbsp; <a href="theme.php">'.i18n_r('THEME_MANAGEMENT').'</a> &nbsp;&bull;&nbsp; <a href="backups.php">'.i18n_r('BAK_MANAGEMENT').'</a> &nbsp;&bull;&nbsp; <a href="plugins.php">'.i18n_r('PLUGINS_MANAGEMENT').'</a> &nbsp;&bull;&nbsp; <a href="settings.php">'.i18n_r('GENERAL_SETTINGS').'</a></p>';
      		}
      	?>
      	</div>
      	<div class="clear"></div>
      	<?php 
      	if(get_filename_id()!='index') {
      		get_scripts_backend(TRUE);
      		exec_action('footer'); 
      	}
      	?>

		</div><!-- end #footer -->
		<?php 
		if (defined('GSDEBUG')){
			global $GS_debug;
			echo '<h2>'.i18n_r('DEBUG_CONSOLE').'</h2><div id="gsdebug">';
			echo '<pre>';
			foreach ($GS_debug as $log){
				print($log);
			}
			echo '</pre>';	
			echo '</div>';
		}
		?>
	</div><!-- end .wrapper -->
	
	
	
</body>
</html>