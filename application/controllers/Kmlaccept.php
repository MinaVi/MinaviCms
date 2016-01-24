<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kmlaccept extends CI_Controller {

    var $form = array(
//        array(
//            'field' => 'kml',
//            'label' => 'タイトル',
//            'rules' => 'required'
//        ),
    );

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

    public function index() {

        // Ideally you would autoload the parser
        $this->load->library('parser');
        // アップロードクラス
//        $config['upload_path'] = '/material/';
//        $config['allowed_types'] = 'kml';
        $config['max_size'] = '0';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        // form値取得
        $formValues = $this->input->post();
//        $title = $formValues['kml'];

        log_message('DEBUG', print_r($this->upload->data(), true));
        log_message('DEBUG', print_r($_FILES, true));
        
        $field_name = "kmlfile";
        if (!$this->upload->do_upload($field_name)) {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('upload_form', $error);
        } else {
            $data = array('upload_data' => $this->upload->data());
            $this->load->view('upload_success', $data);
        }


        $this->parser->parse("dataaccept.tpl");
    }

}
