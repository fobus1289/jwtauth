<?php

namespace UZB\AUTH;

use Firebase\JWT\JWT as fire;

final class JWT
{

    public static function decode($jwt, $key)
    {
        return fire::decode($jwt, $key, array('HS256'));
    }

    public static function encode($payload, $key)
    {
        return fire::encode($payload, $key);
    }

}