<?php
namespace App\Controllers\Helper\Filesys;

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
        helper('filesystem');

        // 가상파일시스템 생성
        $root = get_vfs();

        return view('helper/filesys/exam1', [
            'mydirectory' => $root,
        ]);
    }
}