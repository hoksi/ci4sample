<?php
namespace App\Controllers\Response\Parser;

use App\Controllers\BaseController;

/**
 * Description of Simple
 *
 * @author hoksi
 */
class Simple extends BaseController
{
    public function index()
    {
        $parser = \Config\Services::parser();

        $template = '<p>{blog_title}</p>';
        $data     = ['blog_title' => 'My ramblings'];

        echo $parser->setData($data)->renderString($template);
    }
}