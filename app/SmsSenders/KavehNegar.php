<?php
namespace App\SmsSenders;

class KavehNegar implements MsgSenderInterface
{
    public function send($phone,$text)
    {
        echo "sending: $text to $phone by kave";
    }
}
