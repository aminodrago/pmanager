<?php

  /**
   * Charts module on_daily event handler
   *
   * @package activeCollab.modules.charts
   * @subpackage handlers
   */

  /**
   * House keeping
   *
   * @return null
   */
  function charts_handle_on_hourly() {
    $dir=CHARTS_OUTPUT_IMG_DIR;
    $dir = escapeshellcmd($dir);  
    $pattern="$dir/ac_charts_*.{png,pdf}";
    // Escape any character in a string that might be used to trick  
    // a shell command into executing arbitrary commands and then
    // get a list of the matching files.
    $files = glob($pattern,GLOB_BRACE);  

    // Now loop over the $files unlinking any older then the $ttl
    $ttl=60*60*1;  # 1 hour
    $now=time();
    foreach ($files as $file) {
      if (filemtime($file) < ($now - $ttl)) {
        #echo "$file goes\n";	# DEBUG ONLY
        unlink($file);
      } else {
        #echo "$file stays\n";	# DEBUG ONLY
      }
    }

  } // charts_handle_on_hourly


// Just for debugging -- should be commented out
//require_once('/var/www/activecollab-dev/config/config.php');	# DEBUG ONLY
//charts_handle_on_hourly();					# DEBUG ONLY

?>
