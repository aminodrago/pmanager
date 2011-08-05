<?php

  /**
   * embed_swf helper
   *
   * @package activeCollab.modules.resources
   * @subpackage helpers
   */

  /**
   * Render a Flash movie
   *
   * Parameters:
   *
   * - app - Flash application that needs to be embedded
   * - width - Width of the movie
   * - height - Height of the movie
   *
   * @param array $params
   * @param Smarty $smarty
   * @return string
   */
  function smarty_function_embed_swf($params, &$smarty) {

  	$module = array_var($params, 'module', 'reports');
  	$module_assets_url = ASSETS_URL.'/modules/'.$module.'/';
  	$swf_prefix = $module_assets_url.'swf/';

    $app = array_var($params, 'app');
    $width = array_var($params, 'width', '100%');
    $height = array_var($params, 'height', '700');
    $flashVars = array_var($params, 'flashVars', '');

	// TODO: Check if file exists
    if($app == '') {
      return new InvalidParamError('app', $app, '$app is supposed to point to a valid Flash application', true);
    } // if

	$html = '<script language="JavaScript" type="text/javascript">
<!--
var requiredMajorVersion = 9;
var requiredMinorVersion = 0;
var requiredRevision = 28;
swfBase = "'.$swf_prefix.'"
// Version check for the Flash Player that has the ability to start Player Product Install (6.0r65)
var hasProductInstall = DetectFlashVer(6, 0, 65);

// Version check based upon the values defined in globals
var hasRequestedVersion = DetectFlashVer(requiredMajorVersion, requiredMinorVersion, requiredRevision);

if ( hasProductInstall && !hasRequestedVersion ) {
	// DO NOT MODIFY THE FOLLOWING FOUR LINES
	// Location visited after installation is complete if installation is required
	var MMPlayerType = (isIE == true) ? "ActiveX" : "PlugIn";
	var MMredirectURL = window.location;
    document.title = document.title.slice(0, 47) + " - Flash Player Installation";
    var MMdoctitle = document.title;

	AC_FL_RunContent(
		"src", "playerProductInstall",
		"FlashVars", "MMredirectURL="+MMredirectURL+\'&MMplayerType=\'+MMPlayerType+\'&MMdoctitle=\'+MMdoctitle+"",
		"width", "'.$width.'",
		"height", "'.$height.'",
		"align", "middle",
		"id", "'.$app.'",
		"quality", "high",
		"bgcolor", "#869ca7",
		"name", "'.$app.'",
		"allowScriptAccess","sameDomain",
		"type", "application/x-shockwave-flash",
		"wmode", "transparent",
		"pluginspage", "http://www.adobe.com/go/getflashplayer"
	);
} else if (hasRequestedVersion) {
	// if we\'ve detected an acceptable version
	// embed the Flash Content SWF when all tests are passed
	AC_FL_RunContent(
			"src", "'.$app.'",
			"width", "'.$width.'",
			"height", "'.$height.'",
			"align", "middle",
			"id", "'.$app.'",
			"quality", "high",
			"bgcolor", "#869ca7",
			"name", "'.$app.'",
			"FlashVars", "'.$flashVars.'",
			"allowScriptAccess","all",
			"type", "application/x-shockwave-flash",
			"wmode", "transparent",
			"pluginspage", "http://www.adobe.com/go/getflashplayer"
	);
  } else {  // flash is too old or we can\'t detect the plugin
    var alternateContent = \'Alternate HTML content should be placed here. \'
  	+ \'This content requires the Adobe Flash Player. \'
   	+ \'<a href=http://www.adobe.com/go/getflash/>Get Flash</a>\';
    document.write(alternateContent);  // insert non-flash content
  }
// -->
</script>
<noscript>
  	<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
			id="'.$app.'" width="'.$width.'" height="'.$height.'"
			codebase="http://fpdownload.macromedia.com/get/flashplayer/current/swflash.cab">
			<param name="movie" value="'.$swf_prefix.$app.'.swf" />
			<param name="flashvars" value="'.$flashVars.'" />
			<param name="quality" value="high" />
			<param name="bgcolor" value="#869ca7" />
			<param name="allowScriptAccess" value="all" />
			<param name="wmode" value="transparent">
			<embed src="'.$swf_prefix.$app.'.swf" quality="high" bgcolor="#869ca7"
				width="'.$width.'" height="'.$height.'" name="'.$app.'" align="middle"
				flashvars="'.$flashVars.'"
				play="true"
				loop="false"
				quality="high"
				allowScriptAccess="all"
				type="application/x-shockwave-flash"
				wmode="transparent"
				pluginspage="http://www.adobe.com/go/getflashplayer">
			</embed>
	</object>
</noscript>';
	return $html;
  } // smarty_function_embed_swf


?>
