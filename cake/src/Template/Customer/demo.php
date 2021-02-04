//userinfo codes.

<!DOCTYPE html>
<html>
<head>
    <title>Customer Details</title>
</head>
<body>

<?php
//echo $this->request->session()->read('as')
print_r($Customer_data);
?>
<br><br>

<div >
&emsp;&emsp;
<?php echo $this->Html->link(__('Logout'), ['action' => 'view']); ?></div><br>

<div class="container" style="border-style: outset;width: 50%;margin-left: 25%;margin-right: 25%; height: 500px;background-color: Gainsboro;">
    
        <table width="70%" style="font-size: 18px;margin-top: 10%;margin-left: auto;margin-right: auto;"cellspacing="25" >
            <tr>
                <td colspan="2" >
                    <label style="font-weight: bold;">Name     </td><td colspan="2">  :    </label>
                </td>
                <td colspan="5" >
                    <?php if(isset($Customer_data['username'])){
                    echo $Customer_data['username']; } ?>
                </td>
            </tr>
            <tr>
                <td colspan="2" >
                    <label style="font-weight: bold;">Username     </td><td colspan="2">  :    </label>
                </td>
                <td colspan="5" >
                    <?php if(isset($Customer_data['username'])){
                    echo $Customer_data['username'];
                }  ?>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <label style="font-weight: bold;">Address     </td><td colspan="2">  :    </label>
                </td>
                <td colspan="5">
                    <?php if(isset($Customer_data['Address'])){
                    echo $Customer_data['Address'];
                }
                    ?>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <label style="font-weight: bold;">Email id     </td><td colspan="2">  :    </label>
                </td>
                <td colspan="5">
                    <?php if(isset($Customer_data['Email'])){
                    echo $Customer_data['Email'];
                }
                    ?>
                    
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <label style="font-weight: bold;">Contact No.     </td><td colspan="2">  :    </label>
                </td>
                <td colspan="5">
                    
                    <?php if(isset($Customer_data['Phone']))
                    {
                    echo $Customer_data['Phone'];
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    &emsp;&emsp;
                </td><td colspan="2"></td>
                <td colspan="5" align="right">
                    
                <?php   echo $this->Html->link(
                    $this->Html->image('close_button.png',array( 'width' => '70')),
                        array(
                            'controller' => 'Customer', 
                                'action' => 'view'
                             ), array('escape' => false)
                    ); ?>
                </td>
            </tr>

        </table>
    
</div>
</body>
</html>




























































//login


$results = $this->Customer->abc($name);
                if($results)
                {
                    foreach ($results as $row=>$value)
                    {
                        
                        if($value==$pwd)
                        {
                            $data=$this->loadModel('Customer');
                            $data = $data->find('all', array(
                                'conditions' => array(
                                'username' => $name,
                                'password' => $pwd ,
                                )
                            )) ;
                            $d=$data->first();
                            $id=$d['id'];
                            //print_r($d);
                            //$this->userinfo($id);
                            //return $this->redirect(['action' => 'userinfo']);
                            //$this->Flash->success(__("Login Success"));
                        }
                        else
                        {
                            $this->Flash->error(__("Login Failed"));

                        }
                    }
                }
                else
                {
                    $this->Flash->error(__("Login Failed"));
                }
            }


























//add function in controller

$Customer=$this->Customer->newEntity($this->request->getData());
            $this->set('Customer',$Customer);
            print_r($this->request->getData());
            //print_r($user);












//controller extensions
use Cake\View\Helper;
use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;





















