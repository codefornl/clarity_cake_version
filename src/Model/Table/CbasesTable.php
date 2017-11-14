<?php
// src/Model/Table/ArticlesTable.php
namespace App\Model\Table;

use Cake\ORM\Table;

class CbasesTable extends Table
{
    public function initialize(array $config)
    {
      $this->hasMany('Projects');
      $this->addBehavior('Timestamp');
    }
}
