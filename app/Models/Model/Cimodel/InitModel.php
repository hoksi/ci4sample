<?php
namespace App\Models\Model\Cimodel;

use Modules\Authentication\Models\UserAuthModel;

/**
 * Description of InitModel
 *
 * @author hoksi
 */
class InitModel extends UserAuthModel
{
    protected function initialize()
    {
            $this->allowedFields[] = 'middlename';
    }
}