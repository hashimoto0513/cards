<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Rarity Controller
 *
 * @property \App\Model\Table\RarityTable $Rarity
 * @method \App\Model\Entity\Rarity[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RarityController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $rarity = $this->paginate($this->Rarity);

        $this->set(compact('rarity'));
    }

    /**
     * View method
     *
     * @param string|null $id Rarity id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $rarity = $this->Rarity->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('rarity'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $rarity = $this->Rarity->newEmptyEntity();
        if ($this->request->is('post')) {
            $rarity = $this->Rarity->patchEntity($rarity, $this->request->getData());
            if ($this->Rarity->save($rarity)) {
                $this->Flash->success(__('The rarity has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The rarity could not be saved. Please, try again.'));
        }
        $this->set(compact('rarity'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Rarity id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $rarity = $this->Rarity->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $rarity = $this->Rarity->patchEntity($rarity, $this->request->getData());
            if ($this->Rarity->save($rarity)) {
                $this->Flash->success(__('The rarity has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The rarity could not be saved. Please, try again.'));
        }
        $this->set(compact('rarity'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Rarity id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $rarity = $this->Rarity->get($id);
        if ($this->Rarity->delete($rarity)) {
            $this->Flash->success(__('The rarity has been deleted.'));
        } else {
            $this->Flash->error(__('The rarity could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
