<?PHP
#---------------------------------------#
/*	 Simplicity oF Upload == Jamal	   */
/* 	 		Version 1.0 Beta  		   */
#---------------------------------------#
/*	       	   Main Script		       */
#---------------------------------------#
#1-This script may be only used with the#
#  copy rights footer in the upload form#
#2-This Script may be only used for 	#
#  non-commerical porpuses!	  			#
#3-you may use or modify this script as #
#  you please but do NOT re-distribute  #
#  it  		  	  	 	 			   	#
#---------------------------------------#

//include configuration file ..
require_once('SFUConfig.php');

//check for language overriding..
if (isset($_GET['language']))
   $language = strtolower($_GET['language']);

//now we include the language file
require_once("$language.lng");

//check for overriding of the number of files to be uploaded value
if (isset($_GET['num_files']) and is_numeric($_GET['num_files']))
   	$num_files = $_GET['num_files'];

//check if there was any query coming with URL to include it in form action
if ($_SERVER['QUERY_STRING'] !== '')
    $action = $_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'];
else
    $action = $_SERVER['PHP_SELF'];

//start producing the files' fileds, but first open the form..
   $form = '<p align="center">
            <form method="POST" enctype="multipart/form-data" action="'.$action.'">';

//start the loop ..
for ($i=0; $i<$num_files; $i++) {
   $form .= "<input type=\"file\" name=\"SFUfile[]\" size=\"20\" /><br />\n";
}
//close form..
   $form .='<input type="hidden" name="maxsize" value="'.($max_size * 1024).'" />
   		 	<span style="font-size: 7pt; font-family: tahoma, verdana;">Powered By: <a href="http://www.sfsj.net" target="_blank">Simplicity oF Upload</a></span><br />
   		 	<input type="submit" value="  '.$txt['submit'].'  " name="submit" />
		</form></p>';

//make a flat array containing allwed extensions ..
//this step is needed to validate the extension before looking at its attribute..
//since we have mulitdimensional array, we need to loops to make it flat..
foreach($allowed as $notyet) {
   foreach($notyet as $final) {
      $flat_allowed[] = $final;
   }
}

//start the HTML formation
html_header();

