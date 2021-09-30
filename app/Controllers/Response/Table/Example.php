<?php
namespace App\Controllers\Response\Table;

use App\Controllers\BaseController;

/**
 * Description of Example
 *
 * @author hoksi
 */
class Example extends BaseController
{
    protected $table;

    public function __construct()
    {
        $this->table = new \CodeIgniter\View\Table();
    }

    public function index()
    {
        $data = [
            ['Name', 'Color', 'Size'],
            ['Fred', 'Blue', 'Small'],
            ['Mary', 'Red', 'Large'],
            ['John', 'Green', 'Medium']
        ];

        echo $this->table->generate($data);
    }

    public function useParam()
    {
        $table = $this->table;

        $table->setHeading('Name', 'Color', 'Size');

        $table->addRow('Fred', 'Blue', 'Small');
        $table->addRow('Mary', 'Red', 'Large');
        $table->addRow('John', 'Green', 'Medium');

        echo "<p>매개변수를 사용하여 테이블을 작성한 예</p>";
        echo $table->generate();
    }

    public function useArray()
    {
        $table = $this->table;

        $table->setHeading(['Name', 'Color', 'Size']);

        $table->addRow(['Fred', 'Blue', 'Small']);
        $table->addRow(['Mary', 'Red', 'Large']);
        $table->addRow(['John', 'Green', 'Medium']);

        echo "<p>배열를 사용하여 테이블을 작성한 예</p>";
        echo $table->generate();
    }
}