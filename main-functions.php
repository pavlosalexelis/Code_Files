<?php

function mb_str_word_count($string, $format = 0, $charlist = '[]') 
{
        mb_internal_encoding( 'UTF-8');
        mb_regex_encoding( 'UTF-8');

        $words = mb_split('[^\x{0600}-\x{06FF}]', $string);
        switch ($format) 
		{
            case 0:
                return count($words);
                break;
            case 1:
            case 2:
                return $words;
                break;
            default:
                return $words;
                break;
        }
}

function checkUser()
{

	if (!isset($_SESSION['adminUser'])) 
	{		
		header('Location: index.php?view=17C3311EBE4308CA59F7F345901D0EE6');

	}
}

function encryptPass($Password)
{
	$sql = "Select Value from settings where SettingsId =1";
	$result = dbQuery($sql);
	$Password = sha1($Password);
	
	if (dbNumRows($result) == 1) 
	{
		$row = dbFetchAssoc($result);
		$salt = $row['Value'];
		$Password = md5($salt.$Password);
	}
	
	$sql = "Select PASSWORD('$Password') as Pass";
	$result = dbQuery($sql);
	if (dbNumRows($result) == 1) 
	{
		$row = dbFetchAssoc($result);
		$Password = $row['Pass'];
	}
	
	return substr($Password,3,10);
}

function encryptPassword($Password)
{
	$sql = "Select Value from settings where SettingsId =1";
	$result = dbQuery($sql);
	$Password = sha1($Password);
	
	if (dbNumRows($result) == 1) 
	{
		$row = dbFetchAssoc($result);
		$salt = $row['Value'];
		$Password = md5($salt.$Password);
	}
	
	//ENCRYPT WITH MYSQL MD5 as well
	$sql = "Select PASSWORD('$Password') as Pass";
	$result = dbQuery($sql);
	if (dbNumRows($result) == 1) 
	{
		$row = dbFetchAssoc($result);
		$Password = $row['Pass'];
	}
	
	return $Password;
}

function takeEmail($userId)
{
	$email2 = '';		
	$sql = "Select Email from users where UserId='$userId'";
	$result = dbQuery($sql);
	
	if (dbNumRows($result) >= 1) 
	{
		$row = dbFetchAssoc($result);
		$email2 = $row['Email'];

	}
	
	return $email2;
}

function checkLogin($email,$password)
{
	$dbConn = mysqli_connect ('---', 'eiao2_e--', '----', 'eiao248370----') or die ('MySQL connect failed. ' . mysql_error());
	mysqli_select_db($dbConn, '----') or die('Cannot select database. ' . mysql_error());
				
	$login = Array();
	$login['Login'] = false;
	$login['LastLogin'] = '0000-00-00 00:00:00';
	$login['UserId'] = 0;
	$login['Name'] = 0;
	$sql = "Select Email,LastLoginDate,UserId,Name from users where Password = '$password' AND Email='$email'";	
		
	if ($result=mysqli_query($dbConn,$sql))		
	{		
		$row = mysqli_fetch_array($result);
		if ($row != '')
		{
			$login['Login'] = true;
			$login['LastLogin'] = $row['LastLoginDate'];
			$login['UserId'] = $row['UserId'];
			$login['Name'] = $row['Name'];
		}
		mysqli_free_result($result);
	}
	mysqli_close($dbConn);
	//echo $login['Name'];
	return $login;		
}

function selectname($userId)
{		
	$dbConn = mysqli_connect ('db.grserver.gr:3306', 'eiao2_---', '----', 'eiao2-----') or die ('MySQL connect failed. ' . mysql_error());
	mysqli_select_db($dbConn, 'eiao248370_----') or die('Cannot select database. ' . mysql_error());

	$login = Array();
	$login['Login'] = false;
	$login['LastLogin'] = '0000-00-00 00:00:00';
	$login['Name'] = 0;
	$login['Email'] = 0;
		
	$sql = "Select Email,LastLoginDate,UserId,Name from users where UserId = '$userId'";

	if ($result=mysqli_query($dbConn,$sql))		
	{		
		$row = mysqli_fetch_array($result);
		if ($row != '')
		{
			$login['Login'] = true;
			$login['LastLogin'] = $row['LastLoginDate'];
			$login['UserId'] = $row['UserId'];
			$login['Name'] = $row['Name'];
			$login['Email'] = $row['Email'];

		}
		mysqli_free_result($result);
	}
	mysqli_close($dbConn);
	return $login;	
}

function checkSubmissions($userId)
{
	$dbConn = mysqli_connect ('---', '----', '------', '----') or die ('MySQL connect failed. ' . mysql_error());
	mysqli_select_db($dbConn, '---') or die('Cannot select database. ' . mysql_error());
	
	$submissions = 0;		
	$sql = "Select SubmissionId from Users_With_IPs where UploadedUserId = $userId";
	
	if ($result=mysqli_query($dbConn,$sql))		
	{		
		$row = mysqli_fetch_array($result);
		if ($row != '')
		{
			$submissions = 1;
		}
		mysqli_free_result($result);
	}
	mysqli_close($dbConn);
	return $submissions;		
	
}
				
function checkFirstSubmissions($userId)
{
	$submissions = 0;		
	$sql = "Select SubmissionId from first_submissions where UploadedUserId = $userId";
	$result = dbQuery($sql);	
	
	if (dbNumRows($result) >= 1) 
	{
		$row = dbFetchAssoc($result);
		$submissions = dbNumRows($result);
	}	
	return $submissions;	
}

function checkSecondSubmissions($userId)
{
	$submissions = 0;		
	$sql = "Select SubmissionId from second_submissions where UploadedUserId = $userId";
	$result = dbQuery($sql);	
	
	if (dbNumRows($result) >= 1) 
	{
		$row = dbFetchAssoc($result);
		$submissions = dbNumRows($result);
	}	
	return $submissions;	
}

function checkArea1Submissions($userId)
{
	$area1submissions = 0;		
	$sql = "Select area1SubmissionId from area1submissions where UploadedUserId = $userId";
	$area1result = dbQuery($sql);	
	
	if (dbNumRows($area1result) >= 1) 
	{
		$row = dbFetchAssoc($area1result);
		$area1submissions = dbNumRows($area1result);
	}	
	return $area1submissions;	
}

function checkArea2Submissions($userId)
{		
	$area2submissions = 0;	
	$sql = "Select area2SubmissionId from area2submissions where UploadedUserId = $userId";
	$area2result = dbQuery($sql);		
	
	if (dbNumRows($area2result) >= 1) 
	{
		$row = dbFetchAssoc($area2result);
		$area2submissions = dbNumRows($area2result);
	}	
	return $area2submissions;
}

function checkArea3Submissions($userId)
{	
	$area3submissions = 0;	
	$sql = "Select area3SubmissionId from area3submissions where UploadedUserId = $userId";
	$area3result = dbQuery($sql);		
	
	if (dbNumRows($area3result) >= 1) 
	{
		$row = dbFetchAssoc($area3result);
		$area3submissions = dbNumRows($area3result);
	}	
	return $area3submissions;	
}

function smtpmailer() { 
	global $error;
	$mail = new PHPMailer();  // create a new object
	$mail->IsSMTP(); // enable SMTP
	$mail->SMTPDebug = 0;  // debugging: 1 = errors and messages, 2 = messages only
	$mail->SMTPAuth = true;  // authentication enabled

	$mail->Host = '------';	
	$mail->Username = GUSER;  
	$mail->Password = GPWD;           
	$mail->IsHTML (TRUE);
	$mail->SetFrom('-----','------');	
	
	return $mail;
}

function check_email_address($email) 
{
        // First, check that there's one @ symbol, and that the lengths are right
        if (!preg_match("/^[^@]{1,64}@[^@]{1,255}$/", $email)) {
            // Email invalid because wrong number of characters in one section, or wrong number of @ symbols.
            return false;
        }
        // Split it into sections to make life easier
        $email_array = explode("@", $email);
        $local_array = explode(".", $email_array[0]);
        for ($i = 0; $i < sizeof($local_array); $i++) {
            if (!preg_match("/^(([A-Za-z0-9!#$%&'*+\/=?^_`{|}~-][A-Za-z0-9!#$%&'*+\/=?^_`{|}~\.-]{0,63})|(\"[^(\\|\")]{0,62}\"))$/", $local_array[$i])) {
                return false;
            }
        }
        if (!preg_match("/^\[?[0-9\.]+\]?$/", $email_array[1])) { // Check if domain is IP. If not, it should be valid domain name
            $domain_array = explode(".", $email_array[1]);
            if (sizeof($domain_array) < 2) {
                return false; // Not enough parts to domain
            }
            for ($i = 0; $i < sizeof($domain_array); $i++) {
                if (!preg_match("/^(([A-Za-z0-9][A-Za-z0-9-]{0,61}[A-Za-z0-9])|([A-Za-z0-9]+))$/", $domain_array[$i])) {
                    return false;
                }
            }
        }

        return true;
}

function count_of_70_votes($contestant_1, $contestant_2, $contestant_3, $contestant_4, $contestant_5, $contestant_6, $contestant_7, $contestant_8, $contestant_9, $contestant_10, 
			$contestant_11, $contestant_12, $contestant_13, $contestant_14, $contestant_15, $contestant_16, $contestant_17, $contestant_18, $contestant_19, $contestant_20, 
			$contestant_21, $contestant_22, $contestant_23, $contestant_24, $contestant_25, $contestant_26, $contestant_27, $contestant_28, $contestant_29, $contestant_30, 
			$contestant_31, $contestant_32, $contestant_33, $contestant_34, $contestant_35, $contestant_36, $contestant_37, $contestant_38, $contestant_39, $contestant_40, 
			$contestant_41, $contestant_42, $contestant_43, $contestant_44, $contestant_45, $contestant_46, $contestant_47, $contestant_48, $contestant_49, $contestant_50, 
			$contestant_51, $contestant_52, $contestant_53, $contestant_54, $contestant_55, $contestant_56, $contestant_57, $contestant_58, $contestant_59, $contestant_60, 
			$contestant_61, $contestant_62, $contestant_63, $contestant_64, $contestant_65, $contestant_66, $contestant_67, $contestant_68, $contestant_69, $contestant_70,
			$contestant_71, $contestant_72, $contestant_73, $contestant_74, $contestant_75, $contestant_76, $contestant_77, $contestant_78, $contestant_79, $contestant_80)				
			
