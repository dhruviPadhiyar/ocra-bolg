<?php

namespace App\Services;

use App\Models\User;

class UserService{
    public function log($string){
        logger($string);
    }
}