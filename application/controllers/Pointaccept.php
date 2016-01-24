<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pointaccept extends CI_Controller {

    var $form = array(
        array(
            'field' => 'title',
            'label' => 'タイトル',
            'rules' => 'required'
        ),
//        array(
//            'field' => 'title_en',
//            'label' => '英語タイトル',
//            'rules' => 'required'
//        ),
    );

    public function __construct() {
        parent::__construct();

        // Ideally you would autoload the parser
        $this->load->library('parser');

        // アップロードクラス
        $config['upload_path'] = '/material';
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

        // 自動翻訳（マイクロソフト）
//        $access_token = $this->getAccessToken('MinaVi', 'axz4I4ym7trCLS4RSt3eaNc5FPHo0X1wYci7M8WdXyE=');
        $access_token = $this->getAccessToken("MinaVi","axz4I4ym7trCLS4RSt3eaNc5FPHo0X1wYci7M8WdXyE=")->access_token;
        $text = $formValues['title'];
        $params = array('text' => $text,'to' => 'en', 'from' => 'ja');
        
        $titleEn = $this->Translator($access_token, $params);
//        echo print_r($result, true);

        // ファイル　アップロード
        $this->upload->do_upload('bg_file');

        $this->load->model('Items', '', TRUE);

        $bgFileInfo = $this->upload->data();
        $bgFileName = $bgFileInfo['file_name'];
        $this->Items->setItem($areaId, $title, $titleEn, $lon, $lat, $bgFileName);


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

    function getAccessToken($client_id, $client_secret) {
        $ch = curl_init();
        curl_setopt_array($ch, array(
            CURLOPT_URL => "https://datamarket.accesscontrol.windows.net/v2/OAuth2-13/",
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => http_build_query(array(
                "grant_type" => "client_credentials",
                "scope" => "http://api.microsofttranslator.com",
                "client_id" => $client_id,
                "client_secret" => $client_secret
            ))
        ));
        return json_decode(curl_exec($ch));
    }

    /* 肝心の翻訳君 */
    function Translator($access_token, $params) {
        $ch = curl_init();
        curl_setopt_array($ch, array(
            CURLOPT_URL => "https://api.microsofttranslator.com/v2/Http.svc/Translate?" . http_build_query($params),
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HEADER => true,
            CURLOPT_HTTPHEADER => array(
                "Authorization: Bearer " . $access_token),
        ));
        preg_match('/>(.+?)<\/string>/', curl_exec($ch), $m);
        return $m[1];
    }

}