{
	$count_of_votes=0;	
		
    if ($contestant_1 == "1") {  $count_of_votes++; }	
    if ($contestant_2 == "1") {  $count_of_votes++; }	
    if ($contestant_3 == "1") {  $count_of_votes++; }	
    if ($contestant_4 == "1") {  $count_of_votes++; }	
    if ($contestant_5 == "1") {  $count_of_votes++; }	
    if ($contestant_6 == "1") {  $count_of_votes++; }	
    if ($contestant_7 == "1") {  $count_of_votes++; }	
    if ($contestant_8 == "1") {  $count_of_votes++; }	
    if ($contestant_9 == "1") {  $count_of_votes++; }	
    if ($contestant_10 == "1") {  $count_of_votes++; }
    if ($contestant_11 == "1") {  $count_of_votes++; }	
    if ($contestant_12 == "1") {  $count_of_votes++; }	
    if ($contestant_13 == "1") {  $count_of_votes++; }	
    if ($contestant_14 == "1") {  $count_of_votes++; }	
    if ($contestant_15 == "1") {  $count_of_votes++; }	
    if ($contestant_16 == "1") {  $count_of_votes++; }	
    if ($contestant_17 == "1") {  $count_of_votes++; }	
    if ($contestant_18 == "1") {  $count_of_votes++; }	
    if ($contestant_19 == "1") {  $count_of_votes++; }	
	if ($contestant_20 == "1") {  $count_of_votes++; }	
	if ($contestant_21 == "1") {  $count_of_votes++; }	
    if ($contestant_22 == "1") {  $count_of_votes++; }	
    if ($contestant_23 == "1") {  $count_of_votes++; }	
    if ($contestant_24 == "1") {  $count_of_votes++; }	
    if ($contestant_25 == "1") {  $count_of_votes++; }	
    if ($contestant_26 == "1") {  $count_of_votes++; }	
    if ($contestant_27 == "1") {  $count_of_votes++; }	
    if ($contestant_28 == "1") {  $count_of_votes++; }	
    if ($contestant_29 == "1") {  $count_of_votes++; }	
	if ($contestant_30 == "1") {  $count_of_votes++; }	
	if ($contestant_31 == "1") {  $count_of_votes++; }	
    if ($contestant_32 == "1") {  $count_of_votes++; }	
    if ($contestant_33 == "1") {  $count_of_votes++; }	
    if ($contestant_34 == "1") {  $count_of_votes++; }	
    if ($contestant_35 == "1") {  $count_of_votes++; }	
    if ($contestant_36 == "1") {  $count_of_votes++; }	
    if ($contestant_37 == "1") {  $count_of_votes++; }	
    if ($contestant_38 == "1") {  $count_of_votes++; }	
    if ($contestant_39 == "1") {  $count_of_votes++; }
	if ($contestant_40 == "1") {  $count_of_votes++; }	
	if ($contestant_41 == "1") {  $count_of_votes++; }	
    if ($contestant_42 == "1") {  $count_of_votes++; }	
    if ($contestant_43 == "1") {  $count_of_votes++; }	
    if ($contestant_44 == "1") {  $count_of_votes++; }	
    if ($contestant_45 == "1") {  $count_of_votes++; }	
    if ($contestant_46 == "1") {  $count_of_votes++; }	
    if ($contestant_47 == "1") {  $count_of_votes++; }	
    if ($contestant_48 == "1") {  $count_of_votes++; }	
    if ($contestant_49 == "1") {  $count_of_votes++; }
	if ($contestant_50 == "1") {  $count_of_votes++; }	
	if ($contestant_51 == "1") {  $count_of_votes++; }	
    if ($contestant_52 == "1") {  $count_of_votes++; }	
    if ($contestant_53 == "1") {  $count_of_votes++; }	
    if ($contestant_54 == "1") {  $count_of_votes++; }	
    if ($contestant_55 == "1") {  $count_of_votes++; }	
    if ($contestant_56 == "1") {  $count_of_votes++; }	
    if ($contestant_57 == "1") {  $count_of_votes++; }	
    if ($contestant_58 == "1") {  $count_of_votes++; }	
    if ($contestant_59 == "1") {  $count_of_votes++; }
	if ($contestant_60 == "1") {  $count_of_votes++; }	
	if ($contestant_61 == "1") {  $count_of_votes++; }	
    if ($contestant_62 == "1") {  $count_of_votes++; }	
    if ($contestant_63 == "1") {  $count_of_votes++; }	
    if ($contestant_64 == "1") {  $count_of_votes++; }	
    if ($contestant_65 == "1") {  $count_of_votes++; }	
    if ($contestant_66 == "1") {  $count_of_votes++; }	
    if ($contestant_67 == "1") {  $count_of_votes++; }	
    if ($contestant_68 == "1") {  $count_of_votes++; }	
    if ($contestant_69 == "1") {  $count_of_votes++; }
	if ($contestant_70 == "1") {  $count_of_votes++; }	
	if ($contestant_71 == "1") {  $count_of_votes++; }	
    if ($contestant_72 == "1") {  $count_of_votes++; }	
    if ($contestant_73 == "1") {  $count_of_votes++; }	
    if ($contestant_74 == "1") {  $count_of_votes++; }	
    if ($contestant_75 == "1") {  $count_of_votes++; }	
    if ($contestant_76 == "1") {  $count_of_votes++; }	
    if ($contestant_77 == "1") {  $count_of_votes++; }	
    if ($contestant_78 == "1") {  $count_of_votes++; }	
    if ($contestant_79 == "1") {  $count_of_votes++; }
	if ($contestant_80 == "1") {  $count_of_votes++; }			
	
	return $count_of_votes;

}

function count_of_70_votes_for_first_prize($contestant_1, $contestant_2, $contestant_3, $contestant_4, $contestant_5, $contestant_6, $contestant_7, $contestant_8, $contestant_9, $contestant_10, 
			$contestant_11, $contestant_12, $contestant_13, $contestant_14, $contestant_15, $contestant_16, $contestant_17, $contestant_18, $contestant_19, $contestant_20, 
			$contestant_21, $contestant_22, $contestant_23, $contestant_24, $contestant_25, $contestant_26, $contestant_27, $contestant_28, $contestant_29, $contestant_30, 
			$contestant_31, $contestant_32, $contestant_33, $contestant_34, $contestant_35, $contestant_36, $contestant_37, $contestant_38, $contestant_39, $contestant_40, 
			$contestant_41, $contestant_42, $contestant_43, $contestant_44, $contestant_45, $contestant_46, $contestant_47, $contestant_48, $contestant_49, $contestant_50, 
			$contestant_51, $contestant_52, $contestant_53, $contestant_54, $contestant_55, $contestant_56, $contestant_57, $contestant_58, $contestant_59, $contestant_60, 
			$contestant_61, $contestant_62, $contestant_63, $contestant_64, $contestant_65, $contestant_66, $contestant_67, $contestant_68, $contestant_69, $contestant_70,
			$contestant_71, $contestant_72, $contestant_73, $contestant_74, $contestant_75, $contestant_76, $contestant_77, $contestant_78, $contestant_79, $contestant_80)				
			
{
	$count_of_votes=0;	
		
    if ($contestant_1 == "1") {  $count_of_votes++; }	
    if ($contestant_2 == "1") {  $count_of_votes++; }	
    if ($contestant_3 == "1") {  $count_of_votes++; }	
    if ($contestant_4 == "1") {  $count_of_votes++; }	
    if ($contestant_5 == "1") {  $count_of_votes++; }	
    if ($contestant_6 == "1") {  $count_of_votes++; }	
    if ($contestant_7 == "1") {  $count_of_votes++; }	
    if ($contestant_8 == "1") {  $count_of_votes++; }	
    if ($contestant_9 == "1") {  $count_of_votes++; }	
    if ($contestant_10 == "1") {  $count_of_votes++; }
    if ($contestant_11 == "1") {  $count_of_votes++; }	
    if ($contestant_12 == "1") {  $count_of_votes++; }	
    if ($contestant_13 == "1") {  $count_of_votes++; }	
    if ($contestant_14 == "1") {  $count_of_votes++; }	
    if ($contestant_15 == "1") {  $count_of_votes++; }	
    if ($contestant_16 == "1") {  $count_of_votes++; }	
    if ($contestant_17 == "1") {  $count_of_votes++; }	
    if ($contestant_18 == "1") {  $count_of_votes++; }	
    if ($contestant_19 == "1") {  $count_of_votes++; }	
	if ($contestant_20 == "1") {  $count_of_votes++; }	
	if ($contestant_21 == "1") {  $count_of_votes++; }	
    if ($contestant_22 == "1") {  $count_of_votes++; }	
    if ($contestant_23 == "1") {  $count_of_votes++; }	
    if ($contestant_24 == "1") {  $count_of_votes++; }	
    if ($contestant_25 == "1") {  $count_of_votes++; }	
    if ($contestant_26 == "1") {  $count_of_votes++; }	
    if ($contestant_27 == "1") {  $count_of_votes++; }	
    if ($contestant_28 == "1") {  $count_of_votes++; }	
    if ($contestant_29 == "1") {  $count_of_votes++; }	
	if ($contestant_30 == "1") {  $count_of_votes++; }	
	if ($contestant_31 == "1") {  $count_of_votes++; }	
    if ($contestant_32 == "1") {  $count_of_votes++; }	
    if ($contestant_33 == "1") {  $count_of_votes++; }	
    if ($contestant_34 == "1") {  $count_of_votes++; }	
    if ($contestant_35 == "1") {  $count_of_votes++; }	
    if ($contestant_36 == "1") {  $count_of_votes++; }	
    if ($contestant_37 == "1") {  $count_of_votes++; }	
    if ($contestant_38 == "1") {  $count_of_votes++; }	
    if ($contestant_39 == "1") {  $count_of_votes++; }
	if ($contestant_40 == "1") {  $count_of_votes++; }	
	if ($contestant_41 == "1") {  $count_of_votes++; }	
    if ($contestant_42 == "1") {  $count_of_votes++; }	
    if ($contestant_43 == "1") {  $count_of_votes++; }	
    if ($contestant_44 == "1") {  $count_of_votes++; }	
    if ($contestant_45 == "1") {  $count_of_votes++; }	
    if ($contestant_46 == "1") {  $count_of_votes++; }	
    if ($contestant_47 == "1") {  $count_of_votes++; }	
    if ($contestant_48 == "1") {  $count_of_votes++; }	
    if ($contestant_49 == "1") {  $count_of_votes++; }
	if ($contestant_50 == "1") {  $count_of_votes++; }	
	if ($contestant_51 == "1") {  $count_of_votes++; }	
    if ($contestant_52 == "1") {  $count_of_votes++; }	
    if ($contestant_53 == "1") {  $count_of_votes++; }	
    if ($contestant_54 == "1") {  $count_of_votes++; }	
    if ($contestant_55 == "1") {  $count_of_votes++; }	
    if ($contestant_56 == "1") {  $count_of_votes++; }	
    if ($contestant_57 == "1") {  $count_of_votes++; }	
    if ($contestant_58 == "1") {  $count_of_votes++; }	
    if ($contestant_59 == "1") {  $count_of_votes++; }
	if ($contestant_60 == "1") {  $count_of_votes++; }	
	if ($contestant_61 == "1") {  $count_of_votes++; }	
    if ($contestant_62 == "1") {  $count_of_votes++; }	
    if ($contestant_63 == "1") {  $count_of_votes++; }	
    if ($contestant_64 == "1") {  $count_of_votes++; }	
    if ($contestant_65 == "1") {  $count_of_votes++; }	
    if ($contestant_66 == "1") {  $count_of_votes++; }	
    if ($contestant_67 == "1") {  $count_of_votes++; }	
    if ($contestant_68 == "1") {  $count_of_votes++; }	
    if ($contestant_69 == "1") {  $count_of_votes++; }
	if ($contestant_70 == "1") {  $count_of_votes++; }	
	if ($contestant_71 == "1") {  $count_of_votes++; }	
    if ($contestant_72 == "1") {  $count_of_votes++; }	
    if ($contestant_73 == "1") {  $count_of_votes++; }	
    if ($contestant_74 == "1") {  $count_of_votes++; }	
    if ($contestant_75 == "1") {  $count_of_votes++; }	
    if ($contestant_76 == "1") {  $count_of_votes++; }	
    if ($contestant_77 == "1") {  $count_of_votes++; }	
    if ($contestant_78 == "1") {  $count_of_votes++; }	
    if ($contestant_79 == "1") {  $count_of_votes++; }
	if ($contestant_80 == "1") {  $count_of_votes++; }			
	
	return $count_of_votes;

}

