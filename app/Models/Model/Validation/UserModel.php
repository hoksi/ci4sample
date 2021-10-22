<?php
namespace App\Models\Model\Validation;

use CodeIgniter\Model;

/**
 * Description of UserModel
 *
 * @author hoksi
 */
class UserModel extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'idx';
    protected $allowedFields = ['name', 'email', 'password'];
    
    protected $validationRules    = [
        'name'     => 'required|alpha_numeric_space|min_length[3]',
        'email'        => 'required|valid_email|is_unique[user.email,idx,{idx}]',
        'password'     => 'required|min_length[8]',
        'pass_confirm' => 'required_with[password]|matches[password]',
    ];

    protected $validationMessages = [
        'email'        => [
            'is_unique' => '사용중인 Email입니다.',
        ],
    ];

}