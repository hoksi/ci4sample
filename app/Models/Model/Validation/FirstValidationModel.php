<?php
namespace App\Models\Model\Validation;

use CodeIgniter\Model;

/**
 * Description of FirstValidationModel
 *
 * @author hoksi
 */
class FirstValidationModel extends Model
{
    protected $validationRules    = [
        'username'     => 'required|alpha_numeric_space|min_length[3]',
        'email'        => 'required|valid_email|is_unique[users.email]',
        'password'     => 'required|min_length[8]',
        'pass_confirm' => 'required_with[password]|matches[password]',
    ];

    protected $validationMessages = [
        'email'        => [
            'is_unique' => '사용중인 Email입니다.',
        ],
    ];
}