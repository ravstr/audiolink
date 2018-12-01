<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<meta HTTP-EQUIV="Content-Language" CONTENT="en-us">
<title>Adoption</title>
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<script Language="JavaScript">
function Form1_Validator(theForm)
{
  var alertsay = "";

   if (theForm.username.value == "")
    {
      alert("Please type in your Username");
      theForm.username.focus();
      return (false);
  }

   if (theForm.password.value == "")
    {
      alert("Please type in your Password");
      theForm.password.focus();
      return (false);
  }
}
</script>
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

<table BORDER="0" CELLPADDING="0" CELLSPACING="0" STYLE="border-collapse: collapse" WIDTH="1000" bordercolorlight="#000000">
  <?PHP

  	include 'Topinclude.php';

  ?>

  <tr>

  <?PHP

	  	include 'sideinclude.php';

  ?>

    <td valign="top" CLASS="maincolor" width="698" style="background-color: #FFFFFF">
    &nbsp;<p>&nbsp;</p>
    <form name="form1" method="post" action="musiciancheck.php" onsubmit="return Form1_Validator(this)" name="Form1">
	 <table align="center" border="1" bordercolor="#666699"  CELLPADDING="2" CELLSPACING="0" width="353" height="172">
	     		   	<tr>
	     		   		<td class="headwhite12" align="center" valign="TOP" bgcolor="#666699" height="30" width="345">
	     				   <p align="center">
	     				   <font face="Times New Roman, Times, serif" size="4" color="#FFFFFF"><strong>
	     				   Musician Login area</strong></font>
	     		       </td>
	     		   	</tr>
	     		   	<tr>
	     				<td align="center" height="127" width="345">
	     					<table BORDER="0" BORDERCOLOR="black" CELLPADDING="0" CELLSPACING="0">
	     						<tr><td>&nbsp;</td></tr>
	     						<tr><td align="center">
	     							<table BORDER="0" BORDERCOLOR="purple" CELLPADDING="0" CELLSPACING="0" width="270" >
	     								<tr valign="TOP">
	     									<td valign="middle" align="RIGHT" nowrap width="84">
	                                        <b><font color="#000080" size="1">Username</font></b></td>
	     									<td nowrap width="169">
	     								    	<input name="username" value="" size="21" maxlength="50"></td>
	     								</tr>



	     								<tr>
	     									<td valign="middle" align="RIGHT" nowrap width="84"><b>
	     								  		 <font size="1" color="#000080">Password:&nbsp;</font></b>
	     								  	</td>
	     									<td nowrap width="169">
	     								  	 	<input name="password" type="password" value="" size="21" maxlength="16">
	     								  	</td>
	     								</tr>

	     								<tr>
	     									<td colspan="2" valign="middle" align="center" height="25" nowrap width="253">
	     										<input type="submit" name="Submit" value="Login">
	     									</td>
	     								</tr>
	     								<tr>
	     									<td colspan="2" height="20" valign="bottom" class="txtsmall" width="253">
	     										<p align="center">&nbsp;<a href="#" onClick="window.open('musician_getpassword.htm','w1','width=450,height=300,scrollbars');">Forgot password? </a></font>&nbsp;&nbsp;&nbsp;
	     									</td>
	     								</tr>
	     							</table>
	     							</td>
	     						</tr>
	     					</table>
	     					</td>
	     				</tr>
	     		   </table>



  </form>
    </td>

   <?PHP

  	  	include 'bottominclude.php';

  ?>
</table>


</body></html>