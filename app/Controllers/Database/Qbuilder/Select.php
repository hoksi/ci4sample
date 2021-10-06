<?php
namespace App\Controllers\Database\Qbuilder;

use App\Controllers\BaseController;

/**
 * Description of Select
 *
 * @author hoksi
 */
class Select extends BaseController
{
    public function index()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('my_table');

        return view('database/qbuilder/select', [
            'builder' => $builder,
            'db' => $db,
            'limit' => 1,
            'offset' => 2,
        ]);
    }
}