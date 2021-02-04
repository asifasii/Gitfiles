<!DOCTYPE html>
<html>
<head>
	<title>Customer Details</title>
</head>
<body>


<?php if (isset($Customer_data)) {
	 ?>


<div >
	<div style="float: left;width: 70px;margin-left: 50px;margin-top:30px;">
&emsp;&emsp;
<?php echo $this->Html->link(__('Home'), ['action' => 'view']); ?></div><br>

<div class="container" style="border-style: outset;width: 50%;margin-top:30px; margin-left: 25%;margin-right: 25%; height: 650px;background-color: Gainsboro;">
 	<?php echo $this->Form->create(
 		 null,
  		[
  		  "url"=>["action"=>"update"],
   		 "class"=>"form-horizontal",
   		 "name"=>"updateform",
  		  "method"=>"POST"
  		]
		);
	 ?>
 
 		<table style="font-size: 18px;margin-top: 10%;margin-left: auto;margin-right: auto;background-color: Gainsboro;width: 75%;"cellspacing="25" > 			<tr>
 		<input type="hidden" name="id" value=" <?php echo $Customer_data->id; ?>">
 				<td colspan="2" >
 					<label style="font-weight: bold;">Name     </td><td >  :    </label>
 				</td>
 				<td colspan="4" >

 					<input style="width: 300px;" type="text" name="name" value="<?php echo $Customer_data->Name; ?>" >
 				</td>
 			</tr>
 			<tr>
 				<td colspan="2" >
 					<label style="font-weight: bold;">Username     </td><td>  :    </label>
 				</td>
 				<td colspan="4" >
 					<input  style="width: 300px;" type="text" name="uname" value="<?php echo $Customer_data->username; ?>" >
 				</td>
 			</tr>
 			<tr>
 				<td colspan="2">
 					<label style="font-weight: bold;">Email id     </td><td >  :    </label>
 				</td>
 				<td colspan="4">
 					<input style="width: 300px;" type="text" name="mail" value="<?php echo $Customer_data->Email; ?>">
 				</td>
 			</tr>
 			<tr>
 				<td colspan="2">
 					<label style="font-weight: bold;">Password     </td><td>  :    </label>
 				</td>
 				<td colspan="4">
 					<input style="width: 300px;" type="Password" name="psd" value="<?php echo $Customer_data->password; ?>">
 				</td>
 			</tr>
 			<tr>
 				<td colspan="2">
 					<label style="font-weight: bold;">Address     </td><td>  :    </label>
 				</td>
 				<td colspan="4">
 					<textarea rows="5" style="width: 300px;" name="address" value="<?php echo $Customer_data->Address; ?>"><?php echo $Customer_data->Address; ?></textarea>
 					
 				</td>
 			</tr>
 		
 			<tr>
 				<td colspan="2">
 					<label style="font-weight: bold;">Contact No.     </td><td >  :    </label>
 				</td>
 				<td colspan="4">
 					<input style="width: 300px;" type="text" name="ph" value="<?php echo $Customer_data->Phone; ?>">
 				</td>
 			</tr>
 			<tr>
 				<td colspan="2">
 				</td><td></td>
 				<td colspan="2">							
    				
 					 
    				<input type="image" alt="submit" <?php echo $this->Html->image('save_button.png',array( 'width' => '70')); ?>
   				
				</td>
				<td colspan="2">
 				<?php	echo $this->Html->link(
    				$this->Html->image('close_button.png',array( 'width' => '70','align'=> 'right')),
    					array(
        					'controller' => 'Customer', 
        						'action' => 'view'
   							 ), array('escape' => false)
    				);} ?>
 				</td>
 			</tr>

 		</table>
	</form>
</div>
</div>
</body>
</html>