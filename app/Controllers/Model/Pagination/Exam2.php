<?php

namespace App\Controllers\Model\Pagination;

use App\Controllers\BaseController;

/**
 * Description of Exam2
 *
 * @author hoksi
 */
class Exam2 extends BaseController
{

    public function index()
    {
        $userModel = new \App\Models\Model\Pagination\UserModel();
        $pageModel = new \App\Models\Model\Pagination\PageModel();

        $data = [
            'users' => $userModel->paginate(10, 'group1'),
            'pages' => $pageModel->paginate(10, 'group2'),
            'usersPager' => $userModel->pager,
            'pagesPager' => $pageModel->pager,
        ];

        echo view('model/pagination/exam2', $data);
    }
}