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
        $this->Auth->allow(['cgv','mentions','contact']);
    }

    public function cgv()
    {
        $this->set('titre','Conditions générales de ventes');
    }

    public function mentions()
    {
        $this->set('titre','Mentions légales');
    }

    public function contact()
    {
        $this->set('titre','Nous contacter');
    }


}