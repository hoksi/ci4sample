<?php
namespace App\Controllers\Library\Validation;

use App\Controllers\BaseController;

/**
 * Description of Exam3
 *
 * @author hoksi
 */
class Exam3 extends BaseController
{
    public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response,
                                   \Psr\Log\LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);

        helper(['form', 'url']);
    }

    public function index()
    {
        echo view('library/validation/exam3/signup');
    }

    public function signup()
    {
        if (! $this->validate([
            'username' => 'required',
            'avatar'   => 'uploaded[avatar]|max_size[avatar,2048]|max_dims[avatar,1024,1024]|ext_in[avatar,png,jpg]',
        ])) {
            echo view('library/validation/exam3/signup', [
                'validation' => $this->validator,
            ]);
        } else {
            echo view('library/validation/exam3/success');
        }
    }
}