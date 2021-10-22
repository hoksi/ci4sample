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
        // url 헬퍼 로드
        helper('url');

        // CURLRequest 로드
        $client = \Config\Services::curlrequest([
            'baseURI' => base_url(),
            'http_errors' => false
        ]);

        // user 생성
        $response = $client->post('/response/api/exam1/createUser', [
            'form_params' => [
                'name' => 'test',
                'email' => 'test@test.com',
            ]
        ]);

        $createResult = $response->getBody();

        // user 조회
        $response = $client->post('/response/api/exam1/getUser', [
            'form_params' => json_decode($createResult, true)
        ]);

        $userInfo = $response->getBody();

        // user 수정
        $userData = json_decode($userInfo, true);
        $userData['title'] = 'test-title';
        $response = $client->post('/response/api/exam1/updateUser', [
            'form_params' => $userData
        ]);

        $updateResult = $response->getBody();

        // user 조회
        $response = $client->post('/response/api/exam1/getUser', [
            'form_params' => $userData
        ]);

        $updateUserInfo = $response->getBody();

        // user 삭제
        $response = $client->post('/response/api/exam1/updateUser', [
            'form_params' => $userData
        ]);

        $deleteResult = $response->getBody();
        
        return view('response/api/exam1',[
            'createResult' => $createResult,
            'userInfo' => $userInfo,
            'updateResult' => $updateResult,
            'updateUserInfo' => $updateUserInfo,
            'deleteResult' => $deleteResult,
        ]);
    }

    public function createUser()
    {
        $this->userModel->save($this->request->getPost());

        // Respond with 201 status code
        return $this->respondCreated([
            'idx' => $this->userModel->getInsertID()
        ]);
    }

    public function getUser()
    {
        $userInfo = $this->userModel->find($this->request->getPost('idx'));

        return $this->respond($userInfo);
    }

    public function updateUser()
    {
        $result = $this->userModel->save($this->request->getPost());

        return $this->respondUpdated(['result' => $result]);
    }

    public function deleteUser()
    {
        $result = $this->userModel->delete($this->request->getPost('idx'));

        return $this->respondDeleted(['result' => $result]);
    }

}