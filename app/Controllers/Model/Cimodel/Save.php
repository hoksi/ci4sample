<?php
namespace App\Controllers\Model\Cimodel;

use App\Controllers\BaseController;

/**
 * Description of Save
 *
 * @author hoksi
 */
class Save extends BaseController
{
    public function index()
    {
        return view('model/cimodel/save', [
            'userModel' => model('App\Models\Model\Cimodel\MyTableTmpModel')
        ]);
    }
}