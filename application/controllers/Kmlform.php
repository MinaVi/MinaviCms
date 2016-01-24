<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kmlform extends CI_Controller {

    public function __construct() {
        parent::__construct();

        // Ideally you would autoload the parser
        $this->load->library('parser');
    }

    public function index() {
        $this->parser->parse("kmlform.tpl");
    }

}
