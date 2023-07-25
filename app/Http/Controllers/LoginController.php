<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use Auth;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    public function loginFacebook()
    {
        session()->get('soc.token');
        if(Auth::id()){
            return redirect()->route('home');
        }
        return Socialite::with('facebook')->redirect();
    }

    public function responseFacebook(UserRepository $userRepository)
    {
        if(Auth::id()){
            return redirect()->route('home');
        }

        $user = Socialite::driver('facebook')->user();
        session(['soc.token'=>$user->token]);
        $userInSystem = $userRepository->getUserBySocId($user, 'facebook');
        Auth::login($userInSystem);

        return redirect()->route('home');
    }
}
