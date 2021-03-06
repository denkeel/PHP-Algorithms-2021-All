<?php 

class BaseNotifier implements Notifier
{
    private $userId;

    public function __construct(int $userId)
    {
        $this->userId = $userId;
    }

    public function send(): string {
        return "User $this->userId notified.";
    }
}