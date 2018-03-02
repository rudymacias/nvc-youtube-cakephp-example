<?php

namespace App\Model\Table;

use Cake\ORM\Table;

class UsersTable extends Table
{
  public function initialize(array $config)
  {
    $this->hasMany('Videos');
    $this->displayField('first_name');
    $this->addBehavior('Timestamp');
  }
}
