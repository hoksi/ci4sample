<?php
namespace App\Controllers\Response\Parser;

use App\Controllers\BaseController;

/**
 * Description of Render
 *
 * @author hoksi
 */
class Render extends BaseController
{
    public function index()
    {
        $parser = \Config\Services::parser();
        
        $data = [
            'blog_title'   => 'My Blog Title',
            'blog_heading' => 'My Blog Heading',
        ];

        echo $parser->setData($data)
            ->render('response/parser/blog_template');
    }
}