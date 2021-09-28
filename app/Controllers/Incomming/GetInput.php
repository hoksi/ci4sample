<?php
namespace App\Controllers\Incomming;

use App\Controllers\BaseController;

/**
 * Description of GetInput
 *
 * @author hoksi
 */
class GetInput extends BaseController
{
    public function index()
    {
        !d([
            'getVar' => $this->request->getVar('foo'),
            '$_GET' => (isset($_GET['foo']) ? $_GET['foo'] : null),
            'getGet' => $this->request->getGet('foo'),
            'getPost' => $this->request->getPost('foo'),
            'getPostGet' => $this->request->getPostGet('foo'),
            'getGetPost' => $this->request->getGetPost('foo'),
            'getServer' => $this->request->getServer('HTTP_REFERER'),
            'getCookie' => $this->request->getCookie('foo'),
        ]);
    }
}