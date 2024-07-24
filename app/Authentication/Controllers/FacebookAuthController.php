<?php

namespace App\Authentication\Controllers;

use App\Core\Http\Controllers\Controller;
use App\Authentication\UseCases\SignUpFacebookUser;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;

class FacebookAuthController extends Controller {

    const SOCIAL_DRIVER_NAME = 'facebook';
    const SCOPES = ['public_profile', ''];

    public function __construct(SignUpFacebookUser $signupInstagramUseCase) {
        $this->signupInstagramUseCase = $signupInstagramUseCase;
    }

    public function redirect() {
        return Socialite::driver(self::SOCIAL_DRIVER_NAME)
            ->scopes(self::SCOPES)
            ->redirect();
    }

    public function callback() {
        try {
            $facebookUser = Socialite::driver(self::SOCIAL_DRIVER_NAME)->user();
            $user = $this->signupInstagramUseCase->execute($facebookUser);
            Auth::login($user);
            return redirect('/');
        } catch (Exception $e) {
            return redirect('/login?failed=1');
        }
    }
}
