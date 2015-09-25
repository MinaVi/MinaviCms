<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Datasend extends CI_Controller {

    public function __construct() {
        parent::__construct();

        // Ideally you would autoload the parser
        $this->load->library('parser');
    }

    public function index() {

        $this->load->model('Items', '', TRUE);
        $items = $this->Items->getItemsOverTargetDatetime();
        $postItems = array();

        foreach ($items as $key => $item) {
            if (!empty($item)) {
                $item['title'] = $item['title'];
            }
            $postItems[] = $item;
        }

        $this->smarty->assign('all_items', $postItems);

        $mime = "text/xml";
        header("Content-type: $mime");

        $this->parser->parse("datasend.tpl");
    }

}
