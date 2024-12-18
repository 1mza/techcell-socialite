<?php

namespace TechCell\TechcellSocialite;

use Laravel\Socialite\Facades\Socialite;

class TechcellSocialite
{
    const array PROVIDERS = [
        'google' => 'google',
        'github' => 'github',
        'twitter' => 'twitter-oauth-2',
        'linkedin' => 'linkedIn',
    ];

    public static function loginUsingProvider($provider)
    {
        return Socialite::driver(static::PROVIDERS[$provider])->redirect();
    }

    public static function callbackFromProvider($provider)
    {
        return Socialite::driver(static::PROVIDERS[$provider])->user();
    }
}
