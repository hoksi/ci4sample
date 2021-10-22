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
    public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response,
                                   \Psr\Log\LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);
        
        helper(['form', 'url']);
    }

    public function index()
    {
        echo view('library/validation/exam1/signup');
    }

    public function signup()
    {
        if (! $this->validate([
            'username' => 'required',
            'password' => 'required',
            'passconf' => 'required|matches[password]',
            'email'    => 'required|valid_email',
        ])) {
            echo view('library/validation/exam1/signup', [
                'validation' => $this->validator,
            ]);
        } else {
            echo view('library/validation/exam1/success');
        }
    }
}