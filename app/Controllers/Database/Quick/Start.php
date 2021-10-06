<?php
namespace App\Controllers\Database\Quick;

use App\Controllers\BaseController;

/**
 * Description of Start
 *
 * @author hoksi
 */
class Start extends BaseController
{
    protected $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->db->initialize();
    }

    public function index()
    {
        echo '<h2>여러 결과가 포함된 표준 쿼리 (객체 Version)</h2>';
        echo '<p>getResult() 함수는 객체(object)의 배열을 반환합니다.</p>';

        $query   = $this->db->query('SELECT name, title, email FROM my_table');
        $results = $query->getResult();

        echo '<ul>';
        foreach ($results as $row) {
            echo '<li>';
            echo $row->title;
            echo $row->name;
            echo $row->email;
            echo '</li>';
        }
        echo '</ul>';

        echo 'Total Results: ' . count($results);
    }

    public function resultArray()
    {
        echo '<h2>여러 결과가 포함된 표준 쿼리 (배열 Version)</h2>';
        echo '<p>getResultArray() 함수는 표준 배열 인덱스의 배열을 반환합니다.</p>';

        $query   = $this->db->query('SELECT name, title, email FROM my_table');
        $results = $query->getResultArray();

        echo '<ul>';
        foreach ($results as $row) {
            echo '<li>';
            echo $row['title'];
            echo $row['name'];
            echo $row['email'];
            echo '</li>';
        }
        echo '</ul>';

        echo 'Total Results: ' . count($results);
    }

    public function row()
    {
        echo '<h2>단일 결과가 포함된 표준 쿼리</h2>';
        echo '<p>getRow() 함수는 객체(object)를 반환합니다.</p>';

        $query = $this->db->query('SELECT name FROM my_table LIMIT 1');
        $row   = $query->getRow();
        echo $row->name;
    }

    public function rowArray()
    {
        echo '<h2>단일 결과가 포함된 표준 쿼리(Array version)</h2>';
        echo '<p>getRowArray() 함수는 배열을 반환합니다.</p>';

        $query = $this->db->query('SELECT name FROM my_table LIMIT 1');
        $row   = $query->getRowArray();
        echo $row['name'];
    }

    public function insert()
    {
        echo '<h2>표준 Insert</h2>';
        
        $sql = "INSERT INTO my_table_insert (title, name) VALUES (".$this->db->escape('test-' . date('Y-m-d H:i:s')).", ".$this->db->escape('test').")";
        $this->db->query($sql);

        echo '<p>';
        echo $sql;
        echo ' : ';
        echo $this->db->affectedRows();
        echo '</p>';

        $this->db->query('DELETE FROM my_table_insert');
        
    }
}