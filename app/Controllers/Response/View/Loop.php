<?php
namespace App\Controllers\Response\View;

use App\Controllers\BaseController;

/**
 * Description of Loop
 *
 * @author hoksi
 */
class Loop extends BaseController
{
    public function index()
    {
        $data = [
            'todo_list' => ['Clean House', 'Call Mom', 'Run Errands'],
            'title'     => 'My Real Title',
            'heading'   => 'My Real Heading',
        ];

        echo view('response/view/loop', $data);
    }
}