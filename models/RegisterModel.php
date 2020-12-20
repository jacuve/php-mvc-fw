<?php

namespace app\models;

use app\core\Model;

class RegisterModel extends Model
{
    public string $firstname = '';
    public string $lastname = '';
    public string $email = '';
    public string $password = '';
    public string $confirmPassword = '';

    public function register()
    {

    }

    public function rules(): array
    {

        return [
            'firstname' => [SELF::RULE_REQUIRED],
            'lastname' => [SELF::RULE_REQUIRED],
            'email' => [SELF::RULE_REQUIRED, SELF::RULE_EMAIL],
            'password' => [SELF::RULE_REQUIRED, [self::RULE_MIN ,'min' => 8], [self::RULE_MAX, 'max' => 24]],
            'confirmPassword' => [SELF::RULE_REQUIRED, [self::RULE_MATCH, 'match' => 'pasword'] ]
        ];

    }
    
}