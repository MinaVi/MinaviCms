<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pointaccept extends CI_Controller {

    var $form = array(
        array(
            'field' => 'title',
            'label' => 'タイトル',
            'rules' => 'required'
        ),
        array(
            'field' => 'title_en',
            'label' => '英語タイトル',
            'rules' => 'required'
        ),
    );

    public function __construct() {
        parent::__construct();

        // Ideally you would autoload the parser
        $this->load->library('parser');
        
        // アップロードクラス
        $config['upload_path'] = 'C:\xampp\htdocs\minavicms\material';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '10000';
        $config['max_width'] = '1024';
        $config['max_height'] = '768';

        $this->load->library('upload', $config);
    }

    public function index() {

        if ($this->checkValidate() == FALSE) {
            $this->parser->parse("pointform.tpl");
            return null;
        }

        // form値取得
        $formValues = $this->input->post();

        $title = $formValues['title'];
        $lon = $formValues['lon'];
        $lat = $formValues['lat'];
        $areaId = $formValues['area_id'];
        $bgFileName = '';

        // ファイル　アップロード
        $this->upload->do_upload('bg_file');
        
        $this->load->model('Items', '', TRUE);

        $bgFileInfo = $this->upload->data();
        $bgFileName = $bgFileInfo['file_name'];
        $this->Items->setItem($areaId, $title, $lon, $lat, $bgFileName);


        $this->parser->parse("pointaccept.tpl");
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
