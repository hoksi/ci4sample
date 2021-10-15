<?php
namespace App\Controllers\Helper\Filesys;

use App\Controllers\BaseController;

/**
 * Description of Exam3
 *
 * @author hoksi
 */
class Exam3 extends BaseController
{
    public function index()
    {
        helper('filesystem');

        // 가상파일시스템 생성
        $root = get_vfs();

        return view('helper/filesys/exam3', [
            'writeFile' => $root . '/test.txt',
            'data' => 'Some file data'
        ]);
    }
}