<?php

namespace App\Controllers\Ci4lab\Lab1;

use App\Controllers\BaseController;

class Exam2 extends BaseController
{
    public function index()
    {
        
        return view('ci4lab/lab1/exam2/index');
    }

    public function generate()
    {
        $exam2Model = new \App\Models\Ci4lab\Lab1\Exam2Model();

        return view('ci4lab/lab1/exam2/generate', ['data' => $exam2Model->getHtml($this->request->getPost())]);
    }

    public function download()
    {
        $exam2Model = new \App\Models\Ci4lab\Lab1\Exam2Model();

        return $this->response->download('BaseController.php', $exam2Model->getPhp($this->request->getPost()));
    }
}