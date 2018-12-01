<?

include 'db.php';



 $sql_email_check = mysql_query("SELECT email_address FROM musician WHERE email_address='$email'");
 $sql_username_check = mysql_query("SELECT username FROM musician WHERE username='$username'");

 $email_check = mysql_num_rows($sql_email_check);
 $username_check = mysql_num_rows($sql_username_check);


?>


<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<meta HTTP-EQUIV="Content-Language" CONTENT="en-us">
<title>Adoption</title>
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">
<meta name="ProgId" content="FrontPage.Editor.Document">

<style type="text/css">
<!--

.maincolor { background: #BA9BB8}

.font1{font-family: Arial, Geneva, Helvetica, sans-serif; font-size: 12px;}

td.profile {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 11px;
	line-height: normal;
	font-style: normal;
	font-weight: normal;
	color: #000000;
	border-width: 1px;
	border-style: solid;
	border-color: #000000;
	border-spacing: 10px

}
.style1 {color: #000000}

-->
</style>
<meta name="Microsoft Theme" content="color-swap 1111, default">
</head>

<body topmargin="0" leftmargin="0" rightmargin="0" marginwidth="0" marginheight="0">

<table BORDER="0" CELLPADDING="0" CELLSPACING="0" STYLE="border-collapse: collapse" WIDTH="1000" bordercolorlight="#000000">
  <?PHP

  	include 'Topinclude.php';

  ?>

  <tr>

  <?PHP

	  	include 'sideinclude.php';

  ?>

    <td valign="top" CLASS="maincolor" width="698" style="background-color: #FFFFFF">
<p>

<?PHP

    if(($email_check > 0) || ($username_check > 0)){
			 echo 'Email or Username is already taken. Please go back and choose another one.';

	}
	else {
	$sql = "INSERT INTO musician (username, password, question, answer, signup, first_name,last_name, phone, email_address, website, years_active, group_name, genre, skill_level, members_num, engagement_level, address1, address2, city, state, zip, country, cardholdername, cardtype, expiration, cardnum, billingaddress1, billingaddress2, billingcity, billingstate, billingzip, billingcountry, score_perform, info, type, age) VALUES ('$username','$password','$question','$answer','$fname','$fname', '$lname', '$phone', '$email', '$website', '$YearsActive', '$groupname', '$Genre', '$Skill', '$Members', '$EngLevel', '$address1', '$address2', '$city', '$state', '$zip', '$country', '$cardholdername', '$cardtype', '$expiration', '$cardnum', '$billingaddress1', '$billingaddress2', '$billingcity', '$billingstate', '$billingzip', '$billingcountry','$score_perform','$info','$paytype','$age')";
    $sql_result = mysql_query($sql,$connection) or die ('Could not insert data');
    mysql_close($connection);
    if(!$sql_result){
			echo 'There has been an error creating your account. Please contact the webmaster.';
	} else {



			$subject = "Membership request at $sitename";
			$message = "Dear $fname $lname,
			You are now registered at our website

			Username: $username
			Password: $password
			Please keep this username and password in a location that is easily accessible by you.

			Thanks!
			Webmaster, $sitename



			This is an automated response, please do not reply!";

			mail($email, $subject, $message, "From: $sitename <$adminemail>\nX-Mailer: PHP/" . phpversion());


		echo 'Your membership information has been mailed to your email address! Please check it and follow the directions to login!';

	}
}
?>

<div align="center">
   <center>
 <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="750" id="AutoNumber1">
      <tr>
        <td class="profile" width="298" align="center"><b><font color="#000080">*Username</font></b></td>
        <td class="profile" width="603">
	                <span class="style1">
	                <?PHP echo "$username";?></span></td>

      </tr>
      <tr>
        <td class="profile" width="298" align="center"><b><font color="#000080">*Password</font></b></td>
        <td class="profile" width="603">
	                <span class="style1">
	                <?PHP echo "$password";?></span></td>

      </tr>
      <tr>
        <td class="profile" width="298" align="center"><b><font color="#000080">*Secret Question</font></b></td>
        <td class="profile" width="603">
	                <span class="style1">
	                <?PHP echo "$question";?></span></td>
	  </tr>
	  <tr>

        <td class="profile" width="298" align="center"><b><font color="#000080">*Answer</font></b></td>
        <td class="profile" width="603">
	                <span class="style1">
	                <?PHP echo "$answer";?></span></td>
      </tr>


        <tr align="left" valign="top">
            <td class="profile" width="298" align="center" height="22"><font color="#000080"><b>*First Name</b></font></td>
            <td class="profile" width="603" height="22">
              <div align="left" class="style1">
                <?PHP echo "$fname";?>
              </div>            </td>
          </tr>
          <tr align="left" valign="top">
            <td class="profile" width="298" align="center" height="22">
            <font color="#000080"><b>*Last Name</b></font></td>
            <td class="profile" width="603" height="22">
              <div align="left" class="style1">
                <?PHP echo "$lname";?>
              </div>            </td>
          </tr>
          <tr>
            <td class="profile" width="298" align="center" height="29"><font color="#000080"><b>
            Phone Number</b></font></td>
            <td class="profile" width="603" height="29">
              <span class="style1">
              <?PHP echo "$phone";?>
              </span></td>
          </tr>
          <tr>
            <td class="profile" width="298" align="center" height="22"><font color="#000080"><b>*Email Address</b></font></td>
            <td class="profile" width="603" height="22">
              <span class="style1">
              <?PHP echo "$email";?>
              </span></td>
          </tr>
          <tr>
            <td class="profile" width="298" align="center" height="22"><font color="#000080"><b>
            Web site</b></font></td>
            <td class="profile" width="603" height="22">
              <span class="style1">
              <?PHP echo "$website";?></span></td>
          </tr>
          <tr>
            <td class="profile" width="298" align="center" height="22"><font color="#000080"><b>
            Group Name</b></font></td>
            <td class="profile" width="603" height="22">
              <span class="style1">
              <?PHP echo "$groupname";?></span></td>
          </tr>
          <tr align="left" valign="top">
            <td class="profile" width="298" align="center" height="19"><font color="#000080"><b>
            Address:</b></font></td>
            <td class="profile" width="603" height="19"><span class="style1"></span>
            </td>
          </tr>
          <tr align="left" valign="top">
            <td class="profile" width="298" align="center" height="23"><font color="#000080"><b>*Street Address</b></font></td>
            <td class="profile" width="603" height="23">
              <div align="left" class="style1">
                <?PHP echo "$address1";?>
              </div>            </td>
          </tr>
          <tr align="left" valign="top">
            <td class="profile" width="298" class="bodycopy" align="center" height="22">
            <font color="#000080"><b>Street Address 2
            </b> </font> </td>
            <td class="profile" width="603" height="22">
              <div align="left" class="style1">
                <?PHP echo "$address2";?>
              </div>            </td>
          </tr>
          <tr align="left" valign="top">
            <td class="profile" width="298" align="center" height="22"><font color="#000080"><b>*City</b></font></td>
            <td class="profile" width="603" height="22">
              <span class="style1">
              <?PHP echo "$city";?>
              </span></td>
          </tr>
          <tr align="left" valign="top">
            <td class="profile" width="298" align="center" height="22"><font color="#000080"><b>State</b></font></td>
            <td class="profile" width="603" height="22">
              <span class="style1">
               <?PHP echo "$state";?>
              </span></td>
          </tr>
          <tr align="left" valign="top">
            <td class="profile" width="298" align="center" height="22"><font color="#000080"><b>Zip Code</b></font></td>
            <td class="profile" width="603" height="22">
              <span class="style1">
              <?PHP echo "$zip";?>
              </span></td>
          </tr>
          <tr align="left" valign="top">
            <td class="profile" align="center" width="298" height="22"><font color="#000080"><b>Country</b></font></td>
            <td class="profile" width="603" height="22">
              <span class="style1"> <?PHP echo "$country";?></span></td>
          </tr>





          <tr>
            <td class="profile" colspan="2" width="298" align="center" height="12"></td>

            </td>
          </tr>
          <tr>
            <td class="profile" width="298" align="center" height="22"><font color="#000080"><b>Street Address</b></font></td>
            <td class="profile" width="603" height="22">
              <div align="left" class="style1">
                <?PHP echo "$billingaddress1";?>
              </div>            </td>
          </tr>
          <tr>
            <td class="profile" width="298" align="center" height="22"><font color="#000080"><b>Street Address 2 </b>
            </font> </td>
            <td class="profile" width="603" height="22">
              <div align="left" class="style1">
                <?PHP echo "$billingaddress2";?>
              </div>            </td>
          </tr>
          <tr>
            <td class="profile" width="298" align="center" height="22"><font color="#000080"><b>City</b></font></td>
            <td class="profile" width="603" height="22">
              <span class="style1">
              <?PHP echo "$billingcity";?>
              </span></td>
          </tr>
          <tr>
            <td class="profile" width="298" align="center" height="22"><font color="#000080"><b>State</b></font></td>
            <td class="profile" width="603" height="22">
              <span class="style1">
              <?PHP echo "$billingstate";?>
              </span></td>
          </tr>
          <tr>
            <td class="profile" width="298" align="center" height="22"><font color="#000080"><b>Zip Code</b></font></td>
            <td class="profile" width="603" height="22">
              <span class="style1">
              <?PHP echo "$billingzip";?>
              </span></td>
          </tr>

          <tr>
            <td class="profile" width="298" align="center" height="12" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; line-height: normal; font-style: normal; font-weight: normal; color: #000000">
	            <font color="#000080"><b>*Country:</b></font></td>
            <td class="profile" width="603" height="12" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; line-height: normal; font-style: normal; font-weight: normal; color: #000000">


	              <span class="style1">
	              <?PHP echo "$billingcountry";?></span></td>

          </tr>

          <tr align="left" valign="top">
            <td class="profile" colspan="2" width="298" align="center" height="12"><b><font color="#000080">BAND/GROUP Information</font></b></td>



            </td>

          </tr>

          <tr align="left" valign="top">
            <td class="profile" width="298" align="center" height="11"><b><font color="#000080">Number of members:</font></b></td>
            <td class="profile" width="603" height="11">

              <span class="style1"><?PHP echo "$Members";?></span>
           </td>

          </tr>

          <tr align="left" valign="top">
            <td class="profile" width="298" align="center" height="12"><b><font color="#000080">Skill Level:</font></b></td>
            <td class="profile" width="603" height="12">
              <span class="style1"><?PHP echo "$Skill";?></span>

            </td>

          </tr>

          <tr align="left" valign="top">
            <td class="profile" width="298" align="center" height="12"><b><font color="#000080">Genre:</font></b></td>
            <td class="profile" width="603" height="12">
              <span class="style1"><?PHP echo "$Genre";?></span>

            </td>

          </tr>

          <tr align="left" valign="top">
            <td class="profile" width="298" align="center" height="12"><b><font color="#000080">Years active:</font></b></td>
            <td class="profile" width="603" height="12">
              <span class="style1"><?PHP echo "$YearsActive";?></span>

            </td>

          </tr>

          <tr align="left" valign="top">
            <td class="profile" width="298" align="center" height="12"><b><font color="#000080">Engagement Level:</font></b></td>
            <td class="profile" width="603" height="12">
              <span class="style1"><?PHP echo "$EngLevel";?></span>

            </td>

          </tr>

        <tr align="left" valign="top">
            <td class="profile" width="216" align="right" height="12"><b><font color="#000080">Average age of members:</font></b></td>
            <td class="profile" width="454" height="12">
              <span class="style1"><?PHP echo "$age";?></span>

            </td>

          </tr>

          <tr align="left" valign="top">
            <td class="profile" width="298" align="center" height="12"><b><font color="#000080">Can perform directly from
            score:</font></b></td>
            <td class="profile" width="603" height="12">
              <span class="style1"><?PHP echo "$score_perform";?></span>

            </td>

          </tr>

          <tr align="left" valign="top">
            <td class="profile" width="298" align="center" height="52"><font color="#000080"><b>
            More Information:</b></font></td>
            <td class="profile" width="603" height="52">
              <span class="style1">
              <?PHP echo "$info";?>
              </span></td>
          </tr>

        </table>

   </center>
 </div>

    <p>
    </td>

   <?PHP

  	  	include 'bottominclude.php';

  ?>
</table>


</body></html>