function count_of_70_votes_for_second_prize($contestant_1, $contestant_2, $contestant_3, $contestant_4, $contestant_5, $contestant_6, $contestant_7, $contestant_8, $contestant_9, $contestant_10, 
			$contestant_11, $contestant_12, $contestant_13, $contestant_14, $contestant_15, $contestant_16, $contestant_17, $contestant_18, $contestant_19, $contestant_20, 
			$contestant_21, $contestant_22, $contestant_23, $contestant_24, $contestant_25, $contestant_26, $contestant_27, $contestant_28, $contestant_29, $contestant_30, 
			$contestant_31, $contestant_32, $contestant_33, $contestant_34, $contestant_35, $contestant_36, $contestant_37, $contestant_38, $contestant_39, $contestant_40, 
			$contestant_41, $contestant_42, $contestant_43, $contestant_44, $contestant_45, $contestant_46, $contestant_47, $contestant_48, $contestant_49, $contestant_50, 
			$contestant_51, $contestant_52, $contestant_53, $contestant_54, $contestant_55, $contestant_56, $contestant_57, $contestant_58, $contestant_59, $contestant_60, 
			$contestant_61, $contestant_62, $contestant_63, $contestant_64, $contestant_65, $contestant_66, $contestant_67, $contestant_68, $contestant_69, $contestant_70,
			$contestant_71, $contestant_72, $contestant_73, $contestant_74, $contestant_75, $contestant_76, $contestant_77, $contestant_78, $contestant_79, $contestant_80)				
			
{
	$count_of_votes=0;	
		
    if ($contestant_1 == "2") {  $count_of_votes++; }	
    if ($contestant_2 == "2") {  $count_of_votes++; }	
    if ($contestant_3 == "2") {  $count_of_votes++; }	
    if ($contestant_4 == "2") {  $count_of_votes++; }	
    if ($contestant_5 == "2") {  $count_of_votes++; }	
    if ($contestant_6 == "2") {  $count_of_votes++; }	
    if ($contestant_7 == "2") {  $count_of_votes++; }	
    if ($contestant_8 == "2") {  $count_of_votes++; }	
    if ($contestant_9 == "2") {  $count_of_votes++; }	
    if ($contestant_10 == "2") {  $count_of_votes++; }
    if ($contestant_11 == "2") {  $count_of_votes++; }	
    if ($contestant_12 == "2") {  $count_of_votes++; }	
    if ($contestant_13 == "2") {  $count_of_votes++; }	
    if ($contestant_14 == "2") {  $count_of_votes++; }	
    if ($contestant_15 == "2") {  $count_of_votes++; }	
    if ($contestant_16 == "2") {  $count_of_votes++; }	
    if ($contestant_17 == "2") {  $count_of_votes++; }	
    if ($contestant_18 == "2") {  $count_of_votes++; }	
    if ($contestant_19 == "2") {  $count_of_votes++; }	
	if ($contestant_20 == "2") {  $count_of_votes++; }	
	if ($contestant_21 == "2") {  $count_of_votes++; }	
    if ($contestant_22 == "2") {  $count_of_votes++; }	
    if ($contestant_23 == "2") {  $count_of_votes++; }	
    if ($contestant_24 == "2") {  $count_of_votes++; }	
    if ($contestant_25 == "2") {  $count_of_votes++; }	
    if ($contestant_26 == "2") {  $count_of_votes++; }	
    if ($contestant_27 == "2") {  $count_of_votes++; }	
    if ($contestant_28 == "2") {  $count_of_votes++; }	
    if ($contestant_29 == "2") {  $count_of_votes++; }	
	if ($contestant_30 == "2") {  $count_of_votes++; }	
	if ($contestant_31 == "2") {  $count_of_votes++; }	
    if ($contestant_32 == "2") {  $count_of_votes++; }	
    if ($contestant_33 == "2") {  $count_of_votes++; }	
    if ($contestant_34 == "2") {  $count_of_votes++; }	
    if ($contestant_35 == "2") {  $count_of_votes++; }	
    if ($contestant_36 == "2") {  $count_of_votes++; }	
    if ($contestant_37 == "2") {  $count_of_votes++; }	
    if ($contestant_38 == "2") {  $count_of_votes++; }	
    if ($contestant_39 == "2") {  $count_of_votes++; }
	if ($contestant_40 == "2") {  $count_of_votes++; }	
	if ($contestant_41 == "2") {  $count_of_votes++; }	
    if ($contestant_42 == "2") {  $count_of_votes++; }	
    if ($contestant_43 == "2") {  $count_of_votes++; }	
    if ($contestant_44 == "2") {  $count_of_votes++; }	
    if ($contestant_45 == "2") {  $count_of_votes++; }	
    if ($contestant_46 == "2") {  $count_of_votes++; }	
    if ($contestant_47 == "2") {  $count_of_votes++; }	
    if ($contestant_48 == "2") {  $count_of_votes++; }	
    if ($contestant_49 == "2") {  $count_of_votes++; }
	if ($contestant_50 == "2") {  $count_of_votes++; }	
	if ($contestant_51 == "2") {  $count_of_votes++; }	
    if ($contestant_52 == "2") {  $count_of_votes++; }	
    if ($contestant_53 == "2") {  $count_of_votes++; }	
    if ($contestant_54 == "2") {  $count_of_votes++; }	
    if ($contestant_55 == "2") {  $count_of_votes++; }	
    if ($contestant_56 == "2") {  $count_of_votes++; }	
    if ($contestant_57 == "2") {  $count_of_votes++; }	
    if ($contestant_58 == "2") {  $count_of_votes++; }	
    if ($contestant_59 == "2") {  $count_of_votes++; }
	if ($contestant_60 == "2") {  $count_of_votes++; }	
	if ($contestant_61 == "2") {  $count_of_votes++; }	
    if ($contestant_62 == "2") {  $count_of_votes++; }	
    if ($contestant_63 == "2") {  $count_of_votes++; }	
    if ($contestant_64 == "2") {  $count_of_votes++; }	
    if ($contestant_65 == "2") {  $count_of_votes++; }	
    if ($contestant_66 == "2") {  $count_of_votes++; }	
    if ($contestant_67 == "2") {  $count_of_votes++; }	
    if ($contestant_68 == "2") {  $count_of_votes++; }	
    if ($contestant_69 == "2") {  $count_of_votes++; }
	if ($contestant_70 == "2") {  $count_of_votes++; }	
	if ($contestant_71 == "2") {  $count_of_votes++; }	
    if ($contestant_72 == "2") {  $count_of_votes++; }	
    if ($contestant_73 == "2") {  $count_of_votes++; }	
    if ($contestant_74 == "2") {  $count_of_votes++; }	
    if ($contestant_75 == "2") {  $count_of_votes++; }	
    if ($contestant_76 == "2") {  $count_of_votes++; }	
    if ($contestant_77 == "2") {  $count_of_votes++; }	
    if ($contestant_78 == "2") {  $count_of_votes++; }	
    if ($contestant_79 == "2") {  $count_of_votes++; }
	if ($contestant_80 == "2") {  $count_of_votes++; }			
	
	return $count_of_votes;

}

function count_of_70_votes_for_third_prize($contestant_1, $contestant_2, $contestant_3, $contestant_4, $contestant_5, $contestant_6, $contestant_7, $contestant_8, $contestant_9, $contestant_10, 
			$contestant_11, $contestant_12, $contestant_13, $contestant_14, $contestant_15, $contestant_16, $contestant_17, $contestant_18, $contestant_19, $contestant_20, 
			$contestant_21, $contestant_22, $contestant_23, $contestant_24, $contestant_25, $contestant_26, $contestant_27, $contestant_28, $contestant_29, $contestant_30, 
			$contestant_31, $contestant_32, $contestant_33, $contestant_34, $contestant_35, $contestant_36, $contestant_37, $contestant_38, $contestant_39, $contestant_40, 
			$contestant_41, $contestant_42, $contestant_43, $contestant_44, $contestant_45, $contestant_46, $contestant_47, $contestant_48, $contestant_49, $contestant_50, 
			$contestant_51, $contestant_52, $contestant_53, $contestant_54, $contestant_55, $contestant_56, $contestant_57, $contestant_58, $contestant_59, $contestant_60, 
			$contestant_61, $contestant_62, $contestant_63, $contestant_64, $contestant_65, $contestant_66, $contestant_67, $contestant_68, $contestant_69, $contestant_70,
			$contestant_71, $contestant_72, $contestant_73, $contestant_74, $contestant_75, $contestant_76, $contestant_77, $contestant_78, $contestant_79, $contestant_80)				
			
