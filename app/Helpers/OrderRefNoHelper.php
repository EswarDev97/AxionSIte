<?php

namespace App\Helpers;

class OrderRefNoHelper
{
    public static function create()
    {
        return sprintf('%06X',
            mt_rand( 0, 0xffff ),
            mt_rand( 0, 0x0C2f ) | 0x4000,
            mt_rand( 0, 0x3fff ) | 0x8000,
            mt_rand( 0, 0x2Aff )
        );
    }
}
