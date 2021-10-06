<?php
namespace App\Controllers\Database\Quick;

use App\Controllers\BaseController;

/**
 * Description of QueryBuilder
 *
 * @author hoksi
 */
class QueryBuilder extends BaseController
{
    protected $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->db->initialize();
    }

    public function index()
    {
        $query = $this->db->table('my_table')->get();

        echo '<ul>';
        foreach ($query->getResult() as $row) {
            echo '<li>';
            echo $row->title;
            echo '</li>';
        }
        echo '</ul>';
    }

    public function insert()
    {
        echo '<h2>쿼리 빌더 Insert</h2>';
        
        $data = [
            'title' => date('Y-m-d H:i:s') . ' - title',
            'name'  => 'test',
            'email'  => 'test@test.com'
        ];

        $this->db->table('my_table_insert')->insert($data);

        echo '<pre>';
        print_r($this->db->table('my_table_insert')->get()->getResult());
        echo '</pre>';
        
        $this->db->table('my_table_insert')->truncate();
    }
}