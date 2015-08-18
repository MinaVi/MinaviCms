<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Events extends CI_Model {

    public function __construct() {
        parent::__construct();

        // 独自処理
    }

    public function getEvents() {
        $sql = 'SELECT * FROM talk_events WHERE is_enabled = 1 AND is_removed = 0';
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

    public function setEvent() {
        $params = array(
            'talk_group_id' => 1,
            'talk_body' => 'hogehoge',
            'is_enabled' => 1,
        );

        $sql = $this->db->insert_string('talk_events', $params);
        if ($this->db->query($sql)) {
            // 成功処理
            return true;
        } else {
            // 失敗処理
            return false;
        }
    }

}

