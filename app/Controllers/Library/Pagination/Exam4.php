<?php

namespace App\Controllers\Library\Pagination;

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
        $default = \Config\Services::pager();
        $group1 = \Config\Services::pager();
        $group2 = \Config\Services::pager();

        // 각 페이져 현재 페이지 조회
        $defaultPage = $this->request->getGet('page');
        $group1Page = $this->request->getGet('page_group1');
        $group2Page = $this->request->getGet('page_group2');

        $data = [
            'default' => $default,
            'group1' => $group1,
            'group2' => $group2,

            'defaultPage' => ($defaultPage ?: 1),
            'group1Page' => ($group1Page ?: 1),
            'group2Page' => ($group2Page ?: 1),

            'perPage' => 15,
            'total' => 1500,
            'template' => 'default_full',
            'segment' => 0,
        ];

        echo view('library/pagination/exam4', $data);
    }
}