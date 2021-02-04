<?php
namespace App\Controller;
use Cake\Http\Exception;
use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\Datasource\ConnectionManager;
use Cake\ORM\TableRegistry;
use Cake\Validation\Validator;
use Cake\Network\Session\DatabaseSession;


	class CustomerController extends AppController
	{
		public function view()
		{
			//$this->layout = false;
			$result=$this->loadModel('login_data');
			$data=$result->find();
			$this->set('sent_data',$data);
		}
		public function add()
    	{
    		if ($this->request->is('post')) 
    		{
    			$Customer_table = TableRegistry::getTableLocator()->get('login_data');
   				$Customer = $this->Customer->newEntity($this->request->getData());
   				$this->set('Customer',$Customer);
   				if ($Customer->getErrors()) 
   				{
   					$this->Flash->error('Please Fill the fields');
   				}
   				else
   				{
   					if ($Customer_table->save($Customer)) 
   					{
   						$this->Flash->success('User Added successfull');
   					}
   					else
   					{
   						$this->Flash->error('New user creation failed');
   					}
   				
   				}
    		}
    		
   		}
		public function login()
		{
			
			if($this->request->is('post'))
			{
				$name= $this->request->getdata('uname');
				$pwd= $this->request->getdata('psw');
				//echo $name."<br>".$pwd;
				$data=$this->loadModel('Customer');
							$data = $data->find('all', array(
            					'conditions' => array(
                				'username' => $name,
                				'password' => $pwd 
            					)
       				 		)) ;
       				 		$d=$data->first();
       				 		//print_r($d['Name']);
				//$results = $this->Customer->abc($name);
				if(isset($d))
				{
							$data = $data->find('all', array(
            					'conditions' => array(
                				'username' => $name,
                				'password' => $pwd ,
            					)
       				 		)) ;
							$d=$data->first();
							//print_r($d);
							$daa=array('username' => $d['username'],'password'=>$d['password'],'Name'=>$d['Name'],'Address'=>$d['Address'],'Email'=>$d['Email'],'Phone'=>$d['Phone']);
							//$this->set('Customer_data',$daa);
							//return $this->redirect(['action' => 'userinfo']);
							//$id=$d['id'];
							//echo $id;
							//print_r($d);
							//$this->userinfo($name);
							//print_r($daa);
							$this->set('user_session',$this->request->session()->write('as',$daa));
							$this->redirect(['action' => 'userinfo']);
							//$this->Flash->success(__("Login Success"));
					
				}
				else
				{
					$this->Flash->error(__("Login Failed"));
				}
			}
		}
		public function userinfo()
		{
			
			//$m=$this->set('user_session',$this->request->session()->read('as'));
			$x= $this->request->session()->read('as');

			//print_r($name);
			$this->set('Customer_data',$x);
			//$this->redirect(['action' => 'userinfo']);
			//$tb=$this->loadModel('Customer');
			//$article = $tb->get($id);
			/*$tb = $tb->find('all', array(
            					'conditions' => array(
                				'id' => $data,
            					)
       				 		)) ;
							$d=$data->first();*/
							//print_r($article);
			//$this->redirect(['action' => 'userinfo']);
		}
		public function viewData()
		{
			$this->layout = false;
    		$Customer_details=$this->Customer->get($this->request->query('id'));
			$this->set('Customer_data',$Customer_details);
		}
		public function edit()
		{
			//$this->layout = false;
			$Customer_details=$this->Customer->get($this->request->query('id'));
			$this->set('Customer_data',$Customer_details);
		}
		public function update()
		{
			$id=$this->request->getdata('id');
			$name= $this->request->getdata('name');
			$usrname= $this->request->getdata('uname');
			$pwd= $this->request->getdata('psd');
			$adr= $this->request->getdata('address');
			$mail= $this->request->getdata('mail');
			$phone= $this->request->getdata('ph');
			$detail = array('id'=>$id,'name' => $name,'username'=>$usrname,'password'=>$pwd,'address'=>$adr,'mail'=>$mail,'contact'=>$phone );
			//print_r($detail);
			$results = $this->Customer->update($detail);
			if ($results=="Success") {
				$this->redirect(['action' => 'view']);
				$this->Flash->success(__("Updated Successfully"));
			}
			else{
				$this->Flash->error(__("updated failed"));
			}
		}
		public function delete()
		{
			//$this->layout = false;
			$id=$this->request->query('id');
			$users_table = TableRegistry::get('login_data');
			$users = $users_table->get($id);
			$result=$users_table->delete($users);
			if ($result==1) {
				$this->redirect(['action' => 'view']);
				$this->Flash->success(__("Deleted Successfully"));
			}
			else{
				$this->redirect(['action' => 'view']);
				$this->Flash->error(__("Unable to delete"));
			}
		}

	}
?>