//add.ctp codes below
 <?php
       /* echo $this->Form->input('username',['class'=>'form-control']);
        echo $this->Form->input('Name',['class'=>'form-control']);
        echo $this->Form->input('Address',['class'=>'form-control']);
        echo $this->Form->input('Email',['class'=>'form-control']);
        echo $this->Form->input('Phone',['class'=>'form-control']);*/


         echo $this->Form->controls(
            [
                'name' => [
                    'name' => 'name',
                    'placeholder' => "Full Name", 
                    'required' => false,
                    'label' => 'Full Name',
                    'class' => ($this->Form->isFieldError('name')) ? 'form-control is-invalid' : 'form-control'
                ],
                'mail' => [
                    'name' => 'mail',
                    'placeholder' => "Email Address", 
                    'required' => false,
                    'class' => ($this->Form->isFieldError('mail')) ? 'form-control is-invalid' : 'form-control'
                ],
                'username' => [
                    'name' => 'Username',
                    'placeholder' => "Username", 
                    'required' => false,
                    'class' => ($this->Form->isFieldError('username')) ? 'form-control is-invalid' : 'form-control'
                ],
                'Password' => [
                    'name' => 'Password',
                    'placeholder' => "Password", 
                    'required' => false,
                    'class' => ($this->Form->isFieldError('password')) ? 'form-control is-invalid' : 'form-control'
                ],
               
            ]
        );
         print_r($Customer);

           /* echo $this->Form->control('username');
            echo $this->Form->control('password');
            echo $this->Form->control('Name');
            echo $this->Form->control('Address');
            echo $this->Form->control('Email');
            echo $this->Form->control('Phone');
            */
        ?>



































<!DOCTYPE html>
<html>
<head>
    <title>Customer Details</title>
</head>
<body>

<?php
//echo $errordata['usr'];
 if (isset($errordata['usr'])) {
                            echo $errordata['usr'];
                        } ?>

<div >
    <div style="float: left;width: 70px;margin-left: 50px;margin-top:30px;">
&emsp;&emsp;
<?php echo $this->Html->link(__('Home'), ['action' => 'view']); ?></div><br>

<div class="container" style="border-style: outset;width: 50%;margin-top:30px; margin-left: 25%;margin-right: 25%; height: 650px;background-color: Gainsboro;">
    <?php



     echo $this->Form->create(
         null,
        [
          "url"=>["action"=>"add"],
         "class"=>"form-horizontal",
         "name"=>"updateform",
          "method"=>"POST"
        ]
        );
     ?>
 
        <table style="font-size: 18px;margin-top: 10%;margin-left: auto;margin-right: auto;background-color: Gainsboro;width: 75%;"cellspacing="25" >           <tr>
       
                <td colspan="2" >
                    <label style="font-weight: bold;">Name     </td><td >  :    </label>
                </td>
                <td colspan="4" >

                    <input style="width: 300px;" type="text" name="name" >
                    <span style="color: red"> <?php if (isset($errordata['name'])) {
                            echo $errordata['name'];
                        } ?></span>
                </td>
            </tr>
            <tr>
                <td colspan="2" >
                    <label style="font-weight: bold;">Username     </td><td>  :    </label>
                        
                </td>
                <td colspan="4" >
                    <input  style="width: 300px;" type="text" name="uname" >
                    <span style="color: red"><?php if (isset($errordata['uname'])) {
                            echo $errordata['uname'];
                        } ?></span>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <label style="font-weight: bold;">Email id     </td><td >  :    </label>
                </td>
                <td colspan="4">
                    <input style="width: 300px;" type="text" name="mail" >
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <label style="font-weight: bold;">Password     </td><td>  :    </label>
                </td>
                <td colspan="4">
                    <input style="width: 300px;" type="Password" name="psd" >
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <label style="font-weight: bold;">Address     </td><td>  :    </label>
                </td>
                <td colspan="4">
                    <textarea rows="5" style="width: 300px;" name="address" ></textarea>
                    
                </td>
            </tr>
        
            <tr>
                <td colspan="2">
                    <label style="font-weight: bold;">Contact No.     </td><td >  :    </label>
                </td>
                <td colspan="4">
                    <input style="width: 300px;" type="text" name="ph" >
                </td>
            </tr>
            <tr>
                <td colspan="2">
                </td><td></td>
                <td colspan="2">                            
                    
                     
                    <input type="image" alt="submit" <?php echo $this->Html->image('save_button.png',array( 'width' => '70')); ?>
                
                </td>
                <td colspan="2">
                <?php   echo $this->Html->link(
                    $this->Html->image('close_button.png',array( 'width' => '70','align'=> 'right')),
                        array(
                            'controller' => 'Customer', 
                                'action' => 'view'
                             ), array('escape' => false)
                    ); ?>
                </td>
            </tr>

        </table>
    </form>
</div>
</div>
</body>
</html>