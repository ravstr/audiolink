<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<meta HTTP-EQUIV="Content-Language" CONTENT="en-us">
<title>Get password</title>
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<style type="text/css">
<!--

.maincolor { background: #BA9BB8}

.font1{font-family: Arial, Geneva, Helvetica, sans-serif; font-size: 12px;}

td {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 11px;
	line-height: normal;
	font-style: normal;
	font-weight: normal;
	color: #000000;
}

-->
</style>
<meta name="Microsoft Theme" content="color-swap 1111, default">
</head>
<body topmargin="0" leftmargin="0" rightmargin="0" marginwidth="0" marginheight="0">

<?

include 'db.php';

 $sql_email_check = mysql_query("SELECT * FROM musician WHERE first_name='$fname' AND last_name='$lname' AND question = '$question' AND answer ='$answer'");

 $email_check = mysql_num_rows($sql_email_check);

  if(($email_check > 0)){

  				$rowcount = 0;
								while($row = mysql_fetch_array($sql)){
										foreach( $row AS $key => $val ){
											$$key = stripslashes( $val );
							}

						$subject = "Password request at $sitename";
						$message = "Dear $first_name $last_Lname,


						Below is the information you requested

						Username: $username
						Password: $password
						Please keep this username and password in a location that is easily accessible by you.

						Thanks!
						Webmaster, $sitename



						This is an automated response, please do not reply!";

						mail($email_address, $subject, $message, "From: $sitename <$adminemail>\nX-Mailer: PHP/" . phpversion());


					echo 'Your information has been mailed to your email address  at $email_address. Please check it and follow the directions!';



 			}

 	}
	else {

  		echo 'No such Username. Please go back and correct the error';

 }
?>
</body>
</html>