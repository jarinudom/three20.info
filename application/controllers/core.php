<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 * @package    three20
 * @author     Jeff Verkoeyen
 * @copyright  (c) 2010 Jeff Verkoeyen
 * @license    http://www.apache.org/licenses/LICENSE-2.0
 */
class Core_Controller extends Three20_Controller {

  const ALLOW_PRODUCTION = TRUE;

  public function debugging() {
    if (!IN_PRODUCTION) {
      $profiler = new Profiler;
    }

    $this->prepend_title('Debugging with three20');

    $content = new View('core/debugging');

    $this->render_markdown_template($content);
  }

}
