<?php

namespace app\business\services;

use app\business\servicesabstract\IAuthService;


class AuthService implements IAuthService
{
    public function __construct()
    {
    }

    public function demo() {
        return 'Hi';
    }
}