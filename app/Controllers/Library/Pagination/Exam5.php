<?php

namespace App\Controllers\Library\Pagination;

use App\Controllers\BaseController;

/**
 * Description of Exam5
 *
 * @author hoksi
 */
class Exam5 extends BaseController
{

    public function index()
    {
        $pager = \Config\Services::pager();

        $page = $this->request->getGet('page');

        $data = [
            'page' => ($page == '' ? 1 : $page),
            'perPage' => 15,
            'total' => 1500,
            'template' => 'default_simple',
            'pager' => $pager,
        ];

        echo view('library/pagination/exam5', $data);
    }
}