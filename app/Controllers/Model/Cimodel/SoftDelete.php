<?php
namespace App\Controllers\Model\Cimodel;

use App\Controllers\BaseController;

/**
 * Description of SoftDelete
 *
 * @author hoksi
 */
class SoftDelete extends BaseController
{
    public function index()
    {
        return view('model/cimodel/softDelete', [
            'userModel' => model('App\Models\Model\Cimodel\SoftDeleteMyTableModel')
        ]);
    }
}