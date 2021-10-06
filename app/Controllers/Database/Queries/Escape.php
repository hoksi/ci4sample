<?php
namespace App\Controllers\Database\Queries;

use App\Controllers\BaseController;

/**
 * Description of Escape
 *
 * @author hoksi
 */
class Escape extends BaseController
{
    public function index()
    {
        $db = db_connect();
        $db->initialize();

        $title = 123;
        
        echo '<p>';

        $sql = "INSERT INTO table (title) VALUES(".$db->escape($title).")";
        echo $sql;

        echo '<p></p>';

        $sql =  "INSERT INTO table (title) VALUES('".$db->escapeString($title)."')";
        echo $sql;

        echo '<p></p>';

        $search = '20% raise';
        $sql = "SELECT id FROM table WHERE column LIKE '%" . $db->escapeLikeString($search)."%' ESCAPE '!'";
        echo $sql;

        echo '</p>';
    }
}