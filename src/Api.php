<?php

namespace Seek\HaidaiSDK;

use Hanson\Foundation\AbstractAPI;

class Api extends AbstractAPI
{
    const API = 'http://img.pre.seatent.com';

    private $haidai;

    public function __construct(Haidai $haidai)
    {
        $this->haidai = $haidai;
    }

    private function signature(array $params)
    {
        return strtoupper(sha1($this->haidai['appSecret'] . http_build_query(ksort($params)) . $this->haidai['appSecret']));
    }

    public function request()
    {
        $http = $this->getHttp();
    }
}