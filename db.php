<?
$dbhost = 'MySQL4.webcontrolcenter.com';
$dbusername = 'fbc';
$dbpasswd = 'fbcadmin';
$database_name = 'fbc';
$sitepath = "http://isstrategy.sfsu.edu/~rshrestha/audio/";
$sitename = "AudioLink Inc.";
$adminemail = "rshresth@sfsu.edu";

$connection = mysql_pconnect("$dbhost","$dbusername","$dbpasswd")
	or die ("Couldn't connect to server.");

$db = mysql_select_db("$database_name", $connection)
	or die("Couldn't select database.");
?>



