<?php

namespace App\Models\Model\Event;

use CodeIgniter\Model;

/**
 * Description of CallBackModel
 *
 * @author hoksi
 */
class CallBackModel extends Model
{
    protected $table         = 'user';
    protected $primaryKey    = 'idx';
    protected $allowedFields = ['name', 'email', 'idx', 'password'];

    // $allowCallbacks 속성을 설정하여 모델의 콜백을 허용(기본값)하거나 거부할 수 있습니다.
    protected $allowCallbacks = true;

    protected $beforeInsert = ['hashPassword'];
    protected $beforeUpdate = ['hashPassword'];

    protected function hashPassword(array $data)
    {
        if (!isset($data['data']['password'])) return $data;

        $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);

        return $data;
    }
}