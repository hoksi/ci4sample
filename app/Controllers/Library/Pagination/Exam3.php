<?php

namespace App\Controllers\Library\Pagination;

use App\Controllers\BaseController;

/**
 * Description of Exam3
 *
 * @author hoksi
 */
class Exam3 extends BaseController
{

    public function index($page = 1)
    {
        $pager = \Config\Services::pager();

        $data = [
            'page' => ($page == '' ? 1 : $page),
            'perPage' => 15,
            'total' => 1500,
            'template' => 'default_simple',
            'segment' => 5,
            'pager' => $pager,
        ];

        echo view('library/pagination/exam3', $data);
    }
}