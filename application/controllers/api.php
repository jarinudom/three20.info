<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 * @package    three20
 * @author     Jeff Verkoeyen
 * @copyright  (c) 2010 Jeff Verkoeyen
 * @license    http://www.apache.org/licenses/LICENSE-2.0
 */
class Api_Controller extends Three20_Controller {

  const ALLOW_PRODUCTION = TRUE;

  public function ttstyle() {
    if (!IN_PRODUCTION) {
      $profiler = new Profiler;
    }

    url::redirect('/style/overview');
  }

}
