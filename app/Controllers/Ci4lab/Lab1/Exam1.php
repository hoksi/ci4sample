<?php

namespace App\Controllers\Ci4lab\Lab1;

use App\Controllers\BaseController;

class Exam1 extends BaseController
{
    public function index()
    {
        return view('ci4lab/lab1/exam1/index');
    }

    public function generate()
    {
        $exam1Model = new \App\Models\Ci4lab\Lab1\Exam1Model();

        return view('ci4lab/lab1/exam1/generate', ['data' => $exam1Model->generate($this->request->getPost())]);
    }

    public function download()
    {
        $exam1Model = new \App\Models\Ci4lab\Lab1\Exam1Model();

        return $this->response->download('exam.env', $exam1Model->generate($this->request->getPost(), true));
    }
}