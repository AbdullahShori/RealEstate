<?php
namespace Property\Controller;

use Property\Controller\AppController;

/**
 * Properties Controller
 *
 * @property \Property\Model\Table\PropertiesTable $Properties
 *
 * @method \Property\Model\Entity\Property[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PropertiesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function search() {
        $obj = '';
        if (!empty($this->data)) {
           $obj  = $this->data['Location']['Procurar'];
           $opts  = array(
               'conditions' => array('Location.Procurar' => $obj)
           );
        }
        $this->set('obj', $obj); // so the keyword is saved. Can also get it via $this->data
     }
     
    public function index()
    {
        $properties = $this->paginate($this->Properties);

        $this->set(compact('properties'));
    }

    /**
     * View method
     *
     * @param string|null $id Property id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $property = $this->Properties->get($id, [
            'contain' => [],
        ]);

        $this->set('property', $property);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    private function uploadImage($property)
    {
        $file = $this->getRequest()->getData('file');
        //$dirSperator = in_array($_SERVER['REMOTE_ADDR'], ['127.0.0.1']) ? '\\' : '/';
        // $dirSperator = '..\plugins\ShowProducts\webroot';
        if (!empty($file['name'])) {
            $ext = substr(strtolower(strrchr($file['name'], '.')), 1);
            $arr_ext = array('jpg', 'jpeg', 'gif', 'png');
            // $mainFolder = 'pro';
            // $imgPath = sprintf('%s', $dirSperator);
            $uploadPath = "img/";
        
            if (in_array($ext, $arr_ext)) {
                // if (!is_dir(WWW_ROOT .  sprintf('img%s%s', $dirSperator, $mainFolder))) {
                //     mkdir(WWW_ROOT . sprintf('img%s%s', $dirSperator, $mainFolder));
                // }
                // if (!is_dir(WWW_ROOT . $uploadPath)) {
                //     mkdir(WWW_ROOT . $uploadPath);
                // }
                $result = move_uploaded_file($file['tmp_name'], WWW_ROOT . $uploadPath . $file['name']);
                //print_r($result);exit;
                // Save file address to DB
                $property->Image = $file['name'];
                
                $this->Properties->save($property);
                $response = [
                    'message' => $file['name'],
                ];
                
            } else {
                $response = ['status' => false, 'message' => 'Selected extension not allowed.'];
            }
        } else {
            $response = ['status' => true];
        }
        return $response;
    }
    public function add()
    {
        $property = $this->Properties->newEntity();
        $result = $this->uploadImage($property);
        if ($this->request->is('post')) {
            $property = $this->Properties->patchEntity($property, $this->request->getData());
            if ($this->Properties->save($property)) {
                $this->Flash->success(__('The property has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The property could not be saved. Please, try again.'));
        }
        $this->set(compact('property'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Property id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $property = $this->Properties->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $property = $this->Properties->patchEntity($property, $this->request->getData());
            if ($this->Properties->save($property)) {
                $this->Flash->success(__('The property has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The property could not be saved. Please, try again.'));
        }
        $this->set(compact('property'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Property id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $property = $this->Properties->get($id);
        if ($this->Properties->delete($property)) {
            $this->Flash->success(__('The property has been deleted.'));
        } else {
            $this->Flash->error(__('The property could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
