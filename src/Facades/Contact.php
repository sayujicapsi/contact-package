<?php
namespace Sxp\Contact\Facades;

use Illuminate\Support\Facades\Facade;

class Contact extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'contact-service'; // The key used in the service container binding
    }
}

