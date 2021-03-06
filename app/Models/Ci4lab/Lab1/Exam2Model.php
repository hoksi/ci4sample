<?php

namespace App\Models\Ci4lab\Lab1;

class Exam2Model
{
    protected function getBaseController($data)
    {
        return "<?php\n" . view('ci4lab/lab1/exam2/BaseController.tpl.php', $data);
    }

    public function getHtml($data)
    {
        return htmlspecialchars($this->getBaseController($data)) . $this->getHidden($data);
    }

    public function getPhp($data)
    {
        return $this->getBaseController($data);
    }

    public function getHidden($data)
    {
        $input = [];
        foreach($data['helper'] as $value) {
            $input[] = "<input type='hidden' name='helper[]' value='{$value}' />";
        }

        foreach($data['library'] as $key => $value) {
            $input[] = "<input type='hidden' name='library[{$key}]' value='{$value}' />";
        }

        return implode("\n", $input);
    }
}