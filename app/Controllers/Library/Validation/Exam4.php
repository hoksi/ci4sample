<?php
namespace App\Controllers\Library\Validation;

use App\Controllers\BaseController;

/**
 * Description of Exam4
 *
 * @author hoksi
 */
class Exam4 extends BaseController
{
    public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response,
                                   \Psr\Log\LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);
        
        helper(['form', 'url']);
    }

    public function index()
    {
        echo view('library/validation/exam4/signup');
    }

    public function signup()
    {
        if (!$this->validate([
                'username' => 'required',
                'password' => 'required|min_length[8]',
                'passconf' => 'required|matches[password]',
                'email' => 'required|valid_email',
            ],[
                'username' => [
                    'required' => '{field}은 필수 입력 값입니다.',
                ],
                'password' => [
                    'required' => '비밀번호를 입력해 주십시오.',
                    'min_length' => '비밀번호는 {param}자 이상 입력하여 주십시오.',
                ],
                'passconf' => [
                    'matches' => '비밀번호가 일치하지 않습니다.'
                ],
            ])) {

            echo view('library/validation/exam4/signup', ['validation' => $this->validator,]);
        } else {
            echo view('library/validation/exam1/success');
        }
    }
}