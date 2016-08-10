<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Direcciones Controller
 *
 * @property \App\Model\Table\DireccionesTable $Direcciones
 */
class DireccionesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $direcciones = $this->paginate($this->Direcciones);

        $this->set(compact('direcciones'));
        $this->set('_serialize', ['direcciones']);
    }

    /**
     * View method
     *
     * @param string|null $id Direccione id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $direccione = $this->Direcciones->get($id, [
            'contain' => []
        ]);

        $this->set('direccione', $direccione);
        $this->set('_serialize', ['direccione']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $direccione = $this->Direcciones->newEntity();
        if ($this->request->is('post')) {
            $direccione = $this->Direcciones->patchEntity($direccione, $this->request->data);
            if ($this->Direcciones->save($direccione)) {
                $this->Flash->success(__('The direccione has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The direccione could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('direccione'));
        $this->set('_serialize', ['direccione']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Direccione id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $direccione = $this->Direcciones->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $direccione = $this->Direcciones->patchEntity($direccione, $this->request->data);
            if ($this->Direcciones->save($direccione)) {
                $this->Flash->success(__('The direccione has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The direccione could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('direccione'));
        $this->set('_serialize', ['direccione']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Direccione id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $direccione = $this->Direcciones->get($id);
        if ($this->Direcciones->delete($direccione)) {
            $this->Flash->success(__('The direccione has been deleted.'));
        } else {
            $this->Flash->error(__('The direccione could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
