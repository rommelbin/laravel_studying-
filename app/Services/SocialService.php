<?php declare(strict_types=1);

namespace App\Services;

use App\Contracts\ISocial;
use App\Models\User as Model;
use Laravel\Socialite\Contracts\User;
class SocialService implements ISocial
{
    public function socialLogin(User $user) {

        $checkUser = Model::where('email', $user->getEmail())->first();
        if($checkUser) {
            $checkUser->name = $user->getName();
            $checkUser->email = $user->getEmail();
        }
        if($checkUser->save()) {
            \Auth::loginUsingId($checkUser->id);
            return route('home');
        }
    }
}

