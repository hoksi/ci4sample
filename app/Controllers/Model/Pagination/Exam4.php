<?php

namespace App\Controllers\Model\Pagination;

use App\Controllers\BaseController;

/**
 * Description of Exam4
 *
 * @author hoksi
 */
class Exam4 extends BaseController
{

    public function index()
    {
        $userModel = new \App\Models\Model\Pagination\UserModel();

        $data = [
            'users' => $userModel->paginate(10, 'default', null, 5),
            'pager' => $userModel->pager,
        ];

        echo view('model/pagination/exam1', $data);
    }
}