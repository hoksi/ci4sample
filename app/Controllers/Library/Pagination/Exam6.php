<?php

namespace App\Controllers\Library\Pagination;

use App\Controllers\BaseController;

/**
 * Description of Exam6
 *
 * @author hoksi
 */
class Exam6 extends BaseController
{

    public function index()
    {
        $pager = \Config\Services::pager();

        $page = $this->request->getGet('page');

        $data = [
            'page' => ($page == '' ? 1 : $page),
            'perPage' => 15,
            'total' => 1500,
            'template' => 'tabler_full',
            'pager' => $pager,
        ];

        echo view('library/pagination/exam6', $data);
    }
}