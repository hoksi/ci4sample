<?php
namespace App\Controllers\Model\Cimodel;

use App\Controllers\BaseController;

/**
 * Description of Find
 *
 * @author hoksi
 */
class Find extends BaseController
{
    public function index()
    {
        return view('model/cimodel/find', [
            'userModel' => model('App\Models\Model\Cimodel\MyTableModel')
        ]);
    }
}