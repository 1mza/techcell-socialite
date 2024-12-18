<?php

namespace TechCell\TechcellSocialite\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \TechCell\TechcellSocialite\TechcellSocialite
 */
class TechcellSocialite extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \TechCell\TechcellSocialite\TechcellSocialite::class;
    }
}
