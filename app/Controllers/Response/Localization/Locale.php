<?php
namespace App\Controllers\Response\Localization;

use App\Controllers\BaseController;

/**
 * Description of Locale
 *
 * @author hoksi
 */
class Locale extends BaseController
{
    public function index()
    {
        echo '<ul><li>';
        echo $this->request->getLocale();
        echo '</li><li>';
        echo service('request')->getLocale();
        echo '</li></ul>';
    }
}