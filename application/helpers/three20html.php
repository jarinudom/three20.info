<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 * Extension to the HTML helper class.
 *
 * @package    Three20
 * @author     Jeff Verkoeyen
 * @copyright  (c) 2009-2010 Jeff Verkoeyen
 * @license    http://www.apache.org/licenses/LICENSE-2.0
 */
class three20html_Core extends html_Core {

  /**
   * Creates an inline script.
   *
   * @param   string|array  the script contents or an array of string contents
   * @return  string
   */
  public static function inlinescript($scripts) {
    $scripts = (array)$scripts;
    $compiled = '';
    foreach ($scripts as $script) {
      $compiled .= '<script type="text/javascript">'."\n".'//<![CDATA['."\n".$script."\n".'//]]>'."\n".'</script>'."\n";
    }
    return $compiled;
  }

}
