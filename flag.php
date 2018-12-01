<?PHP
session_start();
if (isset($_SESSION[afirst_name]) || isset($_SESSION[mfirst_name])) {
} else {
?>


	<p align="center"><a href="AgencyLogin.php"><img src="images/agents_enter.jpg" border="0"></a></p>
   <p align="center"><a href="musicianlogin.php"><img src="images/musician_enter.jpg" border="0"></a></p>


    <p>
      </td>

     <?PHP

    	  	include 'bottominclude.php';

    ?>
  </table>
  </body></html>
  <?PHP
  	exit();
}

?>


