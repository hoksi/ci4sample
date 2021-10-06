<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controllers\Database\Queries;

use App\Controllers\BaseController;

/**
 * Description of Bind
 *
 * @author hoksi
 */
class Bind extends BaseController
{
    protected $db;

    public function __construct()
    {
        $this->db = db_connect();
    }
    public function index()
    {
        $sql = "SELECT * FROM my_table WHERE idx = ?";
        $query = $this->db->query($sql, [1]);

        echo '<pre>';
        print_r($query->getResult());
        echo '</pre>';
    }

    public function in()
    {
        echo '<p>전달되는 값이 배열일 경우에도 잘 변환됩니다.</p>';
        
        $sql = "SELECT * FROM my_table WHERE idx IN ?";
        $query = $this->db->query($sql, [
            [1,3]
        ]);

        echo '<pre>';
        print_r($query->getResult());
        echo '</pre>';
    }

    public function named()
    {
        echo '<h2>명명된 바인딩</h2>';
        echo '<p>바인딩된 값의 위치를 표시하기 위해 물음표를 사용하는 대신 바인딩의 이름을 지정하여 전달된 값의 키가 쿼리의 자리 표시자와 일치하도록 할 수 있습니다</p>';

        $sql = "SELECT * FROM my_table WHERE idx = :idx: AND name = :name:";
        $query = $this->db->query($sql, [
            'name' => 'test1',
            'idx' => 1,
        ]);

        echo '<pre>';
        print_r($query->getResult());
        echo '</pre>';
    }
}