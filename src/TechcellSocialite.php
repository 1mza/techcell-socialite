<?php

namespace TechCell\TechcellSocialite;

use Exception;
use Laravel\Socialite\Facades\Socialite;

class TechcellSocialite
{
    const array PROVIDERS = [
        'google' => 'google',
        'github' => 'github',
        'twitter' => 'twitter-oauth-2',
        'x' => 'twitter-oauth-2',
        'linkedin' => 'linkedIn',
    ];

    public static function loginUsingProvider($provider)
    {
        if (!array_key_exists($provider, self::PROVIDERS)) {
            throw new Exception("Provider $provider not found.");
        }
        try {
            return Socialite::driver(static::PROVIDERS[$provider])->redirect();
        } catch (Exception $e) {
            throw new Exception('Authentication Failed.', $e->getMessage());
        }
    }

    public static function callbackFromProvider($provider)
    {
        if (!array_key_exists($provider, self::PROVIDERS)) {
            throw new Exception("Provider $provider not found.");
        }
        try {
            return Socialite::driver(static::PROVIDERS[$provider])->user();
        } catch (Exception $e) {
            throw new Exception('Authentication Failed.');
        }
    }
}
