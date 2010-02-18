<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 * @package    three20
 * @author     Jeff Verkoeyen
 * @copyright  (c) 2010 Jeff Verkoeyen
 * @license    http://www.apache.org/licenses/LICENSE-2.0
 */
class Three20_Controller extends Template_Controller {

  const ALLOW_PRODUCTION = FALSE;

  // Set the name of the template to use
  public $template = 'template';
  public $auto_render = FALSE;

  public function __construct() {
    parent::__construct();

    $this->session = Session::instance();

    $this->template->js_foot_files = array();
    $this->template->js_head_files = array();
    $this->template->js_head_scripts = array();
    $this->template->css_files = array();
    $this->template->title = array('three20.info');
    
    $this->add_css_file('css/global.css');
    $this->add_css_file('css/shCore.css');
    $this->add_css_file('css/shTheme.css');
    $this->add_css_file('css/jquery.autocomplete.css');

    $this->add_js_head_file('js/shCore.js');
    $this->add_js_head_file('js/shBrushObjC.js');
    $this->add_js_head_file('js/shBrushBash.js');
    $this->add_js_head_script('
      SyntaxHighlighter.config.clipboardSwf = \'/swf/clipboard.swf\';
      SyntaxHighlighter.defaults.light = true;
      SyntaxHighlighter.defaults[\'tab-size\'] = 2;
      SyntaxHighlighter.defaults[\'auto-links\'] = false;
      SyntaxHighlighter.defaults.toolbar = false;
      SyntaxHighlighter.all();');

    $this->add_js_foot_file('js/jquery.js');
    $this->add_js_foot_file('js/jquery.placeholder.js');
    $this->add_js_foot_file('js/jquery.autocomplete.js');
    $this->add_js_foot_file('js/globallookup.js');
  }

  protected function add_js_foot_file($file) {
    $this->template->js_foot_files []= $file;
  }

  protected function add_js_head_file($file) {
    $this->template->js_head_files []= $file;
  }

  protected function add_js_head_script($script) {
    $this->template->js_head_scripts []= $script;
  }

  protected function add_css_file($file) {
    $this->template->css_files []= $file;
  }

  protected function prepend_title($text) {
    array_unshift($this->template->title, $text);
  }

  protected function render_markdown_template($content) {
    require Kohana::find_file('vendor', 'Markdown');
    $content->title = current($this->template->title)."\n";
    $this->template->content = $content->render(FALSE, 'Markdown');

    $this->template->title = implode(' | ', $this->template->title);
    $this->template->render(TRUE);
  }

}