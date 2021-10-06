<?php
namespace App\Controllers\Database\Qbuilder;

use App\Controllers\BaseController;

/**
 * Description of Where
 *
 * @author hoksi
 */
class Where extends BaseController
{
    public function index()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('my_table');

        return view('database/qbuilder/where', [
            'builder' => $builder,
            'db' => $db,
        ]);
    }
}