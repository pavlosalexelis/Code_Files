<?php
ini_set( 'default_charset', 'UTF-8' );
mb_internal_encoding("UTF-8"); 
header('content-type: text/html; charset: utf-8'); 

require_once 'captcha/securimage.php';
$securimage = new Securimage();

$success="";
$error ="";
$error2='';
$success ="";
$Name="";
$Cell="";
$Email="";
$Address="";
$City="";
$Postcode="";
$Country="";
$Password="";

$IPAddress39="";
$IPAddress15="";
$Graduated=0;
$CreationDate="0000-00-00 00:00:00";
$LastLoginDate="0000-00-00 00:00:00";
$IsAdmin=0;

$UploadedDate="0000-00-00 00:00:00";
$LastUpdatedDate="0000-00-00 00:00:00";
$UploadedUserId=0;
$LastUpdatedUserId=0;

$ip="";
$count_of_votes=0;

$contestant_1=0;
$contestant_2=0;
$contestant_3=0;
$contestant_4=0;
$contestant_5=0;
$contestant_6=0;
$contestant_7=0;
$contestant_8=0;
$contestant_9=0;
$contestant_10=0;
$contestant_11=0;
$contestant_12=0;
$contestant_13=0;
$contestant_14=0;
$contestant_15=0;
$contestant_16=0;
$contestant_17=0;
$contestant_18=0;
$contestant_19=0;
$contestant_20=0;
$contestant_21=0;
$contestant_22=0;
$contestant_23=0;
$contestant_24=0;
$contestant_25=0;
$contestant_26=0;
$contestant_27=0;
$contestant_28=0;
$contestant_29=0;
$contestant_30=0;
$contestant_31=0;
$contestant_32=0;
$contestant_33=0;
$contestant_34=0;
$contestant_35=0;
$contestant_36=0;
$contestant_37=0;
$contestant_38=0;
$contestant_39=0;
$contestant_40=0;
$contestant_41=0;
$contestant_42=0;
$contestant_43=0;
$contestant_44=0;
$contestant_45=0;
$contestant_46=0;
$contestant_47=0;
$contestant_48=0;
$contestant_49=0;
$contestant_50=0;
$contestant_51=0;
$contestant_52=0;
$contestant_53=0;
$contestant_54=0;
$contestant_55=0;
$contestant_56=0;
$contestant_57=0;
$contestant_58=0;
$contestant_59=0;
$contestant_60=0;

$contestant_61=0;
$contestant_62=0;
$contestant_63=0;
$contestant_64=0;
$contestant_65=0;
$contestant_66=0;
$contestant_67=0;
$contestant_68=0;
$contestant_69=0;
$contestant_70=0;

if(isset($_SESSION['main_user']) && $_SESSION['main_user'] > 0)
{   
	$userId = $_SESSION['main_user'];
	$submissions=checkSubmissions($userId);
	
	if ($submissions > 0) 			
	{
		$error2 .= "<font size='4' color='#ff0000'> * Only one voting is allowed. You can’t vote again. </font><br />";
	}	
}
else
{
	//     header("location: index.php?view=contestpage");
}

if($error2 =='')
{

if (isset($_POST['submit']))
{	
$contestant_1=0;
$contestant_2=0;
$contestant_3=0;
$contestant_4=0;
$contestant_5=0;
$contestant_6=0;
$contestant_7=0;
$contestant_8=0;
$contestant_9=0;
$contestant_10=0;
$contestant_11=0;
$contestant_12=0;
$contestant_13=0;
$contestant_14=0;
$contestant_15=0;
$contestant_16=0;
$contestant_17=0;
$contestant_18=0;
$contestant_19=0;
$contestant_20=0;
$contestant_21=0;
$contestant_22=0;
$contestant_23=0;
$contestant_24=0;
$contestant_25=0;
$contestant_26=0;
$contestant_27=0;
$contestant_28=0;
$contestant_29=0;
$contestant_30=0;
$contestant_31=0;
$contestant_32=0;
$contestant_33=0;
$contestant_34=0;
$contestant_35=0;
$contestant_36=0;
$contestant_37=0;
$contestant_38=0;
$contestant_39=0;
$contestant_40=0;
$contestant_41=0;
$contestant_42=0;
$contestant_43=0;
$contestant_44=0;
$contestant_45=0;
$contestant_46=0;
$contestant_47=0;
$contestant_48=0;
$contestant_49=0;
$contestant_50=0;
$contestant_51=0;
$contestant_52=0;
$contestant_53=0;
$contestant_54=0;
$contestant_55=0;
$contestant_56=0;
$contestant_57=0;
$contestant_58=0;
$contestant_59=0;
$contestant_60=0;
$contestant_61=0;
$contestant_62=0;
$contestant_63=0;
$contestant_64=0;
$contestant_65=0;
$contestant_66=0;
$contestant_67=0;
$contestant_68=0;
$contestant_69=0;
$contestant_70=0;

		if(!empty($_POST['contestant_1'])){ $contestant_1 = $_POST['contestant_1']; }
		if(!empty($_POST['contestant_2'])){ $contestant_2 = $_POST['contestant_2']; }		
		if(!empty($_POST['contestant_3'])){ $contestant_3 = $_POST['contestant_3']; }
		if(!empty($_POST['contestant_4'])){ $contestant_4 = $_POST['contestant_4']; }
		if(!empty($_POST['contestant_5'])){ $contestant_5 = $_POST['contestant_5']; }
		if(!empty($_POST['contestant_6'])){ $contestant_6 = $_POST['contestant_6']; }		
		if(!empty($_POST['contestant_7'])){ $contestant_7 = $_POST['contestant_7']; }
		if(!empty($_POST['contestant_8'])){ $contestant_8 = $_POST['contestant_8']; }
		if(!empty($_POST['contestant_9'])){ $contestant_9 = $_POST['contestant_9']; }
		if(!empty($_POST['contestant_10'])){ $contestant_10 = $_POST['contestant_10']; }		

		if(!empty($_POST['contestant_11'])){ $contestant_11 = $_POST['contestant_11']; }
		if(!empty($_POST['contestant_12'])){ $contestant_12 = $_POST['contestant_12']; }		
		if(!empty($_POST['contestant_13'])){ $contestant_13 = $_POST['contestant_13']; }
		if(!empty($_POST['contestant_14'])){ $contestant_14 = $_POST['contestant_14']; }
		if(!empty($_POST['contestant_15'])){ $contestant_15 = $_POST['contestant_15']; }
		if(!empty($_POST['contestant_16'])){ $contestant_16 = $_POST['contestant_16']; }		
		if(!empty($_POST['contestant_17'])){ $contestant_17 = $_POST['contestant_17']; }
		if(!empty($_POST['contestant_18'])){ $contestant_18 = $_POST['contestant_18']; }
		if(!empty($_POST['contestant_19'])){ $contestant_19 = $_POST['contestant_19']; }
		if(!empty($_POST['contestant_20'])){ $contestant_20 = $_POST['contestant_20']; }				
		
		if(!empty($_POST['contestant_21'])){ $contestant_21 = $_POST['contestant_21']; }
		if(!empty($_POST['contestant_22'])){ $contestant_22 = $_POST['contestant_22']; }		
		if(!empty($_POST['contestant_23'])){ $contestant_23 = $_POST['contestant_23']; }
		if(!empty($_POST['contestant_24'])){ $contestant_24 = $_POST['contestant_24']; }
		if(!empty($_POST['contestant_25'])){ $contestant_25 = $_POST['contestant_25']; }
		if(!empty($_POST['contestant_26'])){ $contestant_26 = $_POST['contestant_26']; }		
		if(!empty($_POST['contestant_27'])){ $contestant_27 = $_POST['contestant_27']; }
		if(!empty($_POST['contestant_28'])){ $contestant_28 = $_POST['contestant_28']; }
		if(!empty($_POST['contestant_29'])){ $contestant_29 = $_POST['contestant_29']; }
		if(!empty($_POST['contestant_30'])){ $contestant_30 = $_POST['contestant_30']; }

		if(!empty($_POST['contestant_31'])){ $contestant_31 = $_POST['contestant_31']; }
		if(!empty($_POST['contestant_32'])){ $contestant_32 = $_POST['contestant_32']; }		
		if(!empty($_POST['contestant_33'])){ $contestant_33 = $_POST['contestant_33']; }
		if(!empty($_POST['contestant_34'])){ $contestant_34 = $_POST['contestant_34']; }
		if(!empty($_POST['contestant_35'])){ $contestant_35 = $_POST['contestant_35']; }
		if(!empty($_POST['contestant_36'])){ $contestant_36 = $_POST['contestant_36']; }		
		if(!empty($_POST['contestant_37'])){ $contestant_37 = $_POST['contestant_37']; }
		if(!empty($_POST['contestant_38'])){ $contestant_38 = $_POST['contestant_38']; }
		if(!empty($_POST['contestant_39'])){ $contestant_39 = $_POST['contestant_39']; }
		if(!empty($_POST['contestant_40'])){ $contestant_40 = $_POST['contestant_40']; }			
		
		if(!empty($_POST['contestant_41'])){ $contestant_41 = $_POST['contestant_41']; }
		if(!empty($_POST['contestant_42'])){ $contestant_42 = $_POST['contestant_42']; }		
		if(!empty($_POST['contestant_43'])){ $contestant_43 = $_POST['contestant_43']; }
		if(!empty($_POST['contestant_44'])){ $contestant_44 = $_POST['contestant_44']; }
		if(!empty($_POST['contestant_45'])){ $contestant_45 = $_POST['contestant_45']; }
		if(!empty($_POST['contestant_46'])){ $contestant_46 = $_POST['contestant_46']; }		
		if(!empty($_POST['contestant_47'])){ $contestant_47 = $_POST['contestant_47']; }
		if(!empty($_POST['contestant_48'])){ $contestant_48 = $_POST['contestant_48']; }
		if(!empty($_POST['contestant_49'])){ $contestant_49 = $_POST['contestant_49']; }
		if(!empty($_POST['contestant_50'])){ $contestant_50 = $_POST['contestant_50']; }				
		
		if(!empty($_POST['contestant_51'])){ $contestant_51 = $_POST['contestant_51']; }
		if(!empty($_POST['contestant_52'])){ $contestant_52 = $_POST['contestant_52']; }		
		if(!empty($_POST['contestant_53'])){ $contestant_53 = $_POST['contestant_53']; }
		if(!empty($_POST['contestant_54'])){ $contestant_54 = $_POST['contestant_54']; }
		if(!empty($_POST['contestant_55'])){ $contestant_55 = $_POST['contestant_55']; }
		if(!empty($_POST['contestant_56'])){ $contestant_56 = $_POST['contestant_56']; }		
		if(!empty($_POST['contestant_57'])){ $contestant_57 = $_POST['contestant_57']; }
		if(!empty($_POST['contestant_58'])){ $contestant_58 = $_POST['contestant_58']; }
		if(!empty($_POST['contestant_59'])){ $contestant_59 = $_POST['contestant_59']; }
		if(!empty($_POST['contestant_60'])){ $contestant_60 = $_POST['contestant_60']; }		
		
		if(!empty($_POST['contestant_61'])){ $contestant_61 = $_POST['contestant_61']; }
		if(!empty($_POST['contestant_62'])){ $contestant_62 = $_POST['contestant_62']; }		
		if(!empty($_POST['contestant_63'])){ $contestant_63 = $_POST['contestant_63']; }	
	
//<!--reCAPTCHA  -->
	    function post_captcha($user_response) {
        $fields_string = '';
        $fields = array(
            'secret' => '6LeZQFQUAAAAAPj4MUfZ504rtM9zrTApq4KggX4v',
            'response' => $user_response
        );
        foreach($fields as $key=>$value)
        $fields_string .= $key . '=' . $value . '&';
        $fields_string = rtrim($fields_string, '&');

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
        curl_setopt($ch, CURLOPT_POST, count($fields));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, True);

        $result = curl_exec($ch);
        curl_close($ch);
        return json_decode($result, true);
    }

    // Call the function post_captcha
    $res = post_captcha($_POST['g-recaptcha-response']);

    if (!$res['success']) {

		$error .= "<br /><font size='4' color='#ff0000'> * Please go back and make sure you check the security CAPTCHA box. * </font><br />";
    } else {

			
	$ip  = $_SERVER['REMOTE_ADDR'];	
	$IPAddress39  = $_SERVER['REMOTE_ADDR'];
	$IPAddress15  = $_SERVER['REMOTE_ADDR'];
	
	if (checkIPAddress($ip) == false)
	{	
		$ipdat = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));

		if(property_exists($ipdat, 'geoplugin_city')) 
		{
			$City = $ipdat->geoplugin_city;
		}
		if(property_exists($ipdat, 'geoplugin_countryName')) 
		{
			$Country = $ipdat->geoplugin_countryName;
		}

$userId="";			
$Name="";
$Cell="";
$Email="";
$Postcode="";
$Password="";
$Graduated=0;
$CreationDate="0000-00-00 00:00:00";
$LastLoginDate="0000-00-00 00:00:00";
$IsAdmin=0;
$UploadedDate="0000-00-00 00:00:00";
$LastUpdatedDate="0000-00-00 00:00:00";
$UploadedUserId=0;
$LastUpdatedUserId=0;

$contestant_1=0;
$contestant_2=0;
$contestant_3=0;
$contestant_4=0;
$contestant_5=0;
$contestant_6=0;
$contestant_7=0;
$contestant_8=0;
$contestant_9=0;
$contestant_10=0;
$contestant_11=0;
$contestant_12=0;
$contestant_13=0;
$contestant_14=0;
$contestant_15=0;
$contestant_16=0;
$contestant_17=0;
$contestant_18=0;
$contestant_19=0;
$contestant_20=0;
$contestant_21=0;
$contestant_22=0;
$contestant_23=0;
$contestant_24=0;
$contestant_25=0;
$contestant_26=0;
$contestant_27=0;
$contestant_28=0;
$contestant_29=0;
$contestant_30=0;
$contestant_31=0;
$contestant_32=0;
$contestant_33=0;
$contestant_34=0;
$contestant_35=0;
$contestant_36=0;
$contestant_37=0;
$contestant_38=0;
$contestant_39=0;
$contestant_40=0;
$contestant_41=0;
$contestant_42=0;
$contestant_43=0;
$contestant_44=0;
$contestant_45=0;
$contestant_46=0;
$contestant_47=0;
$contestant_48=0;
$contestant_49=0;
$contestant_50=0;
$contestant_51=0;
$contestant_52=0;
$contestant_53=0;
$contestant_54=0;
$contestant_55=0;
$contestant_56=0;
$contestant_57=0;
$contestant_58=0;
$contestant_59=0;
$contestant_60=0;
$contestant_61=0;
$contestant_62=0;
$contestant_63=0;
$contestant_64=0;
$contestant_65=0;
$contestant_66=0;
$contestant_67=0;
$contestant_68=0;
$contestant_69=0;
$contestant_70=0;

		if(!empty($_POST['contestant_1'])){ $contestant_1 = $_POST['contestant_1']; }
		if(!empty($_POST['contestant_2'])){ $contestant_2 = $_POST['contestant_2']; }		
		if(!empty($_POST['contestant_3'])){ $contestant_3 = $_POST['contestant_3']; }
		if(!empty($_POST['contestant_4'])){ $contestant_4 = $_POST['contestant_4']; }
		if(!empty($_POST['contestant_5'])){ $contestant_5 = $_POST['contestant_5']; }
		if(!empty($_POST['contestant_6'])){ $contestant_6 = $_POST['contestant_6']; }		
		if(!empty($_POST['contestant_7'])){ $contestant_7 = $_POST['contestant_7']; }
		if(!empty($_POST['contestant_8'])){ $contestant_8 = $_POST['contestant_8']; }
		if(!empty($_POST['contestant_9'])){ $contestant_9 = $_POST['contestant_9']; }
		if(!empty($_POST['contestant_10'])){ $contestant_10 = $_POST['contestant_10']; }		

		if(!empty($_POST['contestant_11'])){ $contestant_11 = $_POST['contestant_11']; }
		if(!empty($_POST['contestant_12'])){ $contestant_12 = $_POST['contestant_12']; }		
		if(!empty($_POST['contestant_13'])){ $contestant_13 = $_POST['contestant_13']; }
		if(!empty($_POST['contestant_14'])){ $contestant_14 = $_POST['contestant_14']; }
		if(!empty($_POST['contestant_15'])){ $contestant_15 = $_POST['contestant_15']; }
		if(!empty($_POST['contestant_16'])){ $contestant_16 = $_POST['contestant_16']; }		
		if(!empty($_POST['contestant_17'])){ $contestant_17 = $_POST['contestant_17']; }
		if(!empty($_POST['contestant_18'])){ $contestant_18 = $_POST['contestant_18']; }
		if(!empty($_POST['contestant_19'])){ $contestant_19 = $_POST['contestant_19']; }
		if(!empty($_POST['contestant_20'])){ $contestant_20 = $_POST['contestant_20']; }				
		
		if(!empty($_POST['contestant_21'])){ $contestant_21 = $_POST['contestant_21']; }
		if(!empty($_POST['contestant_22'])){ $contestant_22 = $_POST['contestant_22']; }		
		if(!empty($_POST['contestant_23'])){ $contestant_23 = $_POST['contestant_23']; }
		if(!empty($_POST['contestant_24'])){ $contestant_24 = $_POST['contestant_24']; }
		if(!empty($_POST['contestant_25'])){ $contestant_25 = $_POST['contestant_25']; }
		if(!empty($_POST['contestant_26'])){ $contestant_26 = $_POST['contestant_26']; }		
		if(!empty($_POST['contestant_27'])){ $contestant_27 = $_POST['contestant_27']; }
		if(!empty($_POST['contestant_28'])){ $contestant_28 = $_POST['contestant_28']; }
		if(!empty($_POST['contestant_29'])){ $contestant_29 = $_POST['contestant_29']; }
		if(!empty($_POST['contestant_30'])){ $contestant_30 = $_POST['contestant_30']; }

		if(!empty($_POST['contestant_31'])){ $contestant_31 = $_POST['contestant_31']; }
		if(!empty($_POST['contestant_32'])){ $contestant_32 = $_POST['contestant_32']; }		
		if(!empty($_POST['contestant_33'])){ $contestant_33 = $_POST['contestant_33']; }
		if(!empty($_POST['contestant_34'])){ $contestant_34 = $_POST['contestant_34']; }
		if(!empty($_POST['contestant_35'])){ $contestant_35 = $_POST['contestant_35']; }
		if(!empty($_POST['contestant_36'])){ $contestant_36 = $_POST['contestant_36']; }		
		if(!empty($_POST['contestant_37'])){ $contestant_37 = $_POST['contestant_37']; }
		if(!empty($_POST['contestant_38'])){ $contestant_38 = $_POST['contestant_38']; }
		if(!empty($_POST['contestant_39'])){ $contestant_39 = $_POST['contestant_39']; }
		if(!empty($_POST['contestant_40'])){ $contestant_40 = $_POST['contestant_40']; }					
		
		if(!empty($_POST['contestant_41'])){ $contestant_41 = $_POST['contestant_41']; }
		if(!empty($_POST['contestant_42'])){ $contestant_42 = $_POST['contestant_42']; }		
		if(!empty($_POST['contestant_43'])){ $contestant_43 = $_POST['contestant_43']; }
		if(!empty($_POST['contestant_44'])){ $contestant_44 = $_POST['contestant_44']; }
		if(!empty($_POST['contestant_45'])){ $contestant_45 = $_POST['contestant_45']; }
		if(!empty($_POST['contestant_46'])){ $contestant_46 = $_POST['contestant_46']; }		
		if(!empty($_POST['contestant_47'])){ $contestant_47 = $_POST['contestant_47']; }
		if(!empty($_POST['contestant_48'])){ $contestant_48 = $_POST['contestant_48']; }
		if(!empty($_POST['contestant_49'])){ $contestant_49 = $_POST['contestant_49']; }
		if(!empty($_POST['contestant_50'])){ $contestant_50 = $_POST['contestant_50']; }				
		
		if(!empty($_POST['contestant_51'])){ $contestant_51 = $_POST['contestant_51']; }
		if(!empty($_POST['contestant_52'])){ $contestant_52 = $_POST['contestant_52']; }		
		if(!empty($_POST['contestant_53'])){ $contestant_53 = $_POST['contestant_53']; }
		if(!empty($_POST['contestant_54'])){ $contestant_54 = $_POST['contestant_54']; }
		if(!empty($_POST['contestant_55'])){ $contestant_55 = $_POST['contestant_55']; }
		if(!empty($_POST['contestant_56'])){ $contestant_56 = $_POST['contestant_56']; }		
		if(!empty($_POST['contestant_57'])){ $contestant_57 = $_POST['contestant_57']; }
		if(!empty($_POST['contestant_58'])){ $contestant_58 = $_POST['contestant_58']; }
		if(!empty($_POST['contestant_59'])){ $contestant_59 = $_POST['contestant_59']; }
		if(!empty($_POST['contestant_60'])){ $contestant_60 = $_POST['contestant_60']; }		
		
		if(!empty($_POST['contestant_61'])){ $contestant_61 = $_POST['contestant_61']; }
		if(!empty($_POST['contestant_62'])){ $contestant_62 = $_POST['contestant_62']; }		
		if(!empty($_POST['contestant_63'])){ $contestant_63 = $_POST['contestant_63']; }			
		
			
		$count_of_votes = count_of_70_votes($contestant_1, $contestant_2, $contestant_3, $contestant_4, $contestant_5, $contestant_6, $contestant_7, $contestant_8, $contestant_9, $contestant_10, 
			$contestant_11, $contestant_12, $contestant_13, $contestant_14, $contestant_15, $contestant_16, $contestant_17, $contestant_18, $contestant_19, $contestant_20, 
			$contestant_21, $contestant_22, $contestant_23, $contestant_24, $contestant_25, $contestant_26, $contestant_27, $contestant_28, $contestant_29, $contestant_30, 
			$contestant_31, $contestant_32, $contestant_33, $contestant_34, $contestant_35, $contestant_36, $contestant_37, $contestant_38, $contestant_39, $contestant_40, 
			$contestant_41, $contestant_42, $contestant_43, $contestant_44, $contestant_45, $contestant_46, $contestant_47, $contestant_48, $contestant_49, $contestant_50, 
			$contestant_51, $contestant_52, $contestant_53, $contestant_54, $contestant_55, $contestant_56, $contestant_57, $contestant_58, $contestant_59, $contestant_60, 
			$contestant_61, $contestant_62, $contestant_63, $contestant_64, $contestant_65, $contestant_66, $contestant_67, $contestant_68, $contestant_69, $contestant_70);
	
		if ($count_of_votes < 10 || $count_of_votes > 10)
		{
			$error .= "<br /><font size='5' color='#ff0000'> * You gave $count_of_votes votes. Please rate just 10 entries * </font><br />";
		}
		
		if ($count_of_votes == 10 && $error =='')
		{	
						
			createUserWithIP_70($userId,$Name,$Email,$Cell,$Address,$City,$Postcode,$Country,$Password,$IPAddress39,$IPAddress15,
			
			$contestant_1, $contestant_2, $contestant_3, $contestant_4, $contestant_5, $contestant_6, $contestant_7, $contestant_8, $contestant_9, $contestant_10, 
			$contestant_11, $contestant_12, $contestant_13, $contestant_14, $contestant_15, $contestant_16, $contestant_17, $contestant_18, $contestant_19, $contestant_20, 
			$contestant_21, $contestant_22, $contestant_23, $contestant_24, $contestant_25, $contestant_26, $contestant_27, $contestant_28, $contestant_29, $contestant_30, 
			$contestant_31, $contestant_32, $contestant_33, $contestant_34, $contestant_35, $contestant_36, $contestant_37, $contestant_38, $contestant_39, $contestant_40, 
			$contestant_41, $contestant_42, $contestant_43, $contestant_44, $contestant_45, $contestant_46, $contestant_47, $contestant_48, $contestant_49, $contestant_50, 
			$contestant_51, $contestant_52, $contestant_53, $contestant_54, $contestant_55, $contestant_56, $contestant_57, $contestant_58, $contestant_59, $contestant_60, 
			$contestant_61, $contestant_62, $contestant_63, $contestant_64, $contestant_65, $contestant_66, $contestant_67, $contestant_68, $contestant_69, $contestant_70, 			  
			
			$UploadedDate, $UploadedUserId);
			
						
			$success = "<font size='5' color='#00008B'> * Thank you for your participation to this voting! <br /><br /> </font><br />";
						
			// email to administrator
			$email="--";
			$subject="New Voting";
			$webroot = getenv("DOCUMENT_ROOT");
			$emailContent ="New Voter came With IP :,  $IPAddress15, City :,  $City, Country :,  $Country";			
			$mail = smtpmailer();
			$mail->Body = $emailContent;
			$mail->Subject = $subject;	
			$mail->AddAddress($email);
			$mail->CharSet="UTF-8";	
	
		    $subject = '=?utf-8?b?' . base64_encode('International ') . '?=';
		    $message = $emailContent;

		    $headers  = 'MIME-Version: 1.0' . "\r\n";
		    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
		    $headers .= 'From:  contest@---' . "\r\n";											
		}
	}

	else if (checkIPAddress($ip) == true)
	{
		$error .= "<font size='4' color='#ff0000'> * This computer has been registered as being used in the voting. *<br />* You may not vote using this computer. *</font><br />";
	}

	}	
}
if($error != '')
{
	$error .= '<br />';
}
if($error2 != '')
{
	$error2 .= '<br />';
}

}

