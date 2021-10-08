<?php
namespace App\Controllers\Model\Cimodel;

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
        return view('model/cimodel/delete', [
            'userModel' => model('App\Models\Model\Cimodel\MyTableTmpModel')
        ]);
    }
}