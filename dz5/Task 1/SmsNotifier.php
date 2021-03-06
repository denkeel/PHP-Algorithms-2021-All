<?php 

class SmsNotifier extends DecoratorNotifier
{
    public function send(): string {
        $smsNotification = "Sms send"; 
        $wrappedNotification = $this->wrappingNotifier->send();

        return $smsNotification . "<br>" . $wrappedNotification;
    }
}