{
	$count_of_votes=0;	
		
    if ($contestant_1 == "3") {  $count_of_votes++; }	
    if ($contestant_2 == "3") {  $count_of_votes++; }	
    if ($contestant_3 == "3") {  $count_of_votes++; }	
    if ($contestant_4 == "3") {  $count_of_votes++; }	
    if ($contestant_5 == "3") {  $count_of_votes++; }	
    if ($contestant_6 == "3") {  $count_of_votes++; }	
    if ($contestant_7 == "3") {  $count_of_votes++; }	
    if ($contestant_8 == "3") {  $count_of_votes++; }	
    if ($contestant_9 == "3") {  $count_of_votes++; }	
    if ($contestant_10 == "3") {  $count_of_votes++; }
    if ($contestant_11 == "3") {  $count_of_votes++; }	
    if ($contestant_12 == "3") {  $count_of_votes++; }	
    if ($contestant_13 == "3") {  $count_of_votes++; }	
    if ($contestant_14 == "3") {  $count_of_votes++; }	
    if ($contestant_15 == "3") {  $count_of_votes++; }	
    if ($contestant_16 == "3") {  $count_of_votes++; }	
    if ($contestant_17 == "3") {  $count_of_votes++; }	
    if ($contestant_18 == "3") {  $count_of_votes++; }	
    if ($contestant_19 == "3") {  $count_of_votes++; }	
	if ($contestant_20 == "3") {  $count_of_votes++; }	
	if ($contestant_21 == "3") {  $count_of_votes++; }	
    if ($contestant_22 == "3") {  $count_of_votes++; }	
    if ($contestant_23 == "3") {  $count_of_votes++; }	
    if ($contestant_24 == "3") {  $count_of_votes++; }	
    if ($contestant_25 == "3") {  $count_of_votes++; }	
    if ($contestant_26 == "3") {  $count_of_votes++; }	
    if ($contestant_27 == "3") {  $count_of_votes++; }	
    if ($contestant_28 == "3") {  $count_of_votes++; }	
    if ($contestant_29 == "3") {  $count_of_votes++; }	
	if ($contestant_30 == "3") {  $count_of_votes++; }	
	if ($contestant_31 == "3") {  $count_of_votes++; }	
    if ($contestant_32 == "3") {  $count_of_votes++; }	
    if ($contestant_33 == "3") {  $count_of_votes++; }	
    if ($contestant_34 == "3") {  $count_of_votes++; }	
    if ($contestant_35 == "3") {  $count_of_votes++; }	
    if ($contestant_36 == "3") {  $count_of_votes++; }	
    if ($contestant_37 == "3") {  $count_of_votes++; }	
    if ($contestant_38 == "3") {  $count_of_votes++; }	
    if ($contestant_39 == "3") {  $count_of_votes++; }
	if ($contestant_40 == "3") {  $count_of_votes++; }	
	if ($contestant_41 == "3") {  $count_of_votes++; }	
    if ($contestant_42 == "3") {  $count_of_votes++; }	
    if ($contestant_43 == "3") {  $count_of_votes++; }	
    if ($contestant_44 == "3") {  $count_of_votes++; }	
    if ($contestant_45 == "3") {  $count_of_votes++; }	
    if ($contestant_46 == "3") {  $count_of_votes++; }	
    if ($contestant_47 == "3") {  $count_of_votes++; }	
    if ($contestant_48 == "3") {  $count_of_votes++; }	
    if ($contestant_49 == "3") {  $count_of_votes++; }
	if ($contestant_50 == "3") {  $count_of_votes++; }	
	if ($contestant_51 == "3") {  $count_of_votes++; }	
    if ($contestant_52 == "3") {  $count_of_votes++; }	
    if ($contestant_53 == "3") {  $count_of_votes++; }	
    if ($contestant_54 == "3") {  $count_of_votes++; }	
    if ($contestant_55 == "3") {  $count_of_votes++; }	
    if ($contestant_56 == "3") {  $count_of_votes++; }	
    if ($contestant_57 == "3") {  $count_of_votes++; }	
    if ($contestant_58 == "3") {  $count_of_votes++; }	
    if ($contestant_59 == "3") {  $count_of_votes++; }
	if ($contestant_60 == "3") {  $count_of_votes++; }	
	if ($contestant_61 == "3") {  $count_of_votes++; }	
    if ($contestant_62 == "3") {  $count_of_votes++; }	
    if ($contestant_63 == "3") {  $count_of_votes++; }	
    if ($contestant_64 == "3") {  $count_of_votes++; }	
    if ($contestant_65 == "3") {  $count_of_votes++; }	
    if ($contestant_66 == "3") {  $count_of_votes++; }	
    if ($contestant_67 == "3") {  $count_of_votes++; }	
    if ($contestant_68 == "3") {  $count_of_votes++; }	
    if ($contestant_69 == "3") {  $count_of_votes++; }
	if ($contestant_70 == "3") {  $count_of_votes++; }	
	if ($contestant_71 == "3") {  $count_of_votes++; }	
    if ($contestant_72 == "3") {  $count_of_votes++; }	
    if ($contestant_73 == "3") {  $count_of_votes++; }	
    if ($contestant_74 == "3") {  $count_of_votes++; }	
    if ($contestant_75 == "3") {  $count_of_votes++; }	
    if ($contestant_76 == "3") {  $count_of_votes++; }	
    if ($contestant_77 == "3") {  $count_of_votes++; }	
    if ($contestant_78 == "3") {  $count_of_votes++; }	
    if ($contestant_79 == "3") {  $count_of_votes++; }
	if ($contestant_80 == "3") {  $count_of_votes++; }			
	
	return $count_of_votes;

}

function count_of_70_votes_for_first_honorary_prize($contestant_1, $contestant_2, $contestant_3, $contestant_4, $contestant_5, $contestant_6, $contestant_7, $contestant_8, $contestant_9, $contestant_10, 
			$contestant_11, $contestant_12, $contestant_13, $contestant_14, $contestant_15, $contestant_16, $contestant_17, $contestant_18, $contestant_19, $contestant_20, 
			$contestant_21, $contestant_22, $contestant_23, $contestant_24, $contestant_25, $contestant_26, $contestant_27, $contestant_28, $contestant_29, $contestant_30, 
			$contestant_31, $contestant_32, $contestant_33, $contestant_34, $contestant_35, $contestant_36, $contestant_37, $contestant_38, $contestant_39, $contestant_40, 
			$contestant_41, $contestant_42, $contestant_43, $contestant_44, $contestant_45, $contestant_46, $contestant_47, $contestant_48, $contestant_49, $contestant_50, 
			$contestant_51, $contestant_52, $contestant_53, $contestant_54, $contestant_55, $contestant_56, $contestant_57, $contestant_58, $contestant_59, $contestant_60, 
			$contestant_61, $contestant_62, $contestant_63, $contestant_64, $contestant_65, $contestant_66, $contestant_67, $contestant_68, $contestant_69, $contestant_70,
			$contestant_71, $contestant_72, $contestant_73, $contestant_74, $contestant_75, $contestant_76, $contestant_77, $contestant_78, $contestant_79, $contestant_80)				
			
{
	$count_of_votes=0;	
		
    if ($contestant_1 == "4") {  $count_of_votes++; }	
    if ($contestant_2 == "4") {  $count_of_votes++; }	
    if ($contestant_3 == "4") {  $count_of_votes++; }	
    if ($contestant_4 == "4") {  $count_of_votes++; }	
    if ($contestant_5 == "4") {  $count_of_votes++; }	
    if ($contestant_6 == "4") {  $count_of_votes++; }	
    if ($contestant_7 == "4") {  $count_of_votes++; }	
    if ($contestant_8 == "4") {  $count_of_votes++; }	
    if ($contestant_9 == "4") {  $count_of_votes++; }	
    if ($contestant_10 == "4") {  $count_of_votes++; }
    if ($contestant_11 == "4") {  $count_of_votes++; }	
    if ($contestant_12 == "4") {  $count_of_votes++; }	
    if ($contestant_13 == "4") {  $count_of_votes++; }	
    if ($contestant_14 == "4") {  $count_of_votes++; }	
    if ($contestant_15 == "4") {  $count_of_votes++; }	
    if ($contestant_16 == "4") {  $count_of_votes++; }	
    if ($contestant_17 == "4") {  $count_of_votes++; }	
    if ($contestant_18 == "4") {  $count_of_votes++; }	
    if ($contestant_19 == "4") {  $count_of_votes++; }	
	if ($contestant_20 == "4") {  $count_of_votes++; }	
	if ($contestant_21 == "4") {  $count_of_votes++; }	
    if ($contestant_22 == "4") {  $count_of_votes++; }	
    if ($contestant_23 == "4") {  $count_of_votes++; }	
    if ($contestant_24 == "4") {  $count_of_votes++; }	
    if ($contestant_25 == "4") {  $count_of_votes++; }	
    if ($contestant_26 == "4") {  $count_of_votes++; }	
    if ($contestant_27 == "4") {  $count_of_votes++; }	
    if ($contestant_28 == "4") {  $count_of_votes++; }	
    if ($contestant_29 == "4") {  $count_of_votes++; }	
	if ($contestant_30 == "4") {  $count_of_votes++; }	
	if ($contestant_31 == "4") {  $count_of_votes++; }	
    if ($contestant_32 == "4") {  $count_of_votes++; }	
    if ($contestant_33 == "4") {  $count_of_votes++; }	
    if ($contestant_34 == "4") {  $count_of_votes++; }	
    if ($contestant_35 == "4") {  $count_of_votes++; }	
    if ($contestant_36 == "4") {  $count_of_votes++; }	
    if ($contestant_37 == "4") {  $count_of_votes++; }	
    if ($contestant_38 == "4") {  $count_of_votes++; }	
    if ($contestant_39 == "4") {  $count_of_votes++; }
	if ($contestant_40 == "4") {  $count_of_votes++; }	
	if ($contestant_41 == "4") {  $count_of_votes++; }	
    if ($contestant_42 == "4") {  $count_of_votes++; }	
    if ($contestant_43 == "4") {  $count_of_votes++; }	
    if ($contestant_44 == "4") {  $count_of_votes++; }	
    if ($contestant_45 == "4") {  $count_of_votes++; }	
    if ($contestant_46 == "4") {  $count_of_votes++; }	
    if ($contestant_47 == "4") {  $count_of_votes++; }	
    if ($contestant_48 == "4") {  $count_of_votes++; }	
    if ($contestant_49 == "4") {  $count_of_votes++; }
	if ($contestant_50 == "4") {  $count_of_votes++; }	
	if ($contestant_51 == "4") {  $count_of_votes++; }	
    if ($contestant_52 == "4") {  $count_of_votes++; }	
    if ($contestant_53 == "4") {  $count_of_votes++; }	
    if ($contestant_54 == "4") {  $count_of_votes++; }	
    if ($contestant_55 == "4") {  $count_of_votes++; }	
    if ($contestant_56 == "4") {  $count_of_votes++; }	
    if ($contestant_57 == "4") {  $count_of_votes++; }	
    if ($contestant_58 == "4") {  $count_of_votes++; }	
    if ($contestant_59 == "4") {  $count_of_votes++; }
	if ($contestant_60 == "4") {  $count_of_votes++; }	
	if ($contestant_61 == "4") {  $count_of_votes++; }	
    if ($contestant_62 == "4") {  $count_of_votes++; }	
    if ($contestant_63 == "4") {  $count_of_votes++; }	
    if ($contestant_64 == "4") {  $count_of_votes++; }	
    if ($contestant_65 == "4") {  $count_of_votes++; }	
    if ($contestant_66 == "4") {  $count_of_votes++; }	
    if ($contestant_67 == "4") {  $count_of_votes++; }	
    if ($contestant_68 == "4") {  $count_of_votes++; }	
    if ($contestant_69 == "4") {  $count_of_votes++; }
	if ($contestant_70 == "4") {  $count_of_votes++; }	
	if ($contestant_71 == "4") {  $count_of_votes++; }	
    if ($contestant_72 == "4") {  $count_of_votes++; }	
    if ($contestant_73 == "4") {  $count_of_votes++; }	
    if ($contestant_74 == "4") {  $count_of_votes++; }	
    if ($contestant_75 == "4") {  $count_of_votes++; }	
    if ($contestant_76 == "4") {  $count_of_votes++; }	
    if ($contestant_77 == "4") {  $count_of_votes++; }	
    if ($contestant_78 == "4") {  $count_of_votes++; }	
    if ($contestant_79 == "4") {  $count_of_votes++; }
	if ($contestant_80 == "4") {  $count_of_votes++; }			
	
	return $count_of_votes;

}

