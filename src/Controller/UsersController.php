<?php

namespace App\Controller;


use Cake\Mailer\Email;
use Cake\ORM\Entity;
use Cake\ORM\TableRegistry;
use Cake\Event\Event;


class UsersController extends AppController
{
    public $paginate = [
        'fields' => ['Users.id', 'Users.username'],
        'limit' => 10,
        'order' => [
            'Users.id' => 'asc'
        ]
    ];

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Flash');
        $this->loadComponent('Paginator');
    }

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['add','view','validate']);
    }

    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }

    public function login()
    {
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            } else {
                $this->Flash->error(__("Nom d'utilisateur ou mot de passe incorrect"), [
                    'key' => 'auth'
                ]);
            }
        }

        $this->set('title','Connexion à votre espace');

    }

    public function register()
    {
        $attributes = 'class="page-sub-page page-create-account page-account" id="page-top"';
        $this->set('attributes',$attributes);
        $this->set('title','Création d\'un compte');
    }

    public function view($id=null)
    {
        $users = $this->loadModel('Users');
        if($this->request->isGet())
        {
            $user = $this->Users->get($id);
            $this->set('user',$user);
        }

        $this->set('title','Informations');
    }

    public function add()
    {
        $this->loadModel('Users');
        $this->loadModel('TypeUsers');
        $this->set('list',$this->TypeUsers->find('list',[
            'keyField' => 'id',
            'valueField' => 'type_user_name']));
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Votre compte a été crée'));
                $this->request->session()->delete('Flash');
                $id = $user->id;
                $mail = $this->Users->get($id);
                $message = 'Bonjour, Vous venez de créer votre compte sur le site, pour l\'activer veuillez cliquer sur lien suivant : http://localhost:8765/valider/'.$mail->email;
                $email = new Email('default');
                $email->from(['account@immolor3000.fr' => 'Immolor3000'])
                    ->to($user->email)
                    ->subject('Activation de votre compte')
                    ->send($message);
                return $this->redirect(['action' => 'login']);
            }
            $this->Flash->error(__('Impossible de créer votre compte.'));
        }
        $this->set('user', $user);
    }

    public function edit($id)
    {
        if($id == $this->request->session()->read('Auth.User.id') || $this->request->session()->read('Auth.User.is_admin')) {
            $this->loadModel('TypeUsers');
            $this->set('list', $this->TypeUsers->find('list', [
                'keyField' => 'id',
                'valueField' => 'type_user_name']));
            $users = $this->loadModel('Users');
            $user = $this->Users->get($id);
            if ($this->request->is(['post', 'put'])) {
                $this->Users->patchEntity($user, $this->request->data);
                if ($this->Users->save($user)) {
                    $this->Flash->success(__('Votre profil a bien été édité.'));
                    $this->request->session()->delete('Flash');
                    return $this->redirect(['controller' => 'Ads', 'action' => 'index']);
                }
                $this->Flash->error(__('Impossible d\'éditer votre profil.'));
            }

            $this->set('user', $user);
        }
        else{
            return $this->redirect(['controller' => 'Ads', 'action' => 'index']);
        }
    }

    public function validate($mail)
    {
        if($this->request->isGet())
        {
            $this->loadModel('Users');
            $id = $this->Users
                ->find()
                ->where(['email' => $mail])
                ->first();
            $user = $this->Users->get($id->id);
            if(!$user->is_active)
            {
                $query = $this->Users->query();
                $query->update()
                    ->set(['is_active' => true])
                    ->where(['email' => $user->email])
                    ->execute();
                return $this->Flash->success(__('Votre profil a bien été validé.'));

            }
            else {
                return $this->Flash->success(__('Profil déjà validé.'));
            }
        }

    }

    public function index()
    {
        $this->loadModel('Users');
        $users = $this->paginate($this->Users);
        $this->set(compact('users',$users));
        $this->set('_serialize', ['users']);
    }

    public function delete($id=null)
    {
        if($this->request->isGet())
        {
            $this->loadModel('Users');
            $user = $this->Users->get($id);
            if($this->Users->delete($user))
            {
                $this->Flash->success('Compte supprimé');
            }
            else
            {
                $this->Flash->error('Impossible de supprimer le compte');
            }
            return $this->redirect(['controller' => 'Users', 'action' => 'index']);
        }
    }
}