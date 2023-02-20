<?php

namespace App\Services;

use Illuminate\Http\Request;

class SendMailService
{
    public static function send()
    {
        return "Mail inviata con successo!";
    }

    public function sendTo($to)
    {
        return "Mail inviata con successo a " . $to;
    }

    public function checkDest(Request $request)
    {
        $fields = $request->all();

        if (array_key_exists('dest', $fields)) {
            echo "Il destinatario è ".$fields['dest'].'<br>';
            return $this->sendTo($fields['dest']);
        }
        return "Nessun destinatario [dest] trovato nessuna mail inviata";
    }
}
