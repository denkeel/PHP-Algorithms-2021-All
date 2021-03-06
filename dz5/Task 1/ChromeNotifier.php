<?php 

class ChromeNotifier extends DecoratorNotifier
{
    public function send(): string {
        $smsNotification = "Chrome notification send"; 
        $wrappedNotification = $this->wrappingNotifier->send();

        return $smsNotification . "<br>" . $wrappedNotification;
    }
}