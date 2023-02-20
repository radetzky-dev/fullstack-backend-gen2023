<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Services\HelloService;

class HelloController extends Controller
{
    protected $helloService;

    public function __construct(HelloService $helloService)
    {
        $this->helloService = $helloService;
    }

    public function index()
    {
        return HelloService::sayHello();
    }

    public function saluta($name)
    {
        echo $this->helloService->salutaInFrancese($name).'<br>';
        return $this->helloService->sayCiao();
    }
}
