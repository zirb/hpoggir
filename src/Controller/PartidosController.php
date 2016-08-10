<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Partidos Controller
 *
 * @property \App\Model\Table\PartidosTable $Partidos
 */
class PartidosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['ListaLigas', 'Equipos']
        ];
        $partidos = $this->paginate($this->Partidos);

        $this->set(compact('partidos'));
        $this->set('_serialize', ['partidos']);
    }

    /**
     * View method
     *
     * @param string|null $id Partido id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $partido = $this->Partidos->get($id, [
            'contain' => ['ListaLigas', 'Equipos', 'Quinielas']
        ]);

        $this->set('partido', $partido);
        $this->set('_serialize', ['partido']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $partido = $this->Partidos->newEntity();
        if ($this->request->is('post')) {
            $partido = $this->Partidos->patchEntity($partido, $this->request->data);
            if ($this->Partidos->save($partido)) {
                $this->Flash->success(__('The partido has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The partido could not be saved. Please, try again.'));
            }
        }
        $listaLigas = $this->Partidos->ListaLigas->find('list', ['limit' => 200]);
        $equipos = $this->Partidos->Equipos->find('list', ['limit' => 200]);
        $this->set(compact('partido', 'listaLigas', 'equipos'));
        $this->set('_serialize', ['partido']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Partido id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $partido = $this->Partidos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $partido = $this->Partidos->patchEntity($partido, $this->request->data);
            if ($this->Partidos->save($partido)) {
                $this->Flash->success(__('The partido has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The partido could not be saved. Please, try again.'));
            }
        }
        $listaLigas = $this->Partidos->ListaLigas->find('list', ['limit' => 200]);
        $equipos = $this->Partidos->Equipos->find('list', ['limit' => 200]);
        $this->set(compact('partido', 'listaLigas', 'equipos'));
        $this->set('_serialize', ['partido']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Partido id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $partido = $this->Partidos->get($id);
        if ($this->Partidos->delete($partido)) {
            $this->Flash->success(__('The partido has been deleted.'));
        } else {
            $this->Flash->error(__('The partido could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
