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
class MyAfterFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Do something here
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        $body = $response->getBody();
        $body = str_replace('login', 'world!', $body);
        $response->setBody($body);
    }
}