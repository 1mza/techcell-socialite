<?php

namespace TechCell\TechcellSocialite;

use Laravel\Socialite\Facades\Socialite;

class TechcellSocialite
{
    public static function loginUsingTwitter()
    {
        return Socialite::driver('twitter-oauth-2')->redirect();
    }

    public static function callbackFromTwitter()
    {
        return Socialite::driver('twitter-oauth-2')->user();
    }

    public static function loginUsingGithub()
    {
        return Socialite::driver('github')->redirect();
    }

    public static function callbackFromGithub()
    {
        return Socialite::driver('github')->user();
    }

    public static function loginUsingLinkedin()
    {
        return Socialite::driver('Linkedin')->redirect();
    }

    public static function callbackFromLinkedin()
    {
        return Socialite::driver('Linkedin')->user();
    }

    public static function loginUsingGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public static function callbackFromGoogle()
    {
        return Socialite::driver('google')->user();
    }
}
