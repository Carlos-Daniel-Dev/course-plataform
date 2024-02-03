<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;

class User extends \Illuminate\Database\Eloquent\Model implements AuthenticatableContract
{
    use Authenticatable;

    protected $fillable = [
        'name', 'email', 'password', 'user_type',
    ];
    
    public function getAuthIdentifierName()
    {
        return 'id'; // Ou o nome da coluna que representa a chave primária na tabela 'users'
    }

    public function getAuthIdentifier()
    {
        return $this->getKey();
    }

    public function getAuthPassword()
    {
        return $this->password;
    }
}
