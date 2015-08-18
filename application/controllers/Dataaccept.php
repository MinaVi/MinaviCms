<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dataaccept extends CI_Controller {

    var $form = array(
        array(
            'field' => 'title',
            'label' => 'タイトル',
            'rules' => 'required'
        ),
        array(
            'field' => 'event1',
            'label' => 'セリフ1',
            'rules' => 'required'
        ),
        array(
            'field' => 'event2',
            'label' => 'セリフ2',
            'rules' => 'required'
        ),
    );

    public function __construct() {
        parent::__construct();

        // Ideally you would autoload the parser
        $this->load->library('parser');
    }

    public function index() {

        if ($this->checkValidate() == FALSE) {
            $this->parser->parse("dataform.tpl");
            return null;
        }
        
        // form値取得
        $formValues = $this->input->post();
        echo print_r($formValues, true);
        
        $this->parser->parse("dataaccept.tpl");
    }

    private function checkValidate() {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        $this->form_validation->set_rules($this->form);

        if ($this->form_validation->run() == FALSE) {
            return FALSE;
        } else {
            return TRUE;
        }
    }

}
