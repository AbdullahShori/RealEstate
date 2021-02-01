<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Http\Server;

/**
 * Cake Controller
 *
 * @property \App\Model\Table\CakeTable $Cake
 *
 * @method \App\Model\Entity\Cake[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CakeController extends AppController
{
    
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $cake = $this->paginate($this->Cake);

        $this->set(compact('cake'));
    }

    /**
     * View method
     *
     * @param string|null $id Cake id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cake = $this->Cake->get($id, [
            'contain' => [],
        ]);

        $this->set('cake', $cake);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cake = $this->Cake->newEntity();
        if ($this->request->is('post')) {
            $cake = $this->Cake->patchEntity($cake, $this->request->getData());
            if ($this->Cake->save($cake)) {
                $this->Flash->success(__('The cake has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cake could not be saved. Please, try again.'));
        }
        $this->set(compact('cake'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Cake id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cake = $this->Cake->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cake = $this->Cake->patchEntity($cake, $this->request->getData());
            if ($this->Cake->save($cake)) {
                $this->Flash->success(__('The cake has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cake could not be saved. Please, try again.'));
        }
        $this->set(compact('cake'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Cake id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cake = $this->Cake->get($id);
        if ($this->Cake->delete($cake)) {
            $this->Flash->success(__('The cake has been deleted.'));
        } else {
            $this->Flash->error(__('The cake could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
