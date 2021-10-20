<?php
namespace App\Controllers\Library\Validation;

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
        helper(['form', 'url']);

        if (! $this->validate([
            'username'     => 'required',
            'password'     => 'required',
            'passconf' => 'required|matches[password]',
            'email'        => 'required|valid_email',
        ])) {
            echo view('library/validation/exam1/signup', [
                'validation' => $this->validator,
            ]);
        } else {
            echo view('library/validation/exam1/success');
        }
    }
}