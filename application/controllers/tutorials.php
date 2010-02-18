<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 * @package    three20
 * @author     Jeff Verkoeyen
 * @copyright  (c) 2010 Jeff Verkoeyen
 * @license    http://www.apache.org/licenses/LICENSE-2.0
 */
class Tutorials_Controller extends Three20_Controller {

  const ALLOW_PRODUCTION = TRUE;

  public function github($argument = 'page', $index = 1) {
    if (!IN_PRODUCTION) {
      $profiler = new Profiler;
    }

    if (strtolower($argument) != 'page' ||
        !$index || !preg_match('/^[0-9]+$/', $index)) {
      Event::run('system.404');
    }

    $pages = array(
      'Intro',
      'User Model',
      'User View',
      'User Search'
    );
  
    $this->add_js_head_file('js/shBrushXml.js');

    $this->prepend_title('How to build a GitHub iPhone app with three20');

    $content = new View('tutorials/github/page'.$index);

    $navLinks = array();
    for ($ix = 0; $ix < count($pages); ++$ix) {
      $link = '';
      if ($ix + 1 != $index) {
        $link .= '<a href="/tutorials/github/page/'.($ix+1).'">';
      }
      $link .= $pages[$ix];
      if ($ix + 1 != $index) {
        $link .= '</a>';
      }
      $navLinks []= $link;
    }
    $content->navLinks = implode(' - ', $navLinks);

    $this->render_markdown_template($content);
  }

}
