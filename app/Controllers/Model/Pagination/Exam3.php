<?php

namespace App\Controllers\Model\Pagination;

use App\Controllers\BaseController;

/**
 * Description of Exam3
 *
 * @author hoksi
 */
class Exam3 extends BaseController
{

    public function index()
    {
        $userModel = new \App\Models\Model\Pagination\UserModel();

        // 편의상 request getGet() 메소드를 사용합니다.
        $page = $this->request->getGet('page');

        $data = [
            'users' => $userModel->paginate(10, 'default', $page),
            'pager' => $userModel->pager,
        ];

        echo view('model/pagination/exam1', $data);
    }
}