//if the form is submited, start processing..
//this whole part wont start until user click on "Upload" button..
if (isset($_POST['submit'])) {

//start a loop to deal with each file !
   for ($i=0; $i<count($_FILES['SFUfile']['name']); $i++) {

   	//first of all we see if a file was givin to upload or ignore it if empty and continue for the next file!
        if ($_FILES['SFUfile']['name'][$i] == '')
           continue;

	//we filter the filename from unwanted chars like double/single quotes, [] and spaces!
        $File = strtr(stripslashes($_FILES['SFUfile']['name'][$i]), '\'" []', '_____');

	//seperate the extension from the file and store both of them ..
		$ext = substr($File, -3);
		$noext = substr($File, 0, -3);

	//check if the extension is allowed.. but no attribute processing yet!
		if (!in_array($ext, $flat_allowed)) {
	   	   LogErrors("<b>$ext</b> ".$txt['extension']);
	   	   continue;
	    }

	//switch the error handler !
        switch($_FILES['SFUfile']['error'][$i]) {
            case 0:
            	 break;
            case 1:
            	 LogErrors($txt['PHP_file_size']);
            	 continue 2;
            case 3:
            	 LogErrors($txt['partial_upload']);
            	 continue 2;
            case 4:
            	 LogErrors($txt['no_file']);
            	 continue 2;
        }

	//check the file size !
    	if ($_FILES['SFUfile']['size'][$i] > $_POST['maxsize']) {
       	   LogErrors($txt['file_size']);
       	   continue;
        }

		$fullname = $dist.$File;

	//this part is not important but it's used to initilize $content so we wont see a notice!
		if (empty($content))
		   $content = '';

	//start moving the file ..
		if(copy($_FILES['SFUfile']['tmp_name'][$i], $fullname)) {

			//start checking the file extension and its attribute!
			//the file name will pushed into an array for status so goes contents..
				if (in_array($ext, $allowed['image'])) {
				   $uploaded[] = $File;
                //if user want to show images, we show them ..
                   if ($show_uploaded_images == true)
				      $content   .= "<b>$File</b><br /><img src=\"$URL/$File\" /><br />----------<br />";

            //if the attribute is text, we get the file content and close the file again..
				} elseif (in_array($ext, $allowed['text'])) {

				   $fp = fopen($fullname, 'rb')or
				   LogErrors($txt['read_file'], true);
				   $read = fread($fp, filesize($fullname));
				   fclose($fp);

                 //save the file name, to show it at the end..
                   $uploaded[] = $File;

                 //wanna show file content?! this IF statment shall fulfill your request.
                   if ($show_uploaded == true)
                      $content .= "<b>$File</b><br />".nl2br(htmlspecialchars($read)).'<br />----------<br />';


            //this is the dengours part where we have to becarful with files
				} elseif (in_array($ext, $allowed['exec'])) {

					 //we open the file for reading ..
					   $fp = fopen($fullname, 'rb')or
					   LogErrors($txt['read_file'], true);
				       $EXECcontent = fread($fp, filesize($fullname));
				       fclose($fp);

                 //we check here if user wants to highlight the code or not !
	   			  	if ($ext == 'php' and $highlight_php == true) {

					 //then we highlight the code..
					   $safePHP = highlight_string($EXECcontent, TRUE);

				     //then we create a new file and dump the highlighted code into it..
					   $fp = fopen($dist.$noext.'html', 'wb')or
					   LogErrors($txt['read_file'], true);
				       fwrite($fp, $safePHP)or
					   LogErrors($txt['write_file'], true);
				       fclose($fp);

                       $fullname = $dist.$noext.'html';
					   $uploaded[] = $noext.'html';

                    //if user wants to show content..
                       if ($show_uploaded == true)
                          $content .= "<b>$noext"."html</b><br />".$safePHP.'<br />----------<br />';

				//else would mean that we don't need to highlight the file
				    } else {
				    //open file..
                       	$fp = fopen($dist.$noext.'txt', 'wb')or
						LogErrors($txt['write_file'], true);

                    //write to file..
                       	fwrite($fp, $EXECcontent)or
                       	LogErrors($txt['write_file'], true);

                    //and finally close file..
                       	fclose($fp);

                        $fullname = $dis.$noext.'txt';
                       	$uploaded[] = $noext.'txt';

                    //if user wants to show content..
                        if ($show_uploaded == true)
                           $content .= "<b>$noext"."txt</b><br />".nl2br(htmlspecialchars($EXECcontent)).'<br />----------<br />';
        			}

					 //and finally delete the malicus file ..
				       unlink($fullname);
        	//if the file attribute was package, we only log it and keep going!
                } elseif (in_array($ext, $allowed['package'])) {
				    $uploaded[] = $File;
				}

            //if user asked to change the mode of the uploaded file, we do..
                if ($change_mode == true)
                      chmod($fullname, $mode)or
                      LogErrors($txt['chmod_fail']);

//if we couldn't move the file or file was not uploaded, we generate this error
		} else {
		    LogErrors($txt['move_failiur'].'<br />'.$txt['try_again']);
		}
   }

//if there was any error, we print before content ..
  if (isset($errors) and count($errors)>0) {
     echo '<u>'.$txt['error_log'].':</u><br />';
   //we print all errors we found..
     foreach($errors as $file => $message) {
        echo "-$file: $message.<br />";
     }
     echo '<br />';
  }

//count the uploaded files and show them to user!
  if (isset($uploaded) and count($uploaded) > 0) {
    echo '<b><u>' .count($uploaded). '</b> '.$txt['succes'].':</u><br />';
  //print all ,succefully, uploaded files!
	foreach($uploaded as $succes) {
  	    echo"-$succes. <br />";
  	 }
  	echo '<hr />';
  }

//finaly, echo content (if any):P
   if (isset($content))
      echo $content;
}
//we will echo form in any condition..
echo $form;

//close HTML document
html_footer();
?>
