<?php

spl_autoload_register();

$randomUserId = 24234;

$emailEnabled = true;
$smsEnabled = true;
$chromeEnabled = true;

$notifier = new BaseNotifier($randomUserId);

if ($emailEnabled) {
    $notifier = new EmailNotifier($notifier);
};
if ($smsEnabled) {
    $notifier = new SmsNotifier($notifier);
};
if ($chromeEnabled) {
    $notifier = new ChromeNotifier($notifier);
};

echo $notifier->send();
