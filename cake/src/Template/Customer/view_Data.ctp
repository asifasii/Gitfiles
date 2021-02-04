<!DOCTYPE html>
<html>
<head>
	<title>Customer Details</title>
</head>
<body>



<br><br>

<div >
&emsp;&emsp;
<?php echo $this->Html->link(__('Home'), ['action' => 'view']); ?></div><br>

<div class="container" style="border-style: outset;width: 50%;margin-left: 25%;margin-right: 25%; height: 500px;background-color: Gainsboro;">
 	
 		<table width="70%" style="font-size: 18px;margin-top: 10%;margin-left: auto;margin-right: auto;"cellspacing="25" >
 			<tr>
 				<td colspan="2" >
 					<label style="font-weight: bold;">Name     </td><td colspan="2">  :    </label>
 				</td>
 				<td colspan="5" >
 					<?php echo $Customer_data->Name; ?>
 				</td>
 			</tr>
 			<tr>
 				<td colspan="2" >
 					<label style="font-weight: bold;">Username     </td><td colspan="2">  :    </label>
 				</td>
 				<td colspan="5" >
 					<?php echo $Customer_data->username; ?>
 				</td>
 			</tr>
 			<tr>
 				<td colspan="2">
 					<label style="font-weight: bold;">Address     </td><td colspan="2">  :    </label>
 				</td>
 				<td colspan="5">
 					<?php echo $Customer_data->Address; ?>
 				</td>
 			</tr>
 			<tr>
 				<td colspan="2">
 					<label style="font-weight: bold;">Email id     </td><td colspan="2">  :    </label>
 				</td>
 				<td colspan="5">
 					<?php echo $Customer_data->Email; ?>
 				</td>
 			</tr>
 			<tr>
 				<td colspan="2">
 					<label style="font-weight: bold;">Contact No.     </td><td colspan="2">  :    </label>
 				</td>
 				<td colspan="5">
 					<?php echo $Customer_data->Phone; ?>
 				</td>
 			</tr>
 			<tr>
 				<td colspan="2">
 					&emsp;&emsp;
 				</td><td colspan="2"></td>
 				<td colspan="5" align="right">
 					
 				<?php	echo $this->Html->link(
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