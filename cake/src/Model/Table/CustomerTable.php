<?php
	
	namespace App\Model\Table;
	use App\Model\Entity\User;
	use Cake\ORM\Query;
	use Cake\ORM\RulesChecker;
	use Cake\ORM\Table;
	use Cake\Validation\Validator;
	use Cake\Datasource\ConnectionManager;


	class CustomerTable extends Table{
		public function initialize(array $config)
   		{
      		  parent::initialize($config);
      		  $this->table('login_data');
      		  $this->displayField('username');
      		  $this->primaryKey('id');
      		  $this->addBehavior('Timestamp');

   		}
   		public function validationDefault(Validator $validator)
	    {
	        $validator
	            ->add('id', 'valid', ['rule' => 'numeric'])
	            ->allowEmpty('id', 'create');
	
	        $validator
	            ->requirePresence('name', 'create')
	            ->notEmpty('name');

	        $validator
	            ->requirePresence('username', 'create')
	            ->notEmpty('username')
	            ->add('title','notUrl',[
	            	'minLength'=>'5',
	            	'message'=>'Minimum length 5',
	            ]);

	        $validator
	            ->requirePresence('Address', 'create')
	            ->notEmpty('Address');
	
	        $validator
	            ->add('mail', 'valid', ['rule' => 'email'])
	            ->requirePresence('mail', 'create')
	            ->notEmpty('mail');
	
	        $validator
	            ->requirePresence('Password', 'create')
	            ->notEmpty('Password');
	        $validator
	            ->requirePresence('Phone', 'create')
	            ->notEmpty('Phone');
	
	        return $validator;
    	}
   		public function abc($m)
   		{
   			$x=$m;
   				
				/*$sql = 'SELECT password FROM login_data where username='."'".$x."'";         
     			$data = $this->query($sql);*/
				//$data=$result->find();
				
			$connection = ConnectionManager::get('default');
			$results = $connection->execute('SELECT password FROM login_data where username='."'".$x."'")->fetch('assoc');
   			
     		return $results;
   		}
   		public function update($details)
   		{
   			$connection = ConnectionManager::get('default');
			$results = $connection->execute('UPDATE login_data SET username='."'".$details['username']."',".'password='."'".$details['password']."',".'Name='."'".$details['name']."',".'Address='."'".$details['address']."',".'Email='."'".$details['mail']."',".'Phone='.$details['contact'].' WHERE id=2')->execute();
			if ($results) {
				return "Success";
			}
			else{
				return "fail";
			}



   			//echo  'UPDATE login_data SET username='."'".$details['username']."',".'password='."'".$details['password']."',".'Name='."'".$details['name']."',".'Address='."'".$details['address']."',".'Email='."'".$details['mail']."',".'Phone='.$details['contact'] ;
   			//print_r($details);
   		}

	}
?>