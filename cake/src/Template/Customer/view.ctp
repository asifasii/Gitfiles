<br><br>

<div style="margin-left: 20%;"><?php echo $this->Html->link(__('Login'), ['action' => 'login']); ?>
&emsp;&emsp;
<?php echo $this->Html->link(__('Add Customer'), ['action' => 'add']); ?></div><br>

<div class="container">
  <div style="margin-left: 20%"class="sm-6  medium-6 columns" >
<table >
  <tr><th colspan="3" style="text-align:left">Username</th>
    <th colspan="5" style="text-align:left">Name</th>
    <th colspan="4" style="text-align:left">Address</th>
    <th colspan="4" style="text-align:left">Email</th>
    <th colspan="4" style="text-align:left">Phone</th>
    <th style="text-align:center;" colspan="4">Actions</th></tr>
<tr>
<?php

  foreach($sent_data as $info){
  echo "<td colspan='3'style='text-align:left'>";
  echo $info->username."</td><td colspan='5'style='text-align:left'>";
  echo ucfirst($info->Name)."</td><td colspan='4'style='text-align:left'>";
  echo $info->Address."</td><td colspan='4'style='text-align:left'>";
  echo $info->Email."</td><td colspan='4'style='text-align:left'>";
  echo $info->Phone."</td><td colspan='2'style='text-align:left'>";
  echo $this->Html->link(
    $this->Html->image('View_data.png',array('height' => '25', 'width' => '25')),
    array(
        'controller' => 'Customer', 
        'action' => 'viewData','?'=>['id'=>$info->id]
    ), array('escape' => false)
    )."</td><td colspan='2'style='text-align:left'>"; 



  echo $this->Html->link(
    $this->Html->image('edit-button.png',array( 'width' => '25')),
    array(
        'controller' => 'Customer', 
        'action' => 'edit','?'=>['id'=>$info->id]
    ), array('escape' => false)
    )."</td><td colspan='2'style='text-align:left'>"; 

 echo $this->Html->link(
    $this->Html->image('delete.png',array( 'width' => '25')),
    array(
        'controller' => 'Customer', 
        'action' => 'delete','?'=>['id'=>$info->id]
    ), array('escape' => false)
    )."</td></tr>"; 
}
?>

</table>
</div></div>