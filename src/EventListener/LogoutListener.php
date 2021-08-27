<?php
 
namespace App\EventListener;
 
use Symfony\Component\HttpFoundation\Session\Flash\FlashBagInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Security\Http\Event\LogoutEvent;
 
class LogoutListener
{
    private $flashBag;
 
    public function __construct(SessionInterface $session)
    {
        $this->flashBag = $session->getFlashBag();
    }
 
    public function onSymfonyComponentSecurityHttpEventLogoutEvent(LogoutEvent $event): void
    {
        $this->flashBag->add('success', 'Deconnexion reussie');
        /*
        If you need user...
        if (($token = $event->getToken()) && $user = $token->getUser()) {
            $user available
        }
        */
    }
}