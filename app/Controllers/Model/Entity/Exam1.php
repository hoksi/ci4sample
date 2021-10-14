<?php
namespace App\Controllers\Model\Entity;

use App\Controllers\BaseController;

/**
 * Description of Exam1
 *
 * @author hoksi
 */
class Exam1 extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new \App\Models\Model\Entity\UserModel();
    }

    public function index()
    {
        echo '<pre>';

        // user 생성
        $idx = $this->create();

        // user 조회
        $user = $this->find($idx);

        echo '<hr/>';
        
        // user 수정
        $this->update($user);

        // user 조회
        $this->find($idx);

        // user 삭제
        $this->delete($idx);

        echo '</pre>';
    }

    protected function find($idx)
    {
        $user = $this->userModel->find($idx);

        // Display
        echo $user->name;
        echo "\n";
        echo $user->email;
        echo "\n";

        return $user;
    }

    protected function update($user)
    {
        unset($user->name);
        if (! isset($user->name)) {
            $user->name = 'something new';
        }

        echo "<h2>Update User</h2>";

        return $this->userModel->save($user);
    }

    protected function create()
    {
        $user = new \App\Entities\UserEntity();

        $user->name = 'foo';
        $user->email = 'foo@example.com';

        $this->userModel->save($user);

        echo "<h2>Create User</h2>";
        return $this->userModel->getInsertID();
    }

    protected function delete($idx)
    {
        $this->userModel->delete($idx);
    }
}