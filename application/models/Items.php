<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Items extends CI_Model {

    public function __construct() {
        parent::__construct();

        // 独自処理
    }

    public function getItems() {
        $sql = 'SELECT * FROM local_items WHERE is_enabled = 1 AND is_removed = 0';
        $query = $this->db->query($sql);
        if ($this->db->query($sql)) {
            // 成功処理
            $result = $query->result('array');
            return $result;
        } else {
            // 失敗処理
            return false;
        }
    }

    /**
     * 
     * ARアイテムを登録する
     * 
     * @param type $areaId
     * @param type $title
     * @param type $lon
     * @param type $lat
     * @param type $bgImageFile
     * @return boolean
     */
    public function setItem($areaId, $title, $lon, $lat, $bgImageFile) {
        $params = array(
            'talk_group_id' => 0,
            'area_id' => $areaId,
            'title' => $title,
            'lon' => $lon,
            'lat' => $lat,
            'ar_image_name' => $bgImageFile,
            'is_enabled' => 1,
            'is_removed' => 0
        );

        $sql = $this->db->insert_string('local_items', $params);
        if ($this->db->query($sql)) {
            // 成功処理
            return true;
        } else {
            // 失敗処理
            return false;
        }
    }

}

