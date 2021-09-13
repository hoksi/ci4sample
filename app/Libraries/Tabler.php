<?php
namespace App\Libraries;

/**
 * Tabler
 *
 * @author hoksi
 */
class Tabler
{
    public function iframeTabs($data)
    {
        if(!empty($data)) {
            return view('libraries/tabler/iframe-tabs', ['tabData' => $data]);
        }

        return '';
    }

    public function card($cardData)
    {
        if(!empty($cardData)) {
            return view('libraries/tabler/card', ['cardData' => $cardData]);
        }

        return '';
    }

    public function pageTitle($pageTitle)
    {
        if(!empty($pageTitle)) {
            return view('libraries/tabler/page-title', ['pageTitle' => $pageTitle]);
        }
    }
}