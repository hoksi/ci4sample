<?php
namespace App\Controllers\Database\Qbuilder;

use App\Controllers\BaseController;

/**
 * Description of Delete
 *
 * @author hoksi
 */
class Delete extends BaseController
{
    public function index()
    {
        sleep(6);
        $db      = \Config\Database::connect();
        $builder = $db->table('my_table_tmp_' . rand(0,9));

        return view('database/qbuilder/delete', [
            'builder' => $builder,
            'db' => $db,
        ]);
    }
}