<?php

namespace App\Model\Table;

use Cake\ORM\Table;

class VideosTable extends Table
{
  public function initialize(array $config)
  {
    $this->belongsTo('Users');
    $this->displayField('title');
    $this->addBehavior('Timestamp');
  }
}
