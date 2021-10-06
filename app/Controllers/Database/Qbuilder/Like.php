<?php
namespace App\Controllers\Database\Qbuilder;

use App\Controllers\BaseController;

/**
 * Description of Like
 *
 * @author hoksi
 */
class Like extends BaseController
{
    public function index()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('my_table');

        return view('database/qbuilder/like', [
            'builder' => $builder,
            'db' => $db,
        ]);
    }
}