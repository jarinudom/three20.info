<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 * @package    three20
 * @author     Jeff Verkoeyen
 * @copyright  (c) 2010 Jeff Verkoeyen
 * @license    http://www.apache.org/licenses/LICENSE-2.0
 */
class Style_Controller extends Three20_Controller {

  const ALLOW_PRODUCTION = TRUE;

  public function overview() {
    if (!IN_PRODUCTION) {
      $profiler = new Profiler;
    }

    $this->prepend_title('Overview of Three20 styles');

    $content = new View('style/overview');

    $this->render_markdown_template($content);
  }

}
