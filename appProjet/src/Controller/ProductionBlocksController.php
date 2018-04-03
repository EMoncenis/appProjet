<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ProductionBlocks Controller
 *
 * @property \App\Model\Table\ProductionBlocksTable $ProductionBlocks
 *
 * @method \App\Model\Entity\ProductionBlock[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProductionBlocksController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Orders']
        ];
        $productionBlocks = $this->paginate($this->ProductionBlocks);

        $this->set(compact('productionBlocks'));
    }

    /**
     * View method
     *
     * @param string|null $id Production Block id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $productionBlock = $this->ProductionBlocks->get($id, [
            'contain' => ['Users', 'Orders']
        ]);

        $this->set('productionBlock', $productionBlock);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $productionBlock = $this->ProductionBlocks->newEntity();
        if ($this->request->is('post')) {
            $productionBlock = $this->ProductionBlocks->patchEntity($productionBlock, $this->request->getData());
            if ($this->ProductionBlocks->save($productionBlock)) {
                $this->Flash->success(__('The production block has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The production block could not be saved. Please, try again.'));
        }
        $users = $this->ProductionBlocks->Users->find('list', ['limit' => 200]);
        $orders = $this->ProductionBlocks->Orders->find('list', ['limit' => 200]);
        $this->set(compact('productionBlock', 'users', 'orders'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Production Block id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $productionBlock = $this->ProductionBlocks->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $productionBlock = $this->ProductionBlocks->patchEntity($productionBlock, $this->request->getData());
            if ($this->ProductionBlocks->save($productionBlock)) {
                $this->Flash->success(__('The production block has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The production block could not be saved. Please, try again.'));
        }
        $users = $this->ProductionBlocks->Users->find('list', ['limit' => 200]);
        $orders = $this->ProductionBlocks->Orders->find('list', ['limit' => 200]);
        $this->set(compact('productionBlock', 'users', 'orders'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Production Block id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $productionBlock = $this->ProductionBlocks->get($id);
        if ($this->ProductionBlocks->delete($productionBlock)) {
            $this->Flash->success(__('The production block has been deleted.'));
        } else {
            $this->Flash->error(__('The production block could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
