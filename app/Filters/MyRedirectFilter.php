<?php
namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

/**
 * Description of MyFilter
 *
 * @author hoksi
 */
class MyRedirectFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $auth = (rand(1,100) % 2 > 0);

        if (! $auth) {
            return redirect()->to(site_url('filters/login'));
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}