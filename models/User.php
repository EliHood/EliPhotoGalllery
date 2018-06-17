<?php

namespace EliModel;

use Illuminate\Database\Eloquent\Model As Model;

class User extends Model{

	protected $table = 'users';

    protected $fillable = [
        'username', 'password'
    ];



}