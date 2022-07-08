<?php

namespace codinglab\whatsappweb;


class WhatsAppWeb
{
    private $url;
    private $phoneNumber; // ';
    private $message = '';
    // private $clientId = 0;

    function __construct($url, $phoneNumber, $message)
    {
        $this->url = $url;
        $this->phoneNumber = $phoneNumber;
        $this->message = $message;
        // $this->clientId = $clientId;
    }

    function sendMessage()
    {

        $ch = curl_init();
        curl_setopt_array($ch, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_URL => $this->url,
            CURLOPT_HTTPHEADER => [
                'Content-Type: application/json'
            ],
            CURLOPT_POSTFIELDS =>  json_encode([
                "number" => $this->phoneNumber,
                "message" => $this->message,
                // "sender" => $this->clientId,
            ])
        ]);
        $server_output = curl_exec($ch);
        curl_close($ch);
        return  $server_output;
    }
}
