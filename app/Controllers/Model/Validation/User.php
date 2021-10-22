<?php
namespace App\Controllers\Model\Validation;

use App\Controllers\BaseController;

/**
 * Description of User
 *
 * @author hoksi
 * @property \App\Models\Model\Validation\UserModel $userModel
 */
class User extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = model('App\Models\Model\Validation\UserModel');
    }

    public function index($idx = false)
    {
        $userInfo = $this->userModel->find($idx);

        $userList = $this->userModel->findAll(10);

        return view('model/validation/user/index', [
            'idx' => ($userInfo['idx'] ?? ''),
            'name' => ($userInfo['name'] ?? ''),
            'email' => ($userInfo['email'] ?? ''),
            'password' => ($userInfo['password'] ?? ''),
            'userList' => $userList
        ]);
    }

    public function save()
    {
        $userInfo = $this->request->getPost();

        $result = $this->userModel->save($userInfo);

        return view('model/validation/user/save', [
            'result' => $result,
            'errors' => $this->userModel->errors(),
        ]);
    }

    public function delete($idx = false)
    {
        $this->userModel->delete($idx);

        return $this->response->redirect('/model/validation/user');
    }
}