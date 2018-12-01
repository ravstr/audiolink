
<tr>
    <td  CLASS="maincolor"  width="181">
    &nbsp;</td>
    <td width="698">

<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="468" height="135" id="film" align="middle">
<param name="allowScriptAccess" value="sameDomain" />
<param name="movie" value="film.swf" />
<param name="quality" value="high" />
<param name="bgcolor" value="#ffffff" />
<embed src="film.swf" quality="high" bgcolor="#ffffff" width="468" height="135" name="film" align="middle" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
</object>

    <img src="guitar.gif" align="top">


    </td>
    <td  CLASS="maincolor" width="123">
    <p class="sidebar" align="center">&nbsp;</td></tr>

     <tr>
       <td  CLASS="maincolor" width="181" valign="top">
       &nbsp;</td>

       <td  CLASS="maincolor" width="698" style="background-color: #FFFFFF">

       <p align="center">|
<?PHP
session_start();
if (isset($_SESSION[afirst_name])) {
	echo "<a href=\"agent_home.php\">My Account </a>&nbsp;|";
}
elseif (isset($_SESSION[mfirst_name])) {

	echo "<a href=\"musician_home.php\">My Account </a>&nbsp;|";
}
else {
}
?>
<SCRIPT LANGUAGE="JavaScript">
var txt = "Bookmark Us";
var url = "http://isstrategy.sfsu.edu/~rshrestha/audio/";
var who = "Audio Link Iinc";

var ver = navigator.appName;
var num = parseInt(navigator.appVersion);
if ((ver == "Microsoft Internet Explorer")&&(num >= 4)) {
document.write('<A HREF="javascript:window.external.AddFavorite(url,who);" ');
document.write('onMouseOver=" window.status=');
document.write("txt; return true ");
document.write('"onMouseOut=" window.status=');
document.write("' '; return true ");
document.write('">'+ txt + '</a>');
}else{
txt += "  (Ctrl+D)";
document.write(txt);
}
</script>
  |&nbsp; <a href="link.php">Link to Us</a> | </td>
      <td  CLASS="maincolor" width="123">
       &nbsp;</td>

    </tr>

    <tr><td  CLASS="maincolor" width="181" valign="top">
       &nbsp;</td>
       <td align="right"><?PHP echo date("l dS of F Y"); ?><br><br></td>
       <td  CLASS="maincolor" width="123">&nbsp;</td></tr>


