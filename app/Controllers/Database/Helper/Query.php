<?php
namespace App\Controllers\Database\Helper;

use App\Controllers\BaseController;

/**
 * Description of Query
 *
 * @author hoksi
 */
class Query extends BaseController
{
    public function index()
    {
        /* @var $db \CodeIgniter\Database\BaseConnection */
        $db = db_connect();


        $db->table('my_table_insert')->insert([
            'name' => 'test',
            'title' => 'test-title',
            'email' => 'test@test.com'
        ]);

        echo '<h2>$db->insertID()</h2>';
        echo '<p>데이터베이스 INSERT 수행시 INSERT ID입니다.</p>';
        
        echo $db->insertID();

        echo '<h2>$db->affectedRows()</h2>';
        echo '<p>“쓰기(insert, update, delete)” 유형 쿼리를 수행할 때 영향을 받는 행의 갯수를 표시합니다.</p>';

        echo $db->affectedRows();

        echo '<h2>$db->getLastQuery()</h2>';
        echo '<p>마지막으로 실행 된 쿼리(결과가 아닌 쿼리 문자열)를 나타내는 Query 개체를 반환합니다.</p>';

        echo $db->getLastQuery();

        $db->table('my_table_insert')->truncate();
    }
}