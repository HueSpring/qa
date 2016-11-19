<?php

namespace huespring\Http\Controllers;

use huespring\Http\Requests;
use huespring\Http\Controllers\Controller;
use huespring\SocialAccountService;
use Socialite;

use Illuminate\Http\Request;

class SocialAuthController extends Controller
{
  public function redirect()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function callback(SocialAccountService $service)
    {

        $user = $service->createOrGetUser(Socialite::driver('facebook')->user());

        auth()->login($user);

        return redirect()->to('/home');
    }
}
