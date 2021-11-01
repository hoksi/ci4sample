<?php

namespace App\Models\Ci4lab\Lab1;

class Exam1Model
{
    public function generate($data, $is_download = false)
    {
        $result = [];
        foreach ($data as $key => $item) {
            if ($is_download === true) {
                $result[] = sprintf('%s = %s', $key, $item);
            } else {
                $result[] = sprintf('%s = %s<input type="hidden" name="%s" value="%s" />', $key, $item, $key, $item);
            }
        }
        return implode("\n", $result);
    }


}   