<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * OrdersProvidersSteps Controller
 *
 * @property \App\Model\Table\OrdersProvidersStepsTable $OrdersProvidersSteps
 *
 * @method \App\Model\Entity\OrdersProvidersStep[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OrdersProvidersStepsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Orders', 'Providers', 'Steps']
        ];
        $ordersProvidersSteps = $this->paginate($this->OrdersProvidersSteps);

        $this->set(compact('ordersProvidersSteps'));
    }

    /**
     * View method
     *
     * @param string|null $id Orders Providers Step id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ordersProvidersStep = $this->OrdersProvidersSteps->get($id, [
            'contain' => ['Orders', 'Providers', 'Steps']
        ]);

        $this->set('ordersProvidersStep', $ordersProvidersStep);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ordersProvidersStep = $this->OrdersProvidersSteps->newEntity();
        if ($this->request->is('post')) {
            $ordersProvidersStep = $this->OrdersProvidersSteps->patchEntity($ordersProvidersStep, $this->request->getData());
            if ($this->OrdersProvidersSteps->save($ordersProvidersStep)) {
                $this->Flash->success(__('The orders providers step has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The orders providers step could not be saved. Please, try again.'));
        }
        $orders = $this->OrdersProvidersSteps->Orders->find('list', ['limit' => 200]);
        $providers = $this->OrdersProvidersSteps->Providers->find('list', ['limit' => 200]);
        $steps = $this->OrdersProvidersSteps->Steps->find('list', ['limit' => 200]);
        $this->set(compact('ordersProvidersStep', 'orders', 'providers', 'steps'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Orders Providers Step id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ordersProvidersStep = $this->OrdersProvidersSteps->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ordersProvidersStep = $this->OrdersProvidersSteps->patchEntity($ordersProvidersStep, $this->request->getData());
            if ($this->OrdersProvidersSteps->save($ordersProvidersStep)) {
                $this->Flash->success(__('The orders providers step has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The orders providers step could not be saved. Please, try again.'));
        }
        $orders = $this->OrdersProvidersSteps->Orders->find('list', ['limit' => 200]);
        $providers = $this->OrdersProvidersSteps->Providers->find('list', ['limit' => 200]);
        $steps = $this->OrdersProvidersSteps->Steps->find('list', ['limit' => 200]);
        $this->set(compact('ordersProvidersStep', 'orders', 'providers', 'steps'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Orders Providers Step id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ordersProvidersStep = $this->OrdersProvidersSteps->get($id);
        if ($this->OrdersProvidersSteps->delete($ordersProvidersStep)) {
            $this->Flash->success(__('The orders providers step has been deleted.'));
        } else {
            $this->Flash->error(__('The orders providers step could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
