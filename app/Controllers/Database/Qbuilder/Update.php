<?php
namespace App\Controllers\Database\Qbuilder;

use App\Controllers\BaseController;

/**
 * Description of Update
 *
 * @author hoksi
 */
class Update extends BaseController
{
    public function index()
    {
        sleep(3);
        $db      = \Config\Database::connect();
        $builder = $db->table('my_table_tmp_' . rand(0,9));

        return view('database/qbuilder/update', [
            'builder' => $builder,
            'db' => $db,
        ]);
    }
}