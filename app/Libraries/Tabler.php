<?php
namespace App\Libraries;

/**
 * Tabler
 *
 * @author hoksi
 */
class Tabler
{
    public function iframeTabs($tabData)
    {
        if(is_array($tabData) && !empty($tabData)) {
            return view('libraries/tabler/iframe-tabs', ['tabData' => $tabData]);
        }

        return false;
    }
}