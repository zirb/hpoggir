<?php
namespace App\Controller;



use App\Controller\AppController;
//agregadas por mi
use Cake\Event\Event;
use Cake\Error\Debugger;
//

/**
 * Usuarios Controller
 *
 * @property \App\Model\Table\UsuariosTable $Usuarios
 */
class UsuariosController extends AppController
{
    /**
     * Metodo beforeFilter
     *
     * 
     */
public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow('add', 'logout','index','delete', 'view');
    }

    /**
     * Metodo login
     *
     * 
     */
public function login()
    {
        if ($this->request->is('post')) {
            $user= $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect(['controller' => 'Usuarios', 'action' => 'index']);
            }
            $this->Flash->error(__('usuario invalido'));
		//Debugger::dump($user);
	    //Debugger::dump($this->request->data);

		
        }
    }

    /**
     * Metodo logout
     *
     * 
     */
    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Direcciones', 'Alumnos']
        ];
        $usuarios = $this->paginate($this->Usuarios);

        $this->set(compact('usuarios'));
        $this->set('_serialize', ['usuarios']);
    }

    /**
     * View method
     *
     * @param string|null $id Usuario id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $usuario = $this->Usuarios->get($id, [
            'contain' => ['Direcciones', 'Alumnos', 'Quinielas']
        ]);

        $this->set('usuario', $usuario);
        $this->set('_serialize', ['usuario']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $usuario = $this->Usuarios->newEntity();
        if ($this->request->is('post')) {
            $usuario = $this->Usuarios->patchEntity($usuario, $this->request->data);
            if ($this->Usuarios->save($usuario)) {
                $this->Flash->success(__('El usuario se agregó con éxito.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('El usuario no pudo ser agregado. Intenta de nuevo.'));
            }
        }
        $direcciones = $this->Usuarios->Direcciones->find('list', ['limit' => 200]);
        $alumnos = $this->Usuarios->Alumnos->find('list', ['limit' => 200]);
        $this->set(compact('usuario', 'direcciones', 'alumnos'));
        $this->set('_serialize', ['usuario']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Usuario id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $usuario = $this->Usuarios->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $usuario = $this->Usuarios->patchEntity($usuario, $this->request->data);
            if ($this->Usuarios->save($usuario)) {
                $this->Flash->success(__('El usuario ha sido guardado.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('El usuario no pudo ser editado, intenta de nuevo.'));
            }
        }
        $direcciones = $this->Usuarios->Direcciones->find('list', ['limit' => 200]);
        $alumnos = $this->Usuarios->Alumnos->find('list', ['limit' => 200]);
        $this->set(compact('usuario', 'direcciones', 'alumnos'));
        $this->set('_serialize', ['usuario']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Usuario id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {

        $this->request->allowMethod(['post', 'delete']);
        $usuario = $this->Usuarios->get($id);
        if ($this->Usuarios->delete($usuario)) {
            $this->Flash->success(__('El usuario ha sido eliminado.'));
        } else {
            $this->Flash->error(__('El usuario no pudo ser eliminado, intenta de nuevo.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
