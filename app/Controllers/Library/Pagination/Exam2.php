<?php

namespace App\Controllers\Library\Pagination;

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
        $pager = service('pager');

        $page = $this->request->getGet('page');

        $data = [
            'page' => ($page == '' ? 1 : $page),
            'perPage' => 15,
            'total' => 1500,
            'template' => 'default_simple',
            'segment' => 5,
            'pager' => $pager,
        ];

        echo view('library/pagination/exam2', $data);
    }
}