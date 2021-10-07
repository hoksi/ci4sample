<?php
namespace App\Controllers\Database\Qbuilder;

use App\Controllers\BaseController;

/**
 * Description of Insert
 *
 * @author hoksi
 */
class Insert extends BaseController
{
    public function index()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('my_table_tmp_' . rand(0,9));

        $builder->truncate();

        return view('database/qbuilder/insert', [
            'builder' => $builder,
            'db' => $db,
        ]);
    }
}