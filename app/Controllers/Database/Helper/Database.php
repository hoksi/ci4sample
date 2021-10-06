<?php
namespace App\Controllers\Database\Helper;

use App\Controllers\BaseController;

/**
 * Description of Database
 *
 * @author hoksi
 */
class Database extends BaseController
{
    public function index()
    {
        $db = db_connect();

        echo '<h2>countAll()</h2>';
        echo '<p>특정 테이블 행의 수를 확인할 수 있습니다. `Query Builder`의 일부입니다.</p>';

        echo $db->table('my_table')->countAll();

        echo '<h2>countAllResults()</h2>';
        echo '<p>특정 결과의 행 수를 확인할 수 있습니다. `Query Builder`의 일부입니다.</p>';

        echo $db->table('my_table')->like('title', '2')->countAllResults();

        echo '<h2>getPlatform()</h2>';
        echo '<p>실행중인 데이터베이스 플랫폼을 출력합니다.</p>';

        echo $db->getPlatform();

        echo '<h2>getVersion()</h2>';
        echo '<p>실행중인 데이터베이스 버전을 출력합니다.</p>';

        echo $db->getVersion();
    }
}