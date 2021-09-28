<?php
namespace App\Controllers\Routing;

use App\Controllers\BaseController;

/**
 * Description of Galleries
 *
 * @author hoksi
 */
class Galleries extends BaseController
{
    public function index()
    {
        return  route_to('user_gallery', 15, 12);
    }

    public function showUserGallery($uid, $gid)
    {
        !d([
            'uid' => $uid,
            'gid' => $gid,
        ]);
    }
}