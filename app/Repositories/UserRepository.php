<?php

namespace App\Repositories;

use App\Models\User;
use SocialiteProviders\Manager\OAuth2\User as User0Auth;
class UserRepository
{
    public function getUserBySocId(User0Auth $user, string $socName)
    {
        $userInSystem = User::query()
            ->where('id_in_soc', $user->id)
            ->where('type_auth', $socName)
            ->first();

        if (empty($userInSystem)) {
            $userInSystem = new User();
            $userInSystem->fill([
                'name' => !empty($user->getName()) ?$user->getName():'',
                'email' => !empty($user->getEmail()) ?$user->getEmail():'',
                'password' => '',
                'id_in_soc' => !empty($user->getId()) ?$user->getId():'',
                'type_auth' => $socName,
                'avatar' => !empty($user->getAvatar()) ?$user->getAvatar():'',
            ]);
            $userInSystem->save();
        }
        return $userInSystem;
    }
}
