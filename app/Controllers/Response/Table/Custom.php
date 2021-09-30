<?php

namespace App\Controllers\Response\Table;

use App\Controllers\BaseController;

/**
 * Description of Custom
 *
 * @author hoksi
 */
class Custom extends BaseController
{
    public $data = [
        ['Name', 'Color', 'Size'],
        ['Fred', 'Blue', 'Small'],
        ['Mary', 'Red', 'Large'],
        ['John', 'Green', 'Medium'],
    ];

    public function index()
    {
        $table = new \CodeIgniter\View\Table();

        $template = [
            'table_open' => '<table border="1" cellpadding="4" cellspacing="0">',
            'thead_open' => '<thead>',
            'thead_close' => '</thead>',
            'heading_row_start' => '<tr>',
            'heading_row_end' => '</tr>',
            'heading_cell_start' => '<th>',
            'heading_cell_end' => '</th>',
            'tfoot_open' => '<tfoot>',
            'tfoot_close' => '</tfoot>',
            'footing_row_start' => '<tr>',
            'footing_row_end' => '</tr>',
            'footing_cell_start' => '<td>',
            'footing_cell_end' => '</td>',
            'tbody_open' => '<tbody>',
            'tbody_close' => '</tbody>',
            'row_start' => '<tr>',
            'row_end' => '</tr>',
            'cell_start' => '<td>',
            'cell_end' => '</td>',
            'row_alt_start' => '<tr>',
            'row_alt_end' => '</tr>',
            'cell_alt_start' => '<td>',
            'cell_alt_end' => '</td>',
            'table_close' => '</table>'
        ];

        $table->setTemplate($template);
        echo $table->generate($this->data);
    }

    public function usePartial()
    {
        $table = new \CodeIgniter\View\Table();

        $template = [
            'table_open' => '<table border="1" cellpadding="2" cellspacing="1" class="mytable">'
        ];

        $table->setTemplate($template);

        echo '<p>완전한 템플릿을 제출할 필요는 없습니다. 레이아웃의 일부만 변경해야하는 경우 해당 요소만 제출하면 됩니다.</p>';
        echo '<p>이 예에서는 테이블 열기 태그만 변경됩니다.</p>';
        echo $table->generate($this->data);
    }

    public function useInit()
    {

        $customSettings = [
            'table_open' => '<table border="1" cellpadding="2" cellspacing="1" class="mytable">'
        ];

        $table = new \CodeIgniter\View\Table($customSettings);

        echo '<p>템플릿 설정 배열을 Table 클래스 생성자에 전달하여 기본값을 설정할 수도 있습니다.</p>';
        echo $table->generate($this->data);
    }
}