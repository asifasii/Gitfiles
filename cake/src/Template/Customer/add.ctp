
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?php echo $this->Html->link(__('List Customers'), ['action' => 'view']) ?></li>
       
        
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?php
     $myTemplates = [
            'inputContainer' => '<div class="form-group">{{content}}</div>',
            // 'input' => '<input type="{{type}}" class="form-control is-invalid" name="{{name}}"{{attrs}}/>',
            'inputContainerError' => '<div class="form-group {{required}} error">{{content}}{{error}}</div>',
            'error' => '<div class="invalid-feedback">{{content}}</div>',
        ];
        $this->Form->setTemplates($myTemplates);
       // print_r($Customer);
        if (isset($Customer)) {
            echo $this->Form->create($Customer); 
        }
        else
        {
            echo $this->Form->create();
        }
        echo $this->Form->controls(
            [
                
                'username' => [
                    'name' => 'username',
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
                'name' => [
                    'name' => 'name',
                    'placeholder' => "Full Name", 
                    'required' => false,
                    'label' => 'Full Name',
                    'class' => ($this->Form->isFieldError('name')) ? 'form-control is-invalid' : 'form-control'
                ],
                'Address' => [
                    'name' => 'Address',
                    'placeholder' => "Please enter your Address", 
                    'required' => false,
                    'label' => 'Enter your Address',
                    'class' => ($this->Form->isFieldError('Address')) ? 'form-control is-invalid' : 'form-control'
                ],
                'mail' => [
                    'name' => 'mail',
                    'label' => 'Email address',
                    'placeholder' => "Email Address", 
                    'required' => false,
                    'class' => ($this->Form->isFieldError('mail')) ? 'form-control is-invalid' : 'form-control'
                ],
                'Phone' => [
                    'name' => 'Phone',
                    'label' => 'Phone',
                    'placeholder' => "Contact number", 
                    'required' => false,
                    'class' => ($this->Form->isFieldError('Phone')) ? 'form-control is-invalid' : 'form-control'
                ],
                
               
            ]
        );
        ?>

    <?php echo $this->Form->button(__('Submit')); ?>
    <?php echo $this->Form->end(); ?>
</div>