<?php

namespace App\Services;

use Carbon\Carbon;

class HelloService
{
    public static function sayHello()
    {
        $now = Carbon::now();
        return "Hello STATIC world alle ore " . $now;
    }

    public function sayCiao()
    {
        return "Ciao da HelloService";
    }

    /**
     * salutaInFrancese
     *
     * @param  mixed $name
     * @return string
     */
    public function salutaInFrancese($name): string
    {
        return "Bonjour $name";
    }
}
