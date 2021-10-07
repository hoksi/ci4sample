<?php
namespace App\Controllers\Database\Qbuilder;

use App\Controllers\BaseController;

/**
 * Description of Qgroup
 *
 * @author hoksi
 */
class Qgroup extends BaseController
{
    public function index()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('my_table');

        return view('database/qbuilder/qgroup', [
            'builder' => $builder,
            'db' => $db,
        ]);
    }
}