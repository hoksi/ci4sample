<?php
namespace App\Controllers\Model\Event;

use App\Controllers\BaseController;

/**
 * Description of ModelEvent
 *
 * @author hoksi
 */
class ModelEvent extends BaseController
{
    public function index()
    {
        echo '<pre>';
        $callBackModel = model('App\Models\Model\Event\CallBackModel');

        $now = time();
        $name = 'test-' . $now;

        // insert
        $callBackModel->save([
            'name' => $name,
            'email' => 'test@test.com-' . $now,
            'password' => 'testpassword-' . $now,
        ]);

        echo get_last_query() . "\n\n";

        $userInfo = $callBackModel
            ->where('name', $name)
            ->first();

        print_r($userInfo);

        $userInfo['password'] = 'change-' . $now;

        // pasword update
        $callBackModel->save($userInfo);
        echo get_last_query() . "\n\n";
        
        print_r($callBackModel
            ->where('name', $name)
            ->first());

        // Sample data 삭제
        $callBackModel->delete($userInfo['idx']);
    }

    public function allowCallbacks()
    {
        echo '<pre>';
        echo "allowCallbacks() 메소드를 호출하는 단일 모델에 대해 이 설정을 일시적으로 변경할 수 있습니다.\n";

        /* @var $callBackModel \App\Models\Model\Event\CallBackModel */
        $callBackModel = model('App\Models\Model\Event\CallBackModel');

        $now = time() + 1;
        $name = 'test-' . $now;

        // insert
        $callBackModel->allowCallbacks(false)
            ->save([
            'name' => $name,
            'email' => 'test@test.com-' . $now,
            'password' => 'testpassword-' . $now,
        ]);

        echo get_last_query() . "\n\n";

        $userInfo = $callBackModel
            ->where('name', $name)
            ->first();

        print_r($userInfo);

        $userInfo['password'] = 'change-' . $now;

        // pasword update
        $callBackModel->save($userInfo);
        echo get_last_query() . "\n\n";

        print_r($callBackModel
            ->where('name', $name)
            ->first());

        // Sample data 삭제
        $callBackModel->delete($userInfo['idx']);
    }
}