<?php
namespace App\Controllers\Database\Qbuilder;

use App\Controllers\BaseController;

/**
 * Description of Orderby
 *
 * @author hoksi
 */
class Orderby extends BaseController
{
    public function index()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('my_table');

        return view('database/qbuilder/orderby', [
            'builder' => $builder,
            'db' => $db,
        ]);
    }
}