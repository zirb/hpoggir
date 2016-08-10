<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ListaLigas Controller
 *
 * @property \App\Model\Table\ListaLigasTable $ListaLigas
 */
class ListaLigasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Ligas', 'Equipos']
        ];
        $listaLigas = $this->paginate($this->ListaLigas);

        $this->set(compact('listaLigas'));
        $this->set('_serialize', ['listaLigas']);
    }

    /**
     * View method
     *
     * @param string|null $id Lista Liga id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $listaLiga = $this->ListaLigas->get($id, [
            'contain' => ['Ligas', 'Equipos']
        ]);

        $this->set('listaLiga', $listaLiga);
        $this->set('_serialize', ['listaLiga']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $listaLiga = $this->ListaLigas->newEntity();
        if ($this->request->is('post')) {
            $listaLiga = $this->ListaLigas->patchEntity($listaLiga, $this->request->data);
            if ($this->ListaLigas->save($listaLiga)) {
                $this->Flash->success(__('The lista liga has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The lista liga could not be saved. Please, try again.'));
            }
        }
        $ligas = $this->ListaLigas->Ligas->find('list', ['limit' => 200]);
        $equipos = $this->ListaLigas->Equipos->find('list', ['limit' => 200]);
        $this->set(compact('listaLiga', 'ligas', 'equipos'));
        $this->set('_serialize', ['listaLiga']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Lista Liga id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $listaLiga = $this->ListaLigas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $listaLiga = $this->ListaLigas->patchEntity($listaLiga, $this->request->data);
            if ($this->ListaLigas->save($listaLiga)) {
                $this->Flash->success(__('The lista liga has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The lista liga could not be saved. Please, try again.'));
            }
        }
        $ligas = $this->ListaLigas->Ligas->find('list', ['limit' => 200]);
        $equipos = $this->ListaLigas->Equipos->find('list', ['limit' => 200]);
        $this->set(compact('listaLiga', 'ligas', 'equipos'));
        $this->set('_serialize', ['listaLiga']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Lista Liga id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $listaLiga = $this->ListaLigas->get($id);
        if ($this->ListaLigas->delete($listaLiga)) {
            $this->Flash->success(__('The lista liga has been deleted.'));
        } else {
            $this->Flash->error(__('The lista liga could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