function count_of_70_votes_for_second_honorary_prize($contestant_1, $contestant_2, $contestant_3, $contestant_4, $contestant_5, $contestant_6, $contestant_7, $contestant_8, $contestant_9, $contestant_10, 
			$contestant_11, $contestant_12, $contestant_13, $contestant_14, $contestant_15, $contestant_16, $contestant_17, $contestant_18, $contestant_19, $contestant_20, 
			$contestant_21, $contestant_22, $contestant_23, $contestant_24, $contestant_25, $contestant_26, $contestant_27, $contestant_28, $contestant_29, $contestant_30, 
			$contestant_31, $contestant_32, $contestant_33, $contestant_34, $contestant_35, $contestant_36, $contestant_37, $contestant_38, $contestant_39, $contestant_40, 
			$contestant_41, $contestant_42, $contestant_43, $contestant_44, $contestant_45, $contestant_46, $contestant_47, $contestant_48, $contestant_49, $contestant_50, 
			$contestant_51, $contestant_52, $contestant_53, $contestant_54, $contestant_55, $contestant_56, $contestant_57, $contestant_58, $contestant_59, $contestant_60, 
			$contestant_61, $contestant_62, $contestant_63, $contestant_64, $contestant_65, $contestant_66, $contestant_67, $contestant_68, $contestant_69, $contestant_70,
			$contestant_71, $contestant_72, $contestant_73, $contestant_74, $contestant_75, $contestant_76, $contestant_77, $contestant_78, $contestant_79, $contestant_80)				
			
{
	$count_of_votes=0;	
		
    if ($contestant_1 == "5") {  $count_of_votes++; }	
    if ($contestant_2 == "5") {  $count_of_votes++; }	
    if ($contestant_3 == "5") {  $count_of_votes++; }	
    if ($contestant_4 == "5") {  $count_of_votes++; }	
    if ($contestant_5 == "5") {  $count_of_votes++; }	
    if ($contestant_6 == "5") {  $count_of_votes++; }	
    if ($contestant_7 == "5") {  $count_of_votes++; }	
    if ($contestant_8 == "5") {  $count_of_votes++; }	
    if ($contestant_9 == "5") {  $count_of_votes++; }	
    if ($contestant_10 == "5") {  $count_of_votes++; }
    if ($contestant_11 == "5") {  $count_of_votes++; }	
    if ($contestant_12 == "5") {  $count_of_votes++; }	
    if ($contestant_13 == "5") {  $count_of_votes++; }	
    if ($contestant_14 == "5") {  $count_of_votes++; }	
    if ($contestant_15 == "5") {  $count_of_votes++; }	
    if ($contestant_16 == "5") {  $count_of_votes++; }	
    if ($contestant_17 == "5") {  $count_of_votes++; }	
    if ($contestant_18 == "5") {  $count_of_votes++; }	
    if ($contestant_19 == "5") {  $count_of_votes++; }	
	if ($contestant_20 == "5") {  $count_of_votes++; }	
	if ($contestant_21 == "5") {  $count_of_votes++; }	
    if ($contestant_22 == "5") {  $count_of_votes++; }	
    if ($contestant_23 == "5") {  $count_of_votes++; }	
    if ($contestant_24 == "5") {  $count_of_votes++; }	
    if ($contestant_25 == "5") {  $count_of_votes++; }	
    if ($contestant_26 == "5") {  $count_of_votes++; }	
    if ($contestant_27 == "5") {  $count_of_votes++; }	
    if ($contestant_28 == "5") {  $count_of_votes++; }	
    if ($contestant_29 == "5") {  $count_of_votes++; }	
	if ($contestant_30 == "5") {  $count_of_votes++; }	
	if ($contestant_31 == "5") {  $count_of_votes++; }	
    if ($contestant_32 == "5") {  $count_of_votes++; }	
    if ($contestant_33 == "5") {  $count_of_votes++; }	
    if ($contestant_34 == "5") {  $count_of_votes++; }	
    if ($contestant_35 == "5") {  $count_of_votes++; }	
    if ($contestant_36 == "5") {  $count_of_votes++; }	
    if ($contestant_37 == "5") {  $count_of_votes++; }	
    if ($contestant_38 == "5") {  $count_of_votes++; }	
    if ($contestant_39 == "5") {  $count_of_votes++; }
	if ($contestant_40 == "5") {  $count_of_votes++; }	
	if ($contestant_41 == "5") {  $count_of_votes++; }	
    if ($contestant_42 == "5") {  $count_of_votes++; }	
    if ($contestant_43 == "5") {  $count_of_votes++; }	
    if ($contestant_44 == "5") {  $count_of_votes++; }	
    if ($contestant_45 == "5") {  $count_of_votes++; }	
    if ($contestant_46 == "5") {  $count_of_votes++; }	
    if ($contestant_47 == "5") {  $count_of_votes++; }	
    if ($contestant_48 == "5") {  $count_of_votes++; }	
    if ($contestant_49 == "5") {  $count_of_votes++; }
	if ($contestant_50 == "5") {  $count_of_votes++; }	
	if ($contestant_51 == "5") {  $count_of_votes++; }	
    if ($contestant_52 == "5") {  $count_of_votes++; }	
    if ($contestant_53 == "5") {  $count_of_votes++; }	
    if ($contestant_54 == "5") {  $count_of_votes++; }	
    if ($contestant_55 == "5") {  $count_of_votes++; }	
    if ($contestant_56 == "5") {  $count_of_votes++; }	
    if ($contestant_57 == "5") {  $count_of_votes++; }	
    if ($contestant_58 == "5") {  $count_of_votes++; }	
    if ($contestant_59 == "5") {  $count_of_votes++; }
	if ($contestant_60 == "5") {  $count_of_votes++; }	
	if ($contestant_61 == "5") {  $count_of_votes++; }	
    if ($contestant_62 == "5") {  $count_of_votes++; }	
    if ($contestant_63 == "5") {  $count_of_votes++; }	
    if ($contestant_64 == "5") {  $count_of_votes++; }	
    if ($contestant_65 == "5") {  $count_of_votes++; }	
    if ($contestant_66 == "5") {  $count_of_votes++; }	
    if ($contestant_67 == "5") {  $count_of_votes++; }	
    if ($contestant_68 == "5") {  $count_of_votes++; }	
    if ($contestant_69 == "5") {  $count_of_votes++; }
	if ($contestant_70 == "5") {  $count_of_votes++; }	
	if ($contestant_71 == "5") {  $count_of_votes++; }	
    if ($contestant_72 == "5") {  $count_of_votes++; }	
    if ($contestant_73 == "5") {  $count_of_votes++; }	
    if ($contestant_74 == "5") {  $count_of_votes++; }	
    if ($contestant_75 == "5") {  $count_of_votes++; }	
    if ($contestant_76 == "5") {  $count_of_votes++; }	
    if ($contestant_77 == "5") {  $count_of_votes++; }	
    if ($contestant_78 == "5") {  $count_of_votes++; }	
    if ($contestant_79 == "5") {  $count_of_votes++; }
	if ($contestant_80 == "5") {  $count_of_votes++; }			
	
	return $count_of_votes;

}


function createUser($Name,$Email,$Cell,$Address,$City,$Postcode,$Country,$Password,$DateOfBirth,$WebsiteLanguage,$ContestantPhotograph,$ContestantPhotographName,$ContestantPhotographType,
				$MaritalStatus,$Education,$Occupation,$Website,$Facebook,$ContestantData,$WordCount,				
				$CV,$CVName,$CVType,$Graduated,$CreationDate,$LastLoginDate,$IsAdmin)
{
$sql = " INSERT INTO users (Name,Email,Cell,Address,City,Postcode,Country,Password,DateOfBirth,WebsiteLanguage,
				ContestantPhotograph,ContestantPhotographName,ContestantPhotographType,
				MaritalStatus,Education,Occupation,Website,Facebook,ContestantData,WordCount,	
				CV,CVName,CVType,Graduated,
				CreationDate,LastLoginDate,IsAdmin)

VALUES ('$Name','$Email','$Cell','$Address','$City','$Postcode','$Country','$Password','$DateOfBirth','$WebsiteLanguage',
				'$ContestantPhotograph','$ContestantPhotographName','$ContestantPhotographType',
				'$MaritalStatus','$Education','$Occupation','$Website','$Facebook','$ContestantData','$WordCount',				
				'$CV','$CVName','$CVType','$Graduated',
				NOW(),'0000-00-00 00:00:00',0)";

$result = dbQuery($sql);
}

function createUserWithIP_70($userId,$Name,$Email,$Cell,$Address,$City,$Postcode,$Country,$Password,$IPAddress39,$IPAddress15,
			$contestant_1, $contestant_2, $contestant_3, $contestant_4, $contestant_5, $contestant_6, $contestant_7, $contestant_8, $contestant_9, $contestant_10, 
			$contestant_11, $contestant_12, $contestant_13, $contestant_14, $contestant_15, $contestant_16, $contestant_17, $contestant_18, $contestant_19, $contestant_20, 
			$contestant_21, $contestant_22, $contestant_23, $contestant_24, $contestant_25, $contestant_26, $contestant_27, $contestant_28, $contestant_29, $contestant_30, 
			$contestant_31, $contestant_32, $contestant_33, $contestant_34, $contestant_35, $contestant_36, $contestant_37, $contestant_38, $contestant_39, $contestant_40, 
			$contestant_41, $contestant_42, $contestant_43, $contestant_44, $contestant_45, $contestant_46, $contestant_47, $contestant_48, $contestant_49, $contestant_50, 
			$contestant_51, $contestant_52, $contestant_53, $contestant_54, $contestant_55, $contestant_56, $contestant_57, $contestant_58, $contestant_59, $contestant_60, 
			$contestant_61, $contestant_62, $contestant_63, $contestant_64, $contestant_65, $contestant_66, $contestant_67, $contestant_68, $contestant_69, $contestant_70, 
			$contestant_71, $contestant_72, $contestant_73, $contestant_74, $contestant_75, $contestant_76, $contestant_77, $contestant_78, $contestant_79, $contestant_80, 			
			$UploadedDate, $UploadedUserId)						
{		
$sql = " INSERT INTO Users_With_IPs (Name,Email,Cell,Address,City,Postcode,Country,Password,IPAddress39,IPAddress15,
			contestant_1, contestant_2, contestant_3, contestant_4, contestant_5, contestant_6, contestant_7, contestant_8, contestant_9, contestant_10, 
			contestant_11, contestant_12, contestant_13, contestant_14, contestant_15, contestant_16, contestant_17, contestant_18, contestant_19, contestant_20, 
			contestant_21, contestant_22, contestant_23, contestant_24, contestant_25, contestant_26, contestant_27, contestant_28, contestant_29, contestant_30, 
			contestant_31, contestant_32, contestant_33, contestant_34, contestant_35, contestant_36, contestant_37, contestant_38, contestant_39, contestant_40, 
			contestant_41, contestant_42, contestant_43, contestant_44, contestant_45, contestant_46, contestant_47, contestant_48, contestant_49, contestant_50, 
			contestant_51, contestant_52, contestant_53, contestant_54, contestant_55, contestant_56, contestant_57, contestant_58, contestant_59, contestant_60, 
			contestant_61, contestant_62, contestant_63, contestant_64, contestant_65, contestant_66, contestant_67, contestant_68, contestant_69, contestant_70, 
			contestant_71, contestant_72, contestant_73, contestant_74, contestant_75, contestant_76, contestant_77, contestant_78, contestant_79, contestant_80, 			
			UploadedDate,LastUpdatedDate,UploadedUserId,LastUpdatedUserId,Winner)

