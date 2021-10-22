<?php
namespace App\Controllers\Library\Pagination;

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
        $pager1 = \Config\Services::pager();
        $pager2 = service('pager');
        
        // 현재 페이지 정보 가져오기
        $page = $this->request->getGet('page');

        $data = [
            'page' => ($page ? $page : 1),
            'pager1' => $pager1,
            'pager2' => $pager2,
        ];

        echo view('library/pagination/exam1', $data);
    }
}