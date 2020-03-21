<?php
namespace Seek\HaidaiSDK;

use Hanson\Foundation\Foundation;

class Haidai extends Foundation
{
    protected $providers = [
        ServiceProvider::class
    ];

    public function __construct($config)
    {
         parent::__construct($config);
    }
}