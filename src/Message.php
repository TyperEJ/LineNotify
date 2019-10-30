<?php

namespace TyperEJ\LineNotify;

class Message {
    protected $message = [];

    public function __construct($text)
    {
        $this->message['message'] = $text;
    }

    public function setImageThumbnail($url)
    {
        $this->message['imageThumbnail'] = $url;
    }

    public function setImageFullsize($url)
    {
        $this->message['imageFullsize'] = $url;
    }

    public function setStickerPackageId($packageId)
    {
        $this->message['stickerPackageId'] = $packageId;
    }

    public function setStickerId($stickerId)
    {
        $this->message['stickerId'] = $stickerId;
    }

    public function serNotificationDisabled($boolean = false)
    {
        $this->message['notificationDisabled'] = $boolean;
    }

    public function build()
    {
        return $this->message;
    }
}