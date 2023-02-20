<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\HelloService;
use App\Services\SendMailService;
use Illuminate\Support\Facades\App;

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
        echo $this->helloService->salutaInFrancese($name) . '<br>';
        return $this->helloService->sayCiao();
    }

    public function sendSimpleMail()
    {
        App::bind('SendMailService', function () {
            return new SendMailService();
        });
        $sendMail = App::make("SendMailService");
        return $sendMail->send();
    }

    public function sendMailTo(Request $request)
    {
        $fields = $request->all();

        if (array_key_exists('dest', $fields)) {
            echo "Il destinatario è ".$fields['dest'].'<br>';

            App::bind('SendMailService', function () {
                return new SendMailService();
            });
            $sendMail = App::make("SendMailService");
            return $sendMail->sendTo($fields['dest']);
        }
        return "Nessuna mail inviata";
    }

    public function sendMailCheck(Request $request)
    {
            App::bind('SendMailService', function () {
                return new SendMailService();
            });
            $sendMail = App::make("SendMailService");
            return $sendMail->checkDest($request);
    }
    
}
