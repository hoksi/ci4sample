<?php
namespace App\Controllers\Helper\Filesys;

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
        helper('filesystem');

        // 가상파일시스템 생성
        $root = get_vfs();

        return view('helper/filesys/exam6', [
            // 'filePath' => APPPATH . '/Controllers/Response',
            'filePath' => $root . '/Response',
        ]);
    }
}