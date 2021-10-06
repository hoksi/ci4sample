<?php
namespace App\Controllers\Database\Queries;

use App\Controllers\BaseController;

/**
 * Description of Identifier
 *
 * @author hoksi
 */
class Identifier extends BaseController
{
    public function index()
    {
        $db = db_connect();

        $db->setPrefix('sample_');

        echo '<p>';

        echo $db->protectIdentifiers('table_name');

        echo '</p><p>';

        echo $db->protectIdentifiers('table_name', true);

        echo '</p>';
    }
}