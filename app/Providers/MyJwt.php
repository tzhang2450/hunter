<?php
/**
 * Created by PhpStorm.
 * User: zhangligang
 * Date: 2018/5/8
 * Time: 上午1:24
 */

namespace App\Providers;


class MyJwt
{
    const ENCODE_KEY = 'shortnappertonfast';

    public $header = [
        'type' => 'jwt',
        'alg' => 'SHA256'
    ];

    public $payload = [];

    public function __construct()
    {
        $this->payload = [
        'iat' => $_SERVER['REQUEST_TIME'],
        'exp' => $_SERVER['REQUEST_TIME']+3600
    ];

    }

    public function encode(array $payload, $key, $alg = 'SHA256')
    {
        $key = md5($key);
        $jwt = base64_encode(json_encode(['typ' => 'JWT', 'alg' => $alg])) . '.' . base64_encode(json_encode($payload));
        return $jwt . '.' . $this->signature($jwt, $key, $alg);
    }

    public function signature($input, $key, $alg)
    {
        return hash_hmac($alg, $input, $key);
    }

    public function decode($jwt, $key)
    {
        $tokens = explode('.', $jwt);
        $key    = md5($key);

        if (count($tokens) != 3)
            return false;

        list($header64, $payload64, $sign) = $tokens;

        $header = json_decode(base64_decode($header64), JSON_OBJECT_AS_ARRAY);
        if (empty($header['alg']))
            return false;

        if ($this->signature($header64 . '.' . $payload64, $key, $header['alg']) !== $sign)
            return false;

        $payload = json_decode(base64_decode($payload64), JSON_OBJECT_AS_ARRAY);

        $time = $_SERVER['REQUEST_TIME'];
        if (isset($payload['iat']) && $payload['iat'] > $time)
            return false;

        if (isset($payload['exp']) && $payload['exp'] < $time)
            return false;

        return $payload;
    }


}