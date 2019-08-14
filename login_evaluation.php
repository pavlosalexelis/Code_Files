<?php
$error ="";
$email="";
$key="";
$userId=0;

if(isset($_POST['submit']))
{
	$key= $_POST['key'];
	$email= $_POST['email'];
	
	if($email =='')
	{
		$error .= "<font size='4' color='#ff0000'>  * Please enter an email address.</font><br /><br />";
	}
	else if(!check_email_address($email))
	{
		$error .= "<font size='4' color='#ff0000'>  * Email address is incorrect.</font><br /><br />";
	}	
	if($key=='')
	{
		$error .= "<font size='4' color='#ff0000'>  * Please enter a login key.</font><br /><br />";
	}	
	if($error =='')
	{
		$IsLogin = checkLogin($email,$key);	
		
		if((isset($IsLogin['Login']) && $IsLogin['Login'])==true)
		{	
		$userId=$IsLogin['UserId'];						
		$submissions=checkSubmissions($userId);	
				
			if ($submissions == 0)					
			{
			header('Location: index.php?view=judges_voting');
			$_SESSION['email']=$IsLogin['email'];
			$_SESSION['main_user']=$IsLogin['UserId'];				
			}
			else
			{
			$error .= "<font size='4' color='#ff0000'>  * Only one Submission is allowed. You cannot log in again.</font><br/><br/>";	
			}				
		}
		else
		{
		$error .= "<font size='4' color='#ff0000'>  <b>* Wrong email and password combination</b></font><br/><br/><br/>";
		}		
	}
}
?>
<div id="site_content">	
<div id="content">
    <div class="content_item">
	<div id="main-wrapper">
		<div class="5grid-layout bg-highlight">
			<div class="row">
				<div class="12u mobileUI-main-content">																
<!-- Header -->
	<header>	
<div id="sidebar">		

</div>
	</header>																	
	<p></p>			
		
	<?php echo $error; ?>	
	
	<form method="POST" name="submit_form" id="submit_form" enctype="multipart/form-data" action='' >
	<div style="width:1200px; float:left;"><font size='5' color='#00008B'>LOGIN</font></div>

	<div style="width:1200px; float:left;"><p></p></div>			
	<div style="width:1200px; float:left;">	

	<div style="width:1200px; float:left;"><font size='4' color='#00008B'>Please use the email address and login key we sent to your email and click continue to start voting.</font></div>
	<div style="width:1200px; float:left;"><font size='4' color='#00008B'>Be careful ! The login key is unique and can be used only once.</font></div>
	<div style="width:1200px; float:left;"><p></p></div>

	<div style="width:160px; float:left;"><font size='4' color='#00008B'>Email Address</font></div>
	<div style="width:730px;"><p><input class="contact" type="text" name="email" style="width: 200px;" value="<?php echo $email; ?>"  /></p></div>
	<div style="width:160px; float:left;"><font size='4' color='#00008B'>Login key</font></div>
	<div style="width:730px;"><p><input class="contact" type="text" name="key" style="width: 200px;" value="<?php echo $key; ?>"  /></p></div>
	<div style="width:1200px; float:left;">
	<input type="submit" class="button" name="submit" id="submit" value=" CONTINUE TO VOTE ">			
	</form>
	</p>				
	</div>
	</div>
	</div>				
</div><!--close content_item-->
</div><!--close content-->  
</div>
</div>
</div>