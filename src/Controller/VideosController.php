<?php

namespace App\Controller;

class VideosController extends AppController
{
  public function index()
  {
    $this->loadComponent('Paginator');
    $videos = $this->Paginator->paginate($this->Videos->find());
    $this->set(compact('videos'));
  }

  public function view($id = null)
  {
      $video = $this->Videos->findById($id)->contain(['Users'])->first();
      $this->set(compact('video'));
  }

  public function add()
  {
      $video = $this->Videos->newEntity();
      if ($this->request->is('post')) {
          $video = $this->Videos->patchEntity($video, $this->request->getData());
          if ($this->Videos->save($video)) {
              $this->Flash->success(__('Your video has been saved.'));
              return $this->redirect(['action' => 'index']);
          }
          $this->Flash->error(__('Unable to add your video.'));
      }
      $this->set('video', $video);
  }

  public function edit($id = null)
  {
      $video = $this->Videos->findById($id)->first();
      if ($this->request->is(['post', 'put'])) {
          $this->Videos->patchEntity($video, $this->request->getData());
          if ($this->Videos->save($video)) {
              $this->Flash->success(__('Your video has been updated.'));
              return $this->redirect(['action' => 'index']);
          }
          $this->Flash->error(__('Unable to update your video.'));
      }

      $this->set('video', $video);
  }
}