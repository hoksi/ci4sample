<?php
namespace App\Controllers\Response\Localization;

use App\Controllers\BaseController;

/**
 * Description of Lang
 *
 * @author hoksi
 */
class Lang extends BaseController
{
    public function index()
    {
        echo '<p>';
        echo lang('Sample.errorEmailMissing');
        echo '</p><p>';
        echo lang('Sample.nested.error.message');
        echo '</p><p>';
        echo lang('Sample.noMessage');
        echo '</p>';
    }
}