?>

<div id="site_content">	
<div id="content">
<div class="content_item">	
	<!-- Main -->
	<div id="main-wrapper">
		<div class="5grid-layout bg-highlight">
			<div class="row">
				<div class="12u mobileUI-main-content">																
<!-- Header -->
	<header>	
<div id="sidebar">		

</div>
	</header>															
				
	<?php if($success == '')
	{

	?>
	<?php echo $error; ?>					
				
<form method="POST" name="submit_form" id="submit_form" enctype="multipart/form-data" action='' >

<script src='https://www.google.com/recaptcha/api.js'></script>

<script>
function newPopup(url) {
    popupWindow = window.open(
        url,'popUpWindow','height=700,width=679,left=10,top=10,resizable=yes,scrollbars=no,toolbar=no,menubar=no,location=no,directories=no,status=yes')
}
</script>

<!--  External or Last Table -->
<div style="width:858px; float:left;"><p></p>		
<table border='1' max-width='858' cellspacing='0' cellpadding='0' align="left" bordercolor="#707a7f">
<tr style="position: left;">
<td>
	<table  summary='table' style="height: 512px">
<!--  External or Last Table -->

<table border='1' width='856' cellspacing='0' cellpadding='0' bordercolor="#707a7f">
<tr>
<td>
<table  summary='table' style="width: 807px"> 
   <thead id="start">
    <tr>
		<th width='200' style="height: 40px"><div style="float:right;"><font size='3' color='#00008B'></font></div></th>   
		<th width='350' style="height: 40px"><div style="float:left;"><font size='6' color='#00008B'>VOTING PAGE</font></div></th> 
	</tr>
  </thead> 		
</table>
</td>
</tr>
</table>

</br>
<!--<div style="width:856px; float:left;"><p></p>	-->
<div style="width:856px; float:left;"><font size='4' color='#00008B'>Click twice to enlarge each icon to the maximum. 
On this voting page each contest icon is presented in a separate box. 
On contestant box, you can see one icon presented on the same wall. 
This helps you understand the size of each icon. 
By selecting the red PDF icon opens the contestant text. 
By selecting the center switch above each icon, the switch turns blue and the icon is automatically voted. 
Please rate just 10 entries counting the icon presented per contestant.
Before you select the Finish Voting button make sure you check the security CAPTCHA box.</font></div>
</br>
</br>
<div style="width:856px; float:left;"><font size='4' color='#00008B'>
</font></div>
<div style="width:856px; float:left;"><p></p>	
<table border='1' max-width='856' cellspacing='0' cellpadding='0' align="left" bordercolor="#707a7f">
<tr style="position: left;">
<td>
	<table  summary='table' style="height: 610px">

		<thead id="start">
		<tr>
			<th width='855' style="height: 56px"><div style="float:center;">		
			<font size='5' color='#00008B'> Contestant 1</font> 			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 16px"><div style="float:center;">		
			<font size='4' color='#00008B'> Icon's dimensions (width x height) [ 30 cm x 40 cm]. </font> 
			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 36px"><div style="float:center;">		
			<font size='4' color='#00008B'>I do not choose it &nbsp;&nbsp;&nbsp; </font>
			<label class="switch"> <input type="checkbox" name="contestant_1" <?php if (isset($contestant_1) && $contestant_1=="1") echo "checked";?> value="1"> 
			<span class="slider round">	</span> </label> 
						
			<font size='4' color='#00008B'>&nbsp;&nbsp; I choose this icon</font>	</div></th>				
		</tr>
		</thead> 	
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 411px"><div style="float:center;"><a href="javascript:void(0);" onClick="newPopup('Images_/01_.jpg');">
			<img id="captcha" src="Images_/01.jpg" width="600" height="580" alt="Image" /></a></div></th>		
		</tr>
		</thead>
		
	</table>		
</td>
</tr>
</table>
</div>	




<div style="width:856px; float:left;"><p></p>		
<table border='1' max-width='856' cellspacing='0' cellpadding='0' align="left" bordercolor="#707a7f">
<tr style="position: left;">
<td>
	<table  summary='table' style="height: 610px">

		<thead id="start">
		<tr>
			<th width='855' style="height: 56px"><div style="float:center;">		
			<font size='5' color='#00008B'> Contestant 2</font> 			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 16px"><div style="float:center;">		
			<font size='4' color='#00008B'> Icon's dimensions (width x height) [ 43 cm x 60 cm ]. </font> 			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 36px"><div style="float:center;">		
			<font size='4' color='#00008B'>I do not choose it &nbsp;&nbsp;&nbsp; </font>
			<label class="switch"> <input type="checkbox" name="contestant_2" <?php if (isset($contestant_2) && $contestant_2=="1") echo "checked";?> value="1"> 
			<span class="slider round">	</span> </label> <font size='4' color='#00008B'>&nbsp;&nbsp;&nbsp; I choose this icon</font>	</div></th>				
		</tr>
		</thead> 	
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 411px"><div style="float:center;"><a href="javascript:void(0);" onClick="newPopup('Images_/02_.jpg');">
			<img id="captcha" src="Images_/02.jpg" width="600" height="580" alt="Image" /></a></div></th>		
		</tr>
		</thead>
				
	</table>		
</td>
</tr>
</table>
</div>	

<div style="width:856px; float:left;"><p></p>		
<table border='1' max-width='856' cellspacing='0' cellpadding='0' align="left" bordercolor="#707a7f">
<tr style="position: left;">
<td>
	<table  summary='table' style="height: 610px">

		<thead id="start">
		<tr>
			<th width='855' style="height: 56px"><div style="float:center;">		
			<font size='5' color='#00008B'> Contestant 3</font> 			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 16px"><div style="float:center;">		
			<font size='4' color='#00008B'> Icon's dimensions (width x height) [ 38 cm x 50 cm]. </font> 			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 36px"><div style="float:center;">		
			<font size='4' color='#00008B'>I do not choose it &nbsp;&nbsp;&nbsp; </font>
			<label class="switch"> <input type="checkbox" name="contestant_3" <?php if (isset($contestant_3) && $contestant_3=="1") echo "checked";?> value="1"> 
			<span class="slider round">	</span> </label> 
					
			<font size='4' color='#00008B'>&nbsp;&nbsp; I choose this icon</font>	</div></th>				
		</tr>
		</thead> 	
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 411px"><div style="float:center;"><a href="javascript:void(0);" onClick="newPopup('Images_/03_.jpg');">
			<img id="captcha" src="Images_/03.jpg" width="600" height="580" alt="Image" /></a></div></th>		
		</tr>
		</thead>
		
	</table>		
</td>
</tr>
</table>
</div>	




<div style="width:856px; float:left;"><p></p>		
<table border='1' max-width='856' cellspacing='0' cellpadding='0' align="left" bordercolor="#707a7f">
<tr style="position: left;">
<td>
	<table  summary='table' style="height: 610px">

		<thead id="start">
		<tr>
			<th width='855' style="height: 56px"><div style="float:center;">		
			<font size='5' color='#00008B'> Contestant 4</font> 			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 16px"><div style="float:center;">		
			<font size='4' color='#00008B'> Icon's dimensions (width x height) [ 41 cm x 32 cm]. </font> 
			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 36px"><div style="float:center;">		
			<font size='4' color='#00008B'>I do not choose it &nbsp;&nbsp;&nbsp; </font>
			<label class="switch"> <input type="checkbox" name="contestant_4" <?php if (isset($contestant_4) && $contestant_4=="1") echo "checked";?> value="1"> 
			<span class="slider round">	</span> </label> <font size='4' color='#00008B'>&nbsp;&nbsp;&nbsp; I choose this icon</font>	</div></th>				
		</tr>
		</thead> 	
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 411px"><div style="float:center;"><a href="javascript:void(0);" onClick="newPopup('Images_/04_.jpg');">
			<img id="captcha" src="Images_/04.jpg" width="600" height="580" alt="Image" /></a></div></th>		
		</tr>
		</thead>
				
	</table>		
</td>
</tr>
</table>
</div>	

<div style="width:856px; float:left;"><p></p>		
<table border='1' max-width='856' cellspacing='0' cellpadding='0' align="left" bordercolor="#707a7f">
<tr style="position: left;">
<td>
	<table  summary='table' style="height: 610px">

		<thead id="start">
		<tr>
			<th width='855' style="height: 56px"><div style="float:center;">		
			<font size='5' color='#00008B'> Contestant 5</font> 			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 16px"><div style="float:center;">		
			<font size='4' color='#00008B'> Icon's dimensions (width x height) [ 60 cm x 60 cm]. </font> 
			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 36px"><div style="float:center;">		
			<font size='4' color='#00008B'>I do not choose it &nbsp;&nbsp;&nbsp; </font>
			<label class="switch"> <input type="checkbox" name="contestant_5" <?php if (isset($contestant_5) && $contestant_5=="1") echo "checked";?> value="1"> 
			<span class="slider round">	</span> </label> 
						
			<font size='4' color='#00008B'>&nbsp;&nbsp; I choose this icon</font>	</div></th>				
		</tr>
		</thead> 	
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 411px"><div style="float:center;"><a href="javascript:void(0);" onClick="newPopup('Images_/05_.jpg');">
			<img id="captcha" src="Images_/05.jpg" width="600" height="580" alt="Image" /></a></div></th>		
		</tr>
		</thead>
		
	</table>		
</td>
</tr>
</table>
</div>	




<div style="width:856px; float:left;"><p></p>		
<table border='1' max-width='856' cellspacing='0' cellpadding='0' align="left" bordercolor="#707a7f">
<tr style="position: left;">
<td>
	<table  summary='table' style="height: 610px">

		<thead id="start">
		<tr>
			<th width='855' style="height: 56px"><div style="float:center;">		
			<font size='5' color='#00008B'> Contestant 6</font> 			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 16px"><div style="float:center;">		
			<font size='4' color='#00008B'> Icon's dimensions (width x height) [ 22 cm x 30 cm]. </font> 
		
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 36px"><div style="float:center;">		
			<font size='4' color='#00008B'>I do not choose it &nbsp;&nbsp;&nbsp; </font>
			<label class="switch"> <input type="checkbox" name="contestant_6" <?php if (isset($contestant_6) && $contestant_6=="1") echo "checked";?> value="1"> 
			<span class="slider round">	</span> </label> <font size='4' color='#00008B'>&nbsp;&nbsp;&nbsp; I choose this icon</font>	</div></th>				
		</tr>
		</thead> 	
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 411px"><div style="float:center;"><a href="javascript:void(0);" onClick="newPopup('Images_/06_.jpg');">
			<img id="captcha" src="Images_/06.jpg" width="600" height="580" alt="Image" /></a></div></th>		
		</tr>
		</thead>
				
	</table>		
</td>
</tr>
</table>
</div>	

<div style="width:856px; float:left;"><p></p>		
<table border='1' max-width='856' cellspacing='0' cellpadding='0' align="left" bordercolor="#707a7f">
<tr style="position: left;">
<td>
	<table  summary='table' style="height: 610px">

		<thead id="start">
		<tr>
			<th width='855' style="height: 56px"><div style="float:center;">		
			<font size='5' color='#00008B'> Contestant 7</font> 			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 16px"><div style="float:center;">		
			<font size='4' color='#00008B'> Icon's dimensions (width x height) [ 68 cm x 86 cm]. </font> 
			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 36px"><div style="float:center;">		
			<font size='4' color='#00008B'>I do not choose it &nbsp;&nbsp;&nbsp; </font>
			<label class="switch"> <input type="checkbox" name="contestant_7" <?php if (isset($contestant_7) && $contestant_7=="1") echo "checked";?> value="1"> 
			<span class="slider round">	</span> </label> 
						
			<font size='4' color='#00008B'>&nbsp;&nbsp; I choose this icon</font>	</div></th>				
		</tr>
		</thead> 	
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 411px"><div style="float:center;"><a href="javascript:void(0);" onClick="newPopup('Images_/07_.jpg');">
			<img id="captcha" src="Images_/07.jpg" width="600" height="580" alt="Image" /></a></div></th>		
		</tr>
		</thead>
		
	</table>		
</td>
</tr>
</table>
</div>	


<div style="width:856px; float:left;"><p></p>		
<table border='1' max-width='856' cellspacing='0' cellpadding='0' align="left" bordercolor="#707a7f">
<tr style="position: left;">
<td>
	<table  summary='table' style="height: 610px">

		<thead id="start">
		<tr>
			<th width='855' style="height: 56px"><div style="float:center;">		
			<font size='5' color='#00008B'> Contestant 8</font> 			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 16px"><div style="float:center;">		
			<font size='4' color='#00008B'> Icon's dimensions (width x height) [ 45 cm x 60 cm]. </font> 
			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 36px"><div style="float:center;">		
			<font size='4' color='#00008B'>I do not choose it &nbsp;&nbsp;&nbsp; </font>
			<label class="switch"> <input type="checkbox" name="contestant_8" <?php if (isset($contestant_8) && $contestant_8=="1") echo "checked";?> value="1"> 
			<span class="slider round">	</span> </label> <font size='4' color='#00008B'>&nbsp;&nbsp;&nbsp; I choose this icon</font>	</div></th>				
		</tr>
		</thead> 	
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 411px"><div style="float:center;"><a href="javascript:void(0);" onClick="newPopup('Images_/08_.jpg');">
			<img id="captcha" src="Images_/08.jpg" width="600" height="580" alt="Image" /></a></div></th>		
		</tr>
		</thead>
				
	</table>		
</td>
</tr>
</table>
</div>	







<div style="width:856px; float:left;"><p></p>		
<table border='1' max-width='856' cellspacing='0' cellpadding='0' align="left" bordercolor="#707a7f">
<tr style="position: left;">
<td>
	<table  summary='table' style="height: 610px">

		<thead id="start">
		<tr>
			<th width='855' style="height: 56px"><div style="float:center;">		
			<font size='5' color='#00008B'> Contestant 9</font> 			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 16px"><div style="float:center;">		
			<font size='4' color='#00008B'> Icon's dimensions (width x height) [ 29,5 cm x 40 cm ]. </font> 
			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 36px"><div style="float:center;">		
			<font size='4' color='#00008B'>I do not choose it &nbsp;&nbsp;&nbsp; </font>
			<label class="switch"> <input type="checkbox" name="contestant_9" <?php if (isset($contestant_9) && $contestant_9=="1") echo "checked";?> value="1"> 
			<span class="slider round">	</span> </label> 
			
			<font size='4' color='#00008B'>&nbsp;&nbsp; I choose this icon</font>	</div></th>				
		</tr>
		</thead> 	
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 411px"><div style="float:center;"><a href="javascript:void(0);" onClick="newPopup('Images_/09_.jpg');">
			<img id="captcha" src="Images_/09.jpg" width="600" height="580" alt="Image" /></a></div></th>		
		</tr>
		</thead>
		
	</table>		
</td>
</tr>
</table>
</div>	




<div style="width:856px; float:left;"><p></p>		
<table border='1' max-width='856' cellspacing='0' cellpadding='0' align="left" bordercolor="#707a7f">
<tr style="position: left;">
<td>
	<table  summary='table' style="height: 610px">

		<thead id="start">
		<tr>
			<th width='855' style="height: 56px"><div style="float:center;">		
			<font size='5' color='#00008B'> Contestant 10</font> 			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 16px"><div style="float:center;">		
			<font size='4' color='#00008B'> Icon's dimensions (width x height) [ 38 cm x 90 cm ]. </font> 
			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 36px"><div style="float:center;">		
			<font size='4' color='#00008B'>I do not choose it &nbsp;&nbsp;&nbsp; </font>
			<label class="switch"> <input type="checkbox" name="contestant_10" <?php if (isset($contestant_10) && $contestant_10=="1") echo "checked";?> value="1"> 
			<span class="slider round">	</span> </label> <font size='4' color='#00008B'>&nbsp;&nbsp;&nbsp; I choose this icon</font>	</div></th>				
		</tr>
		</thead> 	
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 411px"><div style="float:center;"><a href="javascript:void(0);" onClick="newPopup('Images_/10_.jpg');">
			<img id="captcha" src="Images_/10.jpg" width="600" height="580" alt="Image" /></a></div></th>		
		</tr>
		</thead>
				
	</table>		
</td>
</tr>
</table>
</div>	



<div style="width:856px; float:left;"><p></p>		
<table border='1' max-width='856' cellspacing='0' cellpadding='0' align="left" bordercolor="#707a7f">
<tr style="position: left;">
<td>
	<table  summary='table' style="height: 610px">

		<thead id="start">
		<tr>
			<th width='855' style="height: 56px"><div style="float:center;">		
			<font size='5' color='#00008B'> Contestant 11</font> 			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 16px"><div style="float:center;">		
			<font size='4' color='#00008B'> Icon's dimensions (width x height) [ 55 cm x 46,5 cm]. </font> 
			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 36px"><div style="float:center;">		
			<font size='4' color='#00008B'>I do not choose it &nbsp;&nbsp;&nbsp; </font>
			<label class="switch"> <input type="checkbox" name="contestant_11" <?php if (isset($contestant_11) && $contestant_11=="1") echo "checked";?> value="1"> 
			<span class="slider round">	</span> </label> 
						
			<font size='4' color='#00008B'>&nbsp;&nbsp; I choose this icon</font>	</div></th>				
		</tr>
		</thead> 	
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 411px"><div style="float:center;"><a href="javascript:void(0);" onClick="newPopup('Images_/11_.jpg');">
			<img id="captcha" src="Images_/11.jpg" width="600" height="580" alt="Image" /></a></div></th>		
		</tr>
		</thead>
		
	</table>		
</td>
</tr>
</table>
</div>	




<div style="width:856px; float:left;"><p></p>		
<table border='1' max-width='856' cellspacing='0' cellpadding='0' align="left" bordercolor="#707a7f">
<tr style="position: left;">
<td>
	<table  summary='table' style="height: 610px">

		<thead id="start">
		<tr>
			<th width='855' style="height: 56px"><div style="float:center;">		
			<font size='5' color='#00008B'> Contestant 12</font> 			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 16px"><div style="float:center;">		
			<font size='4' color='#00008B'> Icon's dimensions (width x height) [ 60 cm x 54.5 cm ]. </font> 
			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 36px"><div style="float:center;">		
			<font size='4' color='#00008B'>I do not choose it &nbsp;&nbsp;&nbsp; </font>
			<label class="switch"> <input type="checkbox" name="contestant_12" <?php if (isset($contestant_12) && $contestant_12=="1") echo "checked";?> value="1"> 
			<span class="slider round">	</span> </label> <font size='4' color='#00008B'>&nbsp;&nbsp;&nbsp; I choose this icon</font>	</div></th>				
		</tr>
		</thead> 	
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 411px"><div style="float:center;"><a href="javascript:void(0);" onClick="newPopup('Images_/12_.jpg');">
			<img id="captcha" src="Images_/12.jpg" width="600" height="580" alt="Image" /></a></div></th>		
		</tr>
		</thead>
				
	</table>		
</td>
</tr>
</table>
</div>	

<div style="width:856px; float:left;"><p></p>		
<table border='1' max-width='856' cellspacing='0' cellpadding='0' align="left" bordercolor="#707a7f">
<tr style="position: left;">
<td>
	<table  summary='table' style="height: 610px">

		<thead id="start">
		<tr>
			<th width='855' style="height: 56px"><div style="float:center;">		
			<font size='5' color='#00008B'> Contestant 13</font> 			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 16px"><div style="float:center;">		
			<font size='4' color='#00008B'> Icon's dimensions (width x height) [ 50 cm x 40 cm]. </font> 
			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 36px"><div style="float:center;">		
			<font size='4' color='#00008B'>I do not choose it &nbsp;&nbsp;&nbsp; </font>
			<label class="switch"> <input type="checkbox" name="contestant_13" <?php if (isset($contestant_13) && $contestant_13=="1") echo "checked";?> value="1"> 
			<span class="slider round">	</span> </label> 
						
			<font size='4' color='#00008B'>&nbsp;&nbsp; I choose this icon</font>	</div></th>				
		</tr>
		</thead> 	
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 411px"><div style="float:center;"><a href="javascript:void(0);" onClick="newPopup('Images_/13_.jpg');">
			<img id="captcha" src="Images_/13.jpg" width="600" height="580" alt="Image" /></a></div></th>		
		</tr>
		</thead>
		
	</table>		
</td>
</tr>
</table>
</div>	




<div style="width:856px; float:left;"><p></p>		
<table border='1' max-width='856' cellspacing='0' cellpadding='0' align="left" bordercolor="#707a7f">
<tr style="position: left;">
<td>
	<table  summary='table' style="height: 610px">

		<thead id="start">
		<tr>
			<th width='855' style="height: 56px"><div style="float:center;">		
			<font size='5' color='#00008B'> Contestant 14</font> 			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 16px"><div style="float:center;">		
			<font size='4' color='#00008B'> Icon's dimensions (width x height) [ 70 cm x 90 cm]. </font> 
		
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 36px"><div style="float:center;">		
			<font size='4' color='#00008B'>I do not choose it &nbsp;&nbsp;&nbsp; </font>
			<label class="switch"> <input type="checkbox" name="contestant_14" <?php if (isset($contestant_14) && $contestant_14=="1") echo "checked";?> value="1"> 
			<span class="slider round">	</span> </label> <font size='4' color='#00008B'>&nbsp;&nbsp;&nbsp; I choose this icon</font>	</div></th>				
		</tr>
		</thead> 	
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 411px"><div style="float:center;"><a href="javascript:void(0);" onClick="newPopup('Images_/14_.jpg');">
			<img id="captcha" src="Images_/14.jpg" width="600" height="580" alt="Image" /></a></div></th>		
		</tr>
		</thead>
				
	</table>		
</td>
</tr>
</table>
</div>	

<div style="width:856px; float:left;"><p></p>		
<table border='1' max-width='856' cellspacing='0' cellpadding='0' align="left" bordercolor="#707a7f">
<tr style="position: left;">
<td>
	<table  summary='table' style="height: 610px">

		<thead id="start">
		<tr>
			<th width='855' style="height: 56px"><div style="float:center;">		
			<font size='5' color='#00008B'> Contestant 15</font> 			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 16px"><div style="float:center;">		
			<font size='4' color='#00008B'> Icon's dimensions (width x height) [ 26 cm x 36 cm]. </font> 

		
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 36px"><div style="float:center;">		
			<font size='4' color='#00008B'>I do not choose it &nbsp;&nbsp;&nbsp; </font>
			<label class="switch"> <input type="checkbox" name="contestant_15" <?php if (isset($contestant_15) && $contestant_15=="1") echo "checked";?> value="1"> 
			<span class="slider round">	</span> </label> 
			
		
			<font size='4' color='#00008B'>&nbsp;&nbsp; I choose this icon</font>	</div></th>				
		</tr>
		</thead> 	
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 411px"><div style="float:center;"><a href="javascript:void(0);" onClick="newPopup('Images_/15_.jpg');">
			<img id="captcha" src="Images_/15.jpg" width="600" height="580" alt="Image" /></a></div></th>		
		</tr>
		</thead>
		
	</table>		
</td>
</tr>
</table>
</div>	




<div style="width:856px; float:left;"><p></p>		
<table border='1' max-width='856' cellspacing='0' cellpadding='0' align="left" bordercolor="#707a7f">
<tr style="position: left;">
<td>
	<table  summary='table' style="height: 610px">

		<thead id="start">
		<tr>
			<th width='855' style="height: 56px"><div style="float:center;">		
			<font size='5' color='#00008B'> Contestant 16</font> 			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 16px"><div style="float:center;">		
			<font size='4' color='#00008B'> Icon's dimensions (width x height) [ 31 cm x 41 cm]. </font> 
			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 36px"><div style="float:center;">		
			<font size='4' color='#00008B'>I do not choose it &nbsp;&nbsp;&nbsp; </font>
			<label class="switch"> <input type="checkbox" name="contestant_16" <?php if (isset($contestant_16) && $contestant_16=="1") echo "checked";?> value="1"> 
			<span class="slider round">	</span> </label> <font size='4' color='#00008B'>&nbsp;&nbsp;&nbsp; I choose this icon</font>	</div></th>				
		</tr>
		</thead> 	
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 411px"><div style="float:center;"><a href="javascript:void(0);" onClick="newPopup('Images_/16_.jpg');">
			<img id="captcha" src="Images_/16.jpg" width="600" height="580" alt="Image" /></a></div></th>		
		</tr>
		</thead>
				
	</table>		
</td>
</tr>
</table>
</div>	

<div style="width:856px; float:left;"><p></p>		
<table border='1' max-width='856' cellspacing='0' cellpadding='0' align="left" bordercolor="#707a7f">
<tr style="position: left;">
<td>
	<table  summary='table' style="height: 610px">

		<thead id="start">
		<tr>
			<th width='855' style="height: 56px"><div style="float:center;">		
			<font size='5' color='#00008B'> Contestant 17</font> 			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 16px"><div style="float:center;">		
			<font size='4' color='#00008B'> Icon's dimensions (width x height) [ 50 cm x 60 cm]. </font> 			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 36px"><div style="float:center;">		
			<font size='4' color='#00008B'>I do not choose it &nbsp;&nbsp;&nbsp; </font>
			<label class="switch"> <input type="checkbox" name="contestant_17" <?php if (isset($contestant_17) && $contestant_17=="1") echo "checked";?> value="1"> 
			<span class="slider round">	</span> </label> 
						
			<font size='4' color='#00008B'>&nbsp;&nbsp; I choose this icon</font>	</div></th>				
		</tr>
		</thead> 	
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 411px"><div style="float:center;"><a href="javascript:void(0);" onClick="newPopup('Images_/17_.jpg');">
			<img id="captcha" src="Images_/17.jpg" width="600" height="580" alt="Image" /></a></div></th>		
		</tr>
		</thead>
		
	</table>		
</td>
</tr>
</table>
</div>	




<div style="width:856px; float:left;"><p></p>		
<table border='1' max-width='856' cellspacing='0' cellpadding='0' align="left" bordercolor="#707a7f">
<tr style="position: left;">
<td>
	<table  summary='table' style="height: 610px">

		<thead id="start">
		<tr>
			<th width='855' style="height: 56px"><div style="float:center;">		
			<font size='5' color='#00008B'> Contestant 18</font> 			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 16px"><div style="float:center;">		
			<font size='4' color='#00008B'> Icon's dimensions (width x height) [ 35 cm x 90 cm]. </font> 
			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 36px"><div style="float:center;">		
			<font size='4' color='#00008B'>I do not choose it &nbsp;&nbsp;&nbsp; </font>
			<label class="switch"> <input type="checkbox" name="contestant_18" <?php if (isset($contestant_18) && $contestant_18=="1") echo "checked";?> value="1"> 
			<span class="slider round">	</span> </label> <font size='4' color='#00008B'>&nbsp;&nbsp;&nbsp; I choose this icon</font>	</div></th>				
		</tr>
		</thead> 	
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 411px"><div style="float:center;"><a href="javascript:void(0);" onClick="newPopup('Images_/18_.jpg');">
			<img id="captcha" src="Images_/18.jpg" width="600" height="580" alt="Image" /></a></div></th>		
		</tr>
		</thead>
				
	</table>		
</td>
</tr>
</table>
</div>	


<div style="width:856px; float:left;"><p></p>		
<table border='1' max-width='856' cellspacing='0' cellpadding='0' align="left" bordercolor="#707a7f">
<tr style="position: left;">
<td>
	<table  summary='table' style="height: 610px">

		<thead id="start">
		<tr>
			<th width='855' style="height: 56px"><div style="float:center;">		
			<font size='5' color='#00008B'> Contestant 19</font> 			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 16px"><div style="float:center;">		
			<font size='4' color='#00008B'> Icon's dimensions (width x height) [ 86 cm x 115 cm ]. Icon's text :</font>  

			<a href="Images_/19.pdf"><img class="alignnone size-full wp-image-5969" src="Images_/pdf_icon_40.jpg" alt="pdf30" /></a>
			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 36px"><div style="float:center;">		
			<font size='4' color='#00008B'>I do not choose it &nbsp;&nbsp;&nbsp; </font>
			<label class="switch"> <input type="checkbox" name="contestant_19" <?php if (isset($contestant_19) && $contestant_19=="1") echo "checked";?> value="1"> 
			<span class="slider round">	</span> </label> 
						
			<font size='4' color='#00008B'>&nbsp;&nbsp; I choose this icon</font>	</div></th>				
		</tr>
		</thead> 	
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 411px"><div style="float:center;"><a href="javascript:void(0);" onClick="newPopup('Images_/19_.jpg');">
			<img id="captcha" src="Images_/19.jpg" width="600" height="580" alt="Image" /></a></div></th>		
		</tr>
		</thead>
		
	</table>		
</td>
</tr>
</table>
</div>	




<div style="width:856px; float:left;"><p></p>		
<table border='1' max-width='856' cellspacing='0' cellpadding='0' align="left" bordercolor="#707a7f">
<tr style="position: left;">
<td>
	<table  summary='table' style="height: 610px">

		<thead id="start">
		<tr>
			<th width='855' style="height: 56px"><div style="float:center;">		
			<font size='5' color='#00008B'> Contestant 20</font> 			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 16px"><div style="float:center;">		
			<font size='4' color='#00008B'> Icon's dimensions (width x height) [ 50 cm x 60 cm ]. </font> 
			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 36px"><div style="float:center;">		
			<font size='4' color='#00008B'>I do not choose it &nbsp;&nbsp;&nbsp; </font>
			<label class="switch"> <input type="checkbox" name="contestant_20" <?php if (isset($contestant_20) && $contestant_20=="1") echo "checked";?> value="1"> 
			<span class="slider round">	</span> </label> <font size='4' color='#00008B'>&nbsp;&nbsp;&nbsp; I choose this icon</font>	</div></th>				
		</tr>
		</thead> 	
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 411px"><div style="float:center;"><a href="javascript:void(0);" onClick="newPopup('Images_/20_.jpg');">
			<img id="captcha" src="Images_/20.jpg" width="600" height="580" alt="Image" /></a></div></th>		
		</tr>
		</thead>
				
	</table>		
</td>
</tr>
</table>
</div>	






<div style="width:856px; float:left;"><p></p>		
<table border='1' max-width='856' cellspacing='0' cellpadding='0' align="left" bordercolor="#707a7f">
<tr style="position: left;">
<td>
	<table  summary='table' style="height: 610px">

		<thead id="start">
		<tr>
			<th width='855' style="height: 56px"><div style="float:center;">		
			<font size='5' color='#00008B'> Contestant 21</font> 			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 16px"><div style="float:center;">		
			<font size='4' color='#00008B'> Icon's dimensions (width x height) [ 60 cm x 80 cm]. </font> 
			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 36px"><div style="float:center;">		
			<font size='4' color='#00008B'>I do not choose it &nbsp;&nbsp;&nbsp; </font>
			<label class="switch"> <input type="checkbox" name="contestant_21" <?php if (isset($contestant_21) && $contestant_21=="1") echo "checked";?> value="1"> 
			<span class="slider round">	</span> </label> 
						
			<font size='4' color='#00008B'>&nbsp;&nbsp; I choose this icon</font>	</div></th>				
		</tr>
		</thead> 	
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 411px"><div style="float:center;"><a href="javascript:void(0);" onClick="newPopup('Images_/21_.jpg');">
			<img id="captcha" src="Images_/21.jpg" width="600" height="580" alt="Image" /></a></div></th>		
		</tr>
		</thead>
		
	</table>		
</td>
</tr>
</table>
</div>	




<div style="width:856px; float:left;"><p></p>		
<table border='1' max-width='856' cellspacing='0' cellpadding='0' align="left" bordercolor="#707a7f">
<tr style="position: left;">
<td>
	<table  summary='table' style="height: 610px">

		<thead id="start">
		<tr>
			<th width='855' style="height: 56px"><div style="float:center;">		
			<font size='5' color='#00008B'> Contestant 22</font> 			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 16px"><div style="float:center;">		
			<font size='4' color='#00008B'> Icon's dimensions (width x height) [ 40 cm x 27 cm ]. </font> 

		
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 36px"><div style="float:center;">		
			<font size='4' color='#00008B'>I do not choose it &nbsp;&nbsp;&nbsp; </font>
			<label class="switch"> <input type="checkbox" name="contestant_22" <?php if (isset($contestant_22) && $contestant_22=="1") echo "checked";?> value="1"> 
			<span class="slider round">	</span> </label> <font size='4' color='#00008B'>&nbsp;&nbsp;&nbsp; I choose this icon</font>	</div></th>				
		</tr>
		</thead> 	
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 411px"><div style="float:center;"><a href="javascript:void(0);" onClick="newPopup('Images_/22_.jpg');">
			<img id="captcha" src="Images_/22.jpg" width="600" height="580" alt="Image" /></a></div></th>		
		</tr>
		</thead>
				
	</table>		
</td>
</tr>
</table>
</div>	

<div style="width:856px; float:left;"><p></p>		
<table border='1' max-width='856' cellspacing='0' cellpadding='0' align="left" bordercolor="#707a7f">
<tr style="position: left;">
<td>
	<table  summary='table' style="height: 610px">

		<thead id="start">
		<tr>
			<th width='855' style="height: 56px"><div style="float:center;">		
			<font size='5' color='#00008B'> Contestant 23</font> 			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 16px"><div style="float:center;">		
			<font size='4' color='#00008B'> Icon's dimensions (width x height) [ 75 cm x 65 cm]. </font> 

		
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 36px"><div style="float:center;">		
			<font size='4' color='#00008B'>I do not choose it &nbsp;&nbsp;&nbsp; </font>
			<label class="switch"> <input type="checkbox" name="contestant_23" <?php if (isset($contestant_23) && $contestant_23=="1") echo "checked";?> value="1"> 
			<span class="slider round">	</span> </label> 
			
		
			<font size='4' color='#00008B'>&nbsp;&nbsp; I choose this icon</font>	</div></th>				
		</tr>
		</thead> 	
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 411px"><div style="float:center;"><a href="javascript:void(0);" onClick="newPopup('Images_/23_.jpg');">
			<img id="captcha" src="Images_/23.jpg" width="600" height="580" alt="Image" /></a></div></th>		
		</tr>
		</thead>
		
	</table>		
</td>
</tr>
</table>
</div>	




<div style="width:856px; float:left;"><p></p>		
<table border='1' max-width='856' cellspacing='0' cellpadding='0' align="left" bordercolor="#707a7f">
<tr style="position: left;">
<td>
	<table  summary='table' style="height: 610px">

		<thead id="start">
		<tr>
			<th width='855' style="height: 56px"><div style="float:center;">		
			<font size='5' color='#00008B'> Contestant 24</font> 			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 16px"><div style="float:center;">		
			<font size='4' color='#00008B'> Icon's dimensions (width x height) [ 45 cm x 55 cm]. </font> 

			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 36px"><div style="float:center;">		
			<font size='4' color='#00008B'>I do not choose it &nbsp;&nbsp;&nbsp; </font>
			<label class="switch"> <input type="checkbox" name="contestant_24" <?php if (isset($contestant_24) && $contestant_24=="1") echo "checked";?> value="1"> 
			<span class="slider round">	</span> </label> <font size='4' color='#00008B'>&nbsp;&nbsp;&nbsp; I choose this icon</font>	</div></th>				
		</tr>
		</thead> 	
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 411px"><div style="float:center;"><a href="javascript:void(0);" onClick="newPopup('Images_/24_.jpg');">
			<img id="captcha" src="Images_/24.jpg" width="600" height="580" alt="Image" /></a></div></th>		
		</tr>
		</thead>
				
	</table>		
</td>
</tr>
</table>
</div>	

<div style="width:856px; float:left;"><p></p>		
<table border='1' max-width='856' cellspacing='0' cellpadding='0' align="left" bordercolor="#707a7f">
<tr style="position: left;">
<td>
	<table  summary='table' style="height: 610px">

		<thead id="start">
		<tr>
			<th width='855' style="height: 56px"><div style="float:center;">		
			<font size='5' color='#00008B'> Contestant 25</font> 			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 16px"><div style="float:center;">		
			<font size='4' color='#00008B'> Icon's dimensions (width x height) [ 26 cm x 35 cm]. </font> 

			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 36px"><div style="float:center;">		
			<font size='4' color='#00008B'>I do not choose it &nbsp;&nbsp;&nbsp; </font>
			<label class="switch"> <input type="checkbox" name="contestant_25" <?php if (isset($contestant_25) && $contestant_25=="1") echo "checked";?> value="1"> 
			<span class="slider round">	</span> </label> 
			
			
			<font size='4' color='#00008B'>&nbsp;&nbsp; I choose this icon</font>	</div></th>				
		</tr>
		</thead> 	
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 411px"><div style="float:center;"><a href="javascript:void(0);" onClick="newPopup('Images_/25_.jpg');">
			<img id="captcha" src="Images_/25.jpg" width="600" height="580" alt="Image" /></a></div></th>		
		</tr>
		</thead>
		
	</table>		
</td>
</tr>
</table>
</div>	




<div style="width:856px; float:left;"><p></p>		
<table border='1' max-width='856' cellspacing='0' cellpadding='0' align="left" bordercolor="#707a7f">
<tr style="position: left;">
<td>
	<table  summary='table' style="height: 610px">

		<thead id="start">
		<tr>
			<th width='855' style="height: 56px"><div style="float:center;">		
			<font size='5' color='#00008B'> Contestant 26</font> 			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 16px"><div style="float:center;">		
			<font size='4' color='#00008B'> Icon's dimensions (width x height) [ 50 cm]. </font> 
			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 36px"><div style="float:center;">		
			<font size='4' color='#00008B'>I do not choose it &nbsp;&nbsp;&nbsp; </font>
			<label class="switch"> <input type="checkbox" name="contestant_26" <?php if (isset($contestant_26) && $contestant_26=="1") echo "checked";?> value="1"> 
			<span class="slider round">	</span> </label> <font size='4' color='#00008B'>&nbsp;&nbsp;&nbsp; I choose this icon</font>	</div></th>				
		</tr>
		</thead> 	
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 411px"><div style="float:center;"><a href="javascript:void(0);" onClick="newPopup('Images_/26_.jpg');">
			<img id="captcha" src="Images_/26.jpg" width="600" height="580" alt="Image" /></a></div></th>		
		</tr>
		</thead>
				
	</table>		
</td>
</tr>
</table>
</div>	

<div style="width:856px; float:left;"><p></p>		
<table border='1' max-width='856' cellspacing='0' cellpadding='0' align="left" bordercolor="#707a7f">
<tr style="position: left;">
<td>
	<table  summary='table' style="height: 610px">

		<thead id="start">
		<tr>
			<th width='855' style="height: 56px"><div style="float:center;">		
			<font size='5' color='#00008B'> Contestant 27</font> 			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 16px"><div style="float:center;">		
			<font size='4' color='#00008B'> Icon's dimensions (width x height) [ 40 cm x 40 cm]. </font> 
			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 36px"><div style="float:center;">		
			<font size='4' color='#00008B'>I do not choose it &nbsp;&nbsp;&nbsp; </font>
			<label class="switch"> <input type="checkbox" name="contestant_27" <?php if (isset($contestant_27) && $contestant_27=="1") echo "checked";?> value="1"> 
			<span class="slider round">	</span> </label> 
			
		
			<font size='4' color='#00008B'>&nbsp;&nbsp; I choose this icon</font>	</div></th>				
		</tr>
		</thead> 	
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 411px"><div style="float:center;"><a href="javascript:void(0);" onClick="newPopup('Images_/27_.jpg');">
			<img id="captcha" src="Images_/27.jpg" width="600" height="580" alt="Image" /></a></div></th>		
		</tr>
		</thead>
		
	</table>		
</td>
</tr>
</table>
</div>	




<div style="width:856px; float:left;"><p></p>		
<table border='1' max-width='856' cellspacing='0' cellpadding='0' align="left" bordercolor="#707a7f">
<tr style="position: left;">
<td>
	<table  summary='table' style="height: 610px">

		<thead id="start">
		<tr>
			<th width='855' style="height: 56px"><div style="float:center;">		
			<font size='5' color='#00008B'> Contestant 28</font> 			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 16px"><div style="float:center;">		
			<font size='4' color='#00008B'> Icon's dimensions (width x height) [ 50 cm x 60 cm]. </font> 
			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 36px"><div style="float:center;">		
			<font size='4' color='#00008B'>I do not choose it &nbsp;&nbsp;&nbsp; </font>
			<label class="switch"> <input type="checkbox" name="contestant_28" <?php if (isset($contestant_28) && $contestant_28=="1") echo "checked";?> value="1"> 
			<span class="slider round">	</span> </label> <font size='4' color='#00008B'>&nbsp;&nbsp;&nbsp; I choose this icon</font>	</div></th>				
		</tr>
		</thead> 	
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 411px"><div style="float:center;"><a href="javascript:void(0);" onClick="newPopup('Images_/28_.jpg');">
			<img id="captcha" src="Images_/28.jpg" width="600" height="580" alt="Image" /></a></div></th>		
		</tr>
		</thead>
				
	</table>		
</td>
</tr>
</table>
</div>	




<div style="width:856px; float:left;"><p></p>		
<table border='1' max-width='856' cellspacing='0' cellpadding='0' align="left" bordercolor="#707a7f">
<tr style="position: left;">
<td>
	<table  summary='table' style="height: 610px">

		<thead id="start">
		<tr>
			<th width='855' style="height: 56px"><div style="float:center;">		
			<font size='5' color='#00008B'> Contestant 29</font> 			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 16px"><div style="float:center;">		
			<font size='4' color='#00008B'> Icon's dimensions (width x height) [ 50,5 cm x 65 cm ]. Icon's text :</font> 

			<a href="Images_/29.pdf"><img class="alignnone size-full wp-image-5969" src="Images_/pdf_icon_40.jpg" alt="pdf30" /></a>
			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 36px"><div style="float:center;">		
			<font size='4' color='#00008B'>I do not choose it &nbsp;&nbsp;&nbsp; </font>
			<label class="switch"> <input type="checkbox" name="contestant_29" <?php if (isset($contestant_29) && $contestant_29=="1") echo "checked";?> value="1"> 
			<span class="slider round">	</span> </label> 
						
			<font size='4' color='#00008B'>&nbsp;&nbsp; I choose this icon</font>	</div></th>				
		</tr>
		</thead> 	
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 411px"><div style="float:center;"><a href="javascript:void(0);" onClick="newPopup('Images_/29_.jpg');">
			<img id="captcha" src="Images_/29.jpg" width="600" height="580" alt="Image" /></a></div></th>		
		</tr>
		</thead>
		
	</table>		
</td>
</tr>
</table>
</div>	




<div style="width:856px; float:left;"><p></p>		
<table border='1' max-width='856' cellspacing='0' cellpadding='0' align="left" bordercolor="#707a7f">
<tr style="position: left;">
<td>
	<table  summary='table' style="height: 610px">

		<thead id="start">
		<tr>
			<th width='855' style="height: 56px"><div style="float:center;">		
			<font size='5' color='#00008B'> Contestant 30</font> 			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 16px"><div style="float:center;">		
			<font size='4' color='#00008B'> Icon's dimensions (width x height) [ 60 cm x 90 cm ]. Icon's text :</font> 

			<a href="Images_/30.pdf"><img class="alignnone size-full wp-image-5969" src="Images_S_E/pdf_icon_40.jpg" alt="pdf30" /></a>
			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 36px"><div style="float:center;">		
			<font size='4' color='#00008B'>I do not choose it &nbsp;&nbsp;&nbsp; </font>
			<label class="switch"> <input type="checkbox" name="contestant_30" <?php if (isset($contestant_30) && $contestant_30=="1") echo "checked";?> value="1"> 
			<span class="slider round">	</span> </label> <font size='4' color='#00008B'>&nbsp;&nbsp;&nbsp; I choose this icon</font>	</div></th>				
		</tr>
		</thead> 	
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 411px"><div style="float:center;"><a href="javascript:void(0);" onClick="newPopup('Images_/30_.jpg');">
			<img id="captcha" src="Images_/30.jpg" width="600" height="580" alt="Image" /></a></div></th>		
		</tr>
		</thead>
				
	</table>		
</td>
</tr>
</table>
</div>	



<div style="width:856px; float:left;"><p></p>		
<table border='1' max-width='856' cellspacing='0' cellpadding='0' align="left" bordercolor="#707a7f">
<tr style="position: left;">
<td>
	<table  summary='table' style="height: 610px">

		<thead id="start">
		<tr>
			<th width='855' style="height: 56px"><div style="float:center;">		
			<font size='5' color='#00008B'> Contestant 31</font> 			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 16px"><div style="float:center;">		
			<font size='4' color='#00008B'> Icon's dimensions (width x height) [ 50 cm x 40 cm]. </font> 
			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 36px"><div style="float:center;">		
			<font size='4' color='#00008B'>I do not choose it &nbsp;&nbsp;&nbsp; </font>
			<label class="switch"> <input type="checkbox" name="contestant_31" <?php if (isset($contestant_31) && $contestant_31=="1") echo "checked";?> value="1"> 
			<span class="slider round">	</span> </label> 
						
			<font size='4' color='#00008B'>&nbsp;&nbsp; I choose this icon</font>	</div></th>				
		</tr>
		</thead> 	
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 411px"><div style="float:center;"><a href="javascript:void(0);" onClick="newPopup('Images_/31_.jpg');">
			<img id="captcha" src="Images_/31.jpg" width="600" height="580" alt="Image" /></a></div></th>		
		</tr>
		</thead>
		
	</table>		
</td>
</tr>
</table>
</div>	




<div style="width:856px; float:left;"><p></p>		
<table border='1' max-width='856' cellspacing='0' cellpadding='0' align="left" bordercolor="#707a7f">
<tr style="position: left;">
<td>
	<table  summary='table' style="height: 610px">

		<thead id="start">
		<tr>
			<th width='855' style="height: 56px"><div style="float:center;">		
			<font size='5' color='#00008B'> Contestant 32</font> 			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 16px"><div style="float:center;">		
			<font size='4' color='#00008B'> Icon's dimensions (width x height) [ 32 cm x 44 cm ]. </font> 
			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 36px"><div style="float:center;">		
			<font size='4' color='#00008B'>I do not choose it &nbsp;&nbsp;&nbsp; </font>
			<label class="switch"> <input type="checkbox" name="contestant_32" <?php if (isset($contestant_32) && $contestant_32=="1") echo "checked";?> value="1"> 
			<span class="slider round">	</span> </label> <font size='4' color='#00008B'>&nbsp;&nbsp;&nbsp; I choose this icon</font>	</div></th>				
		</tr>
		</thead> 	
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 411px"><div style="float:center;"><a href="javascript:void(0);" onClick="newPopup('Images_/32_.jpg');">
			<img id="captcha" src="Images_/32.jpg" width="600" height="580" alt="Image" /></a></div></th>		
		</tr>
		</thead>
				
	</table>		
</td>
</tr>
</table>
</div>	

<div style="width:856px; float:left;"><p></p>		
<table border='1' max-width='856' cellspacing='0' cellpadding='0' align="left" bordercolor="#707a7f">
<tr style="position: left;">
<td>
	<table  summary='table' style="height: 610px">

		<thead id="start">
		<tr>
			<th width='855' style="height: 56px"><div style="float:center;">		
			<font size='5' color='#00008B'> Contestant 33</font> 			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 16px"><div style="float:center;">		
			<font size='4' color='#00008B'> Icon's dimensions (width x height) [ 57 cm x 67 cm]. Icon's text :</font> 

			<a href="Images_/33.pdf"><img class="alignnone size-full wp-image-5969" src="Images_/pdf_icon_40.jpg" alt="pdf30" /></a>
			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 36px"><div style="float:center;">		
			<font size='4' color='#00008B'>I do not choose it &nbsp;&nbsp;&nbsp; </font>
			<label class="switch"> <input type="checkbox" name="contestant_33" <?php if (isset($contestant_33) && $contestant_33=="1") echo "checked";?> value="1"> 
			<span class="slider round">	</span> </label> 
						
			<font size='4' color='#00008B'>&nbsp;&nbsp; I choose this icon</font>	</div></th>				
		</tr>
		</thead> 	
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 411px"><div style="float:center;"><a href="javascript:void(0);" onClick="newPopup('Images_/33_.jpg');">
			<img id="captcha" src="Images_/33.jpg" width="600" height="580" alt="Image" /></a></div></th>		
		</tr>
		</thead>
		
	</table>		
</td>
</tr>
</table>
</div>	




<div style="width:856px; float:left;"><p></p>		
<table border='1' max-width='856' cellspacing='0' cellpadding='0' align="left" bordercolor="#707a7f">
<tr style="position: left;">
<td>
	<table  summary='table' style="height: 610px">

		<thead id="start">
		<tr>
			<th width='855' style="height: 56px"><div style="float:center;">		
			<font size='5' color='#00008B'> Contestant 34</font> 			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 16px"><div style="float:center;">		
			<font size='4' color='#00008B'> Icon's dimensions (width x height) [ 40 cm x 50 cm]. </font> 
			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 36px"><div style="float:center;">		
			<font size='4' color='#00008B'>I do not choose it &nbsp;&nbsp;&nbsp; </font>
			<label class="switch"> <input type="checkbox" name="contestant_34" <?php if (isset($contestant_34) && $contestant_34=="1") echo "checked";?> value="1"> 
			<span class="slider round">	</span> </label> <font size='4' color='#00008B'>&nbsp;&nbsp;&nbsp; I choose this icon</font>	</div></th>				
		</tr>
		</thead> 	
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 411px"><div style="float:center;"><a href="javascript:void(0);" onClick="newPopup('Images_/34_.jpg');">
			<img id="captcha" src="Images_/34.jpg" width="600" height="580" alt="Image" /></a></div></th>		
		</tr>
		</thead>
				
	</table>		
</td>
</tr>
</table>
</div>	

<div style="width:856px; float:left;"><p></p>		
<table border='1' max-width='856' cellspacing='0' cellpadding='0' align="left" bordercolor="#707a7f">
<tr style="position: left;">
<td>
	<table  summary='table' style="height: 610px">

		<thead id="start">
		<tr>
			<th width='855' style="height: 56px"><div style="float:center;">		
			<font size='5' color='#00008B'> Contestant 35</font> 			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 16px"><div style="float:center;">		
			<font size='4' color='#00008B'> Icon's dimensions (width x height) [ 43 cm x 60 cm]. Icon's text :</font> 

			<a href="Images_/35.pdf"><img class="alignnone size-full wp-image-5969" src="Images_/pdf_icon_40.jpg" alt="pdf30" /></a>
			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 36px"><div style="float:center;">		
			<font size='4' color='#00008B'>I do not choose it &nbsp;&nbsp;&nbsp; </font>
			<label class="switch"> <input type="checkbox" name="contestant_35" <?php if (isset($contestant_35) && $contestant_35=="1") echo "checked";?> value="1"> 
			<span class="slider round">	</span> </label> 
						
			<font size='4' color='#00008B'>&nbsp;&nbsp; I choose this icon</font>	</div></th>				
		</tr>
		</thead> 	
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 411px"><div style="float:center;"><a href="javascript:void(0);" onClick="newPopup('Images_/35_.jpg');">
			<img id="captcha" src="Images_/35.jpg" width="600" height="580" alt="Image" /></a></div></th>		
		</tr>
		</thead>
		
	</table>		
</td>
</tr>
</table>
</div>	




<div style="width:856px; float:left;"><p></p>		
<table border='1' max-width='856' cellspacing='0' cellpadding='0' align="left" bordercolor="#707a7f">
<tr style="position: left;">
<td>
	<table  summary='table' style="height: 610px">

		<thead id="start">
		<tr>
			<th width='855' style="height: 56px"><div style="float:center;">		
			<font size='5' color='#00008B'> Contestant 36</font> 			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 16px"><div style="float:center;">		
			<font size='4' color='#00008B'> Icon's dimensions (width x height) [ 63 cm x 42 cm]. Icon's text :</font> 

			<a href="Images_/36.pdf"><img class="alignnone size-full wp-image-5969" src="Images_/pdf_icon_40.jpg" alt="pdf30" /></a>
			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 36px"><div style="float:center;">		
			<font size='4' color='#00008B'>I do not choose it &nbsp;&nbsp;&nbsp; </font>
			<label class="switch"> <input type="checkbox" name="contestant_36" <?php if (isset($contestant_36) && $contestant_36=="1") echo "checked";?> value="1"> 
			<span class="slider round">	</span> </label> <font size='4' color='#00008B'>&nbsp;&nbsp;&nbsp; I choose this icon</font>	</div></th>				
		</tr>
		</thead> 	
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 411px"><div style="float:center;"><a href="javascript:void(0);" onClick="newPopup('Images_/36_.jpg');">
			<img id="captcha" src="Images_/36.jpg" width="600" height="580" alt="Image" /></a></div></th>		
		</tr>
		</thead>
				
	</table>		
</td>
</tr>
</table>
</div>	

<div style="width:856px; float:left;"><p></p>		
<table border='1' max-width='856' cellspacing='0' cellpadding='0' align="left" bordercolor="#707a7f">
<tr style="position: left;">
<td>
	<table  summary='table' style="height: 610px">

		<thead id="start">
		<tr>
			<th width='855' style="height: 56px"><div style="float:center;">		
			<font size='5' color='#00008B'> Contestant 37</font> 			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 16px"><div style="float:center;">		
			<font size='4' color='#00008B'> Icon's dimensions (width x height) [ 25 cm x 29 cm]. Icon's text :</font> 

			<a href="Images_/37.pdf"><img class="alignnone size-full wp-image-5969" src="Images_/pdf_icon_40.jpg" alt="pdf30" /></a>
			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 36px"><div style="float:center;">		
			<font size='4' color='#00008B'>I do not choose it &nbsp;&nbsp;&nbsp; </font>
			<label class="switch"> <input type="checkbox" name="contestant_37" <?php if (isset($contestant_37) && $contestant_37=="1") echo "checked";?> value="1"> 
			<span class="slider round">	</span> </label> 
						
			<font size='4' color='#00008B'>&nbsp;&nbsp; I choose this icon</font>	</div></th>				
		</tr>
		</thead> 	
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 411px"><div style="float:center;"><a href="javascript:void(0);" onClick="newPopup('Images_/37_.jpg');">
			<img id="captcha" src="Images_/37.jpg" width="600" height="580" alt="Image" /></a></div></th>		
		</tr>
		</thead>
		
	</table>		
</td>
</tr>
</table>
</div>	




<div style="width:856px; float:left;"><p></p>		
<table border='1' max-width='856' cellspacing='0' cellpadding='0' align="left" bordercolor="#707a7f">
<tr style="position: left;">
<td>
	<table  summary='table' style="height: 610px">

		<thead id="start">
		<tr>
			<th width='855' style="height: 56px"><div style="float:center;">		
			<font size='5' color='#00008B'> Contestant 38</font> 			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 16px"><div style="float:center;">		
			<font size='4' color='#00008B'> Icon's dimensions (width x height) [ 54 cm x 70 cm]. </font> 
			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 36px"><div style="float:center;">		
			<font size='4' color='#00008B'>I do not choose it &nbsp;&nbsp;&nbsp; </font>
			<label class="switch"> <input type="checkbox" name="contestant_38" <?php if (isset($contestant_38) && $contestant_38=="1") echo "checked";?> value="1"> 
			<span class="slider round">	</span> </label> <font size='4' color='#00008B'>&nbsp;&nbsp;&nbsp; I choose this icon</font>	</div></th>				
		</tr>
		</thead> 	
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 411px"><div style="float:center;"><a href="javascript:void(0);" onClick="newPopup('Images_/38_.jpg');">
			<img id="captcha" src="Images_/38.jpg" width="600" height="580" alt="Image" /></a></div></th>		
		</tr>
		</thead>
				
	</table>		
</td>
</tr>
</table>
</div>	



<div style="width:856px; float:left;"><p></p>		
<table border='1' max-width='856' cellspacing='0' cellpadding='0' align="left" bordercolor="#707a7f">
<tr style="position: left;">
<td>
	<table  summary='table' style="height: 610px">

		<thead id="start">
		<tr>
			<th width='855' style="height: 56px"><div style="float:center;">		
			<font size='5' color='#00008B'> Contestant 39</font> 			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 16px"><div style="float:center;">		
			<font size='4' color='#00008B'> Icon's dimensions (width x height) [ 40 cm x 50 cm ]. Icon's text :</font> 

			<a href="Images_/39_.pdf"><img class="alignnone size-full wp-image-5969" src="Images_/pdf_icon_40.jpg" alt="pdf30" /></a>
			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 36px"><div style="float:center;">		
			<font size='4' color='#00008B'>I do not choose it &nbsp;&nbsp;&nbsp; </font>
			<label class="switch"> <input type="checkbox" name="contestant_39" <?php if (isset($contestant_39) && $contestant_39=="1") echo "checked";?> value="1"> 
			<span class="slider round">	</span> </label> 
						
			<font size='4' color='#00008B'>&nbsp;&nbsp; I choose this icon</font>	</div></th>				
		</tr>
		</thead> 	
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 411px"><div style="float:center;"><a href="javascript:void(0);" onClick="newPopup('Images_/39_.jpg');">
			<img id="captcha" src="Images_/39.jpg" width="600" height="580" alt="Image" /></a></div></th>		
		</tr>
		</thead>
		
	</table>		
</td>
</tr>
</table>
</div>	




<div style="width:856px; float:left;"><p></p>		
<table border='1' max-width='856' cellspacing='0' cellpadding='0' align="left" bordercolor="#707a7f">
<tr style="position: left;">
<td>
	<table  summary='table' style="height: 610px">

		<thead id="start">
		<tr>
			<th width='855' style="height: 56px"><div style="float:center;">		
			<font size='5' color='#00008B'> Contestant 40</font> 			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 16px"><div style="float:center;">		
			<font size='4' color='#00008B'> Icon's dimensions (width x height) [ 37 cm x 46 cm ]. </font> 
			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 36px"><div style="float:center;">		
			<font size='4' color='#00008B'>I do not choose it &nbsp;&nbsp;&nbsp; </font>
			<label class="switch"> <input type="checkbox" name="contestant_40" <?php if (isset($contestant_40) && $contestant_40=="1") echo "checked";?> value="1"> 
			<span class="slider round">	</span> </label> <font size='4' color='#00008B'>&nbsp;&nbsp;&nbsp; I choose this icon</font>	</div></th>				
		</tr>
		</thead> 	
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 411px"><div style="float:center;"><a href="javascript:void(0);" onClick="newPopup('Images_/40_.jpg');">
			<img id="captcha" src="Images_/40.jpg" width="600" height="580" alt="Image" /></a></div></th>		
		</tr>
		</thead>
				
	</table>		
</td>
</tr>
</table>
</div>	



<div style="width:856px; float:left;"><p></p>		
<table border='1' max-width='856' cellspacing='0' cellpadding='0' align="left" bordercolor="#707a7f">
<tr style="position: left;">
<td>
	<table  summary='table' style="height: 610px">

		<thead id="start">
		<tr>
			<th width='855' style="height: 56px"><div style="float:center;">		
			<font size='5' color='#00008B'> Contestant 41</font> 			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 16px"><div style="float:center;">		
			<font size='4' color='#00008B'> Icon's dimensions (width x height) [ 29 cm x 46 cm]. </font> 
			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 36px"><div style="float:center;">		
			<font size='4' color='#00008B'>I do not choose it &nbsp;&nbsp;&nbsp; </font>
			<label class="switch"> <input type="checkbox" name="contestant_41" <?php if (isset($contestant_41) && $contestant_41=="1") echo "checked";?> value="1"> 
			<span class="slider round">	</span> </label> 
					
			<font size='4' color='#00008B'>&nbsp;&nbsp; I choose this icon</font>	</div></th>				
		</tr>
		</thead> 	
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 411px"><div style="float:center;"><a href="javascript:void(0);" onClick="newPopup('Images_/41_.jpg');">
			<img id="captcha" src="Images_/41.jpg" width="600" height="580" alt="Image" /></a></div></th>		
		</tr>
		</thead>
		
	</table>		
</td>
</tr>
</table>
</div>	




<div style="width:856px; float:left;"><p></p>		
<table border='1' max-width='856' cellspacing='0' cellpadding='0' align="left" bordercolor="#707a7f">
<tr style="position: left;">
<td>
	<table  summary='table' style="height: 610px">

		<thead id="start">
		<tr>
			<th width='855' style="height: 56px"><div style="float:center;">		
			<font size='5' color='#00008B'> Contestant 42</font> 			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 16px"><div style="float:center;">		
			<font size='4' color='#00008B'> Icon's dimensions (width x height) [ 68 cm x 90 cm ]. </font> 
			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 36px"><div style="float:center;">		
			<font size='4' color='#00008B'>I do not choose it &nbsp;&nbsp;&nbsp; </font>
			<label class="switch"> <input type="checkbox" name="contestant_42" <?php if (isset($contestant_42) && $contestant_42=="1") echo "checked";?> value="1"> 
			<span class="slider round">	</span> </label> <font size='4' color='#00008B'>&nbsp;&nbsp;&nbsp; I choose this icon</font>	</div></th>				
		</tr>
		</thead> 	
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 411px"><div style="float:center;"><a href="javascript:void(0);" onClick="newPopup('Images_/42_.jpg');">
			<img id="captcha" src="Images_/42.jpg" width="600" height="580" alt="Image" /></a></div></th>		
		</tr>
		</thead>
				
	</table>		
</td>
</tr>
</table>
</div>	

<div style="width:856px; float:left;"><p></p>		
<table border='1' max-width='856' cellspacing='0' cellpadding='0' align="left" bordercolor="#707a7f">
<tr style="position: left;">
<td>
	<table  summary='table' style="height: 610px">

		<thead id="start">
		<tr>
			<th width='855' style="height: 56px"><div style="float:center;">		
			<font size='5' color='#00008B'> Contestant 43</font> 			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 16px"><div style="float:center;">		
			<font size='4' color='#00008B'> Icon's dimensions (width x height) [ 100 cm x 100 cm]. Icon's text :</font> 

			<a href="Images_/43.pdf"><img class="alignnone size-full wp-image-5969" src="Images_/pdf_icon_40.jpg" alt="pdf30" /></a>
			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 36px"><div style="float:center;">		
			<font size='4' color='#00008B'>I do not choose it &nbsp;&nbsp;&nbsp; </font>
			<label class="switch"> <input type="checkbox" name="contestant_43" <?php if (isset($contestant_43) && $contestant_43=="1") echo "checked";?> value="1"> 
			<span class="slider round">	</span> </label> 
						
			<font size='4' color='#00008B'>&nbsp;&nbsp; I choose this icon</font>	</div></th>				
		</tr>
		</thead> 	
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 411px"><div style="float:center;"><a href="javascript:void(0);" onClick="newPopup('Images_/43_.jpg');">
			<img id="captcha" src="Images_/43.jpg" width="600" height="580" alt="Image" /></a></div></th>		
		</tr>
		</thead>
		
	</table>		
</td>
</tr>
</table>
</div>	




<div style="width:856px; float:left;"><p></p>		
<table border='1' max-width='856' cellspacing='0' cellpadding='0' align="left" bordercolor="#707a7f">
<tr style="position: left;">
<td>
	<table  summary='table' style="height: 610px">

		<thead id="start">
		<tr>
			<th width='855' style="height: 56px"><div style="float:center;">		
			<font size='5' color='#00008B'> Contestant 44</font> 			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 16px"><div style="float:center;">		
			<font size='4' color='#00008B'> Icon's dimensions (width x height) [ 70 cm x 100 cm]. Icon's text :</font> 

			<a href="Images_/44_.pdf"><img class="alignnone size-full wp-image-5969" src="Images_/pdf_icon_40.jpg" alt="pdf30" /></a>
			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 36px"><div style="float:center;">		
			<font size='4' color='#00008B'>I do not choose it &nbsp;&nbsp;&nbsp; </font>
			<label class="switch"> <input type="checkbox" name="contestant_44" <?php if (isset($contestant_44) && $contestant_44=="1") echo "checked";?> value="1"> 
			<span class="slider round">	</span> </label> <font size='4' color='#00008B'>&nbsp;&nbsp;&nbsp; I choose this icon</font>	</div></th>				
		</tr>
		</thead> 	
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 411px"><div style="float:center;"><a href="javascript:void(0);" onClick="newPopup('Images_/44_.jpg');">
			<img id="captcha" src="Images_/44.jpg" width="600" height="580" alt="Image" /></a></div></th>		
		</tr>
		</thead>
				
	</table>		
</td>
</tr>
</table>
</div>	

<div style="width:856px; float:left;"><p></p>		
<table border='1' max-width='856' cellspacing='0' cellpadding='0' align="left" bordercolor="#707a7f">
<tr style="position: left;">
<td>
	<table  summary='table' style="height: 610px">

		<thead id="start">
		<tr>
			<th width='855' style="height: 56px"><div style="float:center;">		
			<font size='5' color='#00008B'> Contestant 45</font> 			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 16px"><div style="float:center;">		
			<font size='4' color='#00008B'> Icon's dimensions (width x height) [ 59 cm x 81 cm]. </font> 
			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 36px"><div style="float:center;">		
			<font size='4' color='#00008B'>I do not choose it &nbsp;&nbsp;&nbsp; </font>
			<label class="switch"> <input type="checkbox" name="contestant_45" <?php if (isset($contestant_45) && $contestant_45=="1") echo "checked";?> value="1"> 
			<span class="slider round">	</span> </label> 
						
			<font size='4' color='#00008B'>&nbsp;&nbsp; I choose this icon</font>	</div></th>				
		</tr>
		</thead> 	
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 411px"><div style="float:center;"><a href="javascript:void(0);" onClick="newPopup('Images_/45_.jpg');">
			<img id="captcha" src="Images_/45.jpg" width="600" height="580" alt="Image" /></a></div></th>		
		</tr>
		</thead>
		
	</table>		
</td>
</tr>
</table>
</div>	




<div style="width:856px; float:left;"><p></p>		
<table border='1' max-width='856' cellspacing='0' cellpadding='0' align="left" bordercolor="#707a7f">
<tr style="position: left;">
<td>
	<table  summary='table' style="height: 610px">

		<thead id="start">
		<tr>
			<th width='855' style="height: 56px"><div style="float:center;">		
			<font size='5' color='#00008B'> Contestant 46</font> 			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 16px"><div style="float:center;">		
			<font size='4' color='#00008B'> Icon's dimensions (width x height) [ 69 cm x 89 cm]. </font> 
			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 36px"><div style="float:center;">		
			<font size='4' color='#00008B'>I do not choose it &nbsp;&nbsp;&nbsp; </font>
			<label class="switch"> <input type="checkbox" name="contestant_46" <?php if (isset($contestant_46) && $contestant_46=="1") echo "checked";?> value="1"> 
			<span class="slider round">	</span> </label> <font size='4' color='#00008B'>&nbsp;&nbsp;&nbsp; I choose this icon</font>	</div></th>				
		</tr>
		</thead> 	
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 411px"><div style="float:center;"><a href="javascript:void(0);" onClick="newPopup('Images_/46_.jpg');">
			<img id="captcha" src="Images_/46.jpg" width="600" height="580" alt="Image" /></a></div></th>		
		</tr>
		</thead>
				
	</table>		
</td>
</tr>
</table>
</div>	

<div style="width:856px; float:left;"><p></p>		
<table border='1' max-width='856' cellspacing='0' cellpadding='0' align="left" bordercolor="#707a7f">
<tr style="position: left;">
<td>
	<table  summary='table' style="height: 610px">

		<thead id="start">
		<tr>
			<th width='855' style="height: 56px"><div style="float:center;">		
			<font size='5' color='#00008B'> Contestant 47</font> 			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 16px"><div style="float:center;">		
			<font size='4' color='#00008B'> Icon's dimensions (width x height) [ 35 cm x 41 cm]. </font> 
			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 36px"><div style="float:center;">		
			<font size='4' color='#00008B'>I do not choose it &nbsp;&nbsp;&nbsp; </font>
			<label class="switch"> <input type="checkbox" name="contestant_47" <?php if (isset($contestant_47) && $contestant_47=="1") echo "checked";?> value="1"> 
			<span class="slider round">	</span> </label> 
						
			<font size='4' color='#00008B'>&nbsp;&nbsp; I choose this icon</font>	</div></th>				
		</tr>
		</thead> 	
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 411px"><div style="float:center;"><a href="javascript:void(0);" onClick="newPopup('Images_/47_.jpg');">
			<img id="captcha" src="Images_/47.jpg" width="600" height="580" alt="Image" /></a></div></th>		
		</tr>
		</thead>
		
	</table>		
</td>
</tr>
</table>
</div>	




<div style="width:856px; float:left;"><p></p>		
<table border='1' max-width='856' cellspacing='0' cellpadding='0' align="left" bordercolor="#707a7f">
<tr style="position: left;">
<td>
	<table  summary='table' style="height: 610px">

		<thead id="start">
		<tr>
			<th width='855' style="height: 56px"><div style="float:center;">		
			<font size='5' color='#00008B'> Contestant 48</font> 			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 16px"><div style="float:center;">		
			<font size='4' color='#00008B'> Icon's dimensions (width x height) [ 60 cm x 86 cm]. </font> 
			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 36px"><div style="float:center;">		
			<font size='4' color='#00008B'>I do not choose it &nbsp;&nbsp;&nbsp; </font>
			<label class="switch"> <input type="checkbox" name="contestant_48" <?php if (isset($contestant_48) && $contestant_48=="1") echo "checked";?> value="1"> 
			<span class="slider round">	</span> </label> <font size='4' color='#00008B'>&nbsp;&nbsp;&nbsp; I choose this icon</font>	</div></th>				
		</tr>
		</thead> 	
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 411px"><div style="float:center;"><a href="javascript:void(0);" onClick="newPopup('Images_/48_.jpg');">
			<img id="captcha" src="Images_/48.jpg" width="600" height="580" alt="Image" /></a></div></th>		
		</tr>
		</thead>
				
	</table>		
</td>
</tr>
</table>
</div>	





<div style="width:856px; float:left;"><p></p>		
<table border='1' max-width='856' cellspacing='0' cellpadding='0' align="left" bordercolor="#707a7f">
<tr style="position: left;">
<td>
	<table  summary='table' style="height: 610px">

		<thead id="start">
		<tr>
			<th width='855' style="height: 56px"><div style="float:center;">		
			<font size='5' color='#00008B'> Contestant 49</font> 			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 16px"><div style="float:center;">		
			<font size='4' color='#00008B'> Icon's dimensions (width x height) [ 36 cm x 46 cm ]. </font> 			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 36px"><div style="float:center;">		
			<font size='4' color='#00008B'>I do not choose it &nbsp;&nbsp;&nbsp; </font>
			<label class="switch"> <input type="checkbox" name="contestant_49" <?php if (isset($contestant_49) && $contestant_49=="1") echo "checked";?> value="1"> 
			<span class="slider round">	</span> </label> 
						
			<font size='4' color='#00008B'>&nbsp;&nbsp; I choose this icon</font>	</div></th>				
		</tr>
		</thead> 	
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 411px"><div style="float:center;"><a href="javascript:void(0);" onClick="newPopup('Images_/49_.jpg');">
			<img id="captcha" src="Images_/49.jpg" width="600" height="580" alt="Image" /></a></div></th>		
		</tr>
		</thead>
		
	</table>		
</td>
</tr>
</table>
</div>	




<div style="width:856px; float:left;"><p></p>		
<table border='1' max-width='856' cellspacing='0' cellpadding='0' align="left" bordercolor="#707a7f">
<tr style="position: left;">
<td>
	<table  summary='table' style="height: 610px">

		<thead id="start">
		<tr>
			<th width='855' style="height: 56px"><div style="float:center;">		
			<font size='5' color='#00008B'> Contestant 50</font> 			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 16px"><div style="float:center;">		
			<font size='4' color='#00008B'> Icon's dimensions (width x height) [ 43 cm x 53 cm ]. </font> 
			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 36px"><div style="float:center;">		
			<font size='4' color='#00008B'>I do not choose it &nbsp;&nbsp;&nbsp; </font>
			<label class="switch"> <input type="checkbox" name="contestant_50" <?php if (isset($contestant_50) && $contestant_50=="1") echo "checked";?> value="1"> 
			<span class="slider round">	</span> </label> <font size='4' color='#00008B'>&nbsp;&nbsp;&nbsp; I choose this icon</font>	</div></th>				
		</tr>
		</thead> 	
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 411px"><div style="float:center;"><a href="javascript:void(0);" onClick="newPopup('Images_/50_.jpg');">
			<img id="captcha" src="Images_/50.jpg" width="600" height="580" alt="Image" /></a></div></th>		
		</tr>
		</thead>
				
	</table>		
</td>
</tr>
</table>
</div>	




<div style="width:856px; float:left;"><p></p>		
<table border='1' max-width='856' cellspacing='0' cellpadding='0' align="left" bordercolor="#707a7f">
<tr style="position: left;">
<td>
	<table  summary='table' style="height: 610px">

		<thead id="start">
		<tr>
			<th width='855' style="height: 56px"><div style="float:center;">		
			<font size='5' color='#00008B'> Contestant 51</font> 			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 16px"><div style="float:center;">		
			<font size='4' color='#00008B'> Icon's dimensions (width x height) [ 77 cm x 101 cm]. </font> 
			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 36px"><div style="float:center;">		
			<font size='4' color='#00008B'>I do not choose it &nbsp;&nbsp;&nbsp; </font>
			<label class="switch"> <input type="checkbox" name="contestant_51" <?php if (isset($contestant_51) && $contestant_51=="1") echo "checked";?> value="1"> 
			<span class="slider round">	</span> </label> 
						
			<font size='4' color='#00008B'>&nbsp;&nbsp; I choose this icon</font>	</div></th>				
		</tr>
		</thead> 	
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 411px"><div style="float:center;"><a href="javascript:void(0);" onClick="newPopup('Images_/51_.jpg');">
			<img id="captcha" src="Images_/51.jpg" width="600" height="580" alt="Image" /></a></div></th>		
		</tr>
		</thead>
		
	</table>		
</td>
</tr>
</table>
</div>	




<div style="width:856px; float:left;"><p></p>		
<table border='1' max-width='856' cellspacing='0' cellpadding='0' align="left" bordercolor="#707a7f">
<tr style="position: left;">
<td>
	<table  summary='table' style="height: 610px">

		<thead id="start">
		<tr>
			<th width='855' style="height: 56px"><div style="float:center;">		
			<font size='5' color='#00008B'> Contestant 52</font> 			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 16px"><div style="float:center;">		
			<font size='4' color='#00008B'> Icon's dimensions (width x height) [ 37 cm x 48 cm ]. </font> 
			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 36px"><div style="float:center;">		
			<font size='4' color='#00008B'>I do not choose it &nbsp;&nbsp;&nbsp; </font>
			<label class="switch"> <input type="checkbox" name="contestant_52" <?php if (isset($contestant_52) && $contestant_52=="1") echo "checked";?> value="1"> 
			<span class="slider round">	</span> </label> <font size='4' color='#00008B'>&nbsp;&nbsp;&nbsp; I choose this icon</font>	</div></th>				
		</tr>
		</thead> 	
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 411px"><div style="float:center;"><a href="javascript:void(0);" onClick="newPopup('Images_/52_.jpg');">
			<img id="captcha" src="Images_/52.jpg" width="600" height="580" alt="Image" /></a></div></th>		
		</tr>
		</thead>
				
	</table>		
</td>
</tr>
</table>
</div>	

<div style="width:856px; float:left;"><p></p>		
<table border='1' max-width='856' cellspacing='0' cellpadding='0' align="left" bordercolor="#707a7f">
<tr style="position: left;">
<td>
	<table  summary='table' style="height: 610px">

		<thead id="start">
		<tr>
			<th width='855' style="height: 56px"><div style="float:center;">		
			<font size='5' color='#00008B'> Contestant 53</font> 			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 16px"><div style="float:center;">		
			<font size='4' color='#00008B'> Icon's dimensions (width x height) [ 30 cm x 40 cm]. </font> 
			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 36px"><div style="float:center;">		
			<font size='4' color='#00008B'>I do not choose it &nbsp;&nbsp;&nbsp; </font>
			<label class="switch"> <input type="checkbox" name="contestant_53" <?php if (isset($contestant_53) && $contestant_53=="1") echo "checked";?> value="1"> 
			<span class="slider round">	</span> </label> 
						
			<font size='4' color='#00008B'>&nbsp;&nbsp; I choose this icon</font>	</div></th>				
		</tr>
		</thead> 	
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 411px"><div style="float:center;"><a href="javascript:void(0);" onClick="newPopup('Images_/53_.jpg');">
			<img id="captcha" src="Images_/53.jpg" width="600" height="580" alt="Image" /></a></div></th>		
		</tr>
		</thead>
		
	</table>		
</td>
</tr>
</table>
</div>	




<div style="width:856px; float:left;"><p></p>		
<table border='1' max-width='856' cellspacing='0' cellpadding='0' align="left" bordercolor="#707a7f">
<tr style="position: left;">
<td>
	<table  summary='table' style="height: 610px">

		<thead id="start">
		<tr>
			<th width='855' style="height: 56px"><div style="float:center;">		
			<font size='5' color='#00008B'> Contestant 54</font> 			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 16px"><div style="float:center;">		
			<font size='4' color='#00008B'> Icon's dimensions (width x height) [ 25 cm x 32 cm]. </font> 
			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 36px"><div style="float:center;">		
			<font size='4' color='#00008B'>I do not choose it &nbsp;&nbsp;&nbsp; </font>
			<label class="switch"> <input type="checkbox" name="contestant_54" <?php if (isset($contestant_54) && $contestant_54=="1") echo "checked";?> value="1"> 
			<span class="slider round">	</span> </label> <font size='4' color='#00008B'>&nbsp;&nbsp;&nbsp; I choose this icon</font>	</div></th>				
		</tr>
		</thead> 	
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 411px"><div style="float:center;"><a href="javascript:void(0);" onClick="newPopup('Images_/54_.jpg');">
			<img id="captcha" src="Images_/54.jpg" width="600" height="580" alt="Image" /></a></div></th>		
		</tr>
		</thead>
				
	</table>		
</td>
</tr>
</table>
</div>	

<div style="width:856px; float:left;"><p></p>		
<table border='1' max-width='856' cellspacing='0' cellpadding='0' align="left" bordercolor="#707a7f">
<tr style="position: left;">
<td>
	<table  summary='table' style="height: 610px">

		<thead id="start">
		<tr>
			<th width='855' style="height: 56px"><div style="float:center;">		
			<font size='5' color='#00008B'> Contestant 55</font> 			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 16px"><div style="float:center;">		
			<font size='4' color='#00008B'> Icon's dimensions (width x height) [ 50 cm x 90 cm]. </font> 
			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 36px"><div style="float:center;">		
			<font size='4' color='#00008B'>I do not choose it &nbsp;&nbsp;&nbsp; </font>
			<label class="switch"> <input type="checkbox" name="contestant_55" <?php if (isset($contestant_55) && $contestant_55=="1") echo "checked";?> value="1"> 
			<span class="slider round">	</span> </label> 
					
			<font size='4' color='#00008B'>&nbsp;&nbsp; I choose this icon</font>	</div></th>				
		</tr>
		</thead> 	
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 411px"><div style="float:center;"><a href="javascript:void(0);" onClick="newPopup('Images_/55_.jpg');">
			<img id="captcha" src="Images_/55.jpg" width="600" height="580" alt="Image" /></a></div></th>		
		</tr>
		</thead>
		
	</table>		
</td>
</tr>
</table>
</div>	




<div style="width:856px; float:left;"><p></p>		
<table border='1' max-width='856' cellspacing='0' cellpadding='0' align="left" bordercolor="#707a7f">
<tr style="position: left;">
<td>
	<table  summary='table' style="height: 610px">

		<thead id="start">
		<tr>
			<th width='855' style="height: 56px"><div style="float:center;">		
			<font size='5' color='#00008B'> Contestant 56</font> 			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 16px"><div style="float:center;">		
			<font size='4' color='#00008B'> Icon's dimensions (width x height) [ 93 cm x 107 cm]. </font> 
		
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 36px"><div style="float:center;">		
			<font size='4' color='#00008B'>I do not choose it &nbsp;&nbsp;&nbsp; </font>
			<label class="switch"> <input type="checkbox" name="contestant_56" <?php if (isset($contestant_56) && $contestant_56=="1") echo "checked";?> value="1"> 
			<span class="slider round">	</span> </label> <font size='4' color='#00008B'>&nbsp;&nbsp;&nbsp; I choose this icon</font>	</div></th>				
		</tr>
		</thead> 	
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 411px"><div style="float:center;"><a href="javascript:void(0);" onClick="newPopup('Images_/56_.jpg');">
			<img id="captcha" src="Images_/56.jpg" width="600" height="580" alt="Image" /></a></div></th>		
		</tr>
		</thead>
				
	</table>		
</td>
</tr>
</table>
</div>	

<div style="width:856px; float:left;"><p></p>		
<table border='1' max-width='856' cellspacing='0' cellpadding='0' align="left" bordercolor="#707a7f">
<tr style="position: left;">
<td>
	<table  summary='table' style="height: 610px">

		<thead id="start">
		<tr>
			<th width='855' style="height: 56px"><div style="float:center;">		
			<font size='5' color='#00008B'> Contestant 57</font> 			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 16px"><div style="float:center;">		
			<font size='4' color='#00008B'> Icon's dimensions (width x height) [ 45 cm x 65 cm]. </font> 
			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 36px"><div style="float:center;">		
			<font size='4' color='#00008B'>I do not choose it &nbsp;&nbsp;&nbsp; </font>
			<label class="switch"> <input type="checkbox" name="contestant_57" <?php if (isset($contestant_57) && $contestant_57=="1") echo "checked";?> value="1"> 
			<span class="slider round">	</span> </label> 
						
			<font size='4' color='#00008B'>&nbsp;&nbsp; I choose this icon</font>	</div></th>				
		</tr>
		</thead> 	
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 411px"><div style="float:center;"><a href="javascript:void(0);" onClick="newPopup('Images_/57_.jpg');">
			<img id="captcha" src="Images_/57.jpg" width="600" height="580" alt="Image" /></a></div></th>		
		</tr>
		</thead>
		
	</table>		
</td>
</tr>
</table>
</div>	




<div style="width:856px; float:left;"><p></p>		
<table border='1' max-width='856' cellspacing='0' cellpadding='0' align="left" bordercolor="#707a7f">
<tr style="position: left;">
<td>
	<table  summary='table' style="height: 610px">

		<thead id="start">
		<tr>
			<th width='855' style="height: 56px"><div style="float:center;">		
			<font size='5' color='#00008B'> Contestant 58</font> 			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 16px"><div style="float:center;">		
			<font size='4' color='#00008B'> Icon's dimensions (width x height) [ 33 cm x 49 cm]. </font> 
			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 36px"><div style="float:center;">		
			<font size='4' color='#00008B'>I do not choose it &nbsp;&nbsp;&nbsp; </font>
			<label class="switch"> <input type="checkbox" name="contestant_58" <?php if (isset($contestant_58) && $contestant_58=="1") echo "checked";?> value="1"> 
			<span class="slider round">	</span> </label> <font size='4' color='#00008B'>&nbsp;&nbsp;&nbsp; I choose this icon</font>	</div></th>				
		</tr>
		</thead> 	
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 411px"><div style="float:center;"><a href="javascript:void(0);" onClick="newPopup('Images_/58_.jpg');">
			<img id="captcha" src="Images_/58.jpg" width="600" height="580" alt="Image" /></a></div></th>		
		</tr>
		</thead>
				
	</table>		
</td>
</tr>
</table>
</div>	



<div style="width:856px; float:left;"><p></p>		
<table border='1' max-width='856' cellspacing='0' cellpadding='0' align="left" bordercolor="#707a7f">
<tr style="position: left;">
<td>
	<table  summary='table' style="height: 610px">

		<thead id="start">
		<tr>
			<th width='855' style="height: 56px"><div style="float:center;">		
			<font size='5' color='#00008B'> Contestant 59</font> 			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 16px"><div style="float:center;">		
			<font size='4' color='#00008B'> Icon's dimensions (width x height) [ 85 cm x 100 cm ]. </font> 
			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 36px"><div style="float:center;">		
			<font size='4' color='#00008B'>I do not choose it &nbsp;&nbsp;&nbsp; </font>
			<label class="switch"> <input type="checkbox" name="contestant_59" <?php if (isset($contestant_59) && $contestant_59=="1") echo "checked";?> value="1"> 
			<span class="slider round">	</span> </label> 
						
			<font size='4' color='#00008B'>&nbsp;&nbsp; I choose this icon</font>	</div></th>				
		</tr>
		</thead> 	
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 411px"><div style="float:center;"><a href="javascript:void(0);" onClick="newPopup('Images_/59_.jpg');">
			<img id="captcha" src="Images_/59.jpg" width="600" height="580" alt="Image" /></a></div></th>		
		</tr>
		</thead>
		
	</table>		
</td>
</tr>
</table>
</div>	




<div style="width:856px; float:left;"><p></p>		
<table border='1' max-width='856' cellspacing='0' cellpadding='0' align="left" bordercolor="#707a7f">
<tr style="position: left;">
<td>
	<table  summary='table' style="height: 610px">

		<thead id="start">
		<tr>
			<th width='855' style="height: 56px"><div style="float:center;">		
			<font size='5' color='#00008B'> Contestant 60</font> 			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 16px"><div style="float:center;">		
			<font size='4' color='#00008B'> Icon's dimensions (width x height) [ 50 cm x 75 cm ]. </font> 
			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 36px"><div style="float:center;">		
			<font size='4' color='#00008B'>I do not choose it &nbsp;&nbsp;&nbsp; </font>
			<label class="switch"> <input type="checkbox" name="contestant_60" <?php if (isset($contestant_60) && $contestant_60=="1") echo "checked";?> value="1"> 
			<span class="slider round">	</span> </label> <font size='4' color='#00008B'>&nbsp;&nbsp;&nbsp; I choose this icon</font>	</div></th>				
		</tr>
		</thead> 	
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 411px"><div style="float:center;"><a href="javascript:void(0);" onClick="newPopup('Images_/60_.jpg');">
			<img id="captcha" src="Images_/60.jpg" width="600" height="580" alt="Image" /></a></div></th>		
		</tr>
		</thead>
				
	</table>		
</td>
</tr>
</table>
</div>	



<div style="width:856px; float:left;"><p></p>		
<table border='1' max-width='856' cellspacing='0' cellpadding='0' align="left" bordercolor="#707a7f">
<tr style="position: left;">
<td>
	<table  summary='table' style="height: 610px">

		<thead id="start">
		<tr>
			<th width='855' style="height: 56px"><div style="float:center;">		
			<font size='5' color='#00008B'> Contestant 61</font> 			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 16px"><div style="float:center;">		
			<font size='4' color='#00008B'> Icon's dimensions (width x height) [ 16 cm x 25 cm]. </font> 
			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 36px"><div style="float:center;">		
			<font size='4' color='#00008B'>I do not choose it &nbsp;&nbsp;&nbsp; </font>
			<label class="switch"> <input type="checkbox" name="contestant_61" <?php if (isset($contestant_61) && $contestant_61=="1") echo "checked";?> value="1"> 
			<span class="slider round">	</span> </label> 
			
			
			<font size='4' color='#00008B'>&nbsp;&nbsp; I choose this icon</font>	</div></th>				
		</tr>
		</thead> 	
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 411px"><div style="float:center;"><a href="javascript:void(0);" onClick="newPopup('Images_/61_.jpg');">
			<img id="captcha" src="Images_/61.jpg" width="600" height="580" alt="Image" /></a></div></th>		
		</tr>
		</thead>
		
	</table>		
</td>
</tr>
</table>
</div>	




<div style="width:856px; float:left;"><p></p>		
<table border='1' max-width='856' cellspacing='0' cellpadding='0' align="left" bordercolor="#707a7f">
<tr style="position: left;">
<td>
	<table  summary='table' style="height: 610px">

		<thead id="start">
		<tr>
			<th width='855' style="height: 56px"><div style="float:center;">		
			<font size='5' color='#00008B'> Contestant 62</font> 			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 16px"><div style="float:center;">		
			<font size='4' color='#00008B'> Icon's dimensions (width x height) [ 30 cm x 40 cm ]. </font> 
			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 36px"><div style="float:center;">		
			<font size='4' color='#00008B'>I do not choose it &nbsp;&nbsp;&nbsp; </font>
			<label class="switch"> <input type="checkbox" name="contestant_62" <?php if (isset($contestant_62) && $contestant_62=="1") echo "checked";?> value="1"> 
			<span class="slider round">	</span> </label> <font size='4' color='#00008B'>&nbsp;&nbsp;&nbsp; I choose this icon</font>	</div></th>				
		</tr>
		</thead> 	
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 411px"><div style="float:center;"><a href="javascript:void(0);" onClick="newPopup('Images_/62_.jpg');">
			<img id="captcha" src="Images_/62.jpg" width="600" height="580" alt="Image" /></a></div></th>		
		</tr>
		</thead>
				
	</table>		
</td>
</tr>
</table>
</div>	

<div style="width:856px; float:left;"><p></p>		
<table border='1' max-width='856' cellspacing='0' cellpadding='0' align="left" bordercolor="#707a7f">
<tr style="position: left;">
<td>
	<table  summary='table' style="height: 610px">

		<thead id="start">
		<tr>
			<th width='855' style="height: 56px"><div style="float:center;">		
			<font size='5' color='#00008B'> Contestant 63</font> 			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 16px"><div style="float:center;">		
			<font size='4' color='#00008B'> Icon's dimensions (width x height) [ 55 cm x 55 cm]. </font> 
			
			</div></th>				
		</tr>
		</thead> 
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 36px"><div style="float:center;">		
			<font size='4' color='#00008B'>I do not choose it &nbsp;&nbsp;&nbsp; </font>
			<label class="switch"> <input type="checkbox" name="contestant_63" <?php if (isset($contestant_63) && $contestant_63=="1") echo "checked";?> value="1"> 
			<span class="slider round">	</span> </label> 
			
			
			<font size='4' color='#00008B'>&nbsp;&nbsp; I choose this icon</font>	</div></th>				
		</tr>
		</thead> 	
		
		<thead id="start">
		<tr>
			<th width='855' style="height: 411px"><div style="float:center;"><a href="javascript:void(0);" onClick="newPopup('Images_/63_.jpg');">
			<img id="captcha" src="Images_/63.jpg" width="600" height="580" alt="Image" /></a></div></th>		
		</tr>
		</thead>
		
	</table>		
</td>
</tr>
</table>
</div>	




<div style="width:855px; float:left;"><p></p></div>

<table border='1' width='856' cellspacing='0' cellpadding='0' bordercolor="#707a7f">
<tr style="position: left;">
<td>
<table  summary='table' style="width: 807px">

  <thead id="start">
    <tr>

		<th width='500' style="height: 41px">

		<div style="float:left" class="g-recaptcha" data-sitekey="6LeZQFQUAAAAAH3NCkpVuP3u2buh-rx0-O1Kh32R"></div>		
	
		<div style="float:center;">				
		<input type="submit" class="button" name="submit" id="submit" value="  F  I  N  I  S  H   V  O  T  I  N  G  ">
		</div></th>
    </tr>
  </thead>
		
</table>
</td>
</tr>
</table>

</table>
</tr>
</table>
</div>	
<!--  External or Last Table -->


<div style="width:855px; float:left;"><p></p></div>
<div style="width:855px; float:left;"><p></p></div>		

</p>
			</form>	
			<?php 
			}
			else
			{
				echo $success;
			?>
				<!--<script type="text/javascript" language="Javascript">window.open('index.php?view=login','_tab');</script>-->
			<?php
			}			
			?>

</div><!--close content_item-->
</div><!--close content--> 
</div>
</div>
</div>
</div>
</div>