VALUES ('$Name','$Email','$Cell','$Address','$City','$Postcode','$Country','$Password', '$IPAddress39','$IPAddress15',
			'$contestant_1', '$contestant_2', '$contestant_3', '$contestant_4', '$contestant_5', '$contestant_6', '$contestant_7', '$contestant_8', '$contestant_9', '$contestant_10', 
			'$contestant_11', '$contestant_12', '$contestant_13', '$contestant_14', '$contestant_15', '$contestant_16', '$contestant_17', '$contestant_18', '$contestant_19', '$contestant_20', 
			'$contestant_21', '$contestant_22', '$contestant_23', '$contestant_24', '$contestant_25', '$contestant_26', '$contestant_27', '$contestant_28', '$contestant_29', '$contestant_30', 
			'$contestant_31', '$contestant_32', '$contestant_33', '$contestant_34', '$contestant_35', '$contestant_36', '$contestant_37', '$contestant_38', '$contestant_39', '$contestant_40', 
			'$contestant_41', '$contestant_42', '$contestant_43', '$contestant_44', '$contestant_45', '$contestant_46', '$contestant_47', '$contestant_48', '$contestant_49', '$contestant_50', 
			'$contestant_51', '$contestant_52', '$contestant_53', '$contestant_54', '$contestant_55', '$contestant_56', '$contestant_57', '$contestant_58', '$contestant_59', '$contestant_60', 
			'$contestant_61', '$contestant_62', '$contestant_63', '$contestant_64', '$contestant_65', '$contestant_66', '$contestant_67', '$contestant_68', '$contestant_69', '$contestant_70', 
			'$contestant_71', '$contestant_72', '$contestant_73', '$contestant_74', '$contestant_75', '$contestant_76', '$contestant_77', '$contestant_78', '$contestant_79', '$contestant_80',			
			NOW(),NOW(),'$UploadedUserId',0,0)";
						
		
$result = dbQuery($sql);
}	

function createUserWithIP($userId,$Name,$Email,$Cell,$Address,$City,$Postcode,$Country,
			$Password,$DateOfBirth,$MaritalStatus,$Education,$Occupation,$Website,$Facebook,$WebsiteLanguage, 
			$IPAddress39,$IPAddress15,
			$contestant_1, $contestant_2, $contestant_3, $contestant_4, $contestant_5, $contestant_6, $contestant_7, $contestant_8, $contestant_9, $contestant_10, 
			$contestant_11, $contestant_12, $contestant_13, $contestant_14, $contestant_15, $contestant_16, $contestant_17, $contestant_18, $contestant_19, $contestant_20, 
			$contestant_21, $contestant_22, $contestant_23, $contestant_24, $contestant_25, $contestant_26, $contestant_27, $contestant_28, $contestant_29, $contestant_30, 
			$contestant_31, $contestant_32, $contestant_33, $contestant_34, $contestant_35, $contestant_36, $contestant_37, $contestant_38, $contestant_39, $contestant_40, 
			$contestant_41, $contestant_42, $contestant_43, $contestant_44, $contestant_45, $contestant_46, $contestant_47, $contestant_48, $contestant_49, $contestant_50, 
			$contestant_51, $contestant_52, $contestant_53, $contestant_54, $contestant_55, $contestant_56, $contestant_57, $contestant_58, $contestant_59, $contestant_60, 
			$contestant_61, $contestant_62, $contestant_63, $contestant_64, $contestant_65, $contestant_66, $contestant_67, $contestant_68, $contestant_69, $contestant_70, 
			$contestant_71, $contestant_72, $contestant_73, $contestant_74, $contestant_75, $contestant_76, $contestant_77, $contestant_78, $contestant_79, $contestant_80, 
			$contestant_81, $contestant_82, $contestant_83, $contestant_84, $contestant_85, $contestant_86, $contestant_87, $contestant_88, $contestant_89, $contestant_90, 
			$contestant_91, $contestant_92, $contestant_93, $contestant_94, $contestant_95, $contestant_96, $contestant_97, $contestant_98, $contestant_99, $contestant_100, 			

			$contestant_101, $contestant_102, $contestant_103, $contestant_104, $contestant_105, $contestant_106, $contestant_107, $contestant_108, $contestant_109, $contestant_110, 
			$contestant_111, $contestant_112, $contestant_113, $contestant_114, $contestant_115, $contestant_116, $contestant_117, $contestant_118, $contestant_119, $contestant_120, 
			$contestant_121, $contestant_122, $contestant_123, $contestant_124, $contestant_125, $contestant_126, $contestant_127, $contestant_128, $contestant_129, $contestant_130, 
			$contestant_131, $contestant_132, $contestant_133, $contestant_134, $contestant_135, $contestant_136, $contestant_137, $contestant_138, $contestant_139, $contestant_140, 
			$contestant_141, $contestant_142, $contestant_143, $contestant_144, $contestant_145, $contestant_146, $contestant_147, $contestant_148, $contestant_149, $contestant_150, 
			$contestant_151, $contestant_152, $contestant_153, $contestant_154, $contestant_155, $contestant_156, $contestant_157, $contestant_158, $contestant_159, $contestant_160, 
			$contestant_161, $contestant_162, $contestant_163, $contestant_164, $contestant_165, $contestant_166, $contestant_167, $contestant_168, $contestant_169, $contestant_170, 
			$contestant_171, $contestant_172, $contestant_173, $contestant_174, $contestant_175, $contestant_176, $contestant_177, $contestant_178, $contestant_179, $contestant_180, 
			$contestant_181, $contestant_182, $contestant_183, $contestant_184, $contestant_185, $contestant_186, $contestant_187, $contestant_188, $contestant_189, $contestant_190, 
			$contestant_191, $contestant_192, $contestant_193, $contestant_194, $contestant_195, $contestant_196, $contestant_197, $contestant_198, $contestant_199, $contestant_200, 
			
			$contestant_201, $contestant_202, $contestant_203, $contestant_204, $contestant_205, $contestant_206, $contestant_207, $contestant_208, $contestant_209, $contestant_210, 
			$contestant_211, $contestant_212, $contestant_213, $contestant_214, $contestant_215, $contestant_216, $contestant_217, $contestant_218, $contestant_219, $contestant_220, 
			$contestant_221, $contestant_222, 
			
			$UploadedDate, $UploadedUserId)			
			
{
$sql = " INSERT INTO Users_With_IPs (Name,Email,Cell,Address,City,Postcode,Country,Password,DateOfBirth,
			MaritalStatus,Education,Occupation,Website,Facebook,WebsiteLanguage, 
			IPAddress39,IPAddress15,

			contestant_1, contestant_2, contestant_3, contestant_4, contestant_5, contestant_6, contestant_7, contestant_8, contestant_9, contestant_10, 
			contestant_11, contestant_12, contestant_13, contestant_14, contestant_15, contestant_16, contestant_17, contestant_18, contestant_19, contestant_20, 
			contestant_21, contestant_22, contestant_23, contestant_24, contestant_25, contestant_26, contestant_27, contestant_28, contestant_29, contestant_30, 
			contestant_31, contestant_32, contestant_33, contestant_34, contestant_35, contestant_36, contestant_37, contestant_38, contestant_39, contestant_40, 
			contestant_41, contestant_42, contestant_43, contestant_44, contestant_45, contestant_46, contestant_47, contestant_48, contestant_49, contestant_50, 
			contestant_51, contestant_52, contestant_53, contestant_54, contestant_55, contestant_56, contestant_57, contestant_58, contestant_59, contestant_60, 
			contestant_61, contestant_62, contestant_63, contestant_64, contestant_65, contestant_66, contestant_67, contestant_68, contestant_69, contestant_70, 
			contestant_71, contestant_72, contestant_73, contestant_74, contestant_75, contestant_76, contestant_77, contestant_78, contestant_79, contestant_80, 
			contestant_81, contestant_82, contestant_83, contestant_84, contestant_85, contestant_86, contestant_87, contestant_88, contestant_89, contestant_90, 
			contestant_91, contestant_92, contestant_93, contestant_94, contestant_95, contestant_96, contestant_97, contestant_98, contestant_99, contestant_100, 			

			contestant_101, contestant_102, contestant_103, contestant_104, contestant_105, contestant_106, contestant_107, contestant_108, contestant_109, contestant_110, 
			contestant_111, contestant_112, contestant_113, contestant_114, contestant_115, contestant_116, contestant_117, contestant_118, contestant_119, contestant_120, 
			contestant_121, contestant_122, contestant_123, contestant_124, contestant_125, contestant_126, contestant_127, contestant_128, contestant_129, contestant_130, 
			contestant_131, contestant_132, contestant_133, contestant_134, contestant_135, contestant_136, contestant_137, contestant_138, contestant_139, contestant_140, 
			contestant_141, contestant_142, contestant_143, contestant_144, contestant_145, contestant_146, contestant_147, contestant_148, contestant_149, contestant_150, 
			contestant_151, contestant_152, contestant_153, contestant_154, contestant_155, contestant_156, contestant_157, contestant_158, contestant_159, contestant_160, 
			contestant_161, contestant_162, contestant_163, contestant_164, contestant_165, contestant_166, contestant_167, contestant_168, contestant_169, contestant_170, 
			contestant_171, contestant_172, contestant_173, contestant_174, contestant_175, contestant_176, contestant_177, contestant_178, contestant_179, contestant_180, 
			contestant_181, contestant_182, contestant_183, contestant_184, contestant_185, contestant_186, contestant_187, contestant_188, contestant_189, contestant_190, 
			contestant_191, contestant_192, contestant_193, contestant_194, contestant_195, contestant_196, contestant_197, contestant_198, contestant_199, contestant_200, 
			
			contestant_201, contestant_202, contestant_203, contestant_204, contestant_205, contestant_206, contestant_207, contestant_208, contestant_209, contestant_210, 
			contestant_211, contestant_212, contestant_213, contestant_214, contestant_215, contestant_216, contestant_217, contestant_218, contestant_219, contestant_220, 
			contestant_221, contestant_222,
			
			UploadedDate,LastUpdatedDate,UploadedUserId,LastUpdatedUserId,Winner)


VALUES ('$Name','$Email','$Cell','$Address','$City','$Postcode','$Country',
			'$Password','$DateOfBirth','$MaritalStatus','$Education','$Occupation','$Website','$Facebook','$WebsiteLanguage', 
			'$IPAddress39','$IPAddress15',

			'$contestant_1', '$contestant_2', '$contestant_3', '$contestant_4', '$contestant_5', '$contestant_6', '$contestant_7', '$contestant_8', '$contestant_9', '$contestant_10', 
			'$contestant_11', '$contestant_12', '$contestant_13', '$contestant_14', '$contestant_15', '$contestant_16', '$contestant_17', '$contestant_18', '$contestant_19', '$contestant_20', 
			'$contestant_21', '$contestant_22', '$contestant_23', '$contestant_24', '$contestant_25', '$contestant_26', '$contestant_27', '$contestant_28', '$contestant_29', '$contestant_30', 
			'$contestant_31', '$contestant_32', '$contestant_33', '$contestant_34', '$contestant_35', '$contestant_36', '$contestant_37', '$contestant_38', '$contestant_39', '$contestant_40', 
			'$contestant_41', '$contestant_42', '$contestant_43', '$contestant_44', '$contestant_45', '$contestant_46', '$contestant_47', '$contestant_48', '$contestant_49', '$contestant_50', 
			'$contestant_51', '$contestant_52', '$contestant_53', '$contestant_54', '$contestant_55', '$contestant_56', '$contestant_57', '$contestant_58', '$contestant_59', '$contestant_60', 
			'$contestant_61', '$contestant_62', '$contestant_63', '$contestant_64', '$contestant_65', '$contestant_66', '$contestant_67', '$contestant_68', '$contestant_69', '$contestant_70', 
			'$contestant_71', '$contestant_72', '$contestant_73', '$contestant_74', '$contestant_75', '$contestant_76', '$contestant_77', '$contestant_78', '$contestant_79', '$contestant_80', 
			'$contestant_81', '$contestant_82', '$contestant_83', '$contestant_84', '$contestant_85', '$contestant_86', '$contestant_87', '$contestant_88', '$contestant_89', '$contestant_90', 
			'$contestant_91', '$contestant_92', '$contestant_93', '$contestant_94', '$contestant_95', '$contestant_96', '$contestant_97', '$contestant_98', '$contestant_99', '$contestant_100', 			

			'$contestant_101', '$contestant_102', '$contestant_103', '$contestant_104', '$contestant_105', '$contestant_106', '$contestant_107', '$contestant_108', '$contestant_109', '$contestant_110', 
			'$contestant_111', '$contestant_112', '$contestant_113', '$contestant_114', '$contestant_115', '$contestant_116', '$contestant_117', '$contestant_118', '$contestant_119', '$contestant_120', 
			'$contestant_121', '$contestant_122', '$contestant_123', '$contestant_124', '$contestant_125', '$contestant_126', '$contestant_127', '$contestant_128', '$contestant_129', '$contestant_130', 
			'$contestant_131', '$contestant_132', '$contestant_133', '$contestant_134', '$contestant_135', '$contestant_136', '$contestant_137', '$contestant_138', '$contestant_139', '$contestant_140', 
			'$contestant_141', '$contestant_142', '$contestant_143', '$contestant_144', '$contestant_145', '$contestant_146', '$contestant_147', '$contestant_148', '$contestant_149', '$contestant_150', 
			'$contestant_151', '$contestant_152', '$contestant_153', '$contestant_154', '$contestant_155', '$contestant_156', '$contestant_157', '$contestant_158', '$contestant_159', '$contestant_160', 
			'$contestant_161', '$contestant_162', '$contestant_163', '$contestant_164', '$contestant_165', '$contestant_166', '$contestant_167', '$contestant_168', '$contestant_169', '$contestant_170', 
			'$contestant_171', '$contestant_172', '$contestant_173', '$contestant_174', '$contestant_175', '$contestant_176', '$contestant_177', '$contestant_178', '$contestant_179', '$contestant_180', 
			'$contestant_181', '$contestant_182', '$contestant_183', '$contestant_184', '$contestant_185', '$contestant_186', '$contestant_187', '$contestant_188', '$contestant_189', '$contestant_190', 
			'$contestant_191', '$contestant_192', '$contestant_193', '$contestant_194', '$contestant_195', '$contestant_196', '$contestant_197', '$contestant_198', '$contestant_199', '$contestant_200', 
			
			'$contestant_201', '$contestant_202', '$contestant_203', '$contestant_204', '$contestant_205', '$contestant_206', '$contestant_207', '$contestant_208', '$contestant_209', '$contestant_210', 
			'$contestant_211', '$contestant_212', '$contestant_213', '$contestant_214', '$contestant_215', '$contestant_216', '$contestant_217', '$contestant_218', '$contestant_219', '$contestant_220', 
			'$contestant_221', '$contestant_222',
			
			NOW(),NOW(),$userId,0,0)";
			
$result = dbQuery($sql);
}	

function countvotes($columnname)
{

	$dbConn = mysqli_connect ('db----', '----', '----', 'eiao248-----') or die ('MySQL connect failed. ' . mysql_error());
	mysqli_select_db($dbConn, 'eia-----') or die('Cannot select database. ' . mysql_error());	
		
	$sql = "SELECT SUM($columnname) as totalofcolumn FROM Users_With_IPs WHERE SubmissionId>13";
	$result = mysqli_query($dbConn, $sql);
	$row = mysqli_fetch_array($result);
	$columnsum = $row['totalofcolumn'];
		
	mysqli_close($dbConn);
	return $columnsum;
}
		
		
function checkIPAddress($ip)
{
	$dbConn = mysqli_connect ('db.grserver.gr:3306', 'eia---', '----', 'eiao----0') or die ('MySQL connect failed. ' . mysql_error());
	$present = false;		
	$sql = "Select IPAddress15 from Users_With_IPs where IPAddress15='$ip'";
			
	if ($result=mysqli_query($dbConn,$sql))
	{
		$row = dbFetchAssoc($result);
		if ($row != '')
		{
			$present = true;
		}
		mysqli_free_result($result);
	}
	mysqli_close($dbConn);
	return $present;
}		

function checkEmail($email)
{
	$present = false;
		
	$sql = "Select Email from users where Email='$email'";
	$result = dbQuery($sql);
	
	if (dbNumRows($result) == 1) 
	{
		$row = dbFetchAssoc($result);
		$present = true;
	}
	
	return $present;
}

function createFirstSubmission($userId,		
	$Photograph1,$PhotographName1,$PhotographType1,$PhotoName1,
	$Photograph2,$PhotographName2,$PhotographType2,$PhotoName2,
	$Photograph3,$PhotographName3,$PhotographType3,$PhotoName3,	
	
	$UploadedDate, $UploadedUserId)
{
$sql = " INSERT INTO first_submissions (			
	Photograph1,PhotographName1,PhotographType1,PhotoName1,
	Photograph2,PhotographName2,PhotographType2,PhotoName2,
	Photograph3,PhotographName3,PhotographType3,PhotoName3,			
	UploadedDate,LastUpdatedDate,UploadedUserId,LastUpdatedUserId,Winner)
	
	VALUES (
	'$Photograph1','$PhotographName1','$PhotographType1','$PhotoName1',
	'$Photograph2','$PhotographName2','$PhotographType2','$PhotoName2',
	'$Photograph3','$PhotographName3','$PhotographType3','$PhotoName3',			
	NOW(),NOW(),$userId,0,0)";
	
$result = dbQuery($sql);
}

function createSecondSubmission($userId,		
	$Photograph4,$PhotographName4,$PhotographType4,$PhotoName4,
	$Photograph5,$PhotographName5,$PhotographType5,$PhotoName5,
	$Photograph6,$PhotographName6,$PhotographType6,$PhotoName6,	
	
	$UploadedDate, $UploadedUserId)
{
$sql = " INSERT INTO second_submissions (			
	Photograph4,PhotographName4,PhotographType4,PhotoName4,
	Photograph5,PhotographName5,PhotographType5,PhotoName5,
	Photograph6,PhotographName6,PhotographType6,PhotoName6,			
	UploadedDate,LastUpdatedDate,UploadedUserId,LastUpdatedUserId,Winner)
	
	VALUES (
	'$Photograph4','$PhotographName4','$PhotographType4','$PhotoName4',
	'$Photograph5','$PhotographName5','$PhotographType5','$PhotoName5',
	'$Photograph6','$PhotographName6','$PhotographType6','$PhotoName6',			
	NOW(),NOW(),$userId,0,0)";
	
$result = dbQuery($sql);
}

function createArea1Submission($userId,
	$Area1Data,$Area1WordCount,
	$Area1GoogleMapDocument,$Area1GoogleMapDocumentName,$Area1GoogleMapDocumentType,
	$Area1GoogleMapname,$Area1GoogleMapaddress,$Area1GoogleMaplat,$Area1GoogleMaplng,$Area1GoogleMaptype, 
	$Area1Photograph1,$Area1Photograph1Name,$Area1Photograph1Type,$Area1Photograph2,$Area1Photograph2Name,$Area1Photograph2Type,
	$Area1Photograph3,$Area1Photograph3Name,$Area1Photograph3Type,$Area1Photograph4,$Area1Photograph4Name,$Area1Photograph4Type,
	$Area1Photograph5,$Area1Photograph5Name,$Area1Photograph5Type,$Area1Photograph6,$Area1Photograph6Name,$Area1Photograph6Type,
	$UploadedDate, $UploadedUserId)
{
$sql = " INSERT INTO area1submissions (
	Area1Data,Area1WordCount, 	
	Area1GoogleMapDocument,Area1GoogleMapDocumentName,Area1GoogleMapDocumentType,	
	Area1GoogleMapname,Area1GoogleMapaddress,Area1GoogleMaplat,Area1GoogleMaplng,Area1GoogleMaptype, 
	Area1Photograph1,Area1PhotographName1,Area1PhotographType1,
	Area1Photograph2,Area1PhotographName2,Area1PhotographType2, 
	Area1Photograph3,Area1PhotographName3,Area1PhotographType3,
	Area1Photograph4,Area1PhotographName4,Area1PhotographType4, 
	Area1Photograph5,Area1PhotographName5,Area1PhotographType5,
	Area1Photograph6,Area1PhotographName6,Area1PhotographType6,
	UploadedDate,LastUpdatedDate,UploadedUserId,LastUpdatedUserId,Winner)	
	VALUES (
	'$Area1Data','$Area1WordCount', 	
	'$Area1GoogleMapDocument','$Area1GoogleMapDocumentName','$Area1GoogleMapDocumentType',	
	'$Area1GoogleMapname','$Area1GoogleMapaddress','$Area1GoogleMaplat','$Area1GoogleMaplng','$Area1GoogleMaptype', 
	'$Area1Photograph1','$Area1Photograph1Name','$Area1Photograph1Type',
	'$Area1Photograph2','$Area1Photograph2Name','$Area1Photograph2Type', 
	'$Area1Photograph3','$Area1Photograph3Name','$Area1Photograph3Type',
	'$Area1Photograph4','$Area1Photograph4Name','$Area1Photograph4Type', 
	'$Area1Photograph5','$Area1Photograph5Name','$Area1Photograph5Type',
	'$Area1Photograph6','$Area1Photograph6Name','$Area1Photograph6Type',
	NOW(),NOW(),$userId,0,0)";
