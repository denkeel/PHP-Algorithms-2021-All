<?php 

class EmailNotifier extends DecoratorNotifier
{
    public function send(): string {
        $smsNotification = "Email notification send"; 
        $wrappedNotification = $this->wrappingNotifier->send();

        return $smsNotification . "<br>" . $wrappedNotification;
    }
}