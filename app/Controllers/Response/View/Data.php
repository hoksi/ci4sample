<?php
namespace App\Controllers\Response\View;

use App\Controllers\BaseController;

/**
 * Description of Data
 *
 * @author hoksi
 */
class Data extends BaseController
{
    public function index()
    {
        $data['title']   = "My Real Title";
        $data['heading'] = "My Real Heading";

        echo view('response/view/data', $data);
    }

    public function saveData()
    {
        $data = [
            'title'   => 'My title',
            'heading' => 'My Heading',
            'message' => 'My Message',
        ];

        echo view('response/view/saveData', $data, ['saveData' => true]);
        echo view('response/view/saveData');
        echo view('response/view/saveData');
        echo view('response/view/saveData');
    }
}