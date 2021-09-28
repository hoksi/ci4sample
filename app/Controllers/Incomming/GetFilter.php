<?php
namespace App\Controllers\Incomming;

use App\Controllers\BaseController;

/**
 * Description of GetFilter
 *
 * @author hoksi
 */
class GetFilter extends BaseController
{
    public function index()
    {
        !d([
            'non-filter' => $this->request->getGet('email'),
            'email-filter' => $this->request->getGet('email', FILTER_SANITIZE_EMAIL),
        ]);
    }
}