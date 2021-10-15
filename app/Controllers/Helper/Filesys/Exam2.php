<?php
namespace App\Controllers\Helper\Filesys;

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
        helper('filesystem');

        // 가상파일시스템 생성
        $root = get_vfs();

        return view('helper/filesys/exam2', [
            'orgDir' => $root . '/Helper',
            'targetDir' => $root . '/HelperBackup',
        ]);
    }
}