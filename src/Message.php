<?php

namespace TyperEJ\LineNotify;

class Message {
    protected $message = [];

    public function __construct($text)
    {
        $this->message['message'] = $text;
    }

    public function build()
    {
        return $this->message;
    }
}