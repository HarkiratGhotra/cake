<?php
// src/Model/Table/ArticlesTable.php
namespace App\Model\Table;
use Cake\Validation\Validator;


use Cake\ORM\Table;

class ArticlesTable extends Table
{
    public function initialize(array $config)
    {
        $this->addBehavior('Timestamp');
    }
	 public function validationDefault(Validator $validator)
    {
        $validator
            ->notEmpty('Name')
            ->requirePresence('Name')
            ->notEmpty('Address')
            ->requirePresence('Address')
			->notEmpty('City')
            ->requirePresence('City')
			->notEmpty('PostalCode')
          ->requirePresence('PostalCode')
		  ->notEmpty('Province')
          ->requirePresence('Province')
		  ->notEmpty('Email')
          ->requirePresence('Email')
		  ->notEmpty('PhoneNo')
          ->requirePresence('PhoneNo')
		  ->notEmpty('PizzaName')
          ->requirePresence('PizzaName')
		  ->notEmpty('Toppings')
          ->requirePresence('Toppings')
		  ->notEmpty('Size')
          ->requirePresence('Size')
		  ->notEmpty('CrustType')
          ->requirePresence('CrustType');
        return $validator;
    }
}
?>