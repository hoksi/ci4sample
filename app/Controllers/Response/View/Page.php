<?php
namespace App\Controllers\Response\View;

use App\Controllers\BaseController;

/**
 * Description of Page
 *
 * @author hoksi
 */
class Page extends BaseController
{
    public function index()
    {
        $data = [
            'page_title' => 'Your title',
        ];

        echo view('response/view/header');
        echo view('response/view/menu');
        echo view('response/view/content', $data);
        echo view('response/view/footer');
    }
}