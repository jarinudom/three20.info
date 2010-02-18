<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 * @package    three20
 * @author     Jeff Verkoeyen
 * @copyright  (c) 2010 Jeff Verkoeyen
 * @license    http://www.apache.org/licenses/LICENSE-2.0
 */
class Timeline_Controller extends Three20_Controller {

  const ALLOW_PRODUCTION = TRUE;

  public function roadmap() {
    if (!IN_PRODUCTION) {
      $profiler = new Profiler;
    }

    $this->prepend_title('Roadmap');

    $content = new View('timeline/roadmap');

    $this->add_css_file('css/timeline.css');
    $this->add_css_file('css/issues.css');
    $this->add_js_foot_file('js/github.js');
    $this->add_js_foot_file('js/showdown.js');
    $this->add_js_foot_file('js/roadmap.js');

    $this->render_markdown_template($content);
  }

}
