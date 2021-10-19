<?php
namespace App\Controllers\Model\Pagination;

use App\Controllers\BaseController;

/**
 * Description of Exam1
 *
 * @author hoksi
 */
class Exam1 extends BaseController
{
    public function index()
    {
        $model = new \App\Models\Model\Pagination\UserModel();

        $data = [
            'users' => $model->paginate(10),
            'pager' => $model->pager,
        ];

        echo view('model/pagination/exam1', $data);
    }
}