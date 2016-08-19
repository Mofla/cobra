<?php

namespace App\Controller;


use Cake\Mailer\Email;
use Cake\ORM\Entity;
use Cake\ORM\TableRegistry;
use Cake\Event\Event;


class InfosController extends AppController
{
    public function initialize()
    {
        parent::initialize();
    }

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow('cgv');
    }

    public function cgv()
    {

    }
}