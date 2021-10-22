<?php
namespace App\Controllers\Helper\Filesys;

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
        helper('filesystem');

        // 가상파일시스템 생성
        $root = get_vfs();

        return view('helper/filesys/exam5', [
            'filePath' => $root . '/Response',
        ]);
    }
}