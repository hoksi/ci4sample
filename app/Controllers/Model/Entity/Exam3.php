<?php
namespace App\Controllers\Model\Entity;

use App\Controllers\BaseController;

/**
 * Description of Exam3
 *
 * @author hoksi
 */
class Exam3 extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new \App\Models\Model\Entity\DataMapModel();
    }

    public function index()
    {
        echo '<pre>';

        // user 생성
        $idx = $this->create();

        // user 조회
        $user = $this->find($idx);

        // user 삭제
         $this->userModel->delete($idx);

        echo '</pre>';
    }

    protected function create()
    {
        $user = new \App\Entities\DataMapEntity();

        $user->full_name = 'foo' . time();
        $user->email = 'foo@example.com';
        $user->password = '12345';

        $this->userModel->save($user);

        echo "<h2>Create User</h2>";
        return $this->userModel->getInsertID();
    }

    protected function find($idx)
    {
        $user = $this->userModel->find($idx);

        // Display
        print_r($user->toArray());

        return $user;
    }
}