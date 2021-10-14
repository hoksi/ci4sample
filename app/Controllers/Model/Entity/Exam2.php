<?php
namespace App\Controllers\Model\Entity;

use App\Controllers\BaseController;

/**
 * Description of Exam2
 *
 * @author hoksi
 */
class Exam2 extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new \App\Models\Model\Entity\ExtUserModel();
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
        print_r($user->toArray());

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
        $user = new \App\Entities\ExtUserEntity();

        $user->full_name = 'foo';
        $user->email = 'foo@example.com';
        $user->password = '12345';

        $this->userModel->save($user);

        echo "<h2>Create User</h2>";
        return $this->userModel->getInsertID();
    }

    protected function delete($idx)
    {
        $this->userModel->delete($idx);
    }
}