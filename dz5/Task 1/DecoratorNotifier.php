<?php 

abstract class DecoratorNotifier implements Notifier
{
    protected ?Notifier $wrappingNotifier = null;

    public function __construct(Notifier $notifier)
    {
        $this->wrappingNotifier = $notifier;
    }
}