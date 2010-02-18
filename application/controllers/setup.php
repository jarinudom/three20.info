<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 * @package    three20
 * @author     Jeff Verkoeyen
 * @copyright  (c) 2010 Jeff Verkoeyen
 * @license    http://www.apache.org/licenses/LICENSE-2.0
 */
class Setup_Controller extends Three20_Controller {

  const ALLOW_PRODUCTION = TRUE;

  public function existing() {
    if (!IN_PRODUCTION) {
      $profiler = new Profiler;
    }

    $this->prepend_title('Add three20 to your project');

    $content = new View('setup/existing');

    $this->render_markdown_template($content);
  }

  public function templates() {
    if (!IN_PRODUCTION) {
      $profiler = new Profiler;
    }

    $this->prepend_title('Three20 project templates');

    $content = new View('setup/templates');

    $this->render_markdown_template($content);
  }

}
