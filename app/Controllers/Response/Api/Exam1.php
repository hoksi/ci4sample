<?php

namespace App\Controllers\Response\Api;

use App\Controllers\BaseController;
// API Response Trait
use CodeIgniter\API\ResponseTrait;

/**
 * Description of Exam1
 *
 * @author hoksi
 */
class Exam1 extends BaseController
{
    protected $userModel;

    use ResponseTrait;

    public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response,
                                   \Psr\Log\LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);

        $this->userModel = new \App\Models\Response\Api\UserModel();
    }

    public function index()
    {
        helper('url');

        // CURLRequest 로드
        return view('response/api/exam1',
            [
            'client' => \Config\Services::curlrequest([
                'baseURI' => base_url(),
                'http_errors' => false
            ]),
        ]);
    }

    public function createUser()
    {
        $this->userModel->save($this->request->getPost());

        // Respond with 201 status code
        return $this->respondCreated([
            'userCode' => $this->userModel->getInsertID()
        ]);
    }

    public function getUser()
    {

    }
}