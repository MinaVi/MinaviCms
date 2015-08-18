<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * CI Smarty
 *
 * Smarty templating for Codeigniter
 *
 * @package   CI Smarty
 * @author    Dwayne Charrington
 * @copyright 2015 Dwayne Charrington and Github contributors
 * @link      http://ilikekillnerds.com
 * @license   MIT
 * @version   3.0
 */

class Smartytest extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        // Ideally you would autoload the parser
        $this->load->library('parser');
    }

    public function index()
    {
        // Some example data
        $data['title'] = "The Smarty parser works!";
        $data['body']  = "Welcome";

        $this->load->model('Events', 'events', TRUE);
//        $result = $this->events->setEvent();
        
        // Load the template from the views directory
        $this->parser->parse("smartytest.tpl", $data);
    }

    /**
     * Showing off Smarty 3 template inheritance features
     *
     */
    public function inheritance()
    {
        // Some example data
        $data['title'] = "The Smarty parser works with template inheritance!";
        $data['body']  = "Welcome";

        // Load the template from the views directory
        $this->parser->parse("inheritancetest.tpl", $data);

    }

}
