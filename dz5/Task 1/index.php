<?php

spl_autoload_register();

const RANDOM_USER_ID = 24234;

$notifier =
    new ChromeNotificationNotifier(
        new EmailNotifier(
            new SmsNotifier(
                new BaseNotifier(RANDOM_USER_ID)
            )
        )
    );

echo $notifier->send();