$result = dbQuery($sql);
}

function createArea2Submission($userId,
	$Area2Data,$Area2WordCount,
	$Area2GoogleMapDocument,$Area2GoogleMapDocumentName,$Area2GoogleMapDocumentType,
	$Area2GoogleMapname,$Area2GoogleMapaddress,$Area2GoogleMaplat,$Area2GoogleMaplng,$Area2GoogleMaptype, 
	$Area2Photograph1,$Area2Photograph1Name,$Area2Photograph1Type,$Area2Photograph2,$Area2Photograph2Name,$Area2Photograph2Type,
	$Area2Photograph3,$Area2Photograph3Name,$Area2Photograph3Type,$Area2Photograph4,$Area2Photograph4Name,$Area2Photograph4Type,
	$Area2Photograph5,$Area2Photograph5Name,$Area2Photograph5Type,$Area2Photograph6,$Area2Photograph6Name,$Area2Photograph6Type,
	$UploadedDate, $UploadedUserId)
{
$sql = " INSERT INTO area2submissions (
	Area2Data,Area2WordCount, 
	Area2GoogleMapDocument,Area2GoogleMapDocumentName,Area2GoogleMapDocumentType,
	Area2GoogleMapname,Area2GoogleMapaddress,Area2GoogleMaplat,Area2GoogleMaplng,Area2GoogleMaptype, 
	Area2Photograph1,Area2PhotographName1,Area2PhotographType1,
	Area2Photograph2,Area2PhotographName2,Area2PhotographType2, 
	Area2Photograph3,Area2PhotographName3,Area2PhotographType3,
	Area2Photograph4,Area2PhotographName4,Area2PhotographType4, 
	Area2Photograph5,Area2PhotographName5,Area2PhotographType5,
	Area2Photograph6,Area2PhotographName6,Area2PhotographType6,
	UploadedDate,LastUpdatedDate,UploadedUserId,LastUpdatedUserId,Winner)	
	VALUES (
	'$Area2Data','$Area2WordCount', 
	'$Area2GoogleMapDocument','$Area2GoogleMapDocumentName','$Area2GoogleMapDocumentType',
	'$Area2GoogleMapname','$Area2GoogleMapaddress','$Area2GoogleMaplat','$Area2GoogleMaplng','$Area2GoogleMaptype', 
	'$Area2Photograph1','$Area2Photograph1Name','$Area2Photograph1Type',
	'$Area2Photograph2','$Area2Photograph2Name','$Area2Photograph2Type', 
	'$Area2Photograph3','$Area2Photograph3Name','$Area2Photograph3Type',
	'$Area2Photograph4','$Area2Photograph4Name','$Area2Photograph4Type', 
	'$Area2Photograph5','$Area2Photograph5Name','$Area2Photograph5Type',
	'$Area2Photograph6','$Area2Photograph6Name','$Area2Photograph6Type',
	NOW(),NOW(),$userId,0,0)";
$result = dbQuery($sql);
}

function createArea3Submission($userId,
	$Area3Data,$Area3WordCount,
	$Area3GoogleMapDocument,$Area3GoogleMapDocumentName,$Area3GoogleMapDocumentType,
	$Area3GoogleMapname,$Area3GoogleMapaddress,$Area3GoogleMaplat,$Area3GoogleMaplng,$Area3GoogleMaptype, 
	$Area3Photograph1,$Area3Photograph1Name,$Area3Photograph1Type,$Area3Photograph2,$Area3Photograph2Name,$Area3Photograph2Type,
	$Area3Photograph3,$Area3Photograph3Name,$Area3Photograph3Type,$Area3Photograph4,$Area3Photograph4Name,$Area3Photograph4Type,
	$Area3Photograph5,$Area3Photograph5Name,$Area3Photograph5Type,$Area3Photograph6,$Area3Photograph6Name,$Area3Photograph6Type,
	$UploadedDate, $UploadedUserId)
{
$sql = " INSERT INTO area3submissions (
	Area3Data,Area3WordCount, 
	Area3GoogleMapDocument,Area3GoogleMapDocumentName,Area3GoogleMapDocumentType,	
	Area3GoogleMapname,Area3GoogleMapaddress,Area3GoogleMaplat,Area3GoogleMaplng,Area3GoogleMaptype, 
	Area3Photograph1,Area3PhotographName1,Area3PhotographType1,
	Area3Photograph2,Area3PhotographName2,Area3PhotographType2, 
	Area3Photograph3,Area3PhotographName3,Area3PhotographType3,
	Area3Photograph4,Area3PhotographName4,Area3PhotographType4, 
	Area3Photograph5,Area3PhotographName5,Area3PhotographType5,
	Area3Photograph6,Area3PhotographName6,Area3PhotographType6,
	UploadedDate,LastUpdatedDate,UploadedUserId,LastUpdatedUserId,Winner)	
	VALUES (
	'$Area3Data','$Area3WordCount', 
	'$Area3GoogleMapDocument','$Area3GoogleMapDocumentName','$Area3GoogleMapDocumentType',
	'$Area3GoogleMapname','$Area3GoogleMapaddress','$Area3GoogleMaplat','$Area3GoogleMaplng','$Area3GoogleMaptype', 
	'$Area3Photograph1','$Area3Photograph1Name','$Area3Photograph1Type',
	'$Area3Photograph2','$Area3Photograph2Name','$Area3Photograph2Type', 
	'$Area3Photograph3','$Area3Photograph3Name','$Area3Photograph3Type',
	'$Area3Photograph4','$Area3Photograph4Name','$Area3Photograph4Type', 
	'$Area3Photograph5','$Area3Photograph5Name','$Area3Photograph5Type',
	'$Area3Photograph6','$Area3Photograph6Name','$Area3Photograph6Type',
	NOW(),NOW(),$userId,0,0)";
$result = dbQuery($sql);
}

function updateUserLogin($userId)
{		
	//$sql = " UPDATE Users_With_IPs SET LastLoginDate = NOW()";
	//$result = dbQuery($sql);	
		
}

function getUsers()
{
		
	$sql = "Select * FROM users 
	LEFT OUTER JOIN submissions ON users.UserId = submissions.UploadedUserId
	WHERE IsAdmin=0 AND IsJudge=0 ORDER BY CreationDate";
	$result = dbQuery($sql);
	
	return $result;
}

function getUsersbyId($userId)
{
		
	$sql = "Select users.Rate1,users.Rate2,users.Rate3,users.Rate4,users.Rate5,users.Rate6,users.Rate7,users.Rate8,users.Rate9
	,users.JudgeId1,users.JudgeId2,users.JudgeId3,users.JudgeId4,users.JudgeId5,users.JudgeId6,users.JudgeId7,users.JudgeId8,users.JudgeId9
	,JudgeA.Name as JudgeName1,JudgeB.Name as JudgeName2,JudgeC.Name as JudgeName3 
	,JudgeD.Name as JudgeName4,JudgeE.Name as JudgeName5,JudgeF.Name as JudgeName6
	,JudgeG.Name as JudgeName7,JudgeH.Name as JudgeName8,JudgeI.Name as JudgeName9   	
	,users.Phase1,users.Phase2,users.Phase3,users.Email,users.Cell,submissions.SubmissionId,submissions.Data,submissions.Winner
	,users.Name,users.CreationDate
	,submissions.UploadedDate, submissions.WordCount,submissions.DocumentName
	FROM users 
	LEFT OUTER JOIN submissions ON users.UserId = submissions.UploadedUserId
	LEFT OUTER JOIN users JudgeA ON JudgeA.UserId = users.JudgeId1
	LEFT OUTER JOIN users JudgeB ON JudgeB.UserId = users.JudgeId2
	LEFT OUTER JOIN users JudgeC ON JudgeC.UserId = users.JudgeId3
	LEFT OUTER JOIN users JudgeD ON JudgeD.UserId = users.JudgeId4
	LEFT OUTER JOIN users JudgeE ON JudgeE.UserId = users.JudgeId5
	LEFT OUTER JOIN users JudgeF ON JudgeF.UserId = users.JudgeId6
	LEFT OUTER JOIN users JudgeG ON JudgeG.UserId = users.JudgeId7
	LEFT OUTER JOIN users JudgeH ON JudgeH.UserId = users.JudgeId8
	LEFT OUTER JOIN users JudgeI ON JudgeI.UserId = users.JudgeId9
	WHERE users.IsAdmin=0 AND users.IsJudge = 0 AND users.UserId = $userId";
	
	$result = dbQuery($sql);	
	return $result;
}

function CheckSubPeriod()
{
	$allowed=0;
	
	$sql = "Select CASE WHEN Value='' AND (SELECT Value FROM settings WHERE SettingsId =3) <= NOW() THEN 1
	WHEN Value >= NOW() AND (SELECT Value FROM settings WHERE SettingsId =3)= '' THEN 1
	WHEN Value='' AND (SELECT Value FROM settings WHERE SettingsId =3) = '' THEN 1
	WHEN Value <= NOW() AND NOW() <= (SELECT Value FROM settings WHERE SettingsId =3) THEN 1 
	ELSE 0 END as SubmissionAllowed FROM settings  WHERE SettingsId = 2";
	$result = dbQuery($sql);
	
	if (dbNumRows($result) == 1) 
	{
		$row = dbFetchAssoc($result);
		$allowed = $row['SubmissionAllowed'];
	}
	
	return $allowed;
}

function isAdmin($userId)
{
	$isadmin = false;
		
	$sql = "Select UserId from users where UserId=$userId AND IsAdmin=1";
	$result = dbQuery($sql);
	
	if (dbNumRows($result) == 1) 
	{
		$row = dbFetchAssoc($result);
		$isadmin = true;
	}
	
	return $isadmin;
}
?>