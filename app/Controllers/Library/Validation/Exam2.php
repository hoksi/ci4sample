<?php
namespace App\Controllers\Library\Validation;

use App\Controllers\BaseController;

/**
 * Description of Exam2
 *
 * @author hoksi
 */
class Exam2 extends BaseController
{
    public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response,
                                   \Psr\Log\LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);

        helper(['form', 'url']);
    }

    public function index()
    {
        echo view('library/validation/exam2/signup');
    }

    public function signup()
    {
        if (! $this->validate([
            'contacts.name'         => 'required',
            'contacts.friends.name' => 'required',
            'user_ids.*'            => 'required',
        ])) {
            echo view('library/validation/exam2/signup', [
                'validation' => $this->validator,
            ]);
        } else {
            echo view('library/validation/exam2/success');
        }
    }
}