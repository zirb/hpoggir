<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Quinielas Controller
 *
 * @property \App\Model\Table\QuinielasTable $Quinielas
 */
class QuinielasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Usuarios', 'Partidos']
        ];
        $quinielas = $this->paginate($this->Quinielas);

        $this->set(compact('quinielas'));
        $this->set('_serialize', ['quinielas']);
    }

    /**
     * View method
     *
     * @param string|null $id Quiniela id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $quiniela = $this->Quinielas->get($id, [
            'contain' => ['Usuarios', 'Partidos']
        ]);

        $this->set('quiniela', $quiniela);
        $this->set('_serialize', ['quiniela']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $quiniela = $this->Quinielas->newEntity();
        if ($this->request->is('post')) {
            $quiniela = $this->Quinielas->patchEntity($quiniela, $this->request->data);
            if ($this->Quinielas->save($quiniela)) {
                $this->Flash->success(__('The quiniela has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The quiniela could not be saved. Please, try again.'));
            }
        }
        $usuarios = $this->Quinielas->Usuarios->find('list', ['limit' => 200]);
        $partidos = $this->Quinielas->Partidos->find('list', ['limit' => 200]);
        $this->set(compact('quiniela', 'usuarios', 'partidos'));
        $this->set('_serialize', ['quiniela']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Quiniela id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $quiniela = $this->Quinielas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $quiniela = $this->Quinielas->patchEntity($quiniela, $this->request->data);
            if ($this->Quinielas->save($quiniela)) {
                $this->Flash->success(__('The quiniela has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The quiniela could not be saved. Please, try again.'));
            }
        }
        $usuarios = $this->Quinielas->Usuarios->find('list', ['limit' => 200]);
        $partidos = $this->Quinielas->Partidos->find('list', ['limit' => 200]);
        $this->set(compact('quiniela', 'usuarios', 'partidos'));
        $this->set('_serialize', ['quiniela']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Quiniela id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $quiniela = $this->Quinielas->get($id);
        if ($this->Quinielas->delete($quiniela)) {
            $this->Flash->success(__('The quiniela has been deleted.'));
        } else {
            $this->Flash->error(__('The quiniela could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
