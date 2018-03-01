<?php

namespace App\Controller;

class UsersController extends AppController
{
  public function index()
  {
    $this->loadComponent('Paginator');
    $users = $this->Paginator->paginate($this->Users->find());
    $this->set(compact('users'));
  }

  public function view($id = null)
  {
      $user = $this->Users->findById($id)->first();
      $this->set(compact('user'));
  }

  public function add()
  {
      $user = $this->Users->newEntity();
      if ($this->request->is('post')) {
          $user = $this->Users->patchEntity($user, $this->request->getData());
          if ($this->Users->save($user)) {
              $this->Flash->success(__('Your user has been saved.'));
              return $this->redirect(['action' => 'index']);
          }
          $this->Flash->error(__('Unable to add your user.'));
      }
      $this->set('user', $user);
  }

  public function edit($id = null)
  {
      $user = $this->Users->findById($id)->first();
      if ($this->request->is(['post', 'put'])) {
          $this->Users->patchEntity($user, $this->request->getData());
          if ($this->Users->save($user)) {
              $this->Flash->success(__('Your user has been updated.'));
              return $this->redirect(['action' => 'index']);
          }
          $this->Flash->error(__('Unable to update your user.'));
      }

      $this->set('user', $user);
  }
}
