<?php
	if($_POST['action']=="command"){
	 	$post = $DB->Request('post');
	 	if(substr(strtolower($post['command']),0,1)=="z"){ 
		  	$returnValue = "Sorted Lists is not supported yet.";
		}else{
		 	$returnValue = $DB->setCommand($post['command']);
		}
	}
?>
<?php $VARS['meta_title'] 	= "Command"; ?>
<?php $VARS['header'] 		= true; ?>
<?php $VARS['menu'] 		= true; ?>
<?php $ROUTER->getInclude('header'); ?>

<td id="content" valign="top">

	<?php $ROUTER->getInclude('submenu'); ?>
	
	<div class="left" style="margin: 10px 5px;">	
									
		<form action="" method="post">
		<input type="hidden" name="action" value="command" />
		<div id="widget">
			<h1>Type Command</h1>
			<table>
				<tr>
				<td><input type="text" name="command" style="width: 300px;" />&nbsp;<input type="submit" value="Execute" /></td>
				</tr>
			</table>		
			<div class="clear" style="margin: 4px;"></div>
		</div>
		</form>	

		<br />
		
		<?php if(!empty($returnValue)) {?>
		<div id="widget">
			<h1>Return value</h1>
			<table>
				<tr>
				<td><pre><?php echo $returnValue; ?></pre></td>
				</tr>
			</table>		
			<div class="clear" style="margin: 4px;"></div>
		</div>
		<?php } ?>
				
	</div>
	
	<div class="clear"></div>	
	
</td>

<?php $ROUTER->getInclude('footer'); ?>