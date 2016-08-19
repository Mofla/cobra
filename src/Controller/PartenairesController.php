<?php

namespace App\Controller;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */

use Cake\ORM\Entity;
use Cake\ORM\TableRegistry;
use Cake\Event\Event;

class PartenairesController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Flash');
        $this->loadComponent('Auth', [
            'loginRedirect' => [
                'controller' => 'Offres',
                'action' => 'index'
            ],
            'logoutRedirect' => [
                'controller' => 'Pages',
                'action' => 'display',
                'home'
            ]
        ]);
    }

    public function beforeFilter(Event $event)
    {
        $this->Auth->allow(['index', 'view', 'display']);
    }

    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }

    public function login()
    {
        $this->set('title','Connexion à votre espace');

        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error(__('Mauvais identifiants.'));
        }

        $this->viewBuilder()->layout('header');
    }

    public function register()
    {
        $this->loadModel('TypeUsers');
        $this->set('list',$this->TypeUsers->find('list',[
            'keyField' => 'id',
            'valueField' => 'type_user_name']));
        $this->set('title','Création d\'un compte');
        $this->viewBuilder()->layout('header');
    }

    public function view($id)
    {
        $users = $this->loadModel('Users');
        $user = $users->find()->where(['id =' => $id]);

        $this->set('title','Informations du membre');
        $this->set('user',$user);
        $this->viewBuilder()->layout('header');
    }

    public function profile($id)
    {
        if($this->request->isGet())
        {
            $users = TableRegistry::get('users');
            $user = $users->find()->where(['id =' => $id]);

            $this->set('user',$user);
        }


        $this->set('title','Vos informations');
        $this->viewBuilder()->layout('header');
    }

    public function add()
    {
        $this->loadModel('Users');
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Votre compte a été crée'));
                return $this->redirect(['action' => 'register']);
            }
            $this->Flash->error(__('Impossible de créer votre compte.'));
        }
        $this->set('user', $user);
    }
}