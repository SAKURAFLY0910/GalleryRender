<?php
if (!isset($core)){
	require_once 'filemanager_core.php';
	$core = new filemanager_core();
	require_once 'filemanager_language.php';
}
if ($core->isLogin() and $core->role == "admin"){
?>
</div> <!-- /container -->
<div class="footer">
	<div class="footer-inner">
		<i class="fa fa-chevron-up x3-scroll-up"></i>
		<span class="x3-version">X<?php echo $x3_config["x3_version"] ?></span>
	</div>
</div>

<!-- Needs to be included before other JS -->
<script src="filemanager_js/tmpl.min.js"></script>

<!-- various JS -->
<script src='https://cdn.jsdelivr.net/jquery/2.2.4/jquery.min.js'></script>
<script src="https://cdn.jsdelivr.net/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/keymaster.js/1.6.1/keymaster.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.autosize/3.0.4/autosize.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.scrolltofixed/0.1/jquery-scrolltofixed-min.js"></script>
<script src="https://cdn.jsdelivr.net/load-image/1.11.1/js/load-image.min.js"></script>
<script src="https://cdn.jsdelivr.net/canvas-toblob/0.1/canvas-toBlob.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.fileupload/9.9.0/js/vendor/jquery.ui.widget.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.fileupload/9.9.0/js/jquery.fileupload.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.fileupload/9.9.0/js/jquery.fileupload-process.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.fileupload/9.9.0/js/jquery.fileupload-image.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.fileupload/9.9.0/js/jquery.fileupload-audio.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.fileupload/9.9.0/js/jquery.fileupload-video.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.fileupload/9.9.0/js/jquery.fileupload-validate.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.fileupload/9.9.0/js/jquery.fileupload-ui.js"></script>
<script src="https://cdn.jsdelivr.net/simplemde/1.8.0/simplemde.min.js"></script>
<script src="https://cdn.jsdelivr.net/underscorejs/1.8.3/underscore-min.js"></script>
<script src="https://cdn.jsdelivr.net/ace/1.2.0/min/ace.js"></script>
<script src="https://cdn.jsdelivr.net/ace/1.2.0/min/mode-css.js"></script>
<script src="https://cdn.jsdelivr.net/ace/1.2.0/min/mode-javascript.js"></script>
<script src="https://cdn.jsdelivr.net/ace/1.2.0/min/mode-html.js"></script>
<script src="https://cdn.jsdelivr.net/ace/1.2.0/min/mode-json.js"></script>
<script src="https://cdn.jsdelivr.net/ace/1.2.0/min/worker-css.js"></script>
<script src="https://cdn.jsdelivr.net/ace/1.2.0/min/worker-javascript.js"></script>
<script src="https://cdn.jsdelivr.net/ace/1.2.0/min/worker-html.js"></script>
<script src="https://cdn.jsdelivr.net/ace/1.2.0/min/worker-json.js"></script>
<script src="https://cdn.jsdelivr.net/ace/1.2.0/min/theme-tomorrow_night.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.velocity/0.11.9/jquery.velocity.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.velocity/0.11.9/velocity.ui.min.js"></script>
<script src="https://cdn.jsdelivr.net/photoswipe/4.1.2/photoswipe.min.js"></script>
<script src="https://cdn.jsdelivr.net/photoswipe/4.1.2/photoswipe-ui-default.min.js"></script>
<script src="https://cdn.jsdelivr.net/sortable/1.4.2/Sortable.min.js"></script>

<!-- X3 vars -->
<?php
$server_software = $_SERVER['SERVER_SOFTWARE'];
if(stripos($server_software, 'apache') !== false || stripos($server_software, 'litespeed') !== false){
	$conf_editor = file_exists('../.htaccess') && !isset($_SERVER['X3_SERVER_CONFIG']) ? "'htaccess'" : "false";
} else if(stripos($server_software, 'iis') !== false){
	$conf_editor = file_exists('../web.config') ? "'web.config'" : "false";
} else {
	$conf_editor = "false";
}
$session_maxlifetime = @ini_get("session.gc_maxlifetime");
?>
<script>
var fileTreeUserFolder = '';
var cloudflare = <?php if(defined('CLOUDFLARE_ENABLED') && CLOUDFLARE_ENABLED && defined('CLOUDFLARE_EMAIL') && CLOUDFLARE_EMAIL && defined('CLOUDFLARE_KEY') && CLOUDFLARE_KEY) { echo 'true'; } else { echo 'false'; } ?>;
var custom_setting_templates = <?php echo (file_exists('../config/custom-setting-templates.json') && is_readable('../config/custom-setting-templates.json') ? 'true' : 'false') ?>;
var user = 'super';
var hide_auth = <?php if(defined('HIDE_AUTH') && HIDE_AUTH) { echo 'true'; } else { echo 'false'; } ?>;
var x3_version = '<?php echo $x3_config["x3_version"] ?>';
var x3_panel_version = '<?php echo $x3_config["x3_panel_version"] ?>';
var server_software = '<?php echo $server_software ?>';
var conf_editor = <?php echo $conf_editor ?>;
var root_dir_name = "<?php echo ROOT_DIR_NAME; ?>";
var core_admin_id = <?php echo $core->admin_id; ?>;
var session_maxlifetime = <?php echo !empty($session_maxlifetime) ? $session_maxlifetime : 'false'; ?>;

// vars for updater
var root_writeable = <?php echo (is_writable(dirname(__DIR__)) ? 'true' : 'false'); ?>;
var has_ziparchive = <?php echo (class_exists('ZipArchive') ? 'true' : 'false'); ?>;
var has_curl = <?php echo (extension_loaded('curl') && function_exists('curl_version') && function_exists('curl_init') && function_exists('curl_setopt') && function_exists('curl_exec') && function_exists('curl_close') ? 'true' : 'false'); ?>;

reload_sidebar = false;
first_flag = true;
here = '';

// language object
var language = <?php echo json_encode($language); ?>;
</script>

<!-- X3 Panel versioned -->
<script src="filemanager_js/x3_panel.js?v=<?php echo $x3_config["x3_panel_version"]; ?>"></script>

<!-- init -->
<script>

function initShowFileManager(){
<?php
$key = "redirect_to_url_file_manager_go";
if(isset($_SESSION[$key])){
	$dir = $_SESSION[$key];
	unset($_SESSION[$key]);
	if(is_dir($dir)) {
?>
loading_from_file = false;
showFileManager('<?php echo addslashes($dir);?>');
<?php } else { ?>
loading_from_file = false;
showFileManager('');
<?php
}
} else {
?>
loading_from_file = false;
x3NavPage();
<?php } ?>
}

show_left_folder_menu();
</script>

</body>
</html>

<?php
} else {
	header("Location: .");
}
?>
