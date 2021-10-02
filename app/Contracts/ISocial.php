<?php

namespace App\Contracts;


use Laravel\Socialite\Contracts\User;

interface ISocial
{
    public function socialLogin(User $user);
}
