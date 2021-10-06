<?php
namespace App\Controllers\Database\Queries;

use App\Controllers\BaseController;

/**
 * Description of Basic
 *
 * @author hoksi
 */
class Basic extends BaseController
{
    public function index()
    {
        $db = db_connect();

        $query = $db->query('SELECT * FROM my_table');

        echo '<pre>';
        print_r($query);
        echo '</pre>';
    }

    public function write()
    {
        $db = db_connect();

        $query = $db->query('DELETE FROM my_table_insert');

        if( $query === true ) {
            echo '성공';
        } else {
            echo '실패';
        }
    }
}