<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Controller\Component\PaginatorComponent;
use Cake\ORM\Query;
use Cake\Event\Event;


/**
 * Ads Controller
 *
 * @property \App\Model\Table\AdsTable $Ads
 * @property \App\Model\Table\ImagesTable $Images
 * @property \App\Model\Table\TownsTable $Towns
 *
 */
class AdsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {

        $this->paginate = [
            'contain' => ['Users', 'TypeAds', 'Towns', 'Images']
        ];
        $ads = $this->paginate($this->Ads);


        $this->set(compact('ads'));
        $this->set('_serialize', ['ads']);
    }

    /**
     * View method
     *
     * @param string|null $id Ad id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ad = $this->Ads->get($id, [
            'contain' => ['Users', 'TypeAds', 'Towns', 'Images', 'Messages']
        ]);

        $this->set('ad', $ad);
        $this->set('_serialize', ['ad']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ad = $this->Ads->newEntity();

        if ($this->request->is('post')) {
         //   $ville= ville($_POST['town_id']);
           //$ville = $this->Ads->Towns->find('all')->select('town_id')->where(['town_name' =>$_POST['town_id']]);

            $ad = $this->Ads->patchEntity($ad, $this->request->data);

            //recupère l'id de l'utilisateur
           // $ad->user_id = $this->Auth->user('id');
         //   $ad->is_active = $this->Auth->user('id');

            if ($this->Ads->save($ad)) {
                $this->Flash->success(__('L\'annonce à bien été mise en ligne'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Il y a eu une erreur, veuillez réesayer'));
            }
        }
        $towns = $this->Ads->Towns->find('list',['keyField'=>'id','valueField'=>'town_name']);
        $users = $this->Ads->Users->find('list');
        $typeAds = $this->Ads->TypeAds->find('list');
        $this->set(compact('ad', 'users', 'typeAds','towns'));
        $this->set('_serialize', ['ad']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Ad id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ad = $this->Ads->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ad = $this->Ads->patchEntity($ad, $this->request->data);
            if ($this->Ads->save($ad)) {
                $this->Flash->success(__('The ad has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The ad could not be saved. Please, try again.'));
            }
        }
       // $users = $this->Ads->Users->find('list', ['limit' => 200]);
        $typeAds = $this->Ads->TypeAds->find('list', ['limit' => 200]);
        $towns = $this->Ads->Towns->find('list', ['limit' => 200]);
        $this->set(compact('ad', 'users', 'typeAds', 'towns'));
        $this->set('_serialize', ['ad']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Ad id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ad = $this->Ads->get($id);
        if ($this->Ads->delete($ad)) {
            $this->Flash->success(__('The ad has been deleted.'));
        } else {
            $this->Flash->error(__('The ad could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
    public function translate($ad){
        if($ad===true){
            return "oui";
        }
        return "non";
    }

    public function autocomplete() {
        $this->autoRender = false;
        $terms = $this->Ads->Towns->find('list', array(
            'conditions' => array(
                'Towns.town-name LIKE' => trim($this->request->query['term']) . '%'
            )
        ));
        echo json_encode($terms);
    }
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow();
    }
    public function ville($ville){
        $ville = $this->Ads->Towns->find('all')->select('town_id')->where(['town_name' =>$ville]);
        return $ville;
    }


}
