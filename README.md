# LineNotify
```composer
composer require typerej/line-notify dev-master --prefer-dist
```

# GENERATE URL
```php
use TyperEJ\LineNotify\Notify;

$notify = new Notify(CHANNEL_ID);
$url = $notify->generateSubscribeUrl($options);
```

# GET TOKEN

```php
use TyperEJ\LineNotify\Notify;

$notify = new Notify(CHANNEL_ID,CHANNEL_SECRET);
$token = $notify->requestToken($_GET('code'));
```

# PUSH MESSAGE

```php
use TyperEJ\LineNotify\Notify;
use TyperEJ\LineNotify\Message;

$message = new Message('Notify Text');
Notify::sendMessage($token,$message);
```


## REFERENCE
[https://notify-bot.line.me/doc/en/](https://notify-bot.line.me/doc/en/)
