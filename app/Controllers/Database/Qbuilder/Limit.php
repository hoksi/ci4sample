<?php
namespace App\Controllers\Database\Qbuilder;

use App\Controllers\BaseController;

/**
 * Description of Limit
 *
 * @author hoksi
 */
class Limit extends BaseController
{
    public function index()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('my_table');

        return view('database/qbuilder/limit', [
            'builder' => $builder,
            'db' => $db,
        ]